<?php


namespace App\Http\Helpers;

use Illuminate\Http\Request;
use App\Models\Scholarship;
use App\Models\User;
use App\Models\StepTempUser;
use App\Models\UserMetaData;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class StepHelper
{
    public static function getParams($url, $index)
    {
        $params = explode('=', $url['query']);
        $result = explode('&', $params[$index])[0];
        $result = preg_replace('/\d/', '', $result);
        $result = str_replace('%', '', $result);
        return $result;
    }

    public static function createUserMetaData(User $user)
    {
        $tempUser = StepTempUser::find(session('temp_id'));
        UserMetaData::create([
            'user_id' => $user->id,
            'first_name' => $tempUser->first_name,
            'last_name' => $tempUser->last_name,
            'city' => $tempUser->city,
            'country' => $tempUser->country,
            'category' => $tempUser->category,
            'interest' => $tempUser->interest,
            'subject' => $tempUser->subject
        ]);
        StepHelper::destroyTempUser();
    }

    public static function destroyTempUser()
    {
        $tempUser = StepTempUser::find(session('temp_id'));
        $tempUser->delete();
    }
}
