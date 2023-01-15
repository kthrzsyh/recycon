@extends('layouts.admin')

@section('container')
    <h1>{{ $title }}</h1>
    <div class="card">
        <div class="card-body">
            <form method="post" action="{{ route('category.create') }}">
                @csrf
                <div class="row mt-3">
                    <div class="col">
                        <label for="category_name">Name</label>
                        <input name="category_name" type="text" class="form-control" placeholder="Item Name">
                    </div>
                </div>
                <a href="/admin/category/store" class="mt-3 btn btn-primary">Add</a>
            </form>
        </div>
    </div>
@endsection
