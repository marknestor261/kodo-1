<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScholarshipPagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scholarship_pages', function (Blueprint $table) {
            $table->id();
            $table->string('section1_main_text1')->default("Application Process");
            $table->string('section1_subtext')->default("Scholarships");

            $table->string('section2_main_text1')->default("APPLICATION");
            $table->string('section2_main_text2')->default("Applying For A Scholarship On Kodo");
            $table->string('section2_subtext1')->default("Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua");

            $table->string('section3_main_text1')->default("Accounting & Finance");
            $table->string('section3_main_text2')->default("Business");
            $table->string('section3_main_text3')->default("Communication");
            $table->string('section3_main_text4')->default("Art & Design");
            $table->string('section3_main_text5')->default("Information Technology");
            $table->string('section3_main_text6')->default("Engineering");
            $table->string('section3_subtext1')->default("Lorem ipsum dolor sit amet, consect adipiscing elit sed eiusmod tempor incididunt ut labore dolore");
            $table->string('section3_subtext2')->default("Lorem ipsum dolor sit amet, consect adipiscing elit sed eiusmod tempor incididunt ut labore dolore");
            $table->string('section3_subtext3')->default("Lorem ipsum dolor sit amet, consect adipiscing elit sed eiusmod tempor incididunt ut labore dolore");
            $table->string('section3_subtext4')->default("Lorem ipsum dolor sit amet, consect adipiscing elit sed eiusmod tempor incididunt ut labore dolore");
            $table->string('section3_subtext5')->default("Lorem ipsum dolor sit amet, consect adipiscing elit sed eiusmod tempor incididunt ut labore dolore");
            $table->string('section3_subtext6')->default("Lorem ipsum dolor sit amet, consect adipiscing elit sed eiusmod tempor incididunt ut labore dolore");

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
        Schema::dropIfExists('scholarship_pages');
    }
}
