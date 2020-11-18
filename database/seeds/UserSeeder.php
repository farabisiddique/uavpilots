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

        ];
        foreach ($usersrecords as $key => $record) {
            # code...
            \App\Models\User::create($record);
        }
    }
}
