<?php

namespace App\Http\Controllers\General;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\PictureProduct;
use App\ParameterProduct;
use App\Product;
use App\TypeProduct;

class GeneralController extends Controller
{
    public function index()
    {
    	$products = Product::all();
        $picture_products = PictureProduct::all();

    	return view('general.main', compact('products', 'picture_products'));
    }
    public function info_index()
    {
        return view('general.information.index_information');
    }
    public function contact()
    {
        return view('general.contact.contact_index');
    }
}