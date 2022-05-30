@extends('layouts.adminbase')

@section('title', 'Category List')



@section('content')


<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Category Details</h4>
                    </p>
                    <div class="table-responsive">
                        <table class="table">
                            <tbody>
                            <tr>
                                <th>Id</th>
                                <td>{{$data->id}}</td>
                            </tr>

                            <tr>

                                <th>Title</th>
                                <td>{{$data->title}}</td>
                            </tr>
                            <tr>
                                <th>Keywords</th>
                                <td>{{$data->keywords}}</td>
                            </tr>
                            <tr>
                                <th>Image</th>
                                <td>{{$data->image}}</td>
                            </tr>
                            <tr>
                                <th>Status</th>
                                <td>{{$data->status}}</td>
                            </tr>
                            <tr>
                                <th>Created Date</th>
                                <td>{{$data->created_at}}</td>
                            </tr>
                            <tr>
                                <th>Updated Date</th>
                                <td>{{$data->updated_at}}</td>
                            </tr>
                            <tr>
                            <td><a href="{{route('admin.category.edit', ['id'=>$data->id])}}" class="badge badge-success">Edit</td>
                            <td><a href="{{route('admin.category.delete', ['id'=>$data->id])}}" class="badge badge-danger" onclick="return confirm('Are you sure you want to delete?')">Delete</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>


                </div>
            </div>
        </div>

    </div>

</div>

@endsection
