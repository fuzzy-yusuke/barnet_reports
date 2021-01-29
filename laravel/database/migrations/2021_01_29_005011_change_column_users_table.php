<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeColumnUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //「email」を「mail」に、「at」を「date」に名前を変更
        Schema::table('users', function (Blueprint $table) {
            $table->renameColumn('email','mail');
        });
        Schema::table('users', function (Blueprint $table) {
            $table->renameColumn('created_at','created_date');
        });
        Schema::table('users', function (Blueprint $table) {
            $table->renameColumn('updated_at','updated_date');
        });
        Schema::table('users', function (Blueprint $table) {
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
        Schema::table('users', function (Blueprint $table) {
            //カラム名を元に戻す
            Schema::table('users', function (Blueprint $table) {
                $table->renameColumn('created_date','created_at');
            });
            Schema::table('users', function (Blueprint $table) {
                $table->renameColumn('updated_date','updated_at');
            });
            Schema::table('users', function (Blueprint $table) {
                $table->renameColumn('deleted_date','deleted_at');
            }); 
        });
    }
}
