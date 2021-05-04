<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Category;
use App\Order;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::all();
        $orders->transform(function ($order , $key) {
            $order->cart = unserialize($order->cart);
            return $order;
        });

        return view('dashboard_veiw.orders',compact('orders'));
    }

    public function validation($request)
    {
        $request->validate([
            'fname' => 'required',
            'lname' => 'required',
            'email' => 'required|email|max:120',
            'mobile' => 'required | Digits:10',
            'country' => 'required | alpha',
            'city' => 'required | alpha',
            'postal' => 'required',
            'address' => 'required',
        ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request )
    {
        $this->validation($request);
        foreach ( session()->get('cart')->items as $product) {
            Product::where('id' , '=' , $product['id'])->delete();
        }

        if ( Auth::user() ) {
            $userId = Auth::user()->id;
        }
        else {
            $userId = null;
        }


        Order::create([
            "user_id" => $userId,
            "fname"         =>  $request->fname,
            "lname"           =>  $request->lname,
            "email"           =>  $request->email,
            "mobile"       =>  $request->mobile,
            "country"          =>  $request->country,
            "city"      =>  $request->city,
            "postal"          =>  $request->postal,
            "address"          =>  $request->address,
            "state"          =>  $request->state,
            "cart" => serialize(session()->get('cart')),

        ]);
        $request->session()->forget('cart');

        $orderId = Order::latest('id')->first()->id;


        return view('public.ThankYouPage' , compact('orderId'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order, $id)
    {
        Order::findOrFail($id)->delete();
        return redirect('/orders');
    }

public function addToCart(Product $product) {
        if( session()->has('cart')) {
            $cart = new Cart( session()->get('cart'));
        }
        else {
            $cart = new Cart();
        }
        $cart->add($product);
//        dd($cart);
        session()->put('cart' , $cart);
        return redirect()->back()->with('success' , 'Product was added');
    }

    public function showCart() {
        if( session()->has('cart')) {
            $cart = new Cart( session()->get('cart'));
        }
        else {
            $cart = null;
        }
        return view('public.cart' , compact('cart'));
    }

    public function headerCart() {
        $categories=Category::all();
        $products = Product::all();

        if( session()->has('cart')) {
            $cart = new Cart( session()->get('cart'));
        }
        else {
            $cart = null;
        }
        return view('public.landingPage',compact('categories','products','cart'));
    }




}
