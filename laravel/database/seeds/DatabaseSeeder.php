<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //MstSeederを呼び出す
        $this->call(MstSeeder::class);
        //RoleSeederを呼び出す
        $this->call(RoleSeeder::class);
        //QuestionSeederを呼び出す
        $this->call(QuestionSeeder::class);
        //FormTypeSeederを呼び出す
        $this->call(FormTypeSeeder::class);
    }
}
