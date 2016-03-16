<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Certification;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CertificationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $certifications = Certification::orderBy('sort_order', 'asc')->get();
        return view('admin.certification.index', ['certifications'=> $certifications]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.certification.create');
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
        if( ! $request->has('unlimited'))
            $data['unlimited'] = false;
        if( ! $request->has('enable'))
            $data['enable'] = false;
        Certification::create($data);
        return  redirect()->route('admin.certification.index');
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
        $certification = Certification::findOrFail($id);
        return view('admin.certification.edit', ['certification'=>$certification]);
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
        if( ! $request->has('unlimited'))
            $data['unlimited'] = false;
        if( ! $request->has('enable'))
            $data['enable'] = false;
        Certification::findOrFail($id)->update($data);
        return  redirect()->route('admin.certification.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Certification::findOrFail($id)->delete();
        return redirect()->route('admin.certification.index');
    }
}
