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
                                    {{isset($post) ? 'Edit Post' : 'Create Post'}}
                                </h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="{{ isset($post)? route('posts.update', $post->id) : route('posts.store') }}" method="post" enctype="multipart/form-data">

                                @csrf
                                @if(isset($post))
                                    @method('put')
                                @endif
                                <div class="card-body">
                                    @foreach ($errors->all() as $error)
                                        <p class="alert alert-danger">{{ $error }}</p>
                                    @endforeach

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="name">Full Name</label>
                                                <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name : " value="{{isset($post)? $post->name:''}}">
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="name">Birth Day</label>

                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                  <span class="input-group-text">
                                                    <i class="far fa-calendar-alt"></i>
                                                  </span>
                                                    </div>
                                                    <input type="text"  name="birthday" class="form-control float-right" id="birthday" value="{{isset($post)? $post->birthday:''}}">
                                                </div>
                                                <!-- /.input group -->
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="name">Birth Place</label>
                                                <input type="text" class="form-control" name="birthplace" id="name" placeholder="Birth Place : " value="{{isset($post)? $post->birthplace:''}}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="name">Religious</label>
                                                <input type="text" class="form-control" name="religious" id="name" placeholder="Regilious : " value="{{isset($post)? $post->religious:''}}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="name">Ethnicity</label>
                                                <input type="text" class="form-control" name="ethnicity" id="name" placeholder="Ethnicity : " value="{{isset($post)? $post->ethnicity:''}}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="name">Nationality</label>
                                                <input type="text" class="form-control" name="nationality" id="name" placeholder="Nationality : " value="{{isset($post)? $post->nationality:''}}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="name">Professional</label>
                                                <input type="text" class="form-control" name="professional" id="name" placeholder="Professional : " value="{{isset($post)? $post->professional:''}}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="name">Gender</label>
                                                <input type="text" class="form-control" name="gender" id="name" placeholder="Sex : " value="{{isset($post)? $post->gender:''}}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="name">Profile</label>
                                                <input type="file" class="form-control" name="image" id="name" placeholder="Profile image : " value="{{isset($post)? $post->profile:''}}">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="card card-outline card-info">
                                                <div class="card-header">
                                                    <h3 class="card-title">
                                                        Who are You?

                                                    </h3>
                                                    <!-- tools box -->
                                                    <div class="card-tools">
                                                        <button type="button" class="btn btn-tool btn-sm" data-card-widget="collapse" data-toggle="tooltip"
                                                                title="Collapse">
                                                            <i class="fas fa-minus"></i></button>
                                                        <button type="button" class="btn btn-tool btn-sm" data-card-widget="remove" data-toggle="tooltip"
                                                                title="Remove">
                                                            <i class="fas fa-times"></i></button>
                                                    </div>
                                                    <!-- /. tools -->
                                                </div>
                                                <!-- /.card-header -->
                                                <div class="card-body pad">
                                                    <div class="mb-3">
                                                       <textarea class="textarea" name="who" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                                                            {{isset($post)? $post->who:''}}
                                                       </textarea>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="card card-outline card-info">
                                                <div class="card-header">
                                                    <h3 class="card-title">
                                                        Education and Background

                                                    </h3>
                                                    <!-- tools box -->
                                                    
                                                    <div class="card-tools">
                                                        <button type="button" class="btn btn-tool btn-sm" data-card-widget="collapse" data-toggle="tooltip"
                                                                title="Collapse">
                                                            <i class="fas fa-minus"></i></button>
                                                        <button type="button" class="btn btn-tool btn-sm" data-card-widget="remove" data-toggle="tooltip"
                                                                title="Remove">
                                                            <i class="fas fa-times"></i></button>
                                                    </div>
                                                    <!-- /. tools -->
                                                </div>
                                                <!-- /.card-header -->
                                                <div class="card-body pad">
                                                    <div class="mb-3">
                                                       <textarea class="textarea" name="education" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                                                            {{isset($post)? $post->education:''}}
                                                       </textarea>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="card card-outline card-info">
                                                <div class="card-header">
                                                    <h3 class="card-title">
                                                        Companies or Professional career

                                                    </h3>
                                                    <!-- tools box -->
                                                    <div class="card-tools">
                                                        <button type="button" class="btn btn-tool btn-sm" data-card-widget="collapse" data-toggle="tooltip"
                                                                title="Collapse">
                                                            <i class="fas fa-minus"></i></button>
                                                        <button type="button" class="btn btn-tool btn-sm" data-card-widget="remove" data-toggle="tooltip"
                                                                title="Remove">
                                                            <i class="fas fa-times"></i></button>
                                                    </div>
                                                    <!-- /. tools -->
                                                </div>
                                                <!-- /.card-header -->
                                                <div class="card-body pad">
                                                    <div class="mb-3">
                                                       <textarea class="textarea" name="career" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                                                            {{isset($post)? $post->career:''}}
                                                       </textarea>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="card card-outline card-info">
                                                <div class="card-header">
                                                    <h3 class="card-title">
                                                       Personal Life

                                                    </h3>
                                                    <!-- tools box -->
                                                    <div class="card-tools">
                                                        <button type="button" class="btn btn-tool btn-sm" data-card-widget="collapse" data-toggle="tooltip"
                                                                title="Collapse">
                                                            <i class="fas fa-minus"></i></button>
                                                        <button type="button" class="btn btn-tool btn-sm" data-card-widget="remove" data-toggle="tooltip"
                                                                title="Remove">
                                                            <i class="fas fa-times"></i></button>
                                                    </div>
                                                    <!-- /. tools -->
                                                </div>
                                                <!-- /.card-header -->
                                                <div class="card-body pad">
                                                    <div class="mb-3">
                                                       <textarea class="textarea" name="personal" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                                                            {{isset($post)? $post->personal:''}}
                                                       </textarea>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="card card-outline card-info">
                                                <div class="card-header">
                                                    <h3 class="card-title">
                                                        About of

                                                    </h3>
                                                    <!-- tools box -->
                                                    <div class="card-tools">
                                                        <button type="button" class="btn btn-tool btn-sm" data-card-widget="collapse" data-toggle="tooltip"
                                                                title="Collapse">
                                                            <i class="fas fa-minus"></i></button>
                                                        <button type="button" class="btn btn-tool btn-sm" data-card-widget="remove" data-toggle="tooltip"
                                                                title="Remove">
                                                            <i class="fas fa-times"></i></button>
                                                    </div>
                                                    <!-- /. tools -->
                                                </div>
                                                <!-- /.card-header -->
                                                <div class="card-body pad">
                                                    <div class="mb-3">
                                                       <textarea class="textarea" name="about" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                                                            {{isset($post)? $post->about:''}}
                                                       </textarea>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-12">
                                            <div class="card card-outline card-info">
                                                <div class="card-header">
                                                    <h3 class="card-title">
                                                        Edocation

                                                    </h3>
                                                    <!-- tools box -->
                                                    <div class="card-tools">
                                                        <button type="button" class="btn btn-tool btn-sm" data-card-widget="collapse" data-toggle="tooltip"
                                                                title="Collapse">
                                                            <i class="fas fa-minus"></i></button>
                                                        <button type="button" class="btn btn-tool btn-sm" data-card-widget="remove" data-toggle="tooltip"
                                                                title="Remove">
                                                            <i class="fas fa-times"></i></button>
                                                    </div>
                                                    <!-- /. tools -->
                                                </div>
                                                <!-- /.card-header -->
                                                <div class="card-body pad">
                                                    <div class="mb-3">
                                                       <textarea class="textarea" name="education" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                                                                 {{isset($post)? $post->education :''}}
                                                       </textarea>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="card card-outline card-info">
                                                <div class="card-header">
                                                    <h3 class="card-title">
                                                        Social Media Llink

                                                    </h3>
                                                    
                                                </div>
                                                <!-- /.card-header -->
                                                <div class="card-body pad">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label for="name">Facebook</label>
                
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text">
                                                                            <i class="fab fa-facebook text-blue"></i>
                                                                        </span>
                                                                    </div>
                                                                    <input type="url"  name="facebook" class="form-control float-right" placeholder="Link Here "  value="{{isset($post)? $post->facebook:''}}">
                                                                </div>
                                                                <!-- /.input group -->
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label for="name">Instagram</label>
                
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text">
                                                                            <i class="fab fa-instagram text-danger"></i>
                                                                        </span>
                                                                    </div>
                                                                    <input type="url"  name="instagram" class="form-control float-right" placeholder="Insert link" value="{{isset($post)? $post->instagram:''}}">
                                                                </div>
                                                                <!-- /.input group -->
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label for="name">Twitter</label>
                
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text">
                                                                            <i class="fab fa-twitter text-lightblue"></i>
                                                                        </span>
                                                                    </div>
                                                                    <input type="url"  name="twitter" class="form-control float-right" placeholder="twit link"  value="{{isset($post)? $post->twitter:''}}">
                                                                </div>
                                                                <!-- /.input group -->
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label for="name">LinkedIn</label>
                
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text">
                                                                            <i class="fab fa-linkedin text-muted"></i>
                                                                        </span>
                                                                    </div>
                                                                    <input type="url"  name="linkedin" class="form-control float-right" placeholder="Links "  value="{{isset($post)? $post->linkedin:''}}">
                                                                </div>
                                                                <!-- /.input group -->
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label for="name">YouTube</label>
                
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text">
                                                                            <i class="fab fa-youtube text-red"></i>
                                                                        </span>
                                                                    </div>
                                                                    <input type="url"  name="youtube" class="form-control float-right" placeholder="YouTube"  value="{{isset($post)? $post->youtube:''}}">
                                                                </div>
                                                                <!-- /.input group -->
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label for="name">TIK Tok</label>
                
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text">
                                                                            <i class="fab fa-tiktok text-primary">tk</i>
                                                                        </span>
                                                                    </div>
                                                                    <input type="url"  name="tiktok" class="form-control float-right" placeholder="TikTok"  value="{{isset($post)? $post->tiktok:''}}">
                                                                </div>
                                                                <!-- /.input group -->
                                                            </div>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div>
                                        </div>


                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="name">Category Name</label>
                                                        <select class="form-control" name="category_id" id="exampleFormControlSelect1">
                                                            @foreach($categories as $category)
                                                                <option value="{{ $category->id }} "
                                                                        @if (isset($post))
                                                                                @if ($category->id == $post->category_id)
                                                                                    selected
                                                                                 @endif
                                                                       @endif
                                                                >
                                                                    {{ $category->name }}
                                                                </option>
                                                            @endforeach
                                                        </select>

                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="name">Published</label>
                                                        <input type="text" required class="form-control" name="published" id="published" placeholder="Published : " value="{{isset($post)? $post->published:''}}" >
                                                    </div>
                                                </div>

                                               @if($tags->count()>0)
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="name">Tag Name</label>
                                                            <select class="form-control tag-select" name="tag_id[]" id="tag-select"  multiple>
                                                                @foreach ($tags as $tag )
                                                                    <option value="{{$tag->id}}
                                                                    @if(isset($post))
                                                                            @if($post->hasTag($tag->id))
                                                                               selected
                                                                            @endif
                                                                    @endif

                                                                        ">
                                                                        {{$tag->name}}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>


                                    </div>

                                    <div class=" float-right">

                                        <button type="submit" class="btn btn-success ">
                                            {{isset($post)? "Update" : "Create"}}
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


