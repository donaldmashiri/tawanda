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
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="review-block">
                                        @foreach ($topics as $topic)
                                        <div class="row">
                                            <div class="col-sm-auto p-r-0">
                                                <img src="{{ asset('assets/images/user.png') }}" alt="user image" class="img-radius profile-img cust-img m-b-15">
                                            </div>
                                            <div class="col">
                                                <h6 class="m-b-15">{{ $topic->topic_name }} <span class="float-right f-13 text-muted"> {{ $topic->user->name }}</span></h6>
                                               <p>Comments: {{ $topic->comments_count }}</p>
                                                @if ($topic->comments_count > 0)
                                                    @for ($i = 0; $i < $topic->comments_count; $i++)
                                                        <a href="#!"><i class="feather icon-star-on f-18 text-c-yellow"></i></a>
                                                    @endfor
                                                @endif
                                                <p class="m-t-15 m-b-15 text-muted">{{ $topic->topic_description }}</p>
                                                <a href="#!"><i class="feather icon-heart-on text-c-red m-r-15"></i></a>
                                                <a href="#!"><i class="feather icon-edit text-muted"></i></a>
                                            </div>
                                        </div>
                                        @endforeach
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
