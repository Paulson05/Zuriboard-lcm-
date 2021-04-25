<?php

namespace App\Http\Controllers;

use App\Models\Generalpost;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class GeneralpostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $generalposts= Generalpost::all();
       return view('admin.generalpost.index')->with([
           'generalposts' =>  $generalposts
       ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Alert::success('Success Title', 'Success Message');
        $array=collect($request->only(['course','task_title',  'task_points']))->all();

        Generalpost::create($array);

        return redirect()->back()->with('success', 'generalpost created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Generalpost  $generalpost
     * @return \Illuminate\Http\Response
     */
    public function show(Generalpost $generalpost)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Generalpost  $generalpost
     * @return \Illuminate\Http\Response
     */
    public function edit(Generalpost $generalpost)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Generalpost  $generalpost
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Generalpost $generalpost)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Generalpost  $generalpost
     * @return \Illuminate\Http\Response
     */
    public function destroy(Generalpost $generalpost)
    {
        //
    }
}
