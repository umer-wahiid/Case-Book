<?php

namespace App\Http\Controllers;

use App\Models\Casereg;
use Illuminate\Http\Request;

class CaseregController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('admin.case.view');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('admin.case.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Casereg  $casereg
     * @return \Illuminate\Http\Response
     */
    public function show(Casereg $casereg)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Casereg  $casereg
     * @return \Illuminate\Http\Response
     */
    public function edit(Casereg $casereg)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Casereg  $casereg
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Casereg $casereg)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Casereg  $casereg
     * @return \Illuminate\Http\Response
     */
    public function destroy(Casereg $casereg)
    {
        //
    }
}
