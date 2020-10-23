@extends('layouts.backend')

@section('title', 'View Tag')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Tag Tables</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Tag Tables</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-12">
                    <ul class="nav justify-content-end mb-1">
                        <li class="nav-item">
                            <a class="btn btn-outline-success" href="admin/tags/create">Add Tag</a>
                        </li>

                    </ul>
                    <div class="swalDefaultSuccess">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                            @if (session('errors'))
                                <div class="alert alert-danger">
                                    {{ session('errors') }}
                                </div>
                            @endif
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title text-muted">Your Can View Tag All Data List</h3>
                        </div>

                        <!-- /.card-header -->
                        <div class="card-body">
                            @if($tags->count() > 0)
                                <table id="example2" class="table table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th style="width: 10px">#</th>
                                        <th>Name</th>
                                        <th style="width: 10px">Post</th>
                                        <th style="width: 40px">Edit</th>
                                        <th style="width: 40px">Delete</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($tags as $tag)
                                        <tr>
                                            <td>{{$tag->id}}</td>
                                            <td>{{$tag->name}}</td>
                                            <td>{{$tag->post->count()}}</td>

                                            <td>
                                                <a class="btn btn-info" href="{{route('tags.edit', $tag->id )}}">
                                                    <i class="far fa-edit  text-bold"></i>
                                                </a>

                                            </td>
                                            <td>
                                                <form method="post" action="{{ route('tags.destroy', $tag->id) }}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">
                                                        <i class="far fa-trash-alt   text-bold"></i>
                                                    </button>
                                                </form>


                                            </td>
                                        </tr>


                                    @endforeach




                                    </tfoot>
                                </table>
                            @else

                                <div class="alert alert-info" role="alert">
                                    <h1>No Tag Yet!</h1>
                                </div>
                                <div class="alert alert-warning" role="alert">
                                    Please, Add Tag Items.
                                </div>

                            @endif
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>

@endsection
