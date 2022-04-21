@extends('master')

@section('title')
    BLOG Details
@endsection

@section('content')

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="card card-body shadow">
                        <img src="{{ asset('/images/'.$blogDetails['image']) }}" class="" alt=""/>
                    </div>
                </div>

                <div class="col-md-7">
                    <div class="card card-body shadow">
                        <h2>This Is {{$blogDetails['name']}}</h2>
                        <h4>Author Name: {{$blogDetails['author']}}</h4>
                        <hr/>
                        <p>{{$blogDetails['fullDescrip']}}</p>
                        <a href="" class="btn btn-success">Add To Cart</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
