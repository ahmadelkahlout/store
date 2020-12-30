@extends('dashbord.layouts.master')
@section('title')
   edit product
@endsection
@section('content')

    <!-- Main content -->
    <section class="content">
        <form method="post"action="{{route('Dashboard.products.store')}}">
            @csrf
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">General</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                                <i class="fas fa-minus"></i></button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="inputName">ProductName</label>
                            <input type="text"  name="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="inputDescription">productDescription</label>
                            <textarea id="inputDescription"  name="pdtdescription" class="form-control" rows="4"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="inputStatus">productline</label>
                            <select class="form-control custom-select"name ='productline_id'>
                                <option selected disabled>Select one</option>
                                @foreach($productlines as $productline)
                                <option value="{{$productline->id}}"> {{$productline->Name}}</option>
                                @endforeach

                            </select>
                        </div>
                        <div class="form-group">
                            <label for="inputClientCompany">Stok</label>
                            <input type="number" name="QtyinStock" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="inputProjectLeader">price</label>
                            <input type="number" name="amount" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="inputProjectLeader">vendor</label>
                            <input type="text" name="vendor" class="form-control">
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <a href="#" class="btn btn-secondary">Cancel</a>
                <input type="submit" value="Create new Porject" class="btn btn-success float-right">
            </div>
        </div>
        </form>
    </section>
    <!-- /.content -->
@endsection
