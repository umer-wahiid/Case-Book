<?php

namespace App\Http\Controllers;

use App\Models\cr;
use App\Models\Casereg;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\ABC;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\CaseregController;

class website extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $show = DB::table('users')
        ->select('users.id','users.lawyerid','users.name','users.fname','users.email','users.phone','users.address','users.profile','users.post',)
        ->get();

        return view ('website.home',['show'=>$show]);
    }
    public function search()
    {
        // $show = DB::table('caseregs')
        // ->select('caseregs.id','caseregs.CaseId','caseregs.PEmail')
        // ->get();

        // return view ('website.search',['show'=>$show]);
        return view ('website.search');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function findsearch(Request $request)
    {
        $request->validate([
            'CaseId'=>'required',
            'PEmail'=>'required',
        ]);


        $CaseId = $request->CaseId;
        $PEmail = $request->PEmail;
        $check = DB::table('caseregs')->where('PEmail', $PEmail)->where('CaseId', $CaseId)->first();
        if($check)
        {
            $show = DB::table('caseregs')
            ->where('CaseId',$CaseId)
            ->select('caseregs.id','caseregs.CaseId','caseregs.DOB','caseregs.District','caseregs.CourtType','caseregs.PName','caseregs.OName','caseregs.Matter','caseregs.PEmail')
            ->get();
            $detail = DB::table('details')
            ->where('CaseNo',$CaseId)
            ->get();

            return view('website.searchedcase',['show'=>$show],['detail'=>$detail]);
        }
        else
        {
            return "not exist";
        }

        // if(DB::table('caseregs',$data)){
        // if(Casereg::find($data)){
        //     return "search";
        // }
        // elseif(!Casereg::find($data)){
        //     return "wrong credentials";
        // }
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
     * @param  \App\Models\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function show(cr $cr)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function edit(cr $cr)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, cr $cr)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function destroy(cr $cr)
    {
        //
    }
}
