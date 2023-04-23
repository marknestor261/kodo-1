<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSection1Subtext2ToAboutPages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
{
    Schema::table('about_pages', function (Blueprint $table) {
        $table->string('section1_subtext2')->nullable();
    });
}

  
}
