<?php

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //テスト用データ
        App\Role::create([
            'name'=>'開発部',
            'flag'=>'2',
        ]);
    }
}
