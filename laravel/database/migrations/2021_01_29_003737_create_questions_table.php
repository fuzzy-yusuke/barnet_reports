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
            $table->string('user_code',3)->nullable();
            $table->string('code',30)->unique();
            $table->string('form_code',30)->nullable();
            $table->string('content')->nullable();
            $table->integer('selectable_item')->nullable();
            $table->string('item_content1')->nullable();
            $table->string('item_content2')->nullable();
            $table->string('item_content3')->nullable();
            $table->string('item_content4')->nullable();
            $table->string('item_content5')->nullable();
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
