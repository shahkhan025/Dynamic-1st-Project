@extends('master')

@section('title')
    HOME
@endsection

@section('content')
    <section class="">
        <div id="slide" class="carousel" data-bs-ride="carousel" data-bs-interval="1850">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <a href="{{'product'}}"><img src="{{asset('/images/sale1.jpeg')}}" alt="" class="w-100" height="500"></a>
                </div>
                <div class="carousel-item">
                    <img src="{{asset('/images/slider5.jpeg')}}" alt="" class="w-100" height="500">
                </div>
                <div class="carousel-item">
                    <img src="{{asset('/images/cloth1.jpeg')}}" alt="" class="w-100" height="500">
                </div>
            </div>
            <a href="#slide" class="carousel-control-prev" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a href="#slide" class="carousel-control-next" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
    </section>

    <section class="py-5 shadow">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="card card-body shadow card-img-top"><a href="{{'product'}}"><img src="{{asset('/images/sl3.jpg')}}" alt="" class="homeImg"/></a>
                        <div class="card-footer"><a href="{{'product'}}"><h3 class="text-center text-success">Shopping</h3></a></div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-body shadow card-img-top"><a href="{{'blog'}}"><img src="{{asset('/images/slider4.jpeg')}}" alt="" class="homeImg"/></a>
                        <div class="card-footer"><a href="{{'blog'}}"><h3 class="text-center text-success">Blogs</h3></a></div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-body shadow card-img-top"><a href="{{'registration'}}"><img src="{{asset('/images/sl5.jpg')}}" alt="" class="homeImg"/></a>
                        <div class="card-footer"><a href="{{'registration'}}"><h3 class="text-center text-success">Create Account</h3></a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-light py-3">
        <div class="row">
            <div class="col-md-12 text-center text-dark"><h4>Copyright</h4><br/><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus at aut iste molestias, nemo quod repudiandae sit! Repellat, ut, voluptas!</p><br/><h3>Follow Us
                </h3><br/><li>FaceBook</li><li>Tweeter</li><li>Youtube</li></div>
        </div>
    </section>
 @endsection

