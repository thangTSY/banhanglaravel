<?php
namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // private $product ;
    public function index()
    {
        $product = Product::with('category')->get();
        // dd($product);
        return view('product.index', compact('product'))->with('i');
    }

    public function create()
    {
        return view('product.add');
    }

    public function store(Request $request)
    {
        // Product::create($request->all());
        // dd($request->all());
        if ($request->image) {
            $file = $request->image;
            $ext = $request->image->extension();
            $fileName = time() . '-' . 'title.' . $ext;
            $file->move(public_path('Thumnals'), $fileName);
        }
        $data = [
            'name' => $request->name,
            'image' => $fileName,
            'category_id' => $request->category_id,
            'price' => $request->price,
            'describe' => $request->describe,
            'quantity' => $request->quantity,

        ];

        Product::create($data);
        return redirect()->route('product.index')->with('thongbao','them thanh cong');
    }

    public function search(Request $request)

    {
        $searchKeyword = $request->input('keyword');
        $product = Product::where('name', 'like', "%$searchKeyword%")
                            ->orWhere('price', 'like', "%$searchKeyword%")->orWhere('quantity', 'like', "%$searchKeyword%")
                            ->get();
        return view('product.index', compact('product'))->with('i');
    }

    public function show(string $id)
    {
    
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