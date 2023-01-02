@extends('layouts.app')

@section('title', 'Edit- Profile')


@section('content')
    <!-- Start tabs area -->
    <div class="edit-profile-area rn-section-gapTop">
        <div class="container">
            <div class="row plr--70 padding-control-edit-wrapper pl_md--0 pr_md--0 pl_sm--0 pr_sm--0">
                <div class="col-12 d-flex justify-content-between mb--30 align-items-center">
                    <h4 class="title-left">Edit Your Profile</h4>
                    <a href="author.html" class="btn btn-primary ml--10"><i class="feather-eye mr--5"></i> Preview</a>
                </div>
            </div>
            <div class="row plr--70 padding-control-edit-wrapper pl_md--0 pr_md--0 pl_sm--0 pr_sm--0">
                <div class="col-lg-3 col-md-3 col-sm-12">
                    <!-- Start tabs area -->
                    <nav class="left-nav rbt-sticky-top-adjust-five">
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile"
                                    aria-selected="false"><i class="feather-unlock"></i>Change Password
                            </button>
                        </div>
                    </nav>
                    <!-- End tabs area -->
                </div>
                <div class="col-lg-9 col-md-9 col-sm-12 mt_sm--30">
                    <div class="tab-content tab-content-edit-wrapepr" id="nav-tabContent">


                        <div class="tab-pane fade show active" id="nav-profile" role="tabpanel"
                             aria-labelledby="nav-profile-tab">
                            <!-- change password area Start -->
                            <form method="POST" action="/users/update">
                                @csrf
                                <div class="nuron-information">
                                    <div class="condition">
                                        <h5 class="title">Change Your Password</h5>
                                        <p class="condition">
                                            Passwords are a critical part of information and network security. Passwords
                                            serve to protect user accounts but a poorly chosen password, if compromised,
                                            could put the entire network at risk.
                                        </p>
                                        <hr/>
                                        <div class="email-area">
                                            <label for="Email" class="form-label">Enter Email</label>
                                            <input name="email" id="Email" type="email" value="">
                                        </div>
                                        @error('email')
                                        <span style="color: red">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <div class="input-two-wrapper mt--15">
                                        <div class="old-password half-wid">
                                            <label for="oldPass" class="form-label">Enter Old Password</label>
                                            <input name="oldPass" id="oldPass" type="password">
                                        </div>
                                        @error('oldPass')
                                        <span style="color: red">{{$message}}</span>
                                        @enderror
                                        <div class="new-password half-wid">
                                            <label for="NewPass" class="form-label">Create New Password</label>
                                            <input name="password" id="NewPass" type="password">
                                        </div>
                                        @error('password')
                                        <span style="color: red">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <div class="email-area mt--15">
                                        <label for="rePass" class="form-label">Confirm Password</label>
                                        <input name="password_confirmation" id="rePass" type="password">
                                    </div>
                                    @error('new')
                                    <span style="color: red">{{$message}}</span>
                                    @enderror
                                    {{--                                    <a href="#" class="btn btn-primary save-btn-edit"--}}
                                    {{--                                       onclick="">Save</a>--}}
                                    <button type="submit" class="btn btn-primary save-btn-edit"
                                    >Save
                                    </button>

                                </div>
                            </form>
                            <!-- change password area ENd -->
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- End tabs area -->
@endsection

@section('script')
    @if(session()->has('message'))
        <script>
            customAlert.alert('Successfully Changed Password!');
        </script>
    @endif
@endsection



