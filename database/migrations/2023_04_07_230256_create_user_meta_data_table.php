<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserMetaDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_meta_data', function (Blueprint $table) {
            $table->foreignId('user_id')->constrained;
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
        Schema::dropIfExists('user_meta_data');
    }
}
