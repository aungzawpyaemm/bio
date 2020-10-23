@extends('layouts.backend')
@section('title','Post')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Post Form</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Post Form</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- general form elements -->
                        <div class="card card-info">
                            <div class="card-header">
                                <h3 class="card-title">
                                    {{isset($post) ? 'Edit Tag' : 'Create Tag'}}
                                </h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="{{ isset($tag)? route('tags.update', $tag->id) : route('tags.store') }}" method="post" enctype="multipart/form-data">

                                @csrf
                                @if(isset($tag))
                                    @method('PUT')
                                @endif

                                <div class="card-body">
                                    @foreach ($errors->all() as $error)
                                        <p class="alert alert-danger">{{ $error }}</p>
                                    @endforeach

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="name"> Name</label>
                                                <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name : " value="{{isset($tag)? $tag->name:''}}">
                                            </div>
                                        </div>

                                    </div>

                                    <div class=" float-right">

                                        <button type="submit" class="btn btn-success ">
                                            {{isset($tag)? "Update" : "Create"}}
                                        </button>

                                    </div>

                                </div>
                                <!-- /.card-body -->


                            </form>
                        </div>



                    </div>

                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->


@endsection



