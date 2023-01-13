@extends('layouts.admin')

@section('container')
    <div class="row">
        <div class="col-9">
            <h1>{{ $title }}</h1>
        </div>
        <div class="col-3"><a href="/admin/category/add" class="btn btn-primary">Add</a></div>

    </div>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Category Name</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $category->category_name }}</td>
                    <td>
                        <a href="#" class="btn btn-success">Edit</a>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
@endsection
