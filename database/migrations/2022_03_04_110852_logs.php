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
            $table->string('log_text')->nullable();
            $table->integer('log_by')->unsigned();
            $table->foreign('log_by')->references('id')->on('users');
            //$table->string('log_by');
            $table->string('user_type')->unsigned();
            $table->foreign('user_type')->references('id')->on('users');
            // $table->timestamp('content_writer_name');
            // $table->string('content_link');
            // $table->string('content_status');
            //$table->rememberToken();
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
