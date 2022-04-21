@extends('master')

@section('title')
    Blogs
@endsection

@section('content')

    <section class="py-5">
        <div class="container">
            <div class="row">
                @foreach($blogs as $blog)
                    <div class="col-md-4">
                        <div class="card shadow">
                            <img src="{{asset('/images/'.$blog['image'])}}" class="card-img-top card-title" height="250" alt=""/>
                            <div class="card-body">
                                <h2 class="card-header text-bold text-success">{{$blog['name']}}</h2>
                                <h4 class="text-info text-bold">{{$blog['author']}}</h4>
                                <hr/>
                                <p>Lorem ipsum dolor sit amet, facia officiis qe voluptates. Aliquam autem consequuntur delectus dicta excepturi facere fugit, harum, natus omnis, quod reiciendis voluptates? A aspernatur atque distinctio dolorem doloribus eius fuga, inventore iure magnam nam neque odit quam quisquam sequi vitae. Accusamus amet aperiam assumenda at autem consequatur consequuntur culpa debitis dicta dolor dolorem et exercitationem hic id in, ipsa ipsum, iure laborum nostrum odit possimus quod ratione recusandae repellat, unde veritatis voluptas. Tempora?</p>
                                <a href="{{ route('blogDetails', ['id' => $blog['id']]) }}"class="btn btn-outline-success">Read More</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection

