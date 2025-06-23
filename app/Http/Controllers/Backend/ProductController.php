<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Console\View\Components\Alert;

class ProductController extends Controller
{
    public function index()
    {
        $product = Product::with('category')->latest()->get();

        $title = 'Hapus data';
        $text = "Yakin ingin menghapus data?";
        confirmDelete($title, $text);

        return view('backend.product.index', compact('product'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('backend.product.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:products',
            'description' => 'nullable',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
            'category_id' => 'required|exists:categories,id',
            'image' => 'nullable|image|mimes:jpeg,jpg,png|max:2048',
        ]);

        $product = new Product();
        $product->name = $request->name;
        $product->slug = Str::slug($request->name, '-');
        $product->description = $request->description;
        $product->price = $request->price;
        $product->stock = $request->stock;
        $product->category_id = $request->category_id;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $randomName = Str::random(20) . '.' . $file->getClientOriginalExtension();
            $path = $file->storeAs('product', $randomName, 'public'); 
            $product->image = $path;
        }

        $product->save();

        toast('Data berhasil disimpan', 'success');
        return redirect()->route('product.index');
    }

    public function show(string $id)
    {
        $product = Product::with('category')->findOrFail($id);
        return view('backend.product.show', compact('product'));
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $categories = Category::all();
        return view('backend.product.edit', compact('product', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'nullable',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
            'category_id' => 'required|exists:categories,id',
            'image' => 'nullable|image|mimes:jpeg,jpg,png|max:2048',
        ]);

        $product = Product::findOrFail($id);
        $product->name = $request->name;
        $product->slug = Str::slug($request->name, '-');
        $product->description = $request->description;
        $product->price = $request->price;
        $product->stock = $request->stock;
        $product->category_id = $request->category_id;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            //hapus foto lama
            Storage::disk('public')->delete($product->image);

            $randomName = Str::random(20) . '.' . $file->getClientOriginalExtension();
            $path = $file->storeAs('product', $randomName, 'public'); 
            //masuk ke database
            $product->image = $path;
        }


        $product->save();

        toast('Data berhasil diupdate', 'success');
        return redirect()->route('product.index');
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        toast('Data berhasil dihapus', 'success');
        return redirect()->route('product.index');
    }
}
