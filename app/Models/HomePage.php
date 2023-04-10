<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomePage extends Model
{
    use HasFactory;

    protected $fillable = [

        'section1_main_text1',
        'section1_main_text2',
        'section1_subtext',
        'section1_button1_label',
        'section1_image1',
        'section1_image2',

        'section2_main_text1',
        'section2_main_text2',
        'section2_subtext1',
        'section2_subtext2',
        'section2_image1',
        'section2_image2',
        'section2_image3',

        'section3_main_text1',
        'section3_main_text2',
        'section3_main_text3',
        'section3_main_text4',
        'section3_main_text5',
        'section3_main_text6',
        'section3_subtext1',
        'section3_button1_label',
        'section3_degree_programs',
        'section3_years_of_history',
        'section3_graduated_students',
        'section3_professional_lecturer',

        'section4_main_text1',
        'section4_main_text2',
        'section4_main_text3',
        'section4_subtext1',
        'section4_subtext2',
        'section4_subtext3',
        'section4_image1',
        'section4_image2',
        'section4_image3',
        
        'section5_main_text1',
        'section5_button1_label',
        'section5_button2_label',
    ];
}
