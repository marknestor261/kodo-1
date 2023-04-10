<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Scholarship;
use App\Models\User;
use App\Models\UserMetaData;
use Carbon\Carbon;
use App\Http\Helpers\AdminHelper;

class AdminController extends Controller
{
    public function createScholarship()
    {
        return view('admin.dashboard.create-scholarship');
    }

    public function storeScholarship(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|min:2',
            'about' => 'required',
            'award' => 'required',
            'deadline' => 'required',
            'link' => 'required'
        ]);
        $program = AdminHelper::createScholarship($validated);
        session(['success' => 'Scholarship created successfully']);
        return redirect()->back();
    }

    public function allScholarships()
    {
        $programs = Scholarship::get();
        $programs = AdminHelper::multipleResults($programs);
        return view('admin.dashboard.all', compact('programs'));
    }

    public function publishedScholarships()
    {
        $programs = Scholarship::where('published', 1)->get();
        $programs = AdminHelper::multipleResults($programs);
        return view('admin.dashboard.published', compact('programs'));
    }

    public function unpublishedScholarships()
    {
        $programs = Scholarship::where('published', 0)->get();
        $programs = AdminHelper::multipleResults($programs);
        return view('admin.dashboard.unpublished', compact('programs'));
    }

    
    public function publish($program_id)
    {
        AdminHelper::setAction('publish', $program_id);
        session(['success' => 'Scholarship published successfully']);
        return redirect()->back();
    }

    public function unpublish($program_id)
    {
        AdminHelper::setAction('unpublish', $program_id);
        session(['success' => 'Scholarship unpublished successfully']);
        return redirect()->back();
    }

    public function editScholarship($program_id)
    {
        $x = Scholarship::find($program_id);
        return view('admin.dashboard.edit-scholarship', compact('x'));
    }

    public function updateScholarship(Request $request, $program_id)
    {
        $validated = $request->validate([
            'title' => 'required|min:2',
            'about' => 'required',
            'award' => 'required',
            'deadline' => 'required',
            'link' => 'required'
        ]);
        $program = AdminHelper::updateScholarship($validated, $program_id);
        session(['success' => 'Scholarship updated successfully']);
        return redirect()->back();
    }

    
}
