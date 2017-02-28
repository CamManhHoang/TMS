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
        $ad = User::where('username', '=', 'admin')->first();
        $ad->is_admin = true;
        $ad->save();
    }
}
