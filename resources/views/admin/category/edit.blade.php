@extends('layouts.adminbase')

@section('title', 'Add Category')



@section('content')


<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title"> Form elements </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Forms</a></li>
                <li class="breadcrumb-item active" aria-current="page">Form elements</li>
            </ol>
        </nav>
    </div>
    <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Add Category</h4>
                <p class="card-description"> Add Category </p>
                <form class="forms-sample" role="form" action="{{route('admin.category.update', ['id'=>$data->id])}}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label >Title</label>
                        <input type="text" class="form-control" name="title" id="exampleInputUsername1" value="{{$data->title}}"}>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Keywords</label>
                        <input type="text" class="form-control" name="keywords" id="exampleInputEmail1" value="{{$data->keywords}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Description</label>
                        <input type="text" class="form-control" name="description" id="exampleInputPassword1" value="{{$data->description}}">
                    </div>
                    <div class="form-group">
                        <label>Image</label>
                        <input type="text" name="image" class="file-upload-default">
                        <div class="input-group col-xs-12">
                            <input type="file" class="form-control file-upload-info" name="image">
                            <span class="input-group-append">
                            <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                          </span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Status</label>
                            <div class="col-sm-9">
                                <select name="status" class="form-control">
                                    @if("{{$data->status}}" == "True")
                                        <option>True</option>

                                        <option>False</option>
                                    @else
                                        <option>False</option>
                                        <option>True</option>
                                    @endif

                                </select>
                            </div>
                        </div>
                    </div>


                    <button type="submit" class="btn btn-primary me-2">Add Category</button>
                    <button class="btn btn-dark">Cancel</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
