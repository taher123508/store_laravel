<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{

    public function index()
    {
        $products = product::with('category')->paginate(6);
        return view('Products.product', compact('products'));
    }


    public function create($id)
    {
$product=product::find($id);

//dd($products->name);
        return view('Products.oneproduct', compact('product'));
    }


    public function store(Request $request)
    {
        //dd($request);
        $product = new product();
        $product->name = $request->name;
        $product->price = $request->price;
        $product->id_cat = $request->id_cat;
       $product->save();

        //  html::create($request->html());
        return redirect()->route('product.index');
    }


    public function show( $id)
    {
        $products=DB::table('products')->where('id_cat','=',$id)->get();

        return view('Products.flittercat',compact('products'));
    }


    public function edit( $id)
    {
        $products= product::find($id);

        return view('Product.updata_product',compact('products'));

    }


    public function update(Request $request,  $id)
    {
        DB::table('products')->where('id','=',$id)->get()
            ->update(
                ['name' => $request->name, 'price' => $request->price,'id_cat' => $request->id_cat	]
            );

        return back()->with('hh','jjj');

    }

    public function destroy( $id)
    {
        $product=product::where('id',$id)->first();
        $product->delete();
        return back()->with('hh','jjj');
    }
}
