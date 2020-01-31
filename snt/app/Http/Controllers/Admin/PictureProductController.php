<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\PictureProduct;
use App\Product;
use App\Picture;

class PictureProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $picture_products = PictureProduct::orderby('id', 'asc')->paginate(5);

        return view('admin-panel.picture_product.index_picture_product', compact('picture_products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pictures = Picture::all()->pluck('id', 'id');
        $products = Product::all()->pluck('id', 'id');

        return view('admin-panel.picture_product.create_picture_product', compact('products', 'pictures'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $picture_product = new PictureProduct();

        $picture_product->product_id = $request->product_id;
        $picture_product->picture_id = $request->picture_id;

        $picture_product->save();

        return redirect()->route('picture_product.index');
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
        $picture_product = PictureProduct::find($id);

        $pictures = Picture::all()->pluck('id', 'id');
        $products = Product::all()->pluck('id', 'id');

        return view('admin-panel.picture_product.edit_picture_product', compact('picture_product', 'pictures', 'products'));
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
        $picture_product = PictureProduct::find($id);

        $picture_product->product_id = $request->product_id;
        $picture_product->picture_id = $request->picture_id;

        $picture_product->save();

        return redirect()->route('picture_product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $picture_product = PictureProduct::find($id);

        $picture_product->delete();

        return redirect()->route('picture_product.index');
    }
}
