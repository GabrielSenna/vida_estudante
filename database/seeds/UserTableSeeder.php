<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = factory(VidaEstudante\User::class)->create([
            'name'=>'Gabriel Senna',
            'email'=>'gabriel_senna10@hotmail.com',
            'password'=> bcrypt('bielzis'),
        ]);

        $user = factory(VidaEstudante\User::class)->create([
        	'name'=>'Diogo Gonçalves',
        	'email'=>'diogo.afroruts@gmail.com',
        	'password'=> bcrypt('bielnp'),
        ]);

        $user = factory(VidaEstudante\User::class, 20)->create();
        
    }
}
