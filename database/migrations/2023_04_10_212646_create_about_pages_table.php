<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutPagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about_pages', function (Blueprint $table) {
            $table->id();

            $table->string('section1_main_text1')->default("About Kodo");
            $table->string('section1_subtext')->default("About");

            $table->string('section2_main_text1')->default("ABOUT KODO");
            $table->string('section2_main_text2')->default("We Ensure Better Education For A Better World");
            $table->string('section2_main_text3')->default("Our Mission");
            $table->string('section2_main_text4')->default("Our Vision");
            $table->string('section2_main_text5')->default("Our Programs");
            $table->string('section2_subtext1')->default("Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua");
            $table->string('section2_subtext2')->default("Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua");
            $table->string('section2_subtext3')->default("Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua");
            $table->string('section2_program1')->default("Undergraduate");
            $table->string('section2_program2')->default("Postgraduate");
            $table->string('section2_program3')->default("PhD Scholarship");
            $table->string('section2_program4')->default("Online Programs");
            $table->string('section2_image1')->default("link to image1");
            $table->string('section2_image2')->default("link to image1");

            $table->string('section3_main_text1')->default("Free Consultation If You Want To Know About Kodo");
            $table->string('section3_subtext1')->default("Lorem ipsum dolor sit amet, consect adipiscing elit sed eiusmod tempor incididunt ut labore dolore");
            $table->string('section3_button1_label')->default("SEARCH PROGRAMS");

            $table->string('section4_image1')->default("link to image1");
            $table->string('section4_image2')->default("link to image2");
            $table->string('section4_image3')->default("link to image3");
            $table->string('section4_image4')->default("link to image4");
            $table->string('section4_image5')->default("link to image5");
            $table->string('section4_image6')->default("link to image6");
            $table->string('section4_image7')->default("link to image7");
            $table->string('section4_image8')->default("link to image8");

            $table->string('section5_main_text1')->default("We Work Hard To Prepare Every Student For Their Professional Life");
            $table->string('section5_button1_label')->default("(+021) 582 198");
            $table->string('section5_button2_label')->default("Apply Admission");

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
        Schema::dropIfExists('about_pages');
    }
}
