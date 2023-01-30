<?php

namespace App\Imports;

use App\Mail\UserImportMail;
use App\Models\User;
use Illuminate\Mail\Message;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Password;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;


class UsersImport implements ToCollection, WithStartRow
{

    /**
     * @return int
     */
    public function startRow(): int
    {
        return 2;
    }


    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */


    public function collection(Collection $rows)
    {


        // Password::sendResetLink(['email' => 'jago.cartman@gmail.com'], function (Message $m) {
        //     $m->subject(__('Votre compte a bien été crée, veuillez définir un mot de passe'));
        // });





        //dd($rows->toArray());
        foreach ($rows as $row)
        {
            $row = $row->toArray();
           // echo $row[4];




            if(count($row) == 6){


                //check code_chatrane

                $code_chatrane = $row[5];
                $chatrane = User::where('slug', $code_chatrane)->first();




                if($chatrane){



                    $genre = 'Femme';

                    if($row[0] == 'M'){
                        $genre = 'Homme';
                    }

                    $check_mail = User::where('email', $row[4])->first();


                    if(!$check_mail){




                        $user = User::create([
                            'genre'     => $genre,
                            'name'     => $row[1],
                            'prenom'     => $row[2],
                            'telephone'     => $row[3],
                            'email'     => $row[4],
                            'code_chatrane'     => $row[5],
                            'password'     => Hash::make('@@123456@@'),

                        ]);

                        // Mail::send('emails.import-mail', [], function ($m) use ($user) {
                        //     $m->from("no-reply@chidoukhim.com", config('app.name', 'Hessed Chidouhkim'));
                        //     $m->to($user->email, $user->email)->subject(__("Votre compte est crée sur Hessed Chidouhkim"));
                        // });



                        Mail::to('j90769907@gmail.com')->send(new UserImportMail($user));



                        //return $user;

                    }




                }

               // return false;

            }else{
               // return false;
            }

        }






    }
}
