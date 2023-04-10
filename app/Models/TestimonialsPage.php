<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestimonialsPage extends Model
{
    use HasFactory;

    protected $fillable = [

        'section1_main_text1',
        'section1_subtext',

        'section2_main_text1',
        'section2_main_text2',
        'section2_subtext1',

        'section3_main_text1',
        'section3_main_text2',
        'section3_person1_feedback',
        'section3_person1_name',
        'section3_person1_title',
        'section3_person2_feedback',
        'section3_person2_name',
        'section3_person2_title',
        'section3_person3_feedback',
        'section3_person3_name',
        'section3_person3_title',

        'section4_main_text1',
        'section4_main_text2',
        'section4_subtext1',
        'section4_question1',
        'section4_question2',
        'section4_question3',
        'section4_question4',
        'section4_question5',
        'section4_question6',
        'section4_answer1',
        'section4_answer2',
        'section4_answer3',
        'section4_answer4',
        'section4_answer5',
        'section4_answer6'

    ];


}
