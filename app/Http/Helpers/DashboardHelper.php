<?php


namespace App\Http\Helpers;

use Illuminate\Http\Request;
use App\Models\Scholarship;
use App\Models\User;
use App\Models\Job;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;


class DashboardHelper
{
    public static function setAction($action, $program_id, $user_id)
    {
        $query = DB::table('user_status')->where('scholarship_id', $program_id)
                    ->where('user_id', $user_id)->get();
        if($query->isEmpty()) {
            DB::table('user_status')->insert([
                'user_id' => $user_id,
                'scholarship_id' => $program_id,
                'saved' => 0,
                'applied' => 0,
                'banned' => 0
            ]);
        }
        switch ($action) {
            case 'save':
                DB::table('user_status')->where('scholarship_id', $program_id)
                ->where('user_id', $user_id)->update([
                    'saved' => 1
                ]);
                break;
            case 'unsave':
                DB::table('user_status')->where('scholarship_id', $program_id)
                ->where('user_id', $user_id)->update([
                    'saved' => 0
                ]);
                break;
            case 'apply':
                DB::table('user_status')->where('scholarship_id', $program_id)
                ->where('user_id', $user_id)->update([
                    'applied' => 1
                ]);
                break;
            case 'ban':
                DB::table('user_status')->where('scholarship_id', $program_id)
                ->where('user_id', $user_id)->update([
                    'banned' => 1
                ]);
                break;
            case 'unban':
                DB::table('user_status')->where('scholarship_id', $program_id)
                ->where('user_id', $user_id)->update([
                    'banned' => 0
                ]);
                break;
            
            default:
                # code...
                break;
        }
    }


  
    public static function multipleResults($programs, $id, $isBanned = false)
    {
        session(['success' => '', 'errors' => '']);
        foreach ($programs as $y => $value) {
            $query = DB::table('user_status')->where('scholarship_id', $value->id)->where('user_id', $id)->get();
            $saved = false;
            $applied = false;
            $banned = false;
            foreach ($query as $key) {
                $saved = $key->saved == 1 ? true: false;
                $applied = $key->applied == 1 ? true : false;
                $banned = $key->banned == 1 ? true : false;
             }
             if($banned && !$isBanned) {
                $programs->forget($y);
                continue;
             }
             $value->saved = $saved;
             $value->banned = $banned;
             $value->applied = $applied;
             $value->deadline = Carbon::parse($value->deadline)->format('d-m-Y');
         }
         return $programs;
    }


    public static function singleResult($program_id, $id)
    {
        session(['success' => '', 'errors' => '']);
        $value = Scholarship::find($program_id);
            $query = DB::table('user_status')->where('scholarship_id', $program_id)->where('user_id', $id)->get();
            $saved = false;
            $applied = false;
            $banned = false;
            foreach ($query as $key) {
                $saved = $key->saved == 1 ? true: false;
                $applied = $key->applied == 1 ? true : false;
                $banned = $key->banned == 1 ? true : false;
             }
            $value->saved = $saved;
            $value->banned = $banned;
            $value->applied = $applied;
            $value->can_apply = Carbon::parse($value->deadline)->gte(now());
            $value->deadline = Carbon::parse($value->deadline)->format('d-m-Y');
        return $value;
    }

    public static function singleStatus($status, $id, $isBanned = false)
    {
        $query = DB::table('user_status')->where('user_id', $id)->where($status, 1)->get();
        $programs = collect();
        foreach ($query as $value) {
            $one_sch = Scholarship::find($value->scholarship_id);
            if($one_sch->published == 1? true : false) {
                $programs->push($one_sch);
            }
        }
        $programs = DashboardHelper::multipleResults($programs, $id, $isBanned);
        return $programs;
    }

    public static function search($validated, $id)
    {
        // $titles = Scholarship::where('title', 'like', '%' . $validated['term'] . '%')->get();
        $abouts = Scholarship::where('about', 'like', '%' . $validated['term'] . '%')->get();
        $results = DashboardHelper::multipleResults($abouts, $id);
        return $results;
    }

    public static function profileStats($id)
    {
        $stats['applied'] = DB::table('user_status')->where('user_id', $id)->where('applied', 1)->count();
        $stats['matched'] = DB::table('scholarships')->count();
        $stats['saved'] = DB::table('user_status')->where('user_id', $id)->where('saved', 1)->count();
        return $stats;
    }

    
    /// JOBS

    public static function setJobAction($action, $program_id, $user_id)
    {
        $query = DB::table('user_jobstatus')->where('job_id', $program_id)
                    ->where('user_id', $user_id)->get();
        if($query->isEmpty()) {
            DB::table('user_jobstatus')->insert([
                'user_id' => $user_id,
                'job_id' => $program_id,
                'saved' => 0,
                'applied' => 0,
                'banned' => 0
            ]);
        }
        switch ($action) {
            case 'save':
                DB::table('user_jobstatus')->where('job_id', $program_id)
                ->where('user_id', $user_id)->update([
                    'saved' => 1
                ]);
                break;
            case 'unsave':
                DB::table('user_jobstatus')->where('job_id', $program_id)
                ->where('user_id', $user_id)->update([
                    'saved' => 0
                ]);
                break;
            case 'apply':
                DB::table('user_jobstatus')->where('job_id', $program_id)
                ->where('user_id', $user_id)->update([
                    'applied' => 1
                ]);
                break;
            case 'ban':
                DB::table('user_jobstatus')->where('job_id', $program_id)
                ->where('user_id', $user_id)->update([
                    'banned' => 1
                ]);
                break;
            case 'unban':
                DB::table('user_jobstatus')->where('job_id', $program_id)
                ->where('user_id', $user_id)->update([
                    'banned' => 0
                ]);
                break;
            
            default:
                # code...
                break;
        }
    }

    public static function searchJobs($validated, $id)
    {
        // $titles = Scholarship::where('title', 'like', '%' . $validated['term'] . '%')->get();
        $abouts = Job::where('about', 'like', '%' . $validated['term'] . '%')->get();
        $results = DashboardHelper::multipleJobResults($abouts, $id);
        return $results;
    }

    
    public static function singleJobStatus($status, $id, $isBanned = false)
    {
        $query = DB::table('user_jobstatus')->where('user_id', $id)->where($status, 1)->get();
        $programs = collect();
        foreach ($query as $value) {
            $one_sch = Job::find($value->job_id);
            if($one_sch->published == 1? true : false) {
                $programs->push($one_sch);
            }
        }
        $programs = DashboardHelper::multipleJobResults($programs, $id, $isBanned);
        return $programs;
    }

    
    public static function multipleJobResults($programs, $id, $isBanned = false)
    {
        session(['success' => '', 'errors' => '']);
        foreach ($programs as $y => $value) {
            $query = DB::table('user_jobstatus')->where('job_id', $value->id)->where('user_id', $id)->get();
            $saved = false;
            $applied = false;
            $banned = false;
            foreach ($query as $key) {
                $saved = $key->saved == 1 ? true: false;
                $applied = $key->applied == 1 ? true : false;
                $banned = $key->banned == 1 ? true : false;
             }
             if($banned && !$isBanned) {
                $programs->forget($y);
                continue;
             }
             $value->saved = $saved;
             $value->banned = $banned;
             $value->applied = $applied;
         }
         return $programs;
    }

    public static function singleJobResult($program_id, $id)
    {
        session(['success' => '', 'errors' => '']);
        $value = Job::find($program_id);
            $query = DB::table('user_jobstatus')->where('job_id', $program_id)->where('user_id', $id)->get();
            $saved = false;
            $applied = false;
            $banned = false;
            foreach ($query as $key) {
                $saved = $key->saved == 1 ? true: false;
                $applied = $key->applied == 1 ? true : false;
                $banned = $key->banned == 1 ? true : false;
             }
            $value->saved = $saved;
            $value->banned = $banned;
            $value->applied = $applied;
        return $value;
    }



}
