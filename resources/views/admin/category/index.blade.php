@extends('layouts.adminbase')

@section('title', 'Category List')



@section('content')


<div class="content-wrapper">

    <div >
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Categories</h4>
                </p>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Title</th>
                            <th>Keywords</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Status</th>
                            <td>Edit</td>
                            <td>Delete</td>
                            <td>Show</td>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($data as $rs)
                        <tr>

                            <td>{{$rs->title}}</td>
                            <td>{{$rs->keywords}}</td>
                            <td>{{$rs->description}}</td>
                            <td>{{$rs->image}}</td>
                            @if($rs->status == "True")
                            <td><label class="badge badge-success">{{$rs->status}}</label></td>
                            @else
                                <td><label class="badge badge-danger">{{$rs->status}}</label></td>
                            @endif
                            <td><a href="/admin/category/edit/{{$rs->id}}" class="badge badge-success">Edit</td>
                            <td><a href="/admin/category/delete/{{$rs->id}}" class="badge badge-danger">Delete</td>
                            <td><a href="/admin/category/show/{{$rs->id}}" class="badge badge-warning">Show</td>
                        </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
