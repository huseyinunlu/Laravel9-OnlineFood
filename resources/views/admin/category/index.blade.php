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
                            <td>
                                @if($rs->image != NULL)
                                    <img src="{{Storage::url($rs->image)}}" style="height: 100px; width: 100px">

                                @endif
                            </td>
                            <td>{{$rs->title}}</td>
                            <td>{{$rs->keywords}}</td>
                            <td>{{$rs->description}}</td>

                            @if($rs->status == "True")
                            <td><label class="badge badge-success">{{$rs->status}}</label></td>
                            @else
                                <td><label class="badge badge-danger">{{$rs->status}}</label></td>
                            @endif
                            <td><a href="{{route('admin.category.edit', ['id'=>$rs->id])}}" class="badge badge-success">Edit</td>
                            <td><a href="{{route('admin.category.delete', ['id'=>$rs->id])}}" class="badge badge-danger"
                                   onclick="return confirm('Are you sure you want to delete?')">Delete</td>
                            <td><a href="{{route('admin.category.show', ['id'=>$rs->id])}}" class="badge badge-warning">Show</td>
                        </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
                <div class="badge badge-danger" ><a href="{{route('admin.category.create')}}">
                    <span class="menu-title">Add Category</span>
                </a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
