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
                            <div class="card table-card review-card">
                                <div class="card-header borderless ">
                                    <h5>Rate Users</h5>
                                    <div class="card-header-right">
                                        <div class="btn-group card-option">
                                            <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="feather icon-more-horizontal"></i>
                                            </button>
                                            <ul class="list-unstyled card-option dropdown-menu dropdown-menu-right">
                                                <li class="dropdown-item full-card"><a href="#!"><span><i class="feather icon-maximize"></i> maximize</span><span style="display:none"><i class="feather icon-minimize"></i> Restore</span></a></li>
                                                <li class="dropdown-item minimize-card"><a href="#!"><span><i class="feather icon-minus"></i> collapse</span><span style="display:none"><i class="feather icon-plus"></i> expand</span></a></li>
                                                <li class="dropdown-item reload-card"><a href="#!"><i class="feather icon-refresh-cw"></i> reload</a></li>
                                                <li class="dropdown-item close-card"><a href="#!"><i class="feather icon-trash"></i> remove</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="review-block">
                                        <div class="row">
                                            <div class="col-sm-auto p-r-0">
                                                <img src="{{ asset('assets/images/user.png') }}" alt="user image" class="img-radius profile-img cust-img m-b-15">
                                            </div>
                                            <div class="col">
                                                <h6 class="m-b-15">John Deo <span class="float-right f-13 text-muted"> a week ago</span></h6>
                                                <a href="#!"><i class="feather icon-star-on f-18 text-c-yellow"></i></a>
                                                <a href="#!"><i class="feather icon-star-on f-18 text-c-yellow"></i></a>
                                                <a href="#!"><i class="feather icon-star-on f-18 text-c-yellow"></i></a>
                                                <a href="#!"><i class="feather icon-star f-18 text-muted"></i></a>
                                                <a href="#!"><i class="feather icon-star f-18 text-muted"></i></a>
                                                <p class="m-t-15 m-b-15 text-muted">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer
                                                    took a
                                                    galley of type and scrambled it to make a type specimen book.</p>
                                                <a href="#!" class="m-r-30 text-muted"><i class="feather icon-thumbs-up m-r-15"></i>Helpful?</a>
                                                <a href="#!"><i class="feather icon-heart-on text-c-red m-r-15"></i></a>
                                                <a href="#!"><i class="feather icon-edit text-muted"></i></a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-auto p-r-0">
                                                <img src="{{ asset('assets/images/user2.png') }}" alt="user image" class="img-radius profile-img cust-img m-b-15">
                                            </div>
                                            <div class="col">
                                                <h6 class="m-b-15">Allina D’croze <span class="float-right f-13 text-muted"> a week ago</span></h6>
                                                <a href="#!"><i class="feather icon-star-on f-18 text-c-yellow"></i></a>
                                                <a href="#!"><i class="feather icon-star f-18 text-muted"></i></a>
                                                <a href="#!"><i class="feather icon-star f-18 text-muted"></i></a>
                                                <a href="#!"><i class="feather icon-star f-18 text-muted"></i></a>
                                                <a href="#!"><i class="feather icon-star f-18 text-muted"></i></a>
                                                <p class="m-t-15 m-b-15 text-muted">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer
                                                    took a
                                                    galley of type and scrambled it to make a type specimen book.</p>
                                                <a href="#!" class="m-r-30 text-muted"><i class="feather icon-thumbs-up m-r-15"></i>Helpful?</a>
                                                <a href="#!"><i class="feather icon-heart-on text-c-red m-r-15"></i></a>
                                                <a href="#!"><i class="feather icon-edit text-muted"></i></a>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-right  m-r-20">
                                        <a href="#!" class="b-b-primary text-primary">View all User Rates</a>
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
