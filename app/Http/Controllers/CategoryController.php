<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\CategoryModel;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index_admin()
    {
        $data['categories'] = Category::all();
        $data['title'] = 'Category';
        return view('admin.category', $data)->with('no', 1);
    }
    public function add()
    {
        $title = 'Add Category';
        return view('admin.category_add', ['title' => $title]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'category_name' => 'required'
        ]);

        $category = CategoryModel::create([
            'category_name' => $request->category_name
        ]);

        if ($category) {
            //redirect dengan pesan sukses
            return redirect()->route('admin.category')->with(['success' => 'Data Berhasil Disimpan!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('admin.category')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }
}
