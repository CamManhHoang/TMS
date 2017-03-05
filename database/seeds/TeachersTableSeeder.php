<?php

use Illuminate\Database\Seeder;

class TeachersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $teachers = \App\Teacher::where('id', '<', '30')->get();
        foreach ($teachers as $teacher) {
            $teacher->department_id = 1;
            $teacher->save();
        }

        $teachers2 = \App\Teacher::whereBetween('id', [30, 60])->get();
        foreach ($teachers2 as $teacher) {
            $teacher->department_id = 2;
            $teacher->save();
        }

        $teachers3 = \App\Teacher::whereBetween('id', [61, 90])->get();
        foreach ($teachers3 as $teacher) {
            $teacher->department_id = 3;
            $teacher->save();
        }

        $teachers4 = \App\Teacher::whereBetween('id', [91, 120])->get();
        foreach ($teachers4 as $teacher) {
            $teacher->department_id = 4;
            $teacher->save();
        }

        $teachers5 = \App\Teacher::whereBetween('id', [121, 150])->get();
        foreach ($teachers5 as $teacher) {
            $teacher->department_id = 5;
            $teacher->save();
        }

        $teachers6 = \App\Teacher::whereBetween('id', [151, 180])->get();
        foreach ($teachers6 as $teacher) {
            $teacher->department_id = 6;
            $teacher->save();
        }

        $teachers7 = \App\Teacher::whereBetween('id', [181, 201])->get();
        foreach ($teachers7 as $teacher) {
            $teacher->department_id = 7;
            $teacher->save();
        }
    }
}
