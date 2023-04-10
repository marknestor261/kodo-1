<?php

namespace App\Http\Controllers;

use App\Models\Scholarship;
use App\Models\User;
use App\Models\StepTempUser;
use App\Models\UserMetaData;
use Carbon\Carbon;
use App\Http\Helpers\StepHelper;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class StepController extends Controller
{
    public function saveGoals(Request $request)
    {
        $url = parse_url($request->fullUrl());
        $interest = StepHelper::getParams($url, 1);
        $category = StepHelper::getParams($url, 2);
        $subject = StepHelper::getParams($url, 3);
        $stepTempUser = StepTempUser::create([
            'interest' => $interest,
            'category' => $category,
            'subject' => $subject,
            'first_name' => '',
            'last_name' => '',
            'country' => '',
            'city' => ''
        ]);
        session(['temp_id' => $stepTempUser->id]);
        return view('home.steps.step_one');
    }

    public function saveAddress(Request $request)
    {
        $validated = $request->validate([
            'country' => 'required',
            'city' => 'required'
        ]);
        $tempUser = StepTempUser::find(session('temp_id'));
        $tempUser->update([
            'country' => $validated['country'],
            'city' => $validated['city']
        ]);
        $tempUser->save();
        return view('home.steps.step_four');
    }

    public function saveNames(Request $request)
    {
        $validated = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required'
        ]);
        $tempUser = StepTempUser::find(session('temp_id'));
        $tempUser->update([
            'first_name' => $validated['first_name'],
            'last_name' => $validated['last_name']
        ]);
        $tempUser->save();
        session(['first_name' => $validated['first_name'] ]);
        return view('home.steps.step_five');
    }

    public function createUser(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required|confirmed|min:6',
        ]);
        $user = User::create([
            'name' => session('first_name'),
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        StepHelper::createUserMetaData($user);
        event(new Registered($user));
        Auth::login($user);
        return redirect(RouteServiceProvider::HOME);
    }
}
