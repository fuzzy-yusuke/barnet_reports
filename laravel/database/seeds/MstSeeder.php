<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class MstSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //テスト用データ
        App\User::insert(
            [
                'name' => '管理者',
                'email' => 'test@test.com',
                'password' => Hash::make('testtest1'),
                'code' => '001',
                'role_id' => '1',
            ],
            [
                'name' => '一般ユーザー',
                'email' => 'test@barnet.ne.jp',
                'password' => Hash::make('sapporo0420'),
                'code' => '002',
                'role_id'=>'0',
            ]
        );
    }
}
