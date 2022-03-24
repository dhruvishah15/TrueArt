<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Contracts\Session\Session;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        return view('registration');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return view('registration');
    }
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Register the new user or whatever. 
        if(User::where('email',$request->email)->exists()) {
            return back()->with('info','User is already registered');
        }else{
            $user = new User;
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password); 
            $user->save();
            return back()->with('success','User registered successfully');
            // return back();
        }
    }

    public function authenticate(Request $request)
    {
        $user = User::where('email',$request->email)->first();
        if ($user === null) {
            return back()->with('error','User is not registered');
        }
        if(Hash::check(request('password'), $user->password)) {
            if($request->email == 'admin@gmail.com'){
                    return redirect('/admin');
            }
            else if($request->email == 'mira20@gmail.com'){
                $data = $request->input();
                $request->session()->put('login',$data['email']);
                return redirect('/Artist/Mira Rai/index');
            }
            else if($request->email == 'mark15@gmail.com'){
                $data = $request->input();
                $request->session()->put('login',$data['email']);
                return redirect('/Artist/Mark Smith/index');
            }
            else{
                $data = $request->input();
                $request->session()->put('login',$data['email']);
                return redirect('/login')->with('success','User login successfully');  
            }
        }else{
            return back()->with('error','Invalid Credentials');
        }  
    }

    public function exit(Request $request)
    {
        $request->session()->flush();  
        return redirect('/');  
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function showUser(User $user)
    {
        $user = User::all();
        return view('Admin/users_list',compact('user'));
    }

    public function showArtist(User $user)
    {
        $user = User::all();
        return view('Admin/artist_list',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}