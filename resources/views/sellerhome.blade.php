{{-- BCS3453 [PROJECT]-SEMESTER 2324/1
Student ID: CF22004
Student Name: Gan Shay Rie--}}

@extends('layouts.app')

@section('content')
    <style>
        .btn1:hover {
            box-shadow: 0 12px 16px 0 rgba(0, 0, 0, 0.24), 0 17px 50px 0 rgba(0, 0, 0, 0.19);
        }

        .btn2:hover {
            box-shadow: 0 12px 16px 0 rgba(0, 0, 0, 0.24), 0 17px 50px 0 rgba(0, 0, 0, 0.19);
        }
    </style>

    {{-- Alert after adding product successfully --}}
    <div class="container">
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        {{-- Add product btn --}}
        <div class="row" style="padding-top:70px;">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Add New 
                Product</button>
        </div>

        {{-- Retrieve prod data to display --}}
        <table class="table table-bordered table-striped" style="margin-top:60px;">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Product Image</th>
                    <th>Product Name</th>
                    <th>Product Price</th>
                    <th>Product Description</th>
                    <th>Product Stock</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data_prod as $prod)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td><img src="/img/{{ $prod->ProdImg }}" alt="{{ $prod->ProdImg }}" width="50%"></td>
                        <td>{{ $prod->ProdName }}</td>
                        <td>{{ $prod->ProdPrice }}</td>
                        <td>{{ $prod->ProdDesc }}</td>
                        <td>{{ $prod->ProdStock }}</td>
                        <td>
                            <a href="/proddata/{{ $prod->id }}/edit" class="btn btn-success btn1">Edit</a>
                        </td>
                        <td><a href="proddata/{{ $prod->id }}/delete"
                                onClick="return confirm('Confirm to delete?') class="class="btn btn-danger btn2">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Modal for add prod btn -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        {{-- Add Prod --}}
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Insert Product Information</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!--action= : bring the form data to controller-->
                        <form action="/proddata/create" method="POST" enctype="multipart/form-data">
                            <!-- need to put csrf token, it'll request all the data -->
                            {{ csrf_field() }}

                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Product Image</label>
                                <input name="ProdImg" type="file" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Product Name</label>
                                <input name="ProdName" type="text" class="form-control" id="exampleFormControlInput1"
                                    placeholder="E.g., Lexus Chocolate Coated Cream Biscuits">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Product Price</label>
                                <input name="ProdPrice" type="text" class="form-control" placeholder="E.g., RM 6.20">
                            </div>

                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Product Description</label>
                                <textarea name="ProdDesc" type="text" class="form-control"
                                    placeholder="E.g., Experience new exciting chocolatey centre filled cookie from Cadbury that is sure to amaze you."></textarea>
                            </div>

                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Product Stock</label>
                                <input name="ProdStock" type="text" class="form-control" placeholder="E.g., 20">
                            </div>

                            <div class="mb-3 visually-hidden">
                                <label for="exampleFormControlInput1" class="form-label"></label>
                                <input value="{{auth()->user()->name}}" name="name" type="hidden" class="form-control" required>
                            </div>

                            <div class="mb-3 visually-hidden">
                                <label for="exampleFormControlInput1" class="form-label"></label>
                                <input value="{{auth()->user()->email}}" name="email" type="email" class="form-control" required>
                            </div>

                            <!-- submit btn will bring the data from form into prod data-->
                            <button type="submit" class="btn btn-primary">Add Product</button>
                        </form>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    @endsection
