@extends('layouts.backend')

@section('title', 'View Category')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Category Tables</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">CategoryTables</li>
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
                            <a class="btn btn-outline-success" href="/categories/create">Add Category</a>
                        </li>

                    </ul>
                        <div class="swalDefaultSuccess">
                            @if (session('status'))
                                <div class="alert alert-success">
                                    {{ session('status') }}
                                </div>
                            @endif
                            @if(session('errors'))
                                <div class="alert alert-danger">
                                    {{ session('errors') }}
                                </div>
                                @endif
                        </div>


                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title text-muted">Your Can View Category All Data List</h3>
                        </div>

                        <!-- /.card-header -->
                        <div class="card-body">
                           @if($categories->count() > 0)
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
                                    @foreach($categories as $category)
                                        <tr>
                                            <td>{{$category->id}}</td>
                                            <td>{{$category->name}}</td>
                                            <td>{{$category->posts->count()}}</td>

                                            <td>
                                                <a class="btn btn-info" href="{{route('categories.edit', $category->id )}}">
                                                    <i class="far fa-edit  text-bold"></i>
                                                </a>

                                            </td>
                                            <td>
                                                <form method="post" action="{{ route('categories.destroy', $category->id) }}">
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
                                    <h1>NO Post Yet!</h1>
                                </div>
                                <div class="alert alert-warning" role="alert">
                                   Please, Add Category Items.
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
