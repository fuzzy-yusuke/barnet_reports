<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameDateColumnOnQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::table('questions', function (Blueprint $table) {
                $table->renameColumn('created_at','created_date');
            });
            Schema::table('questions', function (Blueprint $table) {
                $table->renameColumn('updated_at','updated_date');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
            //カラム名をデフォルトに戻す
            Schema::table('questions', function (Blueprint $table) {
                $table->renameColumn('created_date','created_at');
            });
            Schema::table('questions', function (Blueprint $table) {
                $table->renameColumn('updated_date','updated_at');
            });
    }
}
