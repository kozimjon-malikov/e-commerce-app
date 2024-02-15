<?php

namespace App\Http\Controllers;

use Stripe;
use Session;
use Stripe\Charge;
use App\Models\Cart;
use App\Models\User;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Controllers\toast;

class HomeController extends Controller
{
    public function index()
    {
        $product = Product::all();
        return view('frontend.index', compact('product'));
    }
    public function redirect()
    {
        $usertype = Auth::user()->usertype;
        if ($usertype == "1") {
            $product = Product::all()->count();
            $order = Order::all()->count();
            $users = User::all()->count();
            $orders = Order::all();
            $total_revanue = 0;
            $total_delivered = Order::where('delivery_status', '=', 'delivered')->get()->count();
            foreach ($orders as $orders) {
                $total_revanue = $orders->price + $total_revanue;
            };
            return view('admin.index', compact('product', 'order', 'users', 'total_revanue', 'total_delivered'));
        } else {
            $product = Product::all();
            return view('frontend.index', compact('product'));
        }
    }

    public function product_detail($id)
    {
        $product = Product::findOrFail($id);
        return view('frontend.components.product_detail', compact('product'));
    }
    public function add_cart(Request $request, $id)
    {
        if (Auth::id()) {
            //if user  loggen in
            $user = Auth::user();
            $product = Product::findOrFail($id);
            $cart = new Cart();
            $cart->name = $user->name;
            $cart->email = $user->email;
            $cart->phone = $user->phone;
            $cart->address = $user->address;
            $cart->product_title = $product->title;
            $cart->price = $product->price;
            $cart->quantity = $request->quantity;
            if ($product->discount_price != null) {
                $cart->price = $product->discount_price * $request->quantity;
            } else {
                $cart->price = $cart->price * $request->quantity;
            }
            $cart->image = $product->image;
            $cart->Product_id = $product->id;
            $cart->user_id = $user->id;
            $cart->save();
            Alert::success('Product added Successfully','Welldone');
            return redirect()->back();
        } else {
            // if user is not logged in 
            return redirect('login');
        }
    }
    public function show_cart(Request $request)
    {
        $id = Auth::user()->id;
        $cart = Cart::where('user_id', '=', $id)->get();
        $user_info = User::findOrFail($id);
        return view('frontend.show_cart', compact('cart', 'user_info'));
    }
    public function delete_cart_item($id)
    {
        $cart = Cart::findOrFail($id);
        $cart->delete();
        // toast will work 
        toast('Success Toast','success');
        return redirect()->back();
    }
    public function cart_order()
    {
        $user = Auth::user();
        $userId = $user->id;
        $data = Cart::where('user_id', '=', $userId)->get();

        foreach ($data as $cartItem) {
            $order = new Order();
            $order->name = $cartItem->name;
            $order->email = $cartItem->email;
            $order->phone = $cartItem->phone;
            $order->address = $cartItem->address;
            $order->user_id = $cartItem->user_id;
            $order->product_title = $cartItem->product_title;
            $order->quantity = $cartItem->quantity;
            $order->price = $cartItem->price;
            $order->image = $cartItem->image;
            $order->product_id = $cartItem->Product_id;
            $order->payment_status = 'cash on delivery';
            $order->delivery_status = 'processing';
            $order->save();
            $cart_id = $cartItem->id;
            $cart = Cart::findOrFail($cart_id);
            $cart->delete();
        }

        // Delete all cart items after creating orders
        // Cart::where('user_id', $userId)->delete();

        return redirect()->back()->with('msg', 'We have received all information.... Please wait.... We will contact you soon...');
    }
    public function stripe($totalprice)
    {
        return view('frontend.stripe', compact('totalprice'));
    }
    public function stripePost(Request $request)

    {
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        Stripe\Charge::create([

            "amount" => 100 * 100,

            "currency" => "usd",

            "source" => $request->stripeToken,

            "description" => "Test payment from itsolutionstuff.com."
        ]);
        \Illuminate\Support\Facades\Session::flash('success', 'Payment successful!');
        return back();
    }
    public function show_order(){
        if (Auth::id()) {
            $user=Auth::user();
            $userId=$user->id;
            $order=Order::where('user_id','=',$userId)->get();
            return view('frontend.show_order',compact('order'));
        }else{
            return redirect('login');
        }
    }
    public function cancel_order($id){
        $order=Order::findOrFail($id);
        $order->delivery_status='You canceled the order';
        $order->save();
        return redirect()->back();
    }
    public function cart_data(){
        $data=12;
        return view('frontend.mycards',compact('data'));
    }

}
