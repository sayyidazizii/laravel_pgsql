<?php

use App\User;
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
        User::create([
            'name'    => 'Sayyid Syafiq',
            'email'     =>'sayyid@gmailcom',
            'password'  =>'123',
        ]);
        User::create([
            'name'    => 'coba2',
            'email'     =>'coba2@gmail.com',
            'password'  =>'123',
        ]);
        User::create([
            'name'    => 'coba3',
            'email'     =>'coba3@gmail.com',
            'password'  =>'123',
        ]);
    }
}
