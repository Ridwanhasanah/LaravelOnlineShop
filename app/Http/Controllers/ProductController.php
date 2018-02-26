<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Size;
use App\Models\Color;
use App\Models\ProductCategory;
use App\Models\ProductSize;
use App\Models\ProductColor;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{

    /*===== index =====*/
    public function index(){

        $products   = Product::latest()->paginate(15);//orderBy('created_at', 'name')->get();
        

        return view('dashboard.product.product',compact('products'));
    }

    public function create(Request $request){


        $colors     = DB::table('colors')->get();
        $sizes      = DB::table('sizes')->get();
        $categories = DB::table('categories')->get();
   

        //return view('user.index', ['users' => $users]);

    	return view('dashboard.product.addProduct',[
            'colors'     => $colors, 
            'categories' => $categories,
            'sizes'      => $sizes
        ]);
    }

    public function store(Request $request){

        $id_product     = DB::table('products')->get();

        $path               = 'storage/upload/';
        $product            = new Product;
        $productCategory    = new ProductCategory;
        $productColor       = new ProductColor;
        $productSize        = new ProductSize;

        $product->name        = $request->name;
        $product->desc        = $request->desc;
        $product->short_desc  = $request->short_desc;
        $product->price       = $request->price;
        $product->discount    = $request->discount;
        $product->stock       = $request->stock;
        $product->weight      = $request->weight;
        $product->sku         = $request->sku;
        $product->widht       = $request->widht;
        $product->height      = $request->height;
        //$product->image       = $request->image;
        //$product->img_gallery = $request->img_gallery;

        if ($request->hasFile('image') /*|| $request->hasFile('img_gallery')*/) {
            
            $filename1 = $request->image->getClientOriginalName();
            $request->image->storeAs('public/upload',$filename1);
            /*Memasukan nama ke database*/
            $product->image = $path.$filename1;

            $filename2 = $request->img_gallery->getClientOriginalName();
            $request->img_gallery->storeAs('public/upload',$filename2);
            /*Memasukan nama ke database*/
            $product->img_gallery = $path.$filename1;
        }else{}

        $product->save();

        /*===== Pivot Product_Size =====*/
        // $sizes      = DB::table('sizes')->get();
        // foreach ($sizes as $size) {
            
            // $productSize->product_id  = $product->id;
            // $productSize->size_id     = $size_id;
            // $productSize->save();    
        // }
        
        /*===== Pivot ProductCategory =====*/
        $productCategory->product_id  = $request->product_id;
        $productCategory->category_id = $request->category_id;
        $productCategory->save();

        /*===== Pivot ProductColor =====*/
        $productColor->product_id  = $request->product_id;
        $ProductColor->color_id    = $request->color_id;
        $ProductColor->save();

        return redirect()->route('editProduct',$product->id);//->compact('colors'); //after create, redirect to edit page
    }


    /*========== Edit Update ==========*/

    public function edit(Product $product){

        $colors     = DB::table('colors')->get();
        $sizes      = DB::table('sizes')->get();
        $categories = DB::table('categories')->get();

        $prod = new Product;
        // $product2 = \App\Models\Product::where('id', $product)->first();
        $product2 = Product::get();

        return view('dashboard.product.editProduct',compact('product2','product','colors','categories','sizes','prod'));

    }

    public function update(Product $product){



        // $product = Product::find($product);
        
        $request = new Request;

        $product->update([
                'name'        => request('name'),
                'desc'        => request('desc'),
                'short_desc'  => request('short_desc'),
                'price'       => request('price'),
                'discount'    => request('discount'),
                'stock'       => request('stock'),
                'weight'      => request('weight'),
                'sku'         => request('sku'),
                'widht'       => request('widht'),
                'height'      => request('height'),
                'image'       => request('image'),
                'img_gallery' => request('img_gallery'),
            ]);

        if ($request->hasFile('image') || $request->hasFile('img_gallery')) {

            
            
            $filename1 = $request->image->getClientOriginalName();
            $filename2 = $request->img_gallery->getClientOriginalName();

            $request->image->storeAs('public/upload',$filename1);
            $request->img_gallery->store('public/upload', $filename2);
            
        }

        return redirect()->back();
    }

    public function destroy(Product $product){

        $product->delete();

        return redirect()->route('product');
    }

    public function test(){

        $product = DB::table('products')->first();

        return view('dashboard.product.test', compact('product'));
    }

}
