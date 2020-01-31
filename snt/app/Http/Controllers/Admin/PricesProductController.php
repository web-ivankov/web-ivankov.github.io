<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\PricesProduct;
use App\Product;

class PricesProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prices_product = PricesProduct::orderby('id', 'asc')->paginate(5);

        return view('admin-panel.prices_product.index_prices_product', compact('prices_product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products = Product::all()->pluck('name', 'id');

        return view('admin-panel.prices_product.create_prices_product', compact('products'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $prices_product = new PricesProduct();

        $prices_product->product_id = $request->product_id;
        $prices_product->price_name = $request->price_name;
        $prices_product->price = $request->price;

        $prices_product->save();

        return redirect()->route('prices_product.index');
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
        $price_product = PricesProduct::find($id);
        $products = Product::all()->pluck('name', 'id');


        return view('admin-panel.prices_product.edit_prices_product', compact('price_product', 'products'));
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
        $price_product = PricesProduct::find($id);

        $price_product->product_id = $request->product_id;
        $price_product->price_name = $request->price_name;
        $price_product->price = $request->price;

        $price_product->save();

        return redirect()->route('prices_product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
