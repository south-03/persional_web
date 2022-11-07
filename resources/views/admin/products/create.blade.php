@extends('layouts.admin')

@section('content')

    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="card">
                <div class="card-header">
                    <h3>Add Product
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
                    <form action="{{ url('admin/products') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3 mt-3">
                            <label>Topic</label>
                                <select name="category_id" class="form-select">
                                    @foreach ( $categories as $category )
                                        <option value="{{ $category -> id }}">{{ $category -> name }}</option>
                                    @endforeach
                                </select>
                        </div>

                        <div class="mb-3">
                            <label>Title</label>
                            <input type="text" name="name" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label>Description</label>
                            <textarea type="text" name="description" class="form-control" rows="5"></textarea>
                        </div>
                            
                        <div class="mb-3">
                            <label>Upload Image</label>
                            <input type="file" name="image[]" multiple  class="form-control">
                        </div>
                        <div>
                            <button type="submit" class="btn btn-success btn-block float-end">Submit</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

@endsection
