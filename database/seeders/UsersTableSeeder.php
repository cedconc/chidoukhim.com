<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Faker\Factory;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create('fr_FR');

        for ($i=0; $i < 499 ; $i++) {
            /*



            */

            $sexes = ['Femme', 'Homme'];
            $statut_marital = ['Célibataire', 'Divorcé', 'Veuf'];
            $niveau_academic = ['Niveau universitaire', 'Niveau BAC', 'Niveau BAC+1', 'Niveau BAC+2', 'Niveau BAC+3', 'Niveau BAC+4', 'Niveau BAC+5'];
            $oui_non = ['Oui', 'Non'];

            $langues_array = ['Espagnol','Français','Russe','Hébreu','Anglais','Portuguais','Italien'];
            $types_array = ['Modern Orthodox Machmir','Traditional','Modern Orthodox Middle','Modern Orthodox Liberal','Modern Yeshivish','Toradig','Lubavitch','Chassidish','Yeshivish'];

            $langues = '[';

            for($i = 0; $i < 4; $i++){

                $x = rand(0, 6);

                if(!strpos($langues, $langues_array[$x])){
                    $langues .= '"' . $langues_array[$x] . '",';
                }

            }

            $langues .= ']';


            $types = '[';

            for($i = 0; $i < 4; $i++){

                $x = rand(0, 8);

                if(!strpos($types, $types_array[$x])){
                    $types .= '"' . $types_array[$x] . '",';
                }
            }

            $types .= ']';

            $genre = $sexes[rand(0,1)];
            $photo = '';

            if( $genre == 'Homme'){
                $photo = '/assets/images/profil_homme.png';
            }else{
                $photo = '/assets/images/profil_femme.png';
            }


            $ethnies = ['Sephardi', 'Autre', 'Sephardi / Ashkenazi', 'Ashkenazi'];
            $silhouettes = ['Proportionnée', 'En surpoids', 'Costaud', 'Sportive', 'Normale', 'Fine', 'Elancée'];




            User::create([
                'name' => $faker->lastName,
                'prenom' => $faker->firstName,
                'email' => $faker->email,
                'password' => Hash::make('serge666'),
                'slug' => uniqid(),
                'completed' => 1,
                'date_de_naissance' => $faker->dateTimeThisCentury->format('Y-m-d'),
                'genre' => $genre,
                'profession' => $faker->jobTitle,
                'adresse' => $faker->address,
                'statut_marital' => $statut_marital[rand(0, 2)],
                'niveau_religieux' => $faker->sentence(10),
                'etude' => $niveau_academic[ rand(0,6)],
                'suivre_conjoint' => $oui_non[rand(0,1)],
                'a_propos' => $faker->sentence(100),
                'nb_enfants' => rand(0, 5),
                'ville' => $faker->city,
                'pays' => $faker->country,
                'langues' => $langues,
                'types' => $types,
                'photo_1' => $photo,
                'email_verified_at' => '2021-05-11 00:00:00',
                'ethnicite' => $ethnies[ rand(0,3)],
                'taille' => rand(150, 200),
                'silhouette' => $silhouettes[rand(0,6)],
            ]);
        }

    }
}
