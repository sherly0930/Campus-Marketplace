{{-- BCS3453 [PROJECT]-SEMESTER 2324/1
Student ID: CF22004
Student Name: Gan Shay Rie--}}

@extends('layouts.app')

@section('content')
    <div class="container" style="padding-top:60px; padding-left:40px; padding-bottom:40px;">
        <div class="row">
            <div class="col-5">
                <img class="img-fluid" src="/img/{{ $data_prod->ProdImg }}" alt="{{ $data_prod->ProdImg }}">
            </div>

            <div class="col-7">
                <span style="color:#4770e0; font-size:28px;">{{ $data_prod->ProdName }}</span>
                <p style="font-size:19px; margin-top:20px;"><strong>RM {{ $data_prod->ProdPrice }} </p></strong> 
                <p style="font-size:17px; margin-top:20px;"> Stock: {{ $data_prod->ProdStock }} </p>

                <hr>
                <p style="padding-top:16px; font-size:18px;">Description: </p>
                <p style="font-size:18px;">{{ $data_prod->ProdDesc }}</p>

                <div class="prod-price" style="padding-top:25px;">
                    <a href="mailto:{{$data_prod->email}}" class="btn btn-primary">Contact Seller</a>
                </div>
            </div>
        </div>
    </div>
@endsection
