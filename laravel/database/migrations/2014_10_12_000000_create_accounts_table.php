<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accounts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('code',3)->nullable();
            $table->string('name');
            $table->string('role_name',30);
            $table->string('mail')->unique();
            $table->timestamp('email_verified_date')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            // 論理削除フラグ
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('accounts');
    }
}
