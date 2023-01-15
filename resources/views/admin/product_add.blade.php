@extends('layouts.admin')

@section('container')
    <h1>{{ $title }}</h1>
    <div class="card">
        <div class="card-body">
            <form action="{{ route('admin_product.create') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group row">
                    <div class="col">
                        <label for="id">ID</label>
                        <input type="text" disabled value="{{ date('YmdHis') }}" class="form-control" placeholder="Item ID"
                            name="id">
                    </div>
                    <div class="col">
                        <label for="price">Price</label>
                        <input type="number" class="form-control" placeholder="Item Price" name="price" required>
                    </div>
                    <div class="col">
                        <label for="category">Category</label>
                        <select name="category_id" id="category" class="form-control">
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" placeholder="Item Name" name="name" required>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col">
                        <label for="description">Description</label>
                        <textarea class="form-control" rows="8" name="description" required>
                        </textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="custom-file mt-3">
                            <input type="file" class="custom-file-input" id="validatedCustomFile" name="file"
                                required>
                        </div>
                    </div>
                </div>
                <button type="submit" class="mt-3 btn btn-primary">Add</button>
            </form>
        </div>
    </div>
@endsection
