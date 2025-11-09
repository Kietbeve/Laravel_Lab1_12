<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends Controller
{
    public function hello(){
        echo("hello");
    }
    //view home
    public function viewHome(){
        $product=new Product();
        $product->id=1;
        $product->name="San pham 1";

        return view("pages.home",["product"=>$product]);
    }
    //view contact
    public function viewContact(Request $request){
        $name=$request->name;

        return view("pages.contact",["name"=>$name]);
    }
}
