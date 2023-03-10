<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\product\StoreProductRequest;
use App\Http\Requests\product\UpdateProductRequest;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('users.gérant.products.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.gérant.products.CreateProduct');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductRequest $request)
    {

        $img = time()."_".$request->file('image')->getClientOriginalName();
        // dd($img);
        $imgPath = $request->file('image')->storeAs('/public/products', $img);
        // $request->image = $img;
        $res = array_merge($request->validated(),['image'=>$img]);
        // dd($res);
         $product = Product::create($res);
        return redirect('gérant/products');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('users.gérant.products.ShowProduct',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product =  Product::findOrFail($id);
        // dd($product);
        return view('users.gérant.products.EditProduct',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductRequest $request, $id)
    {
        $product =  Product::findOrFail($id);
        if($request->hasFile('image')){
            $oldImgName = explode('_',$product->image);
            $isChanged = $request->file('image')->getClientOriginalName() != $oldImgName[1];
            if($isChanged){
                $img = time()."_".$request->file('image')->getClientOriginalName();
                $request->file('image')->storeAs('/public/products/',$img);
                $res = array_merge($request->validated(),['image'=>$img]);
            }
        }else{
            $res = $request->except('image');
        }
        $product->update($res);
        return redirect(route('products.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product =  Product::findOrFail($id);
        $product->delete();
        return back();
    }
}
