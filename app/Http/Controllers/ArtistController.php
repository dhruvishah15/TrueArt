<?php

namespace App\Http\Controllers;
use App\Models\Artist;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class ArtistController extends Controller
{
    public function store(Request $request)
    {
        if(Artist::where('email',$request->email)->exists()) {
            return back()->with('info','Artist registration request is already sent');
        }else{
            $artist = new Artist;
            $artist->name = $request->name;
            $artist->username = $request->username;
            $artist->gender = $request->gender;
            $artist->phone = $request->phone;
            $artist->email = $request->email;
            $artist->password = Hash::make($request->password); 
            if($files = $request->file('portfolio')){  
                $name = $files->getClientOriginalName(); 
                $files->move('portfolio',$name);  
                $artist->path = $name;  
            }  
            $artist->save();
            return back()->with('success','Artist registration request sent');
        }
    }

    public function showArtistRequest(Artist $artist)
    {
        $artist = Artist::all();
        return view('Admin/artist_req',compact('artist'));
    }

}

