@extends('layouts.backend')
@section('title','Post View')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Post</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">posts</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <div class="col-12">
            <ul class="nav justify-content-end mb-2">
                <li class="nav-item">
                    <a class="btn btn-outline-success" href="/admin/posts/create">Add Post</a>
                </li>

            </ul>

            <section class="content">
                <div class="swalDefaultSuccess">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>

                <!-- Default box -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Post List</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                                <i class="fas fa-minus"></i></button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                                <i class="fas fa-times"></i></button>
                        </div>
                    </div>
                    <div class="card-body p-0">
                       @if($posts->count()>0)
                            <table class="table table-striped projects">
                                <thead>
                                <tr>
                                    <th style="width: 1%">
                                        #
                                    </th>
                                    <th style="width: 20%">
                                        Name
                                    </th>
                                    <th style="width: 20%">
                                        Profile
                                    </th>
                                    <th style="width: 10%">
                                        Category
                                    </th>




                                </tr>
                                </thead>
                                @foreach($posts as $post)
                                    <tbody>
                                    <tr>
                                        <td>
                                            {{$post->id}}
                                        </td>
                                        <td>
                                        {{$post->name}}

                                        </td>
                                     
                                        <td>

                                            <ul class="list-inline">
                                                <li class="list-inline-item">
                                                    <img src='{{ asset("storage/{$post->profile}") }}'   alt="" class="rounded-circle img-fluid" style="width:120px;height:100px; ">
                                                </li>

                                            </ul>
                                        </td>
                                        <td>

                                            <a href="{{route('categories.edit',$post->category->id)}}">
                                                {{$post->category->name}}
                                            </a>
 
                                        </td>


                                        <td class="project-actions text-right">
                                            <a class="btn btn-primary btn-md" href="">
                                                <i class="fas fa-folder">
                                                </i>
                                                View
                                            </a>
                                            <a class="btn btn-info btn-md" href="{{ route('posts.edit', $post->id) }}">
                                                <i class="fas fa-pencil-alt">
                                                </i>
                                                Edit
                                            </a>
                                            <a class="btn btn-danger btn-sm" href="">
                                                <form action="{{ route('posts.destroy', $post->id) }}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn-danger" type="submit">
                                                        <i class="fas fa-trash">
                                                        </i>
                                                        Delete

                                                    </button>


                                                </form>

                                            </a>
                                        </td>
                                    </tr>

                                    </tbody>
                                @endforeach
                            </table>
                        @else
                            <div class="alert alert-info" role="alert">
                                <h1>NO Post Yet!</h1>
                           </div>
                          <div class="alert alert-warning" role="alert">
                                Please, Add Posts .
                          </div>
                        @endif
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->

            </section>
        </div>

        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->


@endsection


