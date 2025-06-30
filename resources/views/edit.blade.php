{{-- BCS3453 [PROJECT]-SEMESTER 2324/1
Student ID: CF22004
Student Name: Gan Shay Rie--}}

@extends('layouts.app')

@section('content')

<div class="container">
    @if (session('success'))
        <div class="alert alert-primary" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <div class="row" style="margin-top:25px;">
        <div class="col-6">
            <h1>Update Info</h1>
        </div>
    </div>
</div>

<div class = "row justify-content-md-center" style="margin-top:40px;">
    <div class="col-lg-6">
        <!-- action: bring the form data to controller -->
        <form action="/proddata/{{ $data_prod->id }}/update" method="POST">
            <!-- need to put csrf token, it'll request all the data -->
            {{ csrf_field() }}

            <div class="mb-3">
                <label class="form-label">Product Name</label>
                <input name="ProdName" type="text" class="form-control" id="exampleFormControlInput1"
                    value="{{ $data_prod->ProdName }}">
            </div>

            <div class="mb-3">
                <label class="form-label">Product Price</label>
                <input name="ProdPrice" type="text" class="form-control" id="exampleFormControlInput1"
                    value="{{ $data_prod->ProdPrice }}">
            </div>

            <div class="mb-3">
                <label class="form-label">Product Description</label>
                <input name="ProdDesc" type="text" class="form-control" id="exampleFormControlInput1"
                    value="{{ $data_prod->ProdDesc }}">
            </div>

            <div class="mb-3">
                <label class="form-label">Product Stock</label>
                <input name="ProdStock" type="text" class="form-control" id="exampleFormControlInput1"
                    value="{{ $data_prod->ProdStock }}">
            </div>
            <br>
            <!-- submit btn will bring the data from form into student data-->
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>

@endsection