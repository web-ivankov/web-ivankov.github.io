<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ClassTypeProduct;

class ClassTypeProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $class_type_products = ClassTypeProduct::orderby('name', 'asc')->paginate(5);

        return view('admin-panel.class_type_product.index_class_type_product', compact('class_type_products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin-panel.class_type_product.create_class_type_product');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|unique:class_type_products|max:50'
        ]);

        $class_type_product = new ClassTypeProduct();

        $class_type_product->name = $request->name;
        $class_type_product->save();

        return redirect()->route('class_type_product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $class_type_product = ClassTypeProduct::find($id);

        return view('admin-panel.class_type_product.show_class_type_product', compact('class_type_product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $class_type_product = ClassTypeProduct::find($id);

        return view('admin-panel.class_type_product.edit_class_type_product', compact('class_type_product'));
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
        $this->validate($request, [
            'name' => 'required|unique:class_type_products|max:50'
        ]);

        $class_type_product = ClassTypeProduct::find($id);

        $class_type_product->name = $request->name;
        $class_type_product->save();

        return redirect()->route('class_type_product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $class_type_product = ClassTypeProduct::find($id);

        $class_type_product->delete();

        return redirect()->route('class_type_product.index');
    }
}
