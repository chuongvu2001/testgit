<?php

namespace Database\Seeders;

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
        //
        $userData = [
            [
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('123456')
            ],
            [
                'name' => 'chuongvv',
                'email' => 'chuongvvph11175@fpt.edu.vn',
                'password' => Hash::make('123456')
            ],
        ];

        foreach($userData as $u){
            $model = new User();
            $model->fill($u);
            $model->save();
        }
    }
}
