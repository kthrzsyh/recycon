<?php

namespace App\Http\Controllers;

use App\Models\CategoryModel;
use App\Models\ProductModel;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $data['products'] = ProductModel::join('categories', 'products.category_id', '=', 'categories.id')->select('products.*', 'categories.category_name as category_name')->get();
        // dd($data);

        $data['title'] = 'Product';
        return view('admin.product', $data)->with('no', 1);
    }

    public function add()
    {
        $data['title'] = 'Add Product';
        $data['categories'] = CategoryModel::all();
        return view('admin.product_add', $data);
    }

    public function create(Request $request)
    {

        // dd($input);
        $request->validate([
            'file' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $input = $request->all();

        if ($file = $request->file('file')) {
            $destinationPath = 'products/';
            $profileImage = date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $profileImage);
            $input['file'] = "$profileImage";
        }

        ProductModel::create($input);
        return redirect()->route('admin_product.index')->with('status', 'Product created successfully.');
        // return redirect()->route('category.index')->with('status', 'Tambah Data Berhasil');
    }
}
