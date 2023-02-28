<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login()
    {
        return view ('admin.login');
    }
    public function index()
    {
        if(Auth::user()->role==2)
        {
        $show = DB::table('users')
        ->select('users.id','users.lawyerid','users.name','users.fname','users.email','users.phone','users.address','users.profile','users.post')
        ->get();

        return view ('admin.lawyer.view',['show'=>$show]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // if(Auth::user()){
        //     if(Auth::user()->role==2)
        //     {
                return view ('admin.lawyer.add');
        //     }
        //     else{
        //         return redirect ('/dashboard');
        //     }
        // }
        // else{
        //     return redirect ('/');
        // }
    }

    
    public function detail($id)
    {
        $detail = DB::table('users')
        ->where('users.id',$id)
        ->select('users.id','users.lawyerid','users.name','users.fname','users.email','users.phone','users.address','users.profile','users.post',)
        ->get();
        
        if(Auth::user()->id==$id){
            return view ('admin.lawyer.detail',['detail'=>$detail]);
        }
        elseif(Auth::user()->id!=$id && Auth::user()->role==2){
            return view ('admin.lawyer.detail',['detail'=>$detail]);
        }
        else{
            return redirect('/dashboard');
        }
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
            'lawyerid'=>'required|unique:users',
            'name'=>'required',
            'email'=>'required|unique:users',
            'password'=>'required',
        ]);


        $name = $request->file('profile')->getClientOriginalName();
        $path = $request->file('profile')->move('admin/assets/img/profiles');


        $create  = new User();
        $create->lawyerid = $request->lawyerid;
        $create->name = $request->name;
        $create->fname = $request->fname;
        $create->email = $request->email;
        $create->phone = $request->phone;
        $create->address = $request->address;
        $create->profile = $path;
        $create->post = $request->post;
        $create->role = 1;
        $create->password = Hash::make($request->password);
        $create->save();

        return redirect('admin/lawyers/index');
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
        //
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
        $request->validate([
            'name'=>'required',
            'fname'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'address'=>'required',
            'post'=>'required',
        ]);

        
        
        if($request->password == "" and $request->profile == ""){
            
            $create  = User::find($id);
            $create->name = $request->name;
            $create->fname = $request->fname;
            $create->email = $request->email;
            $create->phone = $request->phone;
            $create->address = $request->address;
            $create->post = $request->post;
            $create->update();
           
            if(Auth::user()->role==2)
            {
            return redirect('admin/lawyers/index');
            }
            else{
                $detail = DB::table('users')
                ->where('users.id',$id)
                ->select('users.id','users.lawyerid','users.name','users.fname','users.email','users.phone','users.address','users.profile','users.post',)
                ->get();
         
                return view ('admin.lawyer.detail',['detail'=>$detail]);
            }
        }

        
        if($request->password == ""){
            $name = $request->file('profile')->getClientOriginalName();
            $path = $request->file('profile')->move('admin/assets/img/profiles');
            
            $create  = User::find($id);
            $create->name = $request->name;
            $create->fname = $request->fname;
            $create->email = $request->email;
            $create->phone = $request->phone;
            $create->address = $request->address;
            $create->post = $request->post;
            $create->profile = $path;
            $create->update();
    
            if(Auth::user()->role==2)
            {
            return redirect('admin/lawyers/index');
            }
            else{
                $detail = DB::table('users')
                ->where('users.id',$id)
                ->select('users.id','users.lawyerid','users.name','users.fname','users.email','users.phone','users.address','users.profile','users.post',)
                ->get();
         
                return view ('admin.lawyer.detail',['detail'=>$detail]);
            }
        }


        if($request->image == ""){

            $create  = User::find($id);
            $create->name = $request->name;
            $create->fname = $request->fname;
            $create->email = $request->email;
            $create->phone = $request->phone;
            $create->address = $request->address;
            $create->post = $request->post;
            $create->password = Hash::make($request->password);
            $create->update();
    
            if(Auth::user()->role==2)
            {
            return redirect('admin/lawyers/index');
            }
            else{
                $detail = DB::table('users')
                ->where('users.id',$id)
                ->select('users.id','users.lawyerid','users.name','users.fname','users.email','users.phone','users.address','users.profile','users.post',)
                ->get();
         
                return view ('admin.lawyer.detail',['detail'=>$detail]);
            }
        }


        else{
            $name = $request->file('profile')->getClientOriginalName();
            $path = $request->file('profile')->move('admin/assets/img/profiles');
            
            $create  = User::find($id);
            $create->name = $request->name;
            $create->fname = $request->fname;
            $create->email = $request->email;
            $create->phone = $request->phone;
            $create->address = $request->address;
            $create->post = $request->post;
            $create->password = Hash::make($request->password);
            $create->profile = $path;
            $create->update();
    
            if(Auth::user()->role==2)
            {
            return redirect('admin/lawyers/index');
            }
            else{
                $detail = DB::table('users')
                ->where('users.id',$id)
                ->select('users.id','users.lawyerid','users.name','users.fname','users.email','users.phone','users.address','users.profile','users.post',)
                ->get();
         
                return view ('admin.lawyer.detail',['detail'=>$detail]);
            }
        }

    }

    public function storelogin(Request $request)
    {
        $request->validate([
            'email'=>'required',
            'password'=>'required',
        ]);


        $data = [
            'email' => $request->email,
            'password' => $request->password,
        ];


        if(Auth::attempt($data)){
            return redirect('/dashboard');
        }
        else{
            return redirect('/');
        }
    }

    public function logout(){
        Auth::logout();
        return redirect('/login');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = User::find($id);
        $delete->delete();
        return redirect('admin/lawyers/index');
    }
}