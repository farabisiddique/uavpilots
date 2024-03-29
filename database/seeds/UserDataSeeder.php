<?php

use Illuminate\Database\Seeder;

class UserDataSeeder extends Seeder
{
       /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 

        DB::table('user_data')->delete();
        $user_data_records =[
            [
                'user_data_id'=>1,'first_name'=>'Tony', 'last_name'=>'Stark', 'description'=>'bla bla bla bla bla','state'=>'California','country'=>'USA','industry'=>'Stark Industry','photo_link'=>'linkdao'
            ],
            [
                'user_data_id'=>2,'first_name'=>'Nick', 'last_name'=>'Fury', 'description'=>'bla bla bla bla bla','state'=>'California','country'=>'USA','industry'=>'SHIELD','photo_link'=>'linkdao'
            ],

            [
                'user_data_id'=>3,'first_name'=>'Phill', 'last_name'=>'Coulson', 'description'=>'bla bla bla bla bla','state'=>'California','country'=>'USA','industry'=>'SHIELD','photo_link'=>'linkdao'
            ],

            [
                'user_data_id'=>4,'first_name'=>'Maria', 'last_name'=>'Hill', 'description'=>'bla bla bla bla bla','state'=>'California','country'=>'USA','industry'=>'SHIELD','photo_link'=>'linkdao'
            ],

            [
                'user_data_id'=>5,'first_name'=>'Steve', 'last_name'=>'Rogers', 'description'=>'bla bla bla bla bla','state'=>'California','country'=>'USA','industry'=>'SHIELD','photo_link'=>'linkdao'
            ],

            [
                'user_data_id'=>6,'first_name'=>'Thor', 'last_name'=>'Odinson', 'description'=>'bla bla bla bla bla','state'=>'California','country'=>'USA','industry'=>'SHIELD','photo_link'=>'linkdao'
            ],
            
        ];
        foreach ($user_data_records as $key => $record) {
            # code...
            \App\Models\UserData::create($record);
        }
    }
}
