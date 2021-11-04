<?php

namespace App\Http\Controllers\Admin;

use App\show;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Image;

class Showcontroller extends Controller
{
    public function index(){
        $show = Show::all();
        return view('admin.show.index', compact('show'));
    }

    //add
    public function add(){
        return view('admin.show.from_add_shows');
    }
    
    public function create(Request $request){

        $validatedData = $request->validate([
            'image' => 'required|mimes:jpeg,jpg,png,gif|file'
        ],
        [
            'image.required' => 'กรุณใส่รูปภาพ',
            'image.mimes' => 'อัพโหลดรูปภาพได้เฉพาะ jpeg,jpg,png,gif เท่านั้น',
            'image.file' => 'อัพโหลดได้เฉพาะไลฟ์รูปภาพ',
            // 'image.size' => 'อัพโหลดรูปภาพได้ไม่เกิน 10 MB',
        ]
        );
        
        $show_product = new show;
        $request -> hasFile('image');
        $filename = Str::random(10).'.'.$request->file('image')->getClientOriginalExtension();
        $request->file('image')->move(public_path().'/admin/images/',$filename);
        Image::make(public_path().'/admin/images/'.$filename);
        $show_product->image = $filename;
        $show_product->id_admin = Auth::user()->id;

        $show_product->save();
        return redirect()->route('show');
    }

    //edit
    public function edit(){
        return view('admin.show.from_edit_shows');
    }

     //delete
    public function delete($id_show){
         Show::destroy($id_show);
          return redirect('/Admin/show/index');
    }
}
