{{-- BCS3453 [PROJECT]-SEMESTER 2324/1
Student ID: CF22004
Student Name: Gan Shay Rie--}}

@extends('layouts.app')

@section('content')
    <style>
        .btn1:hover {
            box-shadow: 0 12px 16px 0 rgba(0, 0, 0, 0.24), 0 17px 50px 0 rgba(0, 0, 0, 0.19);
        }
    </style>

    {{-- Alert after adding product successfully --}}
    <div class="container">
        @if (session('success'))
            <div class="alert alert-primary" role="alert">
                {{ session('success') }}
            </div>
        @endif

        {{-- Retrieve prod data to display --}}
        <table class="table table-bordered table-striped" style="margin-top:60px;">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Product Image</th>
                    <th>Product Name</th>
                    <th>Product Price</th>
                    <th>Product Description</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data_prod as $prod)
                    <tr>
                        <td>{{ $prod->id }}</td>
                        <td>{{ $prod->ProdImg }}</td>
                        <td>{{ $prod->ProdName }}</td>
                        <td>{{ $prod->ProdPrice }}</td>
                        <td>{{ $prod->ProdDesc }}</td>
                        <td>
                            <a href="/proddata/{{ $prod->id }}/edit" class="btn btn-success btn1">Edit</a>
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
