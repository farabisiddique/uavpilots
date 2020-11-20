<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
 

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        $password = '123456789';
        $password =  Hash::make($password);
        DB::table('users')->delete();
        $usersrecords = [
            

            [

                'id' => 1, 'email' => 'tony@ts.com', 'password' => $password, 'username' => 'tonystark'
            ],

            [

                'id' => 2, 'email' => 'fury@shield.com', 'password' => $password, 'username' => 'nickfury'
            ],

            [

                'id' => 3, 'email' => 'coulson@shield.com', 'password' => $password, 'username' => 'agentcoulson'
            ],

            [

                'id' => 4, 'email' => 'mariahill@shield.com', 'password' => $password, 'username' => 'agenthill'
            ],

            [

                'id' => 5, 'email' => 'cap@shield.com', 'password' => $password, 'username' => 'cap'
            ],

            [

                'id' => 6, 'email' => 'thor@shield.com', 'password' => $password, 'username' => 'thor'
            ],

        ];
        foreach ($usersrecords as $key => $record) {
            # code...
            \App\Models\User::create($record);
        }
    }
}
