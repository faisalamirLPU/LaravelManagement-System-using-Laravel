<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Logs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Id, log_text, log_by(user id foreign key), created at, updated_at, user_type(foreign key)

        Schema::create('logs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('log_text');
            $table->integer('log_by')->unsigned();
            $table->foreign('log_by')->references('id')->on('users');
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
        //
        Schema::drop('logs');
    }
}
