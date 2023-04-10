<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScholarshipPage extends Model
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
        'section3_main_text3',
        'section3_main_text4',
        'section3_main_text5',
        'section3_main_text6',
        'section3_subtext1',
        'section3_subtext2',
        'section3_subtext3',
        'section3_subtext4',
        'section3_subtext5',
        'section3_subtext6'
    ];





}
