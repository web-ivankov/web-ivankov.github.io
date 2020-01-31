<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Picture;
use App\Product;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function upload(Request $request){
        $products = Product::all()->pluck('name', 'id');
        $path = $request->file('image')->store('upload', 'public');

        return view('admin-panel.picture.create_picture', ['path' => $path], compact('products'));
    }
}
