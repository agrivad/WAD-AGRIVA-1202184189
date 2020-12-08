<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\products;

class productsController extends Controller
{
    public function indeks()
    {
        $product = products::all();

        return view('products', ['products' => $product]);
    }

    public function addproduct()
    {
        // form
        return view('/addproducts');
    }
    public function add(Request $request)
    {
        $product = new products;
        $product->name = $request->name;
        $product->price = $request->price;
        $product->description = $request->Description;
        $product->stock = $request->stock;

        $img = $request->file('img');

        if ($img != null) {
            $names = time() . "_" . $img->getClientOriginalName();
            $upload = 'img_product';
            $img->move($upload, $names);
            $product->img_path = $names;
        }

        $product->save();
        return redirect('/products');
    }

    public function hapus($id)
    {
        $delte = products::find($id);
        $delte->delete();
        return redirect('/products');
    }

}
