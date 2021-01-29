<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameColumnAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {   //「at」から「date」に名前を変える
        Schema::table('answers', function (Blueprint $table) {
            $table->renameColumn('created_at','created_date');
        });
        Schema::table('answers', function (Blueprint $table) {
            $table->renameColumn('updated_at','updated_date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {   //カラム名をデフォルトに戻す
        Schema::table('answers', function (Blueprint $table) {
            $table->renameColumn('created_date','created_at');
        });
        Schema::table('answers', function (Blueprint $table) {
            $table->renameColumn('updated_date','updated_at');
        });
    }
}
