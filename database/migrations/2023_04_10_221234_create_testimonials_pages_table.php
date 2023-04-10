<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestimonialsPagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('testimonials_pages', function (Blueprint $table) {
            $table->id();

            $table->string('section1_main_text1')->default("Testimonials");
            $table->string('section1_subtext')->default("Testimonials");

            $table->string('section2_main_text1')->default("OUR PROGRAMS");
            $table->string('section2_main_text2')->default("Scholarship Programs On Kodo");
            $table->string('section2_subtext1')->default("Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua");
            
            $table->string('section3_main_text1')->default("FEEDBACK");
            $table->string('section3_main_text2')->default("What Students Says About Us");
            $table->string('section3_person1_feedback')->default("Lorem ipsum dolor sit amet, consect adipiscing elit sed eiusmod tempor incididunt ut labore dolore");
            $table->string('section3_person1_name')->default("Reis Leonard");
            $table->string('section3_person1_title')->default("Student");
            $table->string('section3_person2_feedback')->default("Lorem ipsum dolor sit amet, consect adipiscing elit sed eiusmod tempor incididunt ut labore dolore");
            $table->string('section3_person2_name')->default("Maisha Dunn Arnold");
            $table->string('section3_person2_title')->default("Student");
            $table->string('section3_person3_feedback')->default("Lorem ipsum dolor sit amet, consect adipiscing elit sed eiusmod tempor incididunt ut labore dolore");
            $table->string('section3_person3_name')->default("Regan Traynor");
            $table->string('section3_person3_title')->default("Student");

            $table->string('section4_main_text1')->default("FAQ");
            $table->string('section4_main_text2')->default("Popular Question");
            $table->string('section4_subtext1')->default("Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua");
            $table->string('section4_question1')->default("What’s the difference between a college & a university?");
            $table->string('section4_question2')->default("What are the different types of undergraduate degrees?");
            $table->string('section4_question3')->default("How can I find out if an institution is accredited?");
            $table->string('section4_question4')->default("Why should I attend community college?");
            $table->string('section4_question5')->default("How can I find out if an institution is accredited?");
            $table->string('section4_question6')->default("What are the different types of undergraduate degrees?");
            $table->string('section4_answer1')->default("Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua");
            $table->string('section4_answer2')->default("Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua");
            $table->string('section4_answer3')->default("Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua");
            $table->string('section4_answer4')->default("Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua");
            $table->string('section4_answer5')->default("Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua");
            $table->string('section4_answer6')->default("Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua");

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
        Schema::dropIfExists('testimonials_pages');
    }
}
