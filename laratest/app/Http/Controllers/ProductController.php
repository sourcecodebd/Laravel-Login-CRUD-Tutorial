<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Validator;
use App\Http\Requests\ProductRequest;

class ProductController extends Controller
{
    public function index(Request $req)
    {
        return view('product.index');
    }

    public function create()
    {
        return view('product.create');
    }

    public function store(ProductRequest $req)
    {
        //insert into DB or model...

        if($req->hasFile('myfile')){
            $file = $req->file('myfile');  
            /*echo $file->getClientOriginalName()."<br>";  
            echo $file->getClientOriginalExtension()."<br>";  
            echo $file->getSize()."<br>";*/
            //$file->move('upload', $file->getClientOriginalName());

            $filename = time().".".$file->getClientOriginalExtension();

            $file->move('upload', $filename);

        $product = new Product();
        $product->product_name = $req->product_name;
        $product->product_price = $req->product_price;
        $product->product_quantity = $req->product_quantity;
        $product->product_img = $filename;

        $product-> save();
        
        return redirect()->route('product.productlist');
    }
    }
   
    public function show($id)
    {
        $product = Product::find($id);
        return view('product.details')->with('product', $product);
    }

  
    public function edit($id)
    {
        $product = Product::find($id);
        return view('product.edit')->with('product', $product);
    }


    public function update($id, Request $req)
    {
        //updating DB or model

        $product = Product::find($id);

        $product->product_name = $req->product_name;
        $product->product_price = $req->product_price;
        $product->product_quantity = $req->product_quantity;

        $product-> save();
        
        return redirect()->route('product.productlist');
    }

    public function delete($id)
    {
        $product = Product::find($id);
        return view('product.delete')->with('product', $product);
    }

 
    public function destroy($id)
    {
        if(Product::destroy($id)){
            return redirect()->route('product.productlist');
        }else{
            return redirect('/product/delete/'.$id);
        }
    }


    public function productlist(){
        // db model productlist

        $productlist = Product::all();
        return view('product.list')->with('list', $productlist);
    }
}
