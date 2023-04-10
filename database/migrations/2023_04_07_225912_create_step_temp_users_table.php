<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStepTempUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('step_temp_users', function (Blueprint $table) {
            $table->id();
            $table->text('interest');
            $table->text('category');
            $table->text('subject');
            $table->text('country');
            $table->text('city');
            $table->text('first_name');
            $table->text('last_name');
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
        Schema::dropIfExists('step_temp_users');
    }
}
