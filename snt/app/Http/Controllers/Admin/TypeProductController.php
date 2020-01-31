<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\TypeProduct;
use App\ClassTypeProduct;

class TypeProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $type_products = TypeProduct::orderby('name', 'asc')->paginate(5);

        return view('admin-panel.type_product.index_type_product', compact('type_products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $class_type_products = ClassTypeProduct::all()->pluck('name', 'id');

        return view('admin-panel.type_product.create_type_product', compact('class_type_products'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $type_product = new TypeProduct();

        $type_product->name = $request->name;
        $type_product->class_type_product_id = $request->class_type_product_id;

        $type_product->save();

        return redirect()->route('type_product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $type_product = TypeProduct::find($id);

        return view('admin-panel.type_product.show_type_product', compact('type_product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $type_product = TypeProduct::find($id);
        $class_type_products = ClassTypeProduct::all()->pluck('name', 'id');


        return view('admin-panel.type_product.edit_type_product', compact('type_product', 'class_type_products'));
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
        $type_product = TypeProduct::find($id);

        $type_product->name = $request->name;
        $type_product->class_type_product_id = $request->class_type_product_id;
        $type_product->save();

        return redirect()->route('type_product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $type_product = TypeProduct::find($id);

        $type_product->delete();

        return redirect()->route('type_product.index');
    }
}
