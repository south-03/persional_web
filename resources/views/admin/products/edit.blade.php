@extends('layouts.admin')

@section('content')

    <div class="row">
        <div class="col-md-12 grid-margin">
            @if (session('message'))
                <h5 class="alert alert-success mb-2">{{ session( 'message') }}</h5>
            @endif
            <div class="card">
                <div class="card-header">
                    <h3>Edit post
                        <a href="{{url('admin/products')}}" class="btn btn-danger btn-sm text-white float-end">
                            Back</a>
                    </h3>
                </div>
                <div class="card-body">
                    @if ($errors->any())
                    <div class="alert alert-warning">
                        @foreach ($errors->all() as $error)
                            <div>{{$error}}</div>
                        @endforeach
                    </div>
                    @endif

                    @if ($errors->any())
                        <div class="alert alert-warning">
                            @foreach ($errors->all() as $error)
                                <div>{{$error}}</div>
                            @endforeach
                        </div>
                    @endif
                    <form action="{{ url('admin/products/'.$product->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3 mt-3">
                            <label>Topic</label>
                                <select name="category_id" class="form-select">
                                    @foreach ( $categories as $category )
                                        <option value="{{ $category -> id }}" {{$category -> id == $product->category_id ? 'selected': ''}}>{{ $category -> name }}</option>
                                    @endforeach
                                </select>
                        </div>

                        <div class="mb-3">
                            <label>Title</label>
                            <input type="text" name="name" value="{{ $product->title }}" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label>Description</label>
                            <input type="text" name="description" value="{{ $product->description }}" class="form-control">
                        </div>
                            
                        <div class="mb-3">
                            <label>Upload Image</label>
                            <input type="file" name="image[]" multiple  class="form-control">
                        </div>
                        <div>
                            @if ($product->productImage)
                                <div class="row">
                                    @foreach ($product->productImage as $image)
                                        <div class="col-md-2">
                                            <img src="{{ asset($image->thumbnail) }}" style="width: 100%; height: 100%;" alt="img">
                                            <a href="{{ url('admin/product-image/'.$image->id.'/delete') }}" class="d-block">Remove</a>
                                        </div>
                                    @endforeach
                                </div>
                            @else
                                <h5>No image</h5>
                            @endif
                        </div>
                        <div class="py-2 float-end">
                            <button type="submit" class="btn btn-success btn-block float-end">Update</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection
