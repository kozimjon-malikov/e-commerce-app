<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Catagory;
use App\Models\Order;
use Illuminate\Support\Facades\Notification;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\PDF;
use App\Notifications\EmailNotification; // Import the EmailNotification class
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Controllers\toast;
class AdminController extends Controller
{

    public function view_category()
    {
        $data = Catagory::latest()->paginate(4);
        return view('admin.category', compact('data'));
    }
    public function add_catagory(Request $request)
    {
        $catagory = new Catagory();
        $catagory->category_name = $request->catagory;
        $catagory->save();
        return redirect()->back()->with('msg', 'Malumot saqlandi');
    }
    public function delete_catagory($id)
    {
        $data = Catagory::find($id);
        $data->delete();
        return redirect()->back()->with('msg_del', 'Malumot o\'chirildi');
    }
    // products 
    public function view_product()
    {
        $catagory = Catagory::all();
        return view('admin.product', compact('catagory'));
    }
    public function add_product(Request $request)
    {
        $product = new Product();
        $product->title = $request->title;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->catagory = $request->catagory;
        $product->discount_price = $request->dis_price;
        $image = $request->image;
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $request->image->move('product', $imageName);
        $product->image = $imageName;
        $product->save();
        return redirect()->back()->with('msg', 'Malumot saqlandi');
    }
    public function show_product()
    {
        $products = Product::all();
        return view('admin.show_product', compact('products'));
    }
    public function delete_product($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect()->back();
    }
    public function update_product($id)
    {
        $product = Product::findOrFail($id);
        $catagory = Catagory::all();
        return view('admin.update_product', compact('product', 'catagory'));
    }
    public function update_product_confirm(Request $request, $id)
    {
        $product=Product::findOrFail($id);
        $product->title = $request->title;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->catagory = $request->catagory;
        $product->discount_price = $request->dis_price;
        $image = $request->image;
        if($image){
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $request->image->move('product', $imageName);
            $product->image = $imageName;
        }
        $product->save();
        return redirect()->back()->with('msg','Successfully updated');
    }
    public function order(){
        $orders=Order::query()->paginate(10);
        return view('admin.order',compact('orders'));
    }
    public function delivered($id){
        $order=Order::findOrFail($id);
        $order->delivery_status="delivered";
        $order->payment_status="paid";
        $order->save();
        return redirect()->back();
    }
    public function print_pdf($id){
        $order=Order::findOrFail($id);
        $pdf = PDF::loadView('admin.pdf', ['orders' => $order]);
        return $pdf->download($order->name.'.'.'pdf');
    }
    public function send_email($id){
        $order=Order::findOrFail($id);
        return view('admin.email_info',compact('order'));
    }
    public function user_send_email(Request $request,$id){
        $order=Order::findOrFail($id);
        $details=[
            'greeting'=>$request->greeting,
            'firstline'=>$request->firstline,
            'body'=>$request->body,
            'button'=>$request->button,
            'url'=>$request->url,
            'lastline'=>$request->lastline,
        ];
        Notification::send($order, new EmailNotification($details));
        Alert::success('You sended Successfully','Welldone');
        return redirect()->back();
    }
    public function table_search(Request $request){
        $searchText=$request->table_search;
        $orders=Order::where('name','LIKE',"%$searchText%")->orWhere('product_title','LIKE',"%$searchText%")->orWhere('price','LIKE',"%$searchText%")->paginate(10);
        return view('admin.order',compact('orders'));
    }
    
}
