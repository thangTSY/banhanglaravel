<?php
namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // private $product ;
    public function index()
    {
        $product = Product::get();
        return view('product.index', compact('product'))->with('i');
    }

    public function create()
    {
        return view('product.add');
    }

    public function store(Request $request)
    {
        Product::create($request->all());
        return redirect()->route('product.index')->with('thongbao','them thanh cong');
    }

    public function show(string $id)
    {
        //
    }

    public function edit($id)
    {
        $product = Product::find($id);
        return view('product.edit', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        $product->update($request->all());
        return redirect()->route('product.index')->with('thongbao','update thanh cong');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('product.index')->with('thongbao','xóa thanh cong');
    }
}