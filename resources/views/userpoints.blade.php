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
                            <div class="card table-card">
                                <div class="card-header">
                                    <h5>Users Points</h5>
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
                                <div class="card-body p-0">
                                    <div class="table-responsive">
                                        <table class="table table-hover mb-0">
                                            <thead>
                                            <tr>
                                                <th>
                                                    User
                                                </th>
                                                <th>Total Post</th>
                                                <th>Upvotes</th>
                                                <th>Downvotes</th>
                                                <th class="text-right">Points</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>
                                                    <div class="d-inline-block align-middle">
                                                        <img src="{{ asset("assets/images/user.png") }}" alt="user image" class="img-radius wid-40 align-top m-r-15">
                                                        <div class="d-inline-block">
                                                            <h6>Tawanda Nyabesa</h6>
                                                            <p class="text-muted m-b-0">tawanda@gmail.com</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-dark font-weight-bolder">234</td>
                                                <td class="text-primary font-weight-bolder">231</td>
                                                <td class="text-danger font-weight-bolder">2</td>
                                                <td class="text-right"><label class="badge badge-light-success">High</label></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-inline-block align-middle">
                                                        <img src="{{ asset("assets/images/user2.png") }}" alt="user image" class="img-radius wid-40 align-top m-r-15">
                                                        <div class="d-inline-block">
                                                            <h6>John Deo</h6>
                                                            <p class="text-muted m-b-0">john@gmail.com</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-dark font-weight-bolder">876</td>
                                                <td class="text-primary font-weight-bolder">31</td>
                                                <td class="text-danger font-weight-bolder">562</td>
                                                <td class="text-right"><label class="badge badge-light-danger">Low</label></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-inline-block align-middle">
                                                        <img src="{{ asset("assets/images/notwell.png") }}" alt="user image" class="img-radius wid-40 align-top m-r-15">
                                                        <div class="d-inline-block">
                                                            <h6>Melissa Gafa</h6>
                                                            <p class="text-muted m-b-0">gafa@gmail.com</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-dark font-weight-bolder">54</td>
                                                <td class="text-primary font-weight-bolder">21</td>
                                                <td class="text-danger font-weight-bolder">23</td>
                                                <td class="text-right"><label class="badge badge-light-primary">Medium</label></td>
                                            </tr>
                                            </tbody>
                                        </table>
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
