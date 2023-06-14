@extends('layouts.header')

@section('content')
    <!-- [ Main Content ] start -->
    <div class="pcoded-main-container">
        <div class="pcoded-content">

            <!-- [ breadcrumb ] end -->
            <!-- [ Main Content ] start -->
            <div class="row">
                <div class="col-lg-9 col-md-10">
                    <!-- support-section start -->
                    <div class="row">
                        <div class="col-sm-12">
                           <div class="row">
                               <div class="col-md-4">
                                   <div class="card">
                                       <div class="card-body">
                                           <div class="row align-items-center">
                                               <div class="col-8">
                                                   <h4 class="text-c-yellow">{{ $usersTotal }}</h4>
                                                   <h6 class="text-muted m-b-0">All Users</h6>
                                               </div>
                                               <div class="col-4 text-right">
                                                   <i class="feather icon-bar-chart-2 f-28"></i>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                               <div class="col-md-4">
                                   <div class="card">
                                       <div class="card-body">
                                           <div class="row align-items-center">
                                               <div class="col-8">
                                                   <h4 class="text-c-yellow">{{ $topicsTotal }}</h4>
                                                   <h6 class="text-muted m-b-0">All Topics</h6>
                                               </div>
                                               <div class="col-4 text-right">
                                                   <i class="feather icon-bar-chart-2 f-28"></i>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                               <div class="col-md-4">
                                   <div class="card">
                                       <div class="card-body">
                                           <div class="row align-items-center">
                                               <div class="col-8">
                                                   <h4 class="text-c-yellow">{{ $commentsTotal }}</h4>
                                                   <h6 class="text-muted m-b-0">All Comments</h6>
                                               </div>
                                               <div class="col-4 text-right">
                                                   <i class="feather icon-bar-chart-2 f-28"></i>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                           </div>

                            <div class="card table-card">
                                <div class="card-header">
                                    <h5>All Users</h5>
                                    <div class="card-header-right">
                                        <div class="btn-group card-option">
                                            <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="feather icon-more-horizontal"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body p-0">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Names</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Date</th>
                                            <th scope="col"></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($users as $user)
                                            <tr>
                                                <th scope="row">{{ $user->id }}</th>
                                                <td>{{ $user->name }}</td>
                                                <td>{{ $user->email }}</td>
                                                <td>{{ $user->created_at }}</td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>

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
