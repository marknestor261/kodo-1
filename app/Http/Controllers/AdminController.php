<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Scholarship;
use App\Models\User;
use App\Models\Subscription;
use App\Models\Transaction;
use App\Models\UserMetaData;
use App\Models\Job;
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
        $rules = [
            'title' => 'required|min:2',
            'about' => 'required',
            'award' => 'required',
            'deadline' => 'required',
            'link' => 'required'
        ];
        
        $messages = [
            'title.required' => 'The title field is required.',
            'title.min' => 'The title must be at least 3 characters.',
            'about.required' => 'The about field is required.',
            'award.required' => 'The award field is required.',
            'deadline.required' => 'The deadline field is required.',
            'link.required' => 'The link field is required.',
        ];
        
        $validated = $request->validate($rules, $messages);
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
        $rules = [
            'title' => 'required|min:2',
            'about' => 'required',
            'award' => 'required',
            'deadline' => 'required',
            'link' => 'required'
        ];
        
        $messages = [
            'title.required' => 'The title field is required.',
            'title.min' => 'The title must be at least 3 characters.',
            'about.required' => 'The about field is required.',
            'award.required' => 'The award field is required.',
            'deadline.required' => 'The deadline field is required.',
            'link.required' => 'The link field is required.',
        ];
        $validated = $request->validate($rules, $messages);
        $program = AdminHelper::updateScholarship($validated, $program_id);
        session(['success' => 'Scholarship updated successfully']);
        return redirect()->back();
    }


    public function dashboard()
    {
        $user_count = User::count();
        $transactions_count = Transaction::count();
        $subscriptions_count = Subscription::count();
        $visitors_count = AdminHelper::visitorsCount();
        $revenue_earned = AdminHelper::revenueEarned();
        $job_income = AdminHelper::jobIncome();
        $scholarships_income = AdminHelper::scholarshipsIncome();
        $job_users = AdminHelper::jobUsers();
        $scholarships_users = AdminHelper::scholarshipsUsers();
        $latest_transactions = AdminHelper::latestTransactions();
        return view('admin.dashboard.dashboard', 
        compact(['user_count', 'transactions_count',
        'revenue_earned', 'job_income', 'scholarships_income', 
        'job_users', 'scholarships_users', 'latest_transactions',
        'subscriptions_count', 'visitors_count']));
    }

     public function aboutEdit()
    {
        $about = AboutPage::first();
        dd($about);
        return view('admin.dashboard.pages.about-edit');
    }

    public function homeEdit()
    {
        return view('admin.dashboard.pages.home-edit');
    }

    public function testimonialsEdit()
    {
        return view('admin.dashboard.pages.testimonials-edit');
    }

    public function scholarshipsEdit()
    {
        return view('admin.dashboard.pages.scholarships-edit');
    }

    public function settingsGeneral()
    {
        return view('admin.dashboard.settings.general');
    }

     public function settingsAuth()
    {
        return view('admin.dashboard.settings.auth');
    }


     public function settingsMail()
    {
        return view('admin.dashboard.settings.mail');
    }


     public function settingsPayment()
    {
        return view('admin.dashboard.settings.payments');
    }

    public function aboutUpdate(Request $request)
    {
        # code...
    }

    /// =========================
    ///  JOBS
    /// =========================

    public function createJob()
    {
        return view('admin.dashboard.jobs.create-job');
    }

    public function storeJob(Request $request)
    {
        $rules = [
            'title' => 'required|min:2',
            'about' => 'required',
            'link' => 'required'
        ];
        $messages = [
            'title.required' => 'The title field is required.',
            'title.min' => 'The title must be at least 3 characters.',
            'about.required' => 'The about field is required.',
            'link.required' => 'The link field is required.',
        ];
        $validated = $request->validate($rules, $messages);
        $program = AdminHelper::createJob($validated);
        session(['success' => 'Job created successfully']);
        return redirect()->back();
    }

    public function allJobs()
    {
        $programs = Job::get();
        return view('admin.dashboard.jobs.all-jobs', compact('programs'));
    }

    public function publishedJobs()
    {
        $programs = Job::where('published', 1)->get();
        return view('admin.dashboard.jobs.published-jobs', compact('programs'));
    }

    public function unpublishedJobs()
    {
        $programs = Job::where('published', 0)->get();
        return view('admin.dashboard.jobs.unpublished-jobs', compact('programs'));
    }

    
    public function publishJob($job_id)
    {
        AdminHelper::setJobAction('publish', $job_id);
        session(['success' => 'Job published successfully']);
        return redirect()->back();
    }

    public function unpublishJob($job_id)
    {
        AdminHelper::setJobAction('unpublish', $job_id);
        session(['success' => 'Job unpublished successfully']);
        return redirect()->back();
    }

    public function editJob($job_id)
    {
        $x = Job::find($job_id);
        return view('admin.dashboard.jobs.edit-job', compact('x'));
    }

    public function updateJob(Request $request, $job_id)
    {
        $rules = [
            'title' => 'required|min:2',
            'about' => 'required',
            'link' => 'required'
        ];
        
        $messages = [
            'title.required' => 'The title field is required.',
            'title.min' => 'The title must be at least 3 characters.',
            'about.required' => 'The about field is required.',
            'link.required' => 'The link field is required.',
        ];
        $validated = $request->validate($rules, $messages);
        $program = AdminHelper::updateJob($validated, $job_id);
        session(['success' => 'Job updated successfully']);
        return redirect()->back();
    }


    // Users
    public function allUsers()
    {
        $users = User::get();
        foreach ($users as $key => $value) {
            $meta = UserMetaData::where('user_id',$value->id)->first();
            $value->name = $meta->first_name. ' '. $meta->last_name;
            $value->created_at = Carbon::parse($value->created_at)->format('d-m-Y');
        }
        return view('admin.dashboard.users', compact('users'));
    }

    public function successfulTransactions()
    {
        $data = Transaction::where('success', 1)->get();
        foreach ($data as $key => $value) {
            $meta = UserMetaData::where('user_id',$value->user_id)->first();
            $user = User::find($value->user_id);
            $value->user_name = $meta->first_name. ' '. $meta->last_name;
            $value->user_email = $user->email;
            $value->created_at = Carbon::parse($value->created_at)->format('d-m-Y');
            $value->end_at = Carbon::parse($value->end_at)->format('d-m-Y');
        }
        return view('admin.dashboard.successtransactions', compact('data'));
    }

    public function failedTransactions()
    {
        $data = Transaction::where('success', 0)->get();
        foreach ($data as $key => $value) {
            $meta = UserMetaData::where('user_id',$value->user_id)->first();
            $user = User::find($value->user_id);
            $value->user_name = $meta->first_name. ' '. $meta->last_name;
            $value->user_email = $user->email;
            $value->created_at = Carbon::parse($value->created_at)->format('d-m-Y');
            $value->end_at = Carbon::parse($value->end_at)->format('d-m-Y');
        }
        return view('admin.dashboard.failedtransactions', compact('data'));
    }


    
}
