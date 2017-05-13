<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::disableQueryLog();
        DB::unprepared(file_get_contents('database/database.sql'));
        $this->call(UsersTableSeeder::class);
        $this->call(TeachersTableSeeder::class);
        $this->call(ResearchesTableSeeder::class);
    }
}
