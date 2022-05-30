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
                <form class="forms-sample" role="form" action="{{route('admin.category.store')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputUsername1">Title</label>
                        <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Title">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Keywords</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="keyword1 keyword2 ...">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Description</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Description">
                    </div>
                    <div class="form-group">
                        <label>Image</label>
                        <input type="file" name="img[]" class="file-upload-default">
                        <div class="input-group col-xs-12">
                            <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                            <span class="input-group-append">
                            <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                          </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Status</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="True">
                    </div>

                    <button type="submit" class="btn btn-primary me-2">Add Category</button>
                    <button class="btn btn-dark">Cancel</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
