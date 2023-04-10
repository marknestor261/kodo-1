<?php

namespace App\Http\Controllers;

use App\Models\HomePage;
use App\Models\ScholarshipPage;

class FrontEndPagesController extends Controller
{
    public function homePage()
    {
        $homePageContent = HomePage::first();
        // HomePage::create();
        return view('home.frontend.index', compact('homePageContent'));
    }

    public function scholarshipPage()
    {
        $scholarshipPageContent = ScholarshipPage::first();
        // ScholarshipPage::create();
        return view('home.frontend.scholarships', compact('scholarshipPageContent'));
    }

    
}
