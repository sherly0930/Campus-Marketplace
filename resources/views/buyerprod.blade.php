{{-- BCS3453 [PROJECT]-SEMESTER 2324/1
Student ID: CF22004
Student Name: Gan Shay Rie--}}

@extends('layouts.app')

@section('content')

    <p class="text-center" style="font-size:33px; margin-top:40px;"><strong>Products</strong></p>

    <div class="container">
        <br><br>
        {{-- 1st row --}}
        <div class="row">
            @foreach ($data_prod as $prod)
                <div class="col-4" style="margin-top:50px;">
                    <div class="card shadow" style="padding-top:12px; padding-bottom:5px;">
                        <img src="/img/{{ $prod->ProdImg }}" alt="{{ $prod->ProdImg }}" style="max-width:350px;" class="card-img-top">
                        </td>
                        <div class="card-body">
                            <h5 class="card-title text-truncate" style="font-size:20px; padding-left:15px; padding-top:20px;">
                                {{ $prod->ProdName }}</h5>
                            <a href="proddetails/{{ $prod->id }}" class="btn btn-primary" style="margin-left:15px;">Details</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
