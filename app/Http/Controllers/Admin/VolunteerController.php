<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Volunteer;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class VolunteerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $volunteers = Volunteer::orderBy('sort_order', 'asc')->get();
        return view('admin.volunteer.index', ['volunteers'=> $volunteers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.volunteer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->input();
        if( ! $request->has('once'))
            $data['once'] = false;
        if( ! $request->has('enable'))
            $data['enable'] = false;
        Volunteer::create($data);
        return  redirect()->route('admin.volunteer.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $volunteer = Volunteer::findOrFail($id);
        return view('admin.volunteer.edit', ['volunteer'=>$volunteer]);
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
        $data = $request->input();
        if( ! $request->has('once'))
            $data['once'] = false;
        if( ! $request->has('enable'))
            $data['enable'] = false;
        Volunteer::findOrFail($id)->update($data);
        return  redirect()->route('admin.volunteer.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Volunteer::findOrFail($id)->delete();
        return redirect()->route('admin.volunteer.index');
    }
}
