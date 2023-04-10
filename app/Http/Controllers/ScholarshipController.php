<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Scholarship;
use App\Models\User;

class ScholarshipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create_scholarship');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'award' => 'required',
            'deadline' => 'required',
            'link' => 'required'
        ]);

        Scholarship::create([
            'title' => $validated['title'],
            'about' => $validated['about'],
            'award' => $validated['award'],
            'deadline' => $validated['deadline'],
            'link' => $validated['link'],
        ]);

        session([
            'success' => 'Scholarship created successfully'
        ]);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, $userid)
    {
        $user = User::find($userid);
        $program = Scholarship::find($id);
        $query = DB::table('user_status')->where('user_id', $user->id)->where('scholarship_id', $id)->get();
        $saved = false;
        $applied = false;
        $banned = false;
        foreach ($query as $key) {
            $saved = $key->saved == 1 ? true: false;
            $applied = $key->applied == 1 ? true : false;
            $banned = $key->banned == 1 ? true : false;
        }
        return view('user.scholarship', compact([
            'program', 'saved', 'applied', 'banned'
        ]));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $program = Scholarship::find($id);
        return $view('admin.update_scholarship', compact('program'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $program = Scholarship::find($id);
        $program::update([
            'title' => $request->input('title'),
            'about' => $request->input('about'),
            'award' => $request->input('award'),
            'link' => $request->input('link'),
            'deadline' => $request->input('deadline')
        ]);
        
        session([
            'success' => 'Scholarship updated successfully'
        ]);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $program = Scholarship::find($id);
        $program::update([
            'published' => 0,
        ]);
        session([
            'success' => 'Scholarship deleted successfully'
        ]);
        return redirect()->back();
    }
}
