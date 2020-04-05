@extends('layouts.admin.master-layout')
@section('header-script')
<style>
.notika-shadow {
    box-shadow: 0 8px 6px -6px black;
}

.search_box_form {
    outline: 0;
    float: right;
    /* -webkit-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24); */
    /* box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24); */
    border: 1px solid #cecece;
    -webkit-border-radius: 4px;
    border-radius: 0px;
    position: relative;
    right: 0%;
}

.search_box_form>.textbox {
    outline: 0;
    height: 42px;
    /* width: 244px; */
    width: 500px;
    line-height: 42px;
    padding: 0 16px;
    background-color: rgba(255, 255, 255, 0.8);
    color: #212121;
    border: 0;
    float: left;
    -webkit-border-radius: 4px 0 0 4px;
    border-radius: 0px;
}

.search_box_form>.textbox:focus {
    outline: 0;
    background-color: #FFF;
}

.search_box_form>.button {
    outline: 0;
    background: none;
    /* background-color: rgba(38, 50, 56, 0.8); */
    background-color: #00c292;
    float: left;
    height: 42px;
    width: 42px;
    text-align: center;
    line-height: 42px;
    border: 0;
    color: #FFF;
    font: normal normal normal 14px/1 FontAwesome;
    font-size: 16px;
    text-rendering: auto;
    text-shadow: 0 1px 1px rgba(0, 0, 0, 0.2);
    -webkit-transition: background-color .4s ease;
    transition: background-color .4s ease;
    -webkit-border-radius: 0 4px 4px 0;
    border-radius: 0px;
}

.search_box_form>.button:hover {
    background-color: rgba(0, 150, 136, 0.8);
}

</style>
@endsection
@section('main-content')
<!-- Start Status area -->
<div class="notika-status-area">
    <div class="container">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="row">
            <div class="col-lg-12 text-center">
                <p class="text-success">
                    @if(Session::has('flash_message'))
                        {{ Session::get('flash_message') }}
                    @endif
                </p>
            </div>
        </div>
    </div>
    <div class="container">
        @if(Session::has('error-message'))
        <div class="alert alert-danger">
            <ul>
                <li>{{ Session::get('error-message') }}</li>
            </ul>
        </div>
        @endif
        <!-- Breadcomb area Start-->
        <div class="breadcomb-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="breadcomb-list">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="breadcomb-wp">
                                        <div class="breadcomb-ctn">
                                            <h2>CHANGE PASSWORD</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="breadcomb-wp">
                                        <div class="breadcomb-ctn">
                                            <form class="" action="{{ url('admin/C127Wp-aqlg-SZ/change-my-password') }}" method="post">
                                                @csrf
                                                <div>
                                                    <div class="row mg-t-15">
                                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                            <div class="" style="width: 100%; display: block; overflow:hidden;">
                                                                <span class="text-danger">*</span>
                                                                <label for="chassis_no">Old Password</label>
                                                                <div class="nk-int-st">
                                                                    <input style="height: 40px;" type="password" class="form-control input-sm price old_password" name="old_password" value="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                            <div class="" style="width: 100%; display: block; overflow:hidden;">
                                                                <span class="text-danger">*</span>
                                                                <label for="chassis_no">New Password</label>
                                                                <div class="nk-int-st">
                                                                    <input style="height: 40px;" type="password" class="form-control input-sm price new_password" name="new_password" value="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                            <div class="" style="width: 100%; display: block; overflow:hidden;">
                                                                <span class="text-danger">*</span>
                                                                <label for="chassis_no">Confirm New Password</label>
                                                                <div class="nk-int-st">
                                                                    <input style="height: 40px;" type="password" class="form-control input-sm price confirm_new_password" name="confirm_new_password" value="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button type="submit" class="mg-t-15 btn btn-success notika-btn-success waves-effect submit_button">SUBMIT</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Status area-->
@endsection

@section('footer-script')
<script type="text/javascript">

</script>
@endsection
