<?php

namespace App\Http\Controllers;

use App\Models\detail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DetailController extends Controller
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
    public function create($id)
    {
        // $case_id = DB::table('caseregs')->get();
        $case_id = DB::table('caseregs')
        ->where('caseregs.id',$id)
        ->select('caseregs.id','caseregs.CaseId')
        ->get();
        $lawyer_id = DB::table('users')->get();
        return view ('admin.detail.add',['case_id'=>$case_id],['lawyer_id'=>$lawyer_id]);
    }
    // ,['lawyer_id'=>$lawyer_id]
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

            $request->validate([
                'CaseNo'=>'required',
                'DOC'=>'required',
                'STime'=>'required',
                'ETime'=>'required',
                'Details'=>'required'
            ]);

            $casename = $request->CaseNo;
            // $name = $request->file('image')->getClientOriginalName();
            // $path = $request->file('image')->move('admin/assets/Docx/'.$casename.'/');
            $image = array();
            $files = $request->file('Docx');
            foreach ($files as $file) {
                $image_name = md5(rand(1000, 10000));
                $ext = strtolower ($file->getClientOriginalExtension());
                $image_full_name = $image_name.'.'.$ext;
                $upload_path = 'admin/assets/Docx/'.$casename.'/';
                $image_url = $upload_path.$image_full_name;
                $file->move($upload_path, $image_full_name);
                $image[] = $image_url;
            };

            $create  = new detail();
            $create->CaseNo = $request->CaseNo;
            $create->LId = Auth::user()->lawyerid;
            $create->LName =  Auth::user()->name;
            $create->DOC = $request->DOC;
            $create->Court = $request->Court;
            $create->STime = $request->STime;
            $create->ETime = $request->ETime;
            $create->Details = $request->Details;
            $create->Status = $request->Status;
            $create->ND = $request->ND;
            $create->FNo = $request->FNo;
            $create->ALId = $request->ALId;
            $create->Remarks = $request->Remarks;
            $create->Docx = implode('|', $image);
            $create->UpdatedBy = Auth::user()->lawyerid;
            $create->save();

            return redirect('admin/detail/index');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\details  $detail
     * @return \Illuminate\Http\Response
     */
    public function show(detail $detail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\detail  $detail
     * @return \Illuminate\Http\Response
     */
    public function edit(detail $detail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\detail  $detail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, detail $detail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\detail  $detail
     * @return \Illuminate\Http\Response
     */
    public function destroy(detail $detail)
    {
        //
    }
}