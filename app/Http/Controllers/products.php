<?php

namespace App\Http\Controllers;
use App\Models\model_products;
use Illuminate\Http\Request;

class products extends Controller
{
    public function index(){

        $products = model_products::all();

        return view('products.index' , compact('products'));
    }

    public function create(){
        return view('products.create');
    }

    public function registrar(Request $request ){
        
        $products = new model_products();

        $products->PRO_NOMBRE = $request->name_pro;
        $products->PRO_DESCRIPCION = $request->descripcion;
        $products->PRO_PRECIO = $request->precio;

        $products->save();
        return redirect()->route('products');
    }
}
