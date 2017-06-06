<?php

use Illuminate\Database\Seeder;
use App\livre;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('fr_FR');
        
        for ($i=0; $i <15 ; $i++) { 
            $rand = rand(1, 12);
            if($rand < 10){
              $rand = "0".$rand;
            }
          	DB::table('users')->insert([
                'name' => $faker->name,
                'email' => $faker->freeEmail,
                'password' => bcrypt('secret'),
                'created_at' => rand(2007,2018)."-".$rand."-".rand(1, 30),
            ]);
        }

        for ($i=0; $i < 600; $i++) { 
        	DB::table('commentaires')->insert([
            'id_livre' => rand(1,158),
            'id_user' => rand(1,15),
            'comment' =>  $faker->text,
               ]);
        }
        
     
	    DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('aa'),
            'todo' => 1,
            'admin'=> 1,
            'created_at' =>'2007-01-01',
        ]);

        DB::table('users')->insert([
        	'id' =>999,
            'name' => 'Anonymous',
            'email' => 'Anonymous@Anonymous.com',
            'password' => bcrypt('abcdef123456'),
            'created_at' =>'2007-01-01',
        ]);

        for ($i=0; $i < 250; $i++) { 
            DB::table('todolists')->insert([
            'user_id' => rand(1,15),
            'champ' => $faker->text(10),
               ]);
        }
        for ($i=0; $i < 6; $i++) { 
            DB::table('contacts')->insert([
            'pseudo' => $faker->lastName,
            'mail' => $faker->freeEmail,
            'commande' => str_random(10),
            'objet' => $faker->sentence,
            'demande' => $faker->text,
            'created_at' => rand(2007,2018)."-".$rand."-".rand(1, 30),
               ]);

        }
        
        $livres = livre::all();
        foreach ($livres as $livre) {
            $livre->link = "livre";
            $livre->save();
        }
        
        

    }
}
