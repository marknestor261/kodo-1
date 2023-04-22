<?php


namespace App\Http\Helpers;

use Illuminate\Http\Request;
use App\Models\Scholarship;
use App\Models\User;
use App\Models\Job;
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
            'award' => $validated['award'],
            'link' => $validated['link'],
            'deadline' => Carbon::parse($validated['deadline'])
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

}