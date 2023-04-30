<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserJobstatus extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_jobstatus', function (Blueprint $table) {
            $table->foreignId('user_id')->constrained;
            $table->foreignId('job_id')->constrained;
            $table->boolean('saved')->default(0);
            $table->boolean('banned')->default(0);
            $table->boolean('applied')->default(0);
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
        Schema::dropIfExists('user_jobstatus');
    }
}
