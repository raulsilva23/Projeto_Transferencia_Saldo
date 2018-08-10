<?php

use Illuminate\Database\Seeder;
use App\User;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create ([ 
        	'name' => 'Raul Adm',
        	'email' => 'raulfgr2@gmail.com',
        	'password' => bcrypt('123456')
        ]);

        User::create ([ 
            'name' => 'Raul Silva',
            'email' => 'raul_sat@hotmail.com',
            'password' => bcrypt('123456')
        ]);
    }
}
