<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        Schema::create('home_pages', function (Blueprint $table) {
            $table->id();

            $table->string('section1_main_text1')->default("WELCOME TO KODO");
            $table->string('section1_main_text2')->default("KODO Scholarships is the #1 college scholarship app in the world and has helped students win more than $1 million dollars.");
            $table->string('section1_subtext')->default("We take the hassle out of the scholarship search process and increase your chances of matching you with scholarships in minutes.");
            $table->string('section1_button1_label')->default("SEARCH PROGRAMS");
            $table->string('section1_image1')->default("link to image1");
            $table->string('section1_image2')->default("link to image2");

            $table->string('section2_main_text1')->default("Kodo History");
            $table->string('section2_main_text2')->default("Kodo Mission");
            $table->string('section2_subtext1')->default("Lorem ipsum dolor sit amet, consecte adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore");
            $table->string('section2_subtext2')->default("Lorem ipsum dolor sit amet, consecte adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore");
            $table->string('section2_image1')->default("link to image1");
            $table->string('section2_image2')->default("link to image2");
            $table->string('section2_image3')->default("link to image3");

            $table->string('section3_main_text1')->default("ACADEMIC");
            $table->string('section3_main_text2')->default("Successfully Complete Your Degree Thanks To Kodo");
            $table->string('section3_main_text3')->default("Undergraduate");
            $table->string('section3_main_text4')->default("Postgraduate");
            $table->string('section3_main_text5')->default("Double Programs");
            $table->string('section3_main_text6')->default("Online Programs");
            $table->string('section3_subtext1')->default("Lorem ipsum dolor sit amet, t");
            $table->string('section3_button1_label')->default("SEARCH PROGRAMS");
            $table->string('section3_degree_programs')->default("120");
            $table->string('section3_years_of_history')->default("42");
            $table->string('section3_graduated_students')->default("115K");
            $table->string('section3_professional_lecturer')->default("85");

            $table->string('section4_main_text1')->default("Start Your New Career");
            $table->string('section4_main_text2')->default("Scholarship Programs");
            $table->string('section4_main_text3')->default("Career Opportunities");
            $table->string('section4_subtext1')->default("Lorem ipsum dolor sit amet, consectetur adipiscing elit");
            $table->string('section4_subtext2')->default("Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.");
            $table->string('section4_subtext3')->default("Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.");
            $table->string('section4_image1')->default("link to image1");
            $table->string('section4_image2')->default("link to image1");
            $table->string('section4_image3')->default("link to image1");

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
        Schema::dropIfExists('home_pages');
    }
}
