<?php

namespace App\Http\Controllers;

use App\Models\Casereg;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class CaseregController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            if(Auth::user())
            {
            $show = DB::table('caseregs')
            ->select('caseregs.id','caseregs.CaseId','caseregs.DOB','caseregs.year','caseregs.District','caseregs.CourtType','caseregs.PName','caseregs.PEmail','caseregs.OName','caseregs.Matter')
            ->get();

            return view ('admin.case.view',['show'=>$show]);
        }
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
        $request->validate([
            'CaseId'=>'required|unique:Caseregs',
            'DOB'=>'required',
            'year'=>'required',
            'District'=>'required',
            'CourtType'=>'required',
            'PName'=>'required',
            'PEmail'=>'required',
            'Matter'=>'required'
        ]);

        $create  = new Casereg();
        $create->CaseId = $request->CaseId;
        $create->DOB = $request->DOB;
        $create->year = $request->year;
        $create->District = $request->District;
        $create->CourtType = $request->CourtType;
        $create->PName = $request->PName;
        $create->PEmail = $request->PEmail;
        $create->OName = $request->OName;
        $create->Matter = $request->Matter;
        $create->save();

        return redirect('admin/cases/index');
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
    public function edit($id)
    {
        $edit = DB::table('caseregs')
        ->where('caseregs.id',$id)
        ->select('caseregs.id','caseregs.CaseId','caseregs.DOB','caseregs.year','caseregs.District','caseregs.CourtType','caseregs.PName','caseregs.PEmail','caseregs.OName','caseregs.Matter')
        ->get();
 
        return view ('admin.case.edit',['edit'=>$edit]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Casereg  $casereg
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $request->validate([
            'DOB'=>'required',
            'year'=>'required',
            'District'=>'required',
            'CourtType'=>'required',
            'PName'=>'required',
            'PEmail'=>'required',
            'Matter'=>'required'
        ]);

        $create  = Casereg::find($id);
        $create->CaseId = $request->CaseId;
        $create->DOB = $request->DOB;
        $create->year = $request->year;
        $create->District = $request->District;
        $create->CourtType = $request->CourtType;
        $create->PName = $request->PName;
        $create->PEmail = $request->PEmail;
        $create->OName = $request->OName;
        $create->Matter = $request->Matter;
        $create->update();

        return redirect('admin/cases/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Casereg  $casereg
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Casereg::find($id);
        $delete->delete();
        return redirect('admin/cases/index');
    }
}
