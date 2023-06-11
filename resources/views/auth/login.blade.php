@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="login-wrap d-flex align-items-center flex-wrap justify-content-center">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-6 col-lg-7">
{{--                            <img src="{{ asset('assets/vendors/images/login-page-img.png') }}" alt="">--}}

                            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
                                    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
                                    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="{{ asset('assets/vendors/images/login-page-img.png') }}" class="d-block w-100" alt="Image 1">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('assets/images/tawa1.jpg') }}" class="d-block w-100" alt="Image 1">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('assets/images/tawa2.jpg') }}" class="d-block w-100" alt="Image 1">
                                    </div>
                                </div>

                                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </a>
                            </div>


                        </div>
                        <div class="col-md-6 col-lg-5">
                            <div class="login-box bg-white box-shadow border-radius-10">
                                <div class="login-title">
                                    <h2 class="text-center text-primary">CSUZ Online Discussion Forum</h2>
                                </div>
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf

                                    <div class="input-group custom">
                                        <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Username/email" required>
                                        <div class="input-group-append custom">
                                            <span class="input-group-text"><i class="icon-copy dw dw-user1"></i></span>
                                        </div>
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                         </span>
                                        @enderror
                                    </div>
                                    <div class="input-group custom">
                                        <input type="password"  class="form-control @error('password') is-invalid @enderror" name="password" placeholder="**********">
                                        <div class="input-group-append custom">
                                            <span class="input-group-text"><i class="dw dw-padlock1"></i></span>
                                        </div>
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                         <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="input-group mb-0">

                                                <button type="submit" class="btn btn-primary btn-lg btn-block">Sign In</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
