@extends('layouts.header')

@section('content')
    <!-- [ Main Content ] start -->
    <div class="pcoded-main-container">
        <div class="pcoded-content">

            <!-- [ breadcrumb ] end -->
            <!-- [ Main Content ] start -->
            <div class="row">
                <div class="col-lg-7 col-md-10">
                    <div class="card chat-card">
                        <div class="card-header">
                            <h5>Chat</h5>
                            <div class="card-header-right">
                                <div class="btn-group card-option">
                                    <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="feather icon-more-horizontal"></i>
                                    </button>
                                    <ul class="list-unstyled card-option dropdown-menu dropdown-menu-right">
                                        <li class="dropdown-item full-card"><a href="#!"><span><i class="feather icon-maximize"></i> maximize</span><span style="display:none"><i class="feather icon-minimize"></i> Restore</span></a></li>
                                        <li class="dropdown-item minimize-card"><a href="#!"><span><i class="feather icon-minus"></i> collapse</span><span style="display:none"><i class="feather icon-plus"></i> expand</span></a></li>
                                        <li class="dropdown-item reload-card"><a href="#!"><i class="feather icon-refresh-cw"></i> reload</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row m-b-20 received-chat">
                                <div class="col-auto p-r-0">
                                    <img src="{{ asset('assets/images/user2.png') }}" alt="user image" class="img-radius wid-40">
                                </div>
                                <div class="col">
                                    <div class="msg">
                                        <p class="m-b-0">Hi How are you?</p>
                                    </div>
                                    <p class="text-muted m-b-0"><i class="fa fa-clock-o m-r-10"></i>10:20am</p>
                                </div>
                            </div>
                            <div class="row m-b-20 send-chat">
                                <div class="col">
                                    <div class="msg">
                                        <p class="m-b-0">I am fine How are you!</p>
                                    </div>
                                    <p class="text-muted m-b-0"><i class="fa fa-clock-o m-r-10"></i>10:21am</p>
                                </div>
                                <div class="col-auto p-l-0">
                                    <img src="{{ asset('assets/images/user.png') }}" alt="user image" class="img-radius wid-40">
                                </div>
                            </div>
                            <div class="row m-b-20 received-chat">
                                <div class="col-auto p-r-0">
                                    <img src="{{ asset('assets/images/user2.png') }}" alt="user image" class="img-radius wid-40">
                                </div>
                                <div class="col">
                                    <div class="msg">
                                        <p class="m-b-0">I need help!</p>
                                        <img src="{{ asset('assets/images/notwell.png') }}" alt="">
                                    </div>
                                    <p class="text-muted m-b-0"><i class="fa fa-clock-o m-r-10"></i>10:22am</p>
                                </div>
                            </div>
                            <div class="form-group m-t-15">
                                <label class="floating-label" for="Project">Send message</label>
                                <input type="text" name="task-insert" class="form-control" id="Project">
                                <div class="form-icon">
                                    <button class="btn btn-primary btn-icon">
                                        <i class="feather icon-message-circle"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>


            </div>
            <!-- [ Main Content ] end -->
        </div>
    </div>
@endsection
