<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;

class NecessaryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        $user           = new User;
        $user->name     = 'mdsharafat';
        $user->email    = 'sharafat.sohan047@gmail.com';
        $user->password = Hash::make('Snkadw)#@psgHS8@');
        $user->save();
    }
}
