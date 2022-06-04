<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\User;

class Journaling extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('journaling', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('journal_name');
            $table->string('name')->nullable();
            $table->string('date')->nullable();
            $table->string('schedule')->nullable();
            $table->string('to_do_list')->nullable();
            $table->string('note')->nullable();
            $table->string('picture');
            $table->boolean('isTemplate')->default(false);
            $table->unsignedBigInteger('user_id')->nullable();
            //$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
