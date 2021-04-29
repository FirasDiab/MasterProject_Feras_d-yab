<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Category;
use App\Order;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories=Category::all();
        $products=Product::all();
        return view('dashboard_veiw.manage_product',compact('products','categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }


    public function validation($request)
    {
        $request->validate([
            'size' => 'required',
            'color' => 'required',
            'desc' => 'required',
            'name' => 'required',
            'price' => 'required',
            'image' => 'mimes:jpeg,jpg,png,gif|max:10000|required',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validation($request);

        if ($request->file('image')) {
            $file = $request->file('image') ;
            $ext = $file->getClientOriginalExtension() ;
            $filename = time() . '.' . $ext ;
            $file->move('uploads/images', $filename);
        }
        Product::create([
            "category_id"         =>  $request->select_category,
            "name"           =>  $request->name,
            "desc"           =>  $request->desc,
            "size"       =>  $request->size,
            "color"          =>  $request->color,
            "price"      =>  $request->price,
            "image"          =>  $filename,
        ]);
        return redirect('/dashboard/manage_products');

    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
//    public function store(Request $request)
//    {
//        //
//    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('dashboard_veiw.manage_product_edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {

        $request->validate([
            'size' => 'required',
            'color' => 'required',
            'desc' => 'required',
            'name' => 'required',
            'price' => 'required',
        ]);

        if ($request->file('image')) {
            $file = $request->file('image') ;
            $ext = $file->getClientOriginalExtension() ;
            $filename = time() . '.' . $ext ;
            $file->move('uploads/images', $filename);
        }else {
            $filename = $product->image;
        }

        $name      = request('name');
        $size      = request('size');
        $price      = request('price');
        $color      = request('color');
        $desc     = request('desc');

        $product=Product::find($product->id);
        $product->name =$name;
        $product->size =$size;
        $product->price =$price;
        $product->color =$color;
        $product->desc =$desc;
        $product->image =$filename;
        $product->save();

        return redirect('/dashboard/manage_products');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        Product::findOrFail($product->id)->delete();
        return redirect('/dashboard/manage_products');
    }



    public function forImages()
    {
        $products=Product::all();
        return view('dashboard_veiw.manage_image',compact('products'));
    }

    public function showProduct($id) {
//        $product = Product::where('id','=',$id)->get();
        $product = Product::find($id);
        $products = Product::where('category_id','=',$product->category_id)->where('id','!=',$id)->take(5)->get();
        return view('public.product',compact('product','products'));
    }

    public function allProducts() {
        $products = Product::paginate(1);
        return view('public.Products',compact('products'));
    }
    public function navBarProducts() {
        $products = Product::all();
        return view('layout.layouts',compact('products'));
    }

    public function removeCart($id) {
        $cart = new Cart( session()->get('cart'));
        $cart->remove($id);

        if( $cart->totalQty <= 0 ) {
            session()->forget('cart');
        }
        else {
            session()->put('cart' , $cart);
        }

        return redirect()->back()->with('success' , 'Product was deleted');
    }
}
