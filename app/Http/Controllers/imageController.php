<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\imageModel;   

class imageController extends Controller
{
    public function index(Request $request){
        $file = $request->file("file");
        $name = $file->getClientOriginalName();
        $img=\Image::make($file);
        $img->save(storage_path('app/public/'. $name .'-XXLarge.jpg'), 25);
        $img=\Image::make($file);
        $img->save(storage_path('app/public/'. $name .'-XLarge.jpg'), 15);
        $img=\Image::make($file);
        $img->save(storage_path('app/public/'. $name .'-Large.jpg'), 10);
        $img=\Image::make($file);
        $img->save(storage_path('app/public/'. $name .'-Medium.jpg'), 5);
        $img=\Image::make($file);
        $img->save(storage_path('app/public/'. $name .'-Original.jpg'));
        return back();
    }    
}
