<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Image\Image;
use App\Models\imageModel;   

class imageController extends Controller
{
    public function index(Request $request){
        Image::load($request->file('file'))
           ->sharpen(30)
           ->save(storage_path('app/public/image.jpg'));
        Image::load($request->file('file'))
           ->optimize()
           ->save(storage_path('app/public/image2.jpg'));   
        return redirect()->back();   
    }
}
