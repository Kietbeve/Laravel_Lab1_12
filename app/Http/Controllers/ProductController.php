<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
   public static $products = [
        ["id"=>"1", "name"=>"Cat", "description"=>"Best cat", "image" => 
        "cat-cats.png", "price"=>"2000"],
        ["id"=>"2", "name"=>"Drone", "description"=>"Best Drone", "image" => 
        "drone.png", "price"=>"1500"],
    ];
    public function index() 
    {
        $viewData = [];
        $viewData["title"] = "Products - Online Store";
        $viewData["subtitle"] = "Danh sách sản phẩm."; 
        $viewData["products"] = ProductController::$products; 
        return view('pages.product.index')->with("viewData", $viewData);
    }
    public function show($id) 
    { 
        $viewData = [];
        $product = ProductController::$products[$id-1];
        $viewData["title"] = $product["name"]." - Online Store";
        $viewData["subtitle"] = $product["name"]." – Thông tin sản phẩm.";
        $viewData["product"] = $product;
        return view('pages.product.show')->with("viewData", $viewData); 
    }
}
