@extends('layouts.admin')

@section('container')
    <h1>{{ $title }}</h1>
    <div class="card">
        <div class="card-body">
            <form method="post" action="{{ route('category.update') }}">
                @csrf
                <div class="row mt-3">
                    <div class="col">
                        <label for="category_name">Name</label>
                        <input type="hidden" class="form-control" name="id" id="id" value="{{ $category->id }}">
                        <input name="category_name" type="text" class="form-control"
                            value="{{ $category->category_name }}">
                    </div>
                </div>
                {{-- <a href="/admin/category/update" class="mt-3 btn btn-primary">Save</a> --}}
                <button type="submit" class="mt-3 btn btn-primary">Save</button>
            </form>
        </div>
    </div>
@endsection
