<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        	for ($i=0; $i <15 ; $i++) { 
          	DB::table('users')->insert([
            'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('secret'),
        ]);
        }

        for ($i=0; $i < 600; $i++) { 
        	DB::table('commentaires')->insert([
            'id_livre' => rand(1,158),
            'id_user' => rand(1,15),
            'comment' => str_random(300),
               ]);
        }
        
     
	    DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('abcdef123456'),
            'todo' => 1,
            'admin'=> 1,
        ]);

        DB::table('users')->insert([
        	'id' =>999,
            'name' => 'Anonymous',
            'email' => 'Anonymous@Anonymous.com',
            'password' => bcrypt('abcdef123456'),
        ]);
    }
}
