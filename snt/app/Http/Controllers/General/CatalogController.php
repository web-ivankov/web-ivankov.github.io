<?php

namespace App\Http\Controllers\General;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\PictureProduct;
use App\ParameterProduct;
use App\Product;
use App\TypeProduct;
use App\PricesProduct;

class CatalogController extends Controller
{
    public function index(Request $request)
    {
        $products = Product::all();
    	$type_products = TypeProduct::all();
    	$picture_products = PictureProduct::all();
        $prices_product = PricesProduct::all();

    	if($request->has('type_product_id')){
    		$products = $products->where('type_product_id', "$request->type_product_id");
    	}

    	return view('general.catalog.index_catalog', compact('type_products', 'picture_products', 'products', 'prices_product'));
    }

    public function show($id)
    {
    	$type_products = TypeProduct::all();
    	$picture_products = PictureProduct::all();
    	$parameters_product = ParameterProduct::all();
        $prices_product = PricesProduct::all();

    	$products = Product::find($id);

    	return view('general.catalog.show_product', compact('type_products', 'products', 'picture_products', 'parameters_product', 'prices_product'));
    }
}