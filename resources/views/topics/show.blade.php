@extends('layouts.header')

@section('content')
    <!-- [ Main Content ] start -->
    <div class="pcoded-main-container">
        <div class="pcoded-content">

            <!-- [ breadcrumb ] end -->
            <!-- [ Main Content ] start -->
            <div class="row">
                <div class="col-lg-10 col-md-10">
                    <div class="card chat-card">
                        @include('partials.errors')
                        <div class="card-header">
                            <h5>{{ $topic->topic_name }}</h5>
                            <p><span>{{ $topic->topic_description }}</span></p>
                            <div class="card-header-right">
                                <div class="btn-group card-option">
                                    <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="feather icon-more-horizontal"></i>
                                    </button>

                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            @if($topic->comments->count() > 0)
                                @foreach($topic->comments as $comment)
                                <div class="row m-b-20 received-chat">
                                <div class="col-auto p-r-0">
                                    <img src="{{ asset('assets/images/user2.png') }}" alt="user image" class="img-radius wid-40">
                                    <h6>{{ $topic->user->name }}</h6>

                                </div>
                                <div class="col">
                                    <div class="msg">
                                        <p class="m-b-0">{{ $comment->comment }}</p>
                                    </div>
                                    <p class="text-muted m-b-0"><i class="fa fa-clock-o m-r-10"></i>{{ $comment->created_at }}</p>
                                </div>
                            </div>
                                    <hr>
                                @endforeach
                            @else
                                    <p>No comments available.</p>
                                @endif
                            <div class="form-group m-t-15">
                                <form action="{{ route('comments.store') }}" method="post">
                                    @csrf
{{--                                    <label class="floating-label" for="Project">Send message</label>--}}
                                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}" class="form-control">
                                    <input type="hidden" name="topic_id" value="{{ $topic->id }}" class="form-control">
                                    <input type="text" name="comment" class="form-control" placeholder="Send Message">
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
