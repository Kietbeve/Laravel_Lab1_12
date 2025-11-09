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
        $viewData = [];
        $viewData["title"] = "Trang chu - Online Store";

        return view('pages.home')->with("viewData", $viewData);
    }
    //view about
    public function viewAbout()
    { 
       $viewData = [];
        $viewData["title"] = "Gioi thieu - Online Store";
        $viewData["subtitle"] = "Gioi thieu";
        $viewData["description"] = "Day la trang gioi thieu!";
        $viewData["author"] = "Phat trien boi: OnlyU"; 
        return view('pages.about')->with("viewData", $viewData);
    
    }
    //view contact
    public function viewContact(Request $request){
        $name=$request->name;

        return view("pages.contact",["name"=>$name]);
    }
}
