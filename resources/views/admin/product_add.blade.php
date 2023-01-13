@extends('layouts.admin')

@section('container')
    <h1>{{ $title }}</h1>
    <div class="card">
        <div class="card-body">
            <form>
                <div class="form-group row">
                    <div class="col">
                        <label for="id">ID</label>
                        <input type="text" class="form-control" placeholder="Item ID">
                    </div>
                    <div class="col">
                        <label for="price">Price</label>
                        <input type="number" class="form-control" placeholder="Item Price">
                    </div>
                    <div class="col">
                        <label for="category">Category</label>
                        <select id="category" class="form-control">
                            <option selected>Category</option>
                            <option>...</option>
                        </select>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" placeholder="Item Name">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col">
                        <label for="description">Description</label>
                        <textarea class="form-control" rows="8">
                        </textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="custom-file mt-3">
                            <input type="file" class="custom-file-input" id="validatedCustomFile" required>
                            <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                            <div class="invalid-feedback">Example invalid custom file feedback</div>
                        </div>
                    </div>
                </div>
                <a href="#" class="mt-3 btn btn-primary">Add</a>
            </form>
        </div>
    </div>
@endsection
