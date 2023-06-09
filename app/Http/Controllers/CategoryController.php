<?php
namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    // private $category ;
    public function index()
    {
        $category = Category::get();
        return view('category.index', compact('category'))->with('i');
    }

    public function create()
    {
        return view('category.add');
    }

    public function store(Request $request)
    {
        Category::create($request->all());
        return redirect()->route('category.index')->with('thongbao','them thanh cong');
    }

    public function show(string $id)
    {
        //
    }

    public function edit($id)
    {
        $category = Category::find($id);
        return view('category.edit', compact('category'));
    }

    public function update(Request $request, Category $category)
    {
        $category->update($request->all());
        return redirect()->route('category.index')->with('thongbao','update thanh cong');
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('category.index')->with('thongbao','xóa thanh cong');
    }
}