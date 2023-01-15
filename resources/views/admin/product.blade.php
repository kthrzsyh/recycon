@extends('layouts.admin')

@section('container')
    <div class="row">
        <div class="col-9">
            <h1>{{ $title }}</h1>
        </div>
        <div class="col-3"><a href="/admin/product/add" class="btn btn-primary">Add</a></div>
    </div>
    @if (session('status'))
        <div class="result">
            <div class="alert alert-primary">{{ session('status') }}</div>
        </div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Price</th>
                <th scope="col">Category</th>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col">File</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->category_name }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->description }}</td>
                    <td><img width="200" height="200" src="/products/{{ $product->file }}" alt=""></td>
                    <td>
                        <a href="/admin/product/detail/{{ $product->id }}"class="btn btn-primary">Show</a>
                        <a href="/admin/product/edit/{{ $product->id }}"class="btn btn-success">Edit</a>
                        <a href="/admin/product/delete/{{ $product->id }}"class="btn btn-danger"
                            onclick="return confirm('Anda Yakin Menghapus Data?')">Delete</a>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
@endsection
