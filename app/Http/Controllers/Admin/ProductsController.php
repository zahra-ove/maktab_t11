<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;

// code mahsool bayad unique bashad ke in nokte ra dar jadvale product dar nazar nagereftam.
class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::with('category', 'pimages')->get();
        // return $products;
        return view('admin.products.showProducts')->with('products', $products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.products.createProduct');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'product_code'  =>  'required|string',
            'product_name'  =>  'required|string',
            'product_price' =>  'required|string',
            'product_count' =>  'required|string',
            'category_id'   =>  'nullable|numeric'
        ]);

        $newProduct = new Product();

        $newProduct->product_code  =  $request->post('product_code');
        $newProduct->product_name  =  $request->post('product_name');
        $newProduct->product_price =  $request->post('product_price');
        $newProduct->product_count =  $request->post('product_count');
        $newProduct->category_id   =  $request->post('category_id');

        $newProduct->save();

        return redirect('admin/products')->with('status', 'محصول جدید با موفقیت اضافه شد.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);

        return view('admin.products.editProduct')->with('product', $product);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $editProduct = Product::find($id);

        $request->validate([
            'product_code'    =>   'required|string',
            'product_name'    =>   'required|string',
            'product_price'   =>   'required|string',
            'product_count'   =>   'required|numeric',
            'category_id'     =>   'nullable|numeric'
         ]);

         $editProduct->product_code    =   $request->post('product_code');
         $editProduct->product_name    =   $request->post('product_name');
         $editProduct->product_price   =   $request->post('product_price');
         $editProduct->product_count   =   $request->post('product_count');
         $editProduct->category_id     =   $request->post('category_id');

         $editProduct->save();

         return redirect()->route('admin.products.index')->with('status', 'محصول با موفقیت ویرایش شد.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleteProduct = Product::find($id);
        $deleteProduct->delete();

        return redirect('admin/products')->with('status', "محصول با موفقیت حذف شد.");
    }
}
