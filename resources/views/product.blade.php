@extends('master')

@section('title')
    Products
@endsection

@section('content')

    <section class="py-5">
        <div class="container">
            <div class="row">
                @foreach($products as $product)
                    <div class="col-md-4">
                        <div class="card shadow">
                            <img src="{{ asset('/images/'.$product['image'])}}" class="card-img-top" alt=""/>
                            <div class="card-body">
                                <h2 class="card-title">{{ $product['name'] }}</h2>
                                <h4>TK. {{ $product['price'] }}</h4>
                                <hr/>
                                <p>{{ $product['description'] }}</p>
                                <hr/>
                                <a href="{{ route('Pro-Details', ['id' => $product['id']]) }}"class="btn btn-outline-dark">Details</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection
