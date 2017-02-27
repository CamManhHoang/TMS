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
        $admin = new \App\Role();
        $admin->name = 'admin';
        $admin->display_name = 'admin'; // optional
        $admin->description  = 'admin là người có quyền quản trị cao nhất'; // optional
        $admin->save();

        $teacher = new \App\Role();
        $teacher->name = 'teacher';
        $teacher->display_name = 'Giảng Viên'; // optional
        $teacher->description  = 'Giảng Viên có một số quyền nhất định'; // optional
        $teacher->save();

        $ad = User::where('username', '=', 'admin')->first();
        $ad->attachRole($admin);

        $gv = User::where('username', '=', 'giangvien')->first();
        $gv->attachRole($teacher);
    }
}
