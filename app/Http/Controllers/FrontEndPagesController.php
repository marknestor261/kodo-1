<?php

namespace App\Http\Controllers;

use App\Models\HomePage;
use Illuminate\Http\Request;

class FrontEndPagesController extends Controller
{
    public function homePage()
    {
        $homePageContent = HomePage::first();
        // HomePage::create();
        return view('home.frontend.index', compact('homePageContent'));
    }

    
}
