<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class FrontController extends Controller
{

    
    
    /*=================*/


    public function index(){

    	return view('onlineShop.home');//view('home', arrya('page' => 'home'));
    }

    public function products(){
    	
    	return view('onlineShop.products');//view('products', array('page'=> 'products'));

    }

    public function product_details($id){

    	return view('onlineShop.product_details');//view('products_details', array('page'=> 'products'));
    }

    public function product_categories($name){

    	return view('products', array('page'=> 'products'));
    }

    public function product_brands($name, $category = null){

    	return view('products', array('page'=> 'products'));
    }

    public function blog(){

    	return view('onlineShop.blog');//view('blog', array('page'=> 'blog'));

    }

    public function blog_post($id){

    	return view('onlineShop.blog_post');//view('blog_post', array('page' => 'blog'));
    }

    public function contact_us(){

    	return view('onlineShop.contact_us');//view('contact_us', array('page' => 'contact_us'));
    }

    public function login(){

    	return view('onlineShop.login');//view('login', array('page' => 'home'));
    }

    public function logout(){

    	return view('onlineShop.login');//view('login',array('page'=> 'home'));
    }

    public function cart(){

    	return view('onlineShop.cart');//view('cart', array('page'=> 'home'));
    }

    public function checkout(){

        return view('onlineShop.checkout');//view('checkout', array('page'=> 'home'));
    }

    public function search($query){

    	return view('products', array('page' => 'products'));
    }
}
