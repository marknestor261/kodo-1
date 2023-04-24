<?php

namespace App\Http\Controllers;

use App\Models\HomePage;
use App\Models\ScholarshipPage;
use App\Models\AboutPage;
use App\Models\TestimonialsPage;
use App\Models\ContactPage;
use App\Models\BlogPage;

class FrontEndPagesController extends Controller
{
    public function homePage()
    {
        $homePageContent = HomePage::first();
        return view('home.frontend.index', compact('homePageContent'));
    }

    public function scholarshipPage()
    {
        $scholarshipPageContent = ScholarshipPage::first();
        return view('home.frontend.scholarships', compact('scholarshipPageContent'));
    }

    public function aboutPage()
    {
        $aboutPageContent = AboutPage::first();
        return view('home.frontend.about', compact('aboutPageContent'));
    }

    public function testimonialsPage()
    {
        $testimonialsPageContent = TestimonialsPage::first();
        return view('home.frontend.testimonials', compact('testimonialsPageContent'));
    }
    public function faqPage()
    {
        $frontPageContent = homePage::first();
        return view('home.frontend.faq', compact('frontPageContent'));
    }
    public function testimonialPage()
    {
        $testimonialsPageContent = TestimonialsPage::first();
        return view('home.frontend.testimonial', compact('testimonialsPageContent'));
    }
    public function contactPage()
    {
        $contactPageContent = ContactPage::first();
        return view('home.frontend.contact', compact('contactPageContent'));
    }
    public function blogPage()
    {
        $blogPageContent = BlogPage::first();
        return view('home.frontend.blog', compact('blogPageContent'));
    }

    
}
