<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

class IndexController extends Controller
{
    public function index(Request $request){

        $chatrane = null;
        if($request->code_chatrane){
            $chatrane = User::where('slug', $request->code_chatrane)->where('chatrane', true)->first();
        }
        return view('index', compact('chatrane'));
    }

    public function set_locale(Request $request){


        return redirect('/' . $request->locale);
    }


}
