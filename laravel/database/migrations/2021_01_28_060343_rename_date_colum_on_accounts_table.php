<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameDateColumOnAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('accounts', function (Blueprint $table) {
            $table->renameColumn('created_at','created_date');
        });
        Schema::table('accounts', function (Blueprint $table) {
            $table->renameColumn('updated_at','updated_date');
        });
        Schema::table('accounts', function (Blueprint $table) {
            $table->renameColumn('deleted_at','deleted_date');
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
            Schema::table('accounts', function (Blueprint $table) {
                $table->renameColumn('created_date','created_at');
            });
            Schema::table('accounts', function (Blueprint $table) {
                $table->renameColumn('updated_date','updated_at');
            });
            Schema::table('accounts', function (Blueprint $table) {
                $table->renameColumn('deleted_date','deleted_at');
            }); 
    }
}
