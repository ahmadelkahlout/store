@extends('dashbord.layouts.master')
@section('title')
    Dashboard- list products
@endsection
@section('content')

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">products</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                        <i class="fas fa-minus"></i></button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                        <i class="fas fa-times"></i></button>
                </div>
            </div>
            <div class="card-body p-0">
                <table class="table table-striped products">
                    <thead>
                    <tr>
                        <th style="">
                            #
                        </th>
                        <th style="">
                            product Name
                        </th>
                        <th style="">
                            product vendor
                        </th>
                        <th>
                            productline
                        </th>
                        <th style="" class="text-center">
                           product Stock
                        </th>
                        <th style="">
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($products as $product)

                        <tr>
                        <td>
                            {{$loop->iteration}}
                        </td>
                        <td>
                            <a>
                                {{$product->Name}}
                            </a>
                            <br/>

                        </td>
                        <td>
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <img alt="Avatar" class="table-avatar" width="50" height="50" src="{{asset('dist/img/avatar.png')}}">
                                </li>

                            </ul>
                        </td>
                        <td class="project_progress">

                                {{$product->productline->Name    }}

                        </td>
                        <td class="project-state">

                                {{$product->QtyinStock}}
                                                    </td>
                        <td class="project-actions text-right">
                            <a class="btn btn-primary btn-sm" href="{{route('Dashboard.products.show',$product)}}">
                                <i class="fas fa-folder">
                                </i>
                                View
                            </a>
                            <a class="btn btn-info btn-sm" href="{{route('Dashboard.products.edit',$product)}}">
                                <i class="fas fa-pencil-alt">
                                </i>
                                Edit
                            </a>
                            <a class="btn btn-danger btn-sm" href="{{route('Dashboard.products.destroy',$product)}}">
                                <i class="fas fa-trash">
                                </i>
                                Delete
                            </a>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
@endsection
