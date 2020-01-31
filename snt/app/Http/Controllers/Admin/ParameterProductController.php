<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\Parameter;
use App\ParameterProduct;

class ParameterProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $parameter_products = ParameterProduct::all();

        return view('admin-panel.parameter_product.index_parameter_product', compact('parameter_products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products = Product::all()->pluck('name', 'id');
        $parameters = Parameter::all()->pluck('name', 'id');

        return view('admin-panel.parameter_product.create_parameter_product', compact('products', 'parameters'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $parameter_product = new ParameterProduct();

        $parameter_product->product_id = $request->product_id;
        $parameter_product->parameter_id = $request->parameter_id;
        $parameter_product->text = $request->text;

        $parameter_product->save();

        return redirect()->route('parameter_product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $parameter_product = ParameterProduct::find($id);

        return view('admin-panel.parameter_product.show_parameter_product', compact('parameter_product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $parameter_product = ParameterProduct::find($id);
        $products = Product::all()->pluck('name', 'id');
        $parameters = Parameter::all()->pluck('name', 'id');


        return view('admin-panel.parameter_product.edit_parameter_product', compact('parameter_product', 'products', 'parameters'));
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
        $parameter_product = ParameterProduct::find($id);

        $parameter_product->product_id = $request->product_id;
        $parameter_product->parameter_id = $request->parameter_id;
        $parameter_product->text = $request->text;

        $parameter_product->save();

        return redirect()->route('parameter_product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $parameter_product = ParameterProduct::find($id);

        $parameter_product->delete();

        return redirect()->route('parameter_product.index');
    }
}
