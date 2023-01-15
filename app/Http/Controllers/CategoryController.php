<?php

namespace App\Http\Controllers;


use App\Models\CategoryModel;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $data['categories'] = CategoryModel::all();
        $data['title'] = 'Category';
        return view('admin.category', $data)->with('no', 1);
    }

    public function add()
    {
        $title = 'Add Category';
        return view('admin.category_add', ['title' => $title]);
    }
    public function create(Request $request)
    {
        $category = CategoryModel::create([
            'category_name' => $request->category_name
        ]);

        return redirect()->route('category.index')->with('status', 'Tambah Data Berhasil');
    }
    public function edit($id)
    {
        $data['title'] = 'Edit Category';
        $data['category'] = CategoryModel::find($id);

        return view('admin.category_edit', $data);
    }

    public function update(Request $request)
    {
        $category = CategoryModel::where('id', $request->id)->update([
            'category_name' => $request->category_name
        ]);

        return redirect()->route('category.index')->with('status', 'Edit Data Berhasil');
    }

    public function delete($id)
    {
        $category = CategoryModel::find($id);
        $category->delete();
        return redirect()->route('category.index')->with('status', 'Hapus Data Berhasil');
    }


    public function getCategory($id)
    {
        $category = CategoryModel::find($id);

        return json_encode($category);
    }
}
