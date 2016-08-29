<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClipboardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clipboards', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_session');
            $table->integer('id_document')->unsigned();
            $table->string('status');
            $table->timestamps();
        });

        Schema::table('clipboards', function (Blueprint $table){
            $table->foreign('user_session')->references('username')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('clipboards');
    }
}
