@extends('layouts.header')

@section('content')
    <!-- [ Main Content ] start -->
    <div class="pcoded-main-container">
        <div class="pcoded-content">

            <!-- [ breadcrumb ] end -->
            <!-- [ Main Content ] start -->
            <div class="row">
                <div class="col-xl-6 col-md-12">
                    <div class="card latest-update-card">
                        <div class="card-header">
                            <h5>Topics</h5>
                            <div class="card-header-right">
                                <div class="btn-group card-option">
                                    <a href="" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalPopovers">Create New Topic <i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">

                            <div class="latest-update-box">
                                <div class="row p-t-30 p-b-30">
                                    <div class="col-auto text-right update-meta">
                                        <p class="text-muted m-b-0 d-inline-flex">2 hrs ago</p>
                                        <i class="feather icon-user-check bg-twitter update-icon"></i>
                                    </div>
                                    <div class="col">
                                        <a href="#!">
                                            <h6>Depression Topic</h6>
                                            <p class="text-muted m-b-0">Depression Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,
                                                molestiae quas vel sint</p>
                                        </a>
                                        <p class="text-muted m-b-0 float-right font-weight-bolder">by Tawanda</p>
                                    </div>
                                </div>
                                <div class="row p-t-30 p-b-30">
                                    <div class="col-auto text-right update-meta">
                                        <p class="text-muted m-b-0 d-inline-flex">2 hrs ago</p>
                                        <i class="feather icon-user-check bg-twitter update-icon"></i>
                                    </div>
                                    <div class="col">
                                        <a href="#!">
                                            <h6>Depression Topic</h6>
                                            <p class="text-muted m-b-0">Depression Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,
                                                molestiae quas vel sint</p>
                                        </a>
                                        <p class="text-muted m-b-0 float-right">by Tawanda</p>
                                    </div>
                                </div>

                            </div>
                            <div class="text-center">
                                <a href="#!" class="b-b-primary text-primary">View all Topics</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div id="exampleModalPopovers" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalPopoversLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalPopoversLabel">Modal Title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <form action="">
                            <div class="form-group">
                                <label for="">Topic Name :</label>
                                <input type="text" class="form-control" placeholder="Topic Name:">
                            </div>
                            <div class="form-group">
                                <label for="">Description :</label>
                                <textarea name="" id="" class="form-control" cols="5" rows="3"></textarea>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn  btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn  btn-primary">Submit</button>
                    </div>
                </div>
            </div>
        </div>
@endsection
