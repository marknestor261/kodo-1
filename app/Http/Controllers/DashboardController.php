<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Scholarship;
use App\Models\User;
use App\Models\UserMetaData;
use Carbon\Carbon;
use App\Http\Helpers\DashboardHelper;

class DashboardController extends Controller
{
    public function index() {
        if(auth()->user()->is_job) {
            $programs = Job::where('published', 1)->get();
            $programs = DashboardHelper::multipleJobResults($programs, auth()->user()->id);
        } else {
            $programs = Scholarship::where('deadline','>', Carbon::now())->where('published', 1)->get();
            $programs = DashboardHelper::multipleResults($programs, auth()->user()->id);
        }

        return view('user.dashboard.dashboard', compact('programs'));
    }

    public function matched() {
        if(auth()->user()->is_job) {
            $programs = Job::where('published', 1)->get();
            $programs = DashboardHelper::multipleJobResults($programs, auth()->user()->id);
        } else {
            $programs = Scholarship::where('deadline','>', Carbon::now())->where('published', 1)->get();
            $programs = DashboardHelper::multipleResults($programs, auth()->user()->id);
        }
        return view('user.dashboard.matched', compact('programs'));
    }

    public function profile()
    {
        $metadata = UserMetaData::where('user_id',auth()->user()->id)->first();
        $user = User::find(auth()->user()->id);
        $stats = DashboardHelper::profileStats(auth()->user()->id);
        return view('user.dashboard.profile', compact(['stats', 'metadata', 'user']));
    }

    public function saved() {
        if(auth()->user()->is_job) {
            $programs = DashboardHelper::singleJobStatus('saved', auth()->user()->id);
        } else {
            $programs = DashboardHelper::singleStatus('saved', auth()->user()->id);
        }
        return view('user.dashboard.saved', compact('programs'));
    }

    public function banned() {
        if(auth()->user()->is_job) {
            $programs = DashboardHelper::singleJobStatus('banned', auth()->user()->id, true);
        } else {
            $programs = DashboardHelper::singleStatus('banned', auth()->user()->id, true);
        }
        return view('user.dashboard.banned', compact('programs'));
    }

    public function applied() {
        if(auth()->user()->is_job) {
            $programs = DashboardHelper::singleJobStatus('applied', auth()->user()->id);
        } else {
            $programs = DashboardHelper::singleStatus('applied', auth()->user()->id);
        }
        return view('user.dashboard.applied', compact('programs'));
    }

    public function scholarship($program_id)
    {
        $x = DashboardHelper::singleResult($program_id, auth()->user()->id);
        return view('user.dashboard.scholarship', compact('x'));
    }

    public function search(Request $request)
    {
        $validated = $request->validate([
            'term' => 'required|min:2',
        ]);
        if(auth()->user()->is_job) {
            $programs = DashboardHelper::searchJobs($validated, auth()->user()->id);
        } else {
            $programs = DashboardHelper::search($validated, auth()->user()->id); 
        }
        return view('user.dashboard.search', compact('programs'));
    }

    public function saveProgram($program_id)
    {
        DashboardHelper::setAction('save', $program_id, auth()->user()->id);
        session(['success' => 'Scholarship saved successfully']);
        return redirect()->back();
    }

    public function unsaveProgram($program_id)
    {
        DashboardHelper::setAction('unsave', $program_id, auth()->user()->id);
        session(['success' => 'Scholarship unsaved successfully']);
        return redirect()->back();
    }

    public function banProgram($program_id)
    {
        DashboardHelper::setAction('ban', $program_id, auth()->user()->id);
        session(['success' => 'Scholarship banned successfully']);
        return redirect()->back();
    }

    public function unbanProgram($program_id)
    {
        DashboardHelper::setAction('unban', $program_id, auth()->user()->id);
        session(['success' => 'Scholarship unbanned successfully' ]);
        return redirect()->back();
    }

    public function applyProgram($program_id)
    {
        DashboardHelper::setAction('apply', $program_id, auth()->user()->id);
        session(['success' => 'Scholarship applied to successfully']);
        $program = Scholarship::find($program_id);
        return redirect()->away($program->link);
    }


    /// JOBS

    public function job($program_id)
    {
        $x = DashboardHelper::singleJobResult($program_id, auth()->user()->id);
        return view('user.dashboard.job
        ', compact('x'));
    }

    public function saveJob($program_id)
    {
        DashboardHelper::setJobAction('save', $program_id, auth()->user()->id);
        session(['success' => 'Job saved successfully']);
        return redirect()->back();
    }

    public function unsaveJob($program_id)
    {
        DashboardHelper::setJobAction('unsave', $program_id, auth()->user()->id);
        session(['success' => 'Job unsaved successfully']);
        return redirect()->back();
    }

    public function banJob($program_id)
    {
        DashboardHelper::setJobAction('ban', $program_id, auth()->user()->id);
        session(['success' => 'Job banned successfully']);
        return redirect()->back();
    }

    public function unbanJob($program_id)
    {
        DashboardHelper::setJobAction('unban', $program_id, auth()->user()->id);
        session(['success' => 'Job unbanned successfully' ]);
        return redirect()->back();
    }

    public function applyJob($program_id)
    {
        DashboardHelper::setJobAction('apply', $program_id, auth()->user()->id);
        session(['success' => 'Job applied to successfully']);
        $program = Job::find($program_id);
        return redirect()->away($program->link);
    }

    public function userPaid()
    {
        $user = User::find(auth()->user()->id);
        $user->update([
            'is_paid' => 1
        ]);
        $user->save();
        // send a payment receipt mail todo

        redirect()->route('dashboard');
    }

    public function userNotPaid()
    {
        redirect()->route('dashboard');
    }
}
