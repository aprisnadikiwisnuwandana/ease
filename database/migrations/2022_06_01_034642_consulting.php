<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Consulting extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consulting', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('user_id');
            $table->string('psychologist_id');
            $table->string('topic');
            $table->string('package');
            $table->string('virtualaccount');
            $table->string('schedule_date')->nullable();
            $table->string('schedule_time')->nullable();
            $table->string('proof_of_payment')->nullable();
            $table->boolean('isVerified')->default(false);
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
