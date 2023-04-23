<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogPage extends Model
{
    use HasFactory;

    protected $fillable = [

        'section1_main_text1',
        'section1_subtext',
        'section1_subtext2',

        
        'section2_main_text1',
        'section2_main_text2',
        'section2_main_text3',
        'section2_main_text4',
        'section2_main_text5',
        'section2_subtext1',
        'section2_subtext2',
        'section2_subtext3',
        'section2_program1',
        'section2_program2',
        'section2_program3',
        'section2_program4',
        'section2_image1',
        'section2_image2',

        'section3_main_text1',
        'section3_subtext1',
        'section3_button1_label',

        'section4_image1',
        'section4_image2',
        'section4_image3',
        'section4_image4',
        'section4_image5',
        'section4_image6',
        'section4_image7',
        'section4_image8',
        'section4_image1',
        'section4_image1',

        'section5_main_text1',
        'section5_button1_label',
        'section5_button2_label',
    ];

}
