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
        
        /*for ($i=0; $i <15 ; $i++) { 
            $rand = rand(1, 12);
            if($rand < 10){
              $rand = "0".$rand;
            }
          	DB::table('users')->insert([
                'name' => str_random(10),
                'email' => str_random(10).'@gmail.com',
                'password' => bcrypt('secret'),
                'created_at' => rand(2007,2018)."-".$rand."-".rand(1, 30),
            ]);
        }

        for ($i=0; $i < 600; $i++) { 
        	DB::table('commentaires')->insert([
            'id_livre' => rand(1,158),
            'id_user' => rand(1,15),
            'comment' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium sit minus fugit distinctio mollitia temporibus quia odio tempora officia quo, quos nostrum consequuntur accusamus molestias iusto, veniam, aliquid debitis placeat.' ,
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
            'champ' => str_random(10),
               ]);
        }
        for ($i=0; $i < 6; $i++) { 
            DB::table('contacts')->insert([
            'pseudo' => str_random(10),
            'mail' => str_random(10)."@gmail.com",
            'commande' => str_random(10),
            'objet' => str_random(15),
            'demande' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium sit minus fugit distinctio mollitia temporibus quia odio tempora officia quo, quos nostrum consequuntur accusamus molestias iusto, veniam, aliquid debitis placeat.
             Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium sit minus fugit distinctio mollitia temporibus quia odio tempora officia quo, quos nostrum consequuntur accusamus molestias iusto, veniam, aliquid debitis placeat.',
            'created_at' => rand(2007,2018)."-".$rand."-".rand(1, 30),
               ]);

        }
        */
        $livres = livre::all();
        foreach ($livres as $livre) {
            $livre->link = "livre";
            $livre->save();
        }
        

    }
}
