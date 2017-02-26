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
        $supervisor = new \App\Role();
        $supervisor->name = 'supervisor';
        $supervisor->display_name = 'Supervisor'; // optional
        $supervisor->description  = 'Supervisor là người có quyền quản trị cao nhất'; // optional
        $supervisor->save();

        $teacher = new \App\Role();
        $teacher->name = 'teacher';
        $teacher->display_name = 'Giảng Viên'; // optional
        $teacher->description  = 'Giảng Viên có một số quyền nhất định'; // optional
        $teacher->save();

        $sv = User::where('username', '=', 'supervisor')->first();
        $sv->attachRole($supervisor);

        $gv = User::where('username', '=', 'giangvien')->first();
        $gv->attachRole($teacher);
    }
}
