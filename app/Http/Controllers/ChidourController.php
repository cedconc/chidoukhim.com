<?php

namespace App\Http\Controllers;

use App\Http\Requests\ActionsChidourRequest;
use App\Http\Requests\DemanderChidourRequest;
use App\Mail\AcceptationDeChidour;
use App\Mail\AcceptationDeChidourChatranes;
use App\Mail\ArretDeChidour;
use App\Mail\DemandeDeChidour;
use App\Mail\RefusDeChidour;
use App\Models\Chidour;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class ChidourController extends Controller
{
    public function demander_chidour(DemanderChidourRequest $request){

        $origine = User::where('chatrane', 0)->where('id', $request->origine)->first();
        $cible = User::where('chatrane', 0)->where('id', $request->cible)->first();

        $verif_origine =  Chidour::where('fini', '!=', true)->where(function($q) use ($request){
            $q->where('origine', $request->origine)->orWhere('origine', $request->cible);
        })->first();

        if($verif_origine){
            return back()->withDanger(__("Désolé vous avez deja un chidoukh en cours"));
        }

        if( $origine && $cible ){

            if($verif_origine){
                return back()->withDanger(__("Désolé, cet utilisateur a deja un chidoukh en cours"));
            }

            $chatrane_cible = User::where('slug', $cible->code_chatrane)->first();
            $chatrane_origine = User::where('slug', $origine->code_chatrane)->first();

            if( $chatrane_cible && $chatrane_origine){
                $chidour = Chidour::create([
                    'origine' => $request->origine,
                    'cible' => $request->cible,
                    'chatrane' => $chatrane_cible->id,
                    'chatrane_origine' => $chatrane_origine->id

                ]);

                Mail::to($chatrane_origine->email)->send(new DemandeDeChidour($origine, $cible));
                Mail::to($chatrane_cible->email)->send(new DemandeDeChidour($origine, $cible));

                return redirect('/chidour/' . $chidour->id);

            }else{
                return back()->withDanger(__("Désolé, cet utilisateur n'a pas de Shadhanite/Shadhan"));
            }

        }

        abort(403);


    }

    public function chidour($id){

        $chidour = Chidour::find($id);

        if($chidour){

            $cible = User::find($chidour->cible);
            $chatrane_cible = User::find($chidour->chatrane);
            $origine = User::find($chidour->origine);

            $chatrane_origine = User::where('slug', $origine->code_chatrane)->first();

            $id_chidour = $id;

            return view('chidour.show', compact('cible', 'origine', 'chatrane_cible', 'chatrane_origine', 'chidour', 'id_chidour'));

        }else{
            abort(404);
        }
    }


    public function actions_chidour(ActionsChidourRequest $request){
        $chidour = Chidour::find($request->chidour_id);

        if($chidour){
            if( $request->actions == 'marie' ){
                $chidour->marie = true;
                $chidour->fini = true;
            }else{
                $chidour->marie = false;
                $chidour->fini = true;

                Mail::to($chidour->cible_user->email)->send(new ArretDeChidour($chidour->origine_user));
                Mail::to($chidour->origine_user->email)->send(new ArretDeChidour($chidour->cible_user));

            }
            $chidour->save();
        }

        return back()->withSuccess(__('Chidour mis a jour!'));
    }

    public function chidours(){

        $chidours = Chidour::query()
                ->with(['origine_user', 'cible_user', 'chatrane_user'])
                ->where(function($q){
                    $q->where('cible', Auth::user()->id)
                        ->orWhere('origine', Auth::user()->id)
                        ->orWhere('chatrane', Auth::user()->id)
                        ->orWhere('chatrane_origine', Auth::user()->id);
                })
                ->get();

        if( Auth::user()->admin == 1 ){
            $chidours = Chidour::all();
        }

        //dd($chidours);
        return view('chidour.index', compact('chidours'));
    }

    public function accept_chidour(Request $request, $source, $id_chidour){

        $check_chatrane = $check_chidour =false;

        $chatrane = User::find(Auth::user()->id);

        if($chatrane && $chatrane->chatrane == 1){
            $check_chatrane = true;
        }

        $chidour = Chidour::find($id_chidour);

        if( $chidour && ( $chidour->chatrane == Auth::user()->id || $chidour->chatrane_origine == Auth::user()->id) ){
            $check_chidour = true;
        }

        $acceptation = null;
        if( $source == 'origine' || $source == 'cible'){
            $acceptation = 'acceptation_' . $source;
        }else{
            abort(403);
        }

        if($check_chatrane && $check_chidour){
            $chidour->$acceptation = 1;
            $chidour->save();
            if( $chidour->acceptation_cible && $chidour->acceptation_origine ){
                //sending mail

                Mail::to($chidour->origine_user->email)->send(new AcceptationDeChidour($chidour->cible_user));
                Mail::to($chidour->cible_user->email)->send(new AcceptationDeChidour($chidour->origine_user));


                $chatrane_origine = User::find($chidour->chatrane_origine);
                $chatrane_cible = User::find($chidour->chatrane);

                Mail::to($chatrane_origine->email)->send(new AcceptationDeChidourChatranes($chidour->cible_user, $chidour->origine_user));
                Mail::to($chatrane_cible->email)->send(new AcceptationDeChidourChatranes($chidour->cible_user, $chidour->origine_user));

            }
            return back()->withSuccess(__('Vous avez accepté le chidour!'));
        }else{
            abort(403);
        }


    }


    public function refuse_chidour(Request $request, $source, $id_chidour){
        $check_chatrane = $check_chidour =false;

        $chatrane = User::find(Auth::user()->id);

        if($chatrane && $chatrane->chatrane == 1){
            $check_chatrane = true;
        }

        $chidour = Chidour::find($id_chidour);

        if( $chidour && ( $chidour->chatrane == Auth::user()->id || $chidour->chatrane_origine == Auth::user()->id) ){
            $check_chidour = true;
        }


        $acceptation = null;
        if( $source == 'origine' || $source == 'cible'){
            $acceptation = 'acceptation_' . $source;
        }else{
            abort(403);
        }

        if($check_chatrane && $check_chidour){
            $chidour->$acceptation = 2;
            $chidour->save();
            Mail::to($chidour->origine_user->email)->send(new RefusDeChidour());
            return back()->withSuccess(__('Vous avez refusé le chidouh!'));
        }else{
            abort(403);
        }dd($request->all());
    }

}
