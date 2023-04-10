<?php

namespace App\Http\Controllers;

use App\Models\HomePage;
use App\Models\ScholarshipPage;
use App\Models\AboutPage;
use App\Models\TestimonialsPage;

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

    public function aboutPage()
    {
        $aboutPageContent = AboutPage::first();
        // AboutPage::create();
        return view('home.frontend.about', compact('aboutPageContent'));
    }

    public function testimonialsPage()
    {
        $testimonialsPageContent = TestimonialsPage::first();
        // TestimonialsPage::create();
        return view('home.frontend.testimonials', compact('testimonialsPageContent'));
    }

    
}
