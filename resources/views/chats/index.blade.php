@extends('layouts.header')

@section('content')
    <!-- [ Main Content ] start -->
    <div class="pcoded-main-container">
        <div class="pcoded-content">

            <!-- [ breadcrumb ] end -->
            <!-- [ Main Content ] start -->
            @include('partials.errors')
            <div class="row">
                <div class="col-md-2">
                    <div class="card chat-card">
                        @foreach($users as $user)
                            <div class="col-auto border border-dark border-radius-1 p-r-0">
                                <img src="{{ asset('assets/images/user2.png') }}" alt="user image" class="img-radius wid-40">
                                <h6 class="float-right">{{ $user->name }}</h6>
                            </div>
                        @endforeach
                    </div>

                </div>

                <div class="col-lg-9 col-md-9">
                    <div class="card chat-card">
                        <div class="card-header">
                            <h5>Chat</h5>
                            <div class="card-header-right">
                                <div class="btn-group card-option">
                                    <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="feather icon-more-horizontal"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            @foreach($chats as $chat)
                                @if($chat->receiver_id != Auth::user()->id)
                                <div class="row m-b-20 received-chat">
                                    <div class="col-auto p-r-0">
                                        <img src="{{ asset('assets/images/user2.png') }}" alt="user image" class="img-radius wid-40">
                                        <h6>{{ $chat->receiver_id }}Donnie</h6>
                                    </div>
                                    <div class="col">
                                        <div class="msg">
                                            <p class="m-b-0">{{ $chat->message }}</p>
                                        </div>
                                        <p class="text-muted m-b-0"><i class="fa fa-clock-o m-r-10"></i>{{ $chat->created_at }}</p>
                                    </div>
                                </div>
                                @endif
                                 @if($chat->sender_id == Auth::user()->id)
                                    <div class="row m-b-20 send-chat">
                                        <div class="col">
                                            <div class="msg">
                                                <p class="m-b-0">{{ $chat->message }}</p>
                                            </div>
                                            <p class="text-muted m-b-0"><i class="fa fa-clock-o m-r-10"></i>{{ $chat->created_at }}</p>
                                        </div>
                                        <div class="col-auto p-l-0">
                                            <img src="{{ asset('assets/images/user.png') }}" alt="user image" class="img-radius wid-40">
                                        </div>
                                    </div>
                                @endif

                                <hr>
                            @endforeach
                            <div class="form-group m-t-15">
                                <form action="{{ route('chats.store') }}" method="post">
                                    @csrf
                                <input type="hidden" name="sender_id" value="{{ Auth::user()->id }}" class="form-control">
                                <input type="hidden" name="receiver_id" value="{{ $user->id }}" class="form-control">
                                <input type="text" name="message" class="form-control" placeholder="Send Message">
                                <div class="form-icon">
                                    <button type="submit" class="btn btn-primary btn-icon">
                                        <i class="feather icon-message-circle"></i>
                                    </button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- [ Main Content ] end -->
            </div>
        </div>
@endsection
