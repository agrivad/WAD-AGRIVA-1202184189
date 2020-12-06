<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\orders;
use App\Models\products;

class ordersController extends Controller
{
    public function index()
    {
        $order = orders::all();
        $product = products::all();

        return view('orders', ['orders' => $order], ['products' => $product]);
    }

    public function detail($id)
    {
        $product = products::find($id);

        return view('orderdetail', ['products' => $product]);
    }

    public function addorder($id, Request $request)
    {
        $product = products::find($id);
        $order = new orders;


        $order->product_id = $id;
        $order->buyer_name = $request->name;
        $order->buyer_contact = $request->contact;

        $order->amount = $request->quantity * $product->price;

        $order->save();


        $new = $product->stock;
        $x = $request->quantity;
        $stock = $new - $x;

        $product->stock = $stock;
        $product->save();

        return redirect('/products');
    }

    public function history()
    {
        $order = orders::all();
        return view('history', ['orders' => $order]);
    }
}
