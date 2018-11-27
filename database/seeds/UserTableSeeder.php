<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(
            [
                'name' => 'Guillermo Morillo',
                'dni' => '333444555',
                'email' => 'root@nscontrol.es',
                'phone'=>'697423170',
                'password' => Hash::make('Root7@'),
                'logged' => true
            ]
        )->roles()->attach(1);


        User::create(
            [
                'name' => 'Fernando Iglesias',
                'dni' => '111222333',
                'email' => 'fernando.iglesias@nscontrol.es',
                'phone'=>'697423180',
                'password' => Hash::make('Root7@'),
                'logged' => true
            ]
        )->roles()->attach(1);

        User::create(
            [
                'name' => 'Ángel Gonzalez',
                'dni' => '666777888',
                'email' => 'dummy@nscontrol.es',
                'phone'=>'697423190',
                'password' => Hash::make('dummy')
            ]
        )->roles()->attach(3);

    }
}
