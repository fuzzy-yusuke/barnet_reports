<?php

use Illuminate\Database\Seeder;
use App\Question;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //テスト用の質問
        Question::insert([
            ['id'=>1,'code'=>'テスト用','content'=>'調子は如何ですか。','form_code'=>'3','item_content1'=>'とても良い','item_content2'=>'良い','item_content3'=>'普通','item_content4'=>'悪い','item_content5'=>'とても悪い','created_at' => now(), 'updated_at' => now(),'must'=>'1'],
            ['id'=>2,'code'=>'テスト用','content'=>'これはテストですか。','form_code'=>'2','item_content1'=>'はい','item_content2'=>'いいえ','created_at' => now(), 'updated_at' => now(),'must'=>'1'],
            ['id'=>3,'code'=>'テスト用','content'=>'テストです。','form_code'=>'1','created_at' => now(), 'updated_at' => now()],
            ['id'=>4,'code'=>'テスト','content'=>'テストです。','form_code'=>'1','created_at' => now(), 'updated_at' => now()]

        ]);
    }
}
