<?php

use Illuminate\Database\Seeder;

class FormTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\FormType::insert([
            ['id'=>'1','code'=>'0','name'=>'テキストボックス','created_at'=>now(),'updated_at'=>now()],
            ['id'=>'2','code'=>'1','name'=>'ラジオボタン','created_at'=>now(),'updated_at'=>now()],
            ['id'=>'3','code'=>'2','name'=>'チェックボックス','created_at'=>now(),'updated_at'=>now()]
        ]);
    }
}
