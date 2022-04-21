@extends('master')

@section('title')
    Registration
@endsection

@section('content')

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 ms-5" align="center">
                    <div class="card" align="center">
                        <div class="card-header"><h2 class="text-center text-success">Login Page</h2></div>
                        <div class="card-body">
                            <form action="{{route('userLogin')}}" method="POST">
                                @csrf
{{--                                <div class="row mb-3">--}}
{{--                                    <label for="" class="col-md-3">Enter Full name</label>--}}
{{--                                    <div class="col-md-9">--}}
{{--                                        <input type="text" class="form-control" name="name" value="">--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                                <div class="row mb-3">
                                    <label for="" class="col-md-3">Enter Email Address</label>
                                    <div class="col-md-9">
                                        <input type="email" class="form-control" name="email">
                                    </div>
                                </div>

{{--                                <div class="row mb-3">--}}
{{--                                    <label for="" class="col-md-3">Enter Mobile No.</label>--}}
{{--                                    <div class="col-md-9">--}}
{{--                                        <input type="number" class="form-control" name="mobile">--}}
{{--                                    </div>--}}
{{--                                </div>--}}

                                <div class="row mb-3">
                                    <label for="" class="col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn-lg btn-success">
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

