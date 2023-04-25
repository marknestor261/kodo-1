<?php


namespace App\Http\Helpers;

use Illuminate\Http\Request;
use App\Models\Scholarship;
use App\Models\User;
use App\Models\Job;
use App\Models\Visitor;
use App\Models\Transaction;
use App\Models\StepTempUser;
use App\Models\UserMetaData;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class AdminHelper
{
    public static function multipleResults($programs)
    {
        session(['success' => '', 'errors' => '']);
        foreach ($programs as $y => $value) {
             $value->deadline = Carbon::parse($value->deadline)->format('d-m-Y');
         }
         return $programs;
    }

    public static function createScholarship($validated)
    {
        $program = Scholarship::create([
            'title' => $validated['title'],
            'about' => $validated['about'],
            'award' => $validated['award'],
            'link' => $validated['link'],
            'deadline' => Carbon::parse($validated['deadline'])
        ]);

        return $program;
    }

    public static function createJob($validated)
    {
        $program = Job::create([
            'title' => $validated['title'],
            'about' => $validated['about'],
            'link' => $validated['link'],
        ]);

        return $program;
    }

    public static function setJobAction($action, $program_id)
    {
        $program = Job::find($program_id);
        switch ($action) {
            case 'publish':
                $program->update([
                    'published' => 1,
                ]);
                $program->save();
                break;
            case 'unpublish':
                $program->update([
                    'published' => 0,
                ]);
                $program->save();
                break;
            
            default:
                # code...
                break;
        }
    }

    public static function setAction($action, $program_id)
    {
        $program = Scholarship::find($program_id);
        switch ($action) {
            case 'publish':
                $program->update([
                    'published' => 1,
                ]);
                $program->save();
                break;
            case 'unpublish':
                $program->update([
                    'published' => 0,
                ]);
                $program->save();
                break;
            
            default:
                # code...
                break;
        }
    }

    public static function updateJob($validated, $program_id)
    {
        $program = Job::find($program_id);
        $program->update([
            'title' => $validated['title'],
            'about' => $validated['about'],
            'link' => $validated['link'],
        ]);
        $program->save();
        return $program;
    }


    public static function updateScholarship($validated, $program_id)
    {
        $program = Scholarship::find($program_id);
        $program->update([
            'title' => $validated['title'],
            'about' => $validated['about'],
            'award' => $validated['award'],
            'link' => $validated['link'],
            'deadline' => Carbon::parse($validated['deadline'])
        ]);
        $program->save();
        return $program;
    }


    // dashboard functions
    public static function visitorsCount()
    {
        // Retrieve all visitors created in the past 24 hours
        $count = Visitor::where(function($query) {
            $query->whereDate('created_at', '>=', now()->subDay());
        })->count();
        return $count;
    }

    public static function latestTransactions()
    {
        $data = Transaction::latest()->take(4)->get();
        foreach ($data as $key => $value) {
            $meta = UserMetaData::where('user_id',$value->user_id)->first();
            $user = User::find($value->user_id);
            $value->user_name = $meta->first_name. ' '. $meta->last_name;
            $value->user_email = $user->email;
        }

        return $data;
    }

    public static function revenueEarned()
    {
        $data = Transaction::where('success', 1)->get();
        $result = 0;
        foreach ($data as $key => $value) {
           $result += intval($value->amount);
        }

        return $result;
    }


    public static function jobIncome()
    {
        $data = Transaction::where('is_job', 1)->where('success', 1)->get();
        $result = 0;
        foreach ($data as $key => $value) {
           $result += intval($value->amount);
        }

        return $result;
    }


    public static function scholarshipsIncome()
    {
        $data = Transaction::where('is_job', 0)->where('success', 1)->get();
        $result = 0;
        foreach ($data as $key => $value) {
           $result += intval($value->amount);
        }

        return $result;
    }

    public static function jobUsers()
    {
        $count = User::where('is_job', 1)->count();
        return $count;
    }

    public static function scholarshipsUsers()
    {
        $count = User::where('is_job', 0)->count();
        return $count;
    }

}