<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('user_code',3);
            $table->string('code',30);
            $table->string('form_code',30);
            $table->string('content');
            $table->integer('selectable_item');
            $table->string('item_content1');
            $table->string('item_content2');
            $table->string('item_content3');
            $table->string('item_content4');
            $table->string('item_content5');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('questions');
    }
}
