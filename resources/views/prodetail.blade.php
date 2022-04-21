@extends('master')

@section('title')
    Product Details
@endsection

@section('content')

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="card card-body shadow">
                        <img src="{{ asset('/images/'.$product['image']) }}" alt=""/>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card card-body">
                        <h3>{{$product['name']}}</h3>
                        <h4>Tk. {{$product['price']}}</h4>
                        <hr/>
                        <p>{{ $product['fullDescrip'] }}</p>
                        <a href="" class="btn btn-secondary">Add To Cart</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
