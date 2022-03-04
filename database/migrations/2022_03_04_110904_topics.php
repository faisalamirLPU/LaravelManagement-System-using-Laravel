<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Topics extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //

        Schema::create('topics', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->string('topic_name');
            $table->string('topic_date');
            // $table->timestamp('content_writer_name');
            // $table->string('content_link');
            // $table->string('content_status');
            $table->rememberToken();
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
    }
}
