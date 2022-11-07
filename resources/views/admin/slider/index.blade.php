@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-md-12 grid-margin">
            @if (session('message'))
                <div class="alert alert-success">{{ session('message') }}</div>
            @endif
            <div class="card">
                <div class="card-header">
                    <h3>Slide
                        <a href="{{ url('admin/slider/create') }}" class="btn btn-primary btn-sm text-white float-end">
                            Add slide</a>
                    </h3>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($slider as $item)
                                <tr>
                                    <td>{{ $item->title }}</td>
                                    <td>{{ $item->description }}</td>
                                    <td>
                                        <img src="{{ asset("$item->image") }}" style="width:70px; height:70px" alt="">
                                    </td>
                                    <td>
                                        <a href="{{ url('admin/slider/' . $item->id . '/edit') }}" class="btn btn-success">
                                            Edit </a>
                                        <a href="{{ url('admin/slider/' . $item->id . '/delete') }}"
                                            onclick="return confirm('Are you sure, you want to delete this slide?')"
                                            class="btn btn-danger"> Delete </a>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
