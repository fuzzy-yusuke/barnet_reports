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
        App\User::create([
            'name'=>'バーネット',
            'email'=>'test@barnet.ne.jp',
            'password'=>Hash::make('sapporo0420'),
            'code'=>'020',
        ]);
    }
}
