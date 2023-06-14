@extends('layouts.header')

@section('content')
    <!-- [ Main Content ] start -->
    <div class="pcoded-main-container">
        <div class="pcoded-content">

            <!-- [ breadcrumb ] end -->
            <!-- [ Main Content ] start -->
            <div class="row">
                <div class="col-lg-7 col-md-12">
                    <!-- support-section start -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card support-bar overflow-hidden">
                                <div class="card-body pb-0">
                                    <h2 class="m-0">Profile</h2>
                                    <img class="" src="{{ asset('assets/images/user.png') }}" width="100" height="100">

                                    <span class="text-c-dark font-weight-bolder h4"> {{ Auth::user()->name }}</span>
                                    <p class="mb-3 text-c-blue mt-3"><i class="fa fa-envelope"></i> {{ Auth::user()->email }}</p>
                                    <p class="mb-3  mt-3"><i class="fa fa-phone"></i> 12345678</p>
                                    <p class="mb-3  mt-3"><i class="fa fa-map"></i> Senga Nehosho</p>
                                </div>
                                <div id="support-chart"></div>
                                <div class="card-footer bg-primary text-white">
                                    <div class="row text-center">

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- support-section end -->
                </div>

            </div>
            <!-- [ Main Content ] end -->
        </div>
    </div>
@endsection
