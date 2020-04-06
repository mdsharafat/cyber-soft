@extends('layouts.admin.master-layout')

@section('header-script')
    <style>
        /* Input Type File CSS Starts*/
    .file-input {
        display: inline-block;
        text-align: left;
        background: #fff;
        padding: 16px;
        width: 100%;
        position: relative;
        border-radius: 3px;
        border-bottom: 1px solid #cccccc;
    }

    .file-input>[type='file'] {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        opacity: 0;
        z-index: 10;
        cursor: pointer;
    }

    .file-input>.button {
        display: inline-block;
        cursor: pointer;
        background: #eee;
        padding: 8px 16px;
        border-radius: 2px;
        margin-right: 8px;
    }

    .file-input:hover>.button {
        background: #00c292;
        color: white;
    }

    .file-input>.label {
        color: #333;
        white-space: nowrap;
        opacity: .3;
    }

    .file-input.-chosen>.label {
        opacity: 1;
    }

    /* Input Type File CSS Ends*/
    .button {
        color: #ffffff;
    }

    .file-input>.button {
        display: inline-block;
        cursor: pointer;
        background: #920611;
        padding: 8px 16px;
        border-radius: 2px;
        margin-right: 8px;
    }

    .uploaded-img-preview {
        max-width: 180px;
        border: 1px solid #ccc;
        padding: 10px;
    }

    .lh {
        line-height: 52px;
    }
    </style>
@endsection

@section('main-content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                         @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        <div class="form-element-list">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-8">
                                        <h3>Edit Company Profile</h3>
                                    </div>
                                    <div class="col-md-4 text-right">
                                        <a href="{{ url('/admin/company-profile') }}" title="Back"><button class="btn btn-warning primary-icon-notika waves-effect"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                                    </div>
                                </div>
                                <hr>
                                <form method="POST" action="{{ url('/admin/company-profile/update') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                                    {{ method_field('PATCH') }}
                                    {{ csrf_field() }}

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="nk-int-st">
                                                <label for="name" class="control-label">{{ 'Name' }}</label>
                                                <input class="form-control" name="name" type="text" id="name" value="{{ isset($companyProfile->name) ? $companyProfile->name : ''}}" >
                                                {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="nk-int-st">
                                                <label for="moto" class="control-label">{{ 'Moto' }}</label>
                                                <input class="form-control" name="moto" type="text" id="moto" value="{{ isset($companyProfile->moto) ? $companyProfile->moto : ''}}" >
                                                {!! $errors->first('moto', '<p class="help-block">:message</p>') !!}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mg-t-20">
                                        <div class="col-md-6">
                                            <div class="nk-int-st">
                                                <label for="address" class="control-label">{{ 'Email' }}</label>
                                                <input class="form-control" name="email" type="text" id="email" value="{{ isset($companyProfile->email) ? $companyProfile->email : ''}}" >
                                                {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="nk-int-st">
                                                <label for="phone" class="control-label">{{ 'Phone' }}</label>
                                                <input class="form-control" name="phone" type="text" id="phone" value="{{ isset($companyProfile->phone) ? $companyProfile->phone : ''}}" >
                                                {!! $errors->first('phone', '<p class="help-block">:message</p>') !!}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mg-t-20">
                                        <div class="col-md-12">
                                            <div class="nk-int-st">
                                                <label for="intro" class="control-label">{{ 'Introduction Text' }}</label>
                                                <textarea style="padding-top: 10px; padding-bottom: 10px;" class="form-control" name="intro" type="text" id="intro" rows=5>{{ isset($companyProfile->intro) ? $companyProfile->intro : ''}}</textarea>
                                                {!! $errors->first('intro', '<p class="help-block">:message</p>') !!}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mg-t-20">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="lh">
                                                <label for="logo">{{ 'Change Logo' }} </label>
                                                <div class='file-input'>
                                                    <input type='file' name="logo" onchange="readURL(this);">
                                                    <span class='button'>Choose</span>
                                                    <span class='label' data-js-label>No file selected</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 text-center">
                                            @if($companyProfile->logo)
                                            <img id="blah" class="uploaded-img-preview" src="{{ asset('storage/company-profile/'.$companyProfile->logo) }}"
                                                alt="{{ $companyProfile->name }}" />
                                            @else
                                            <img id="blah" class="uploaded-img-preview" src="http://placehold.it/180" alt="{{ $companyProfile->name }}" />
                                            @endif
                                        </div>
                                    </div>
                                    <div class="row mg-t-20">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="lh">
                                                <label for="pro_pic">{{ 'Change Profile Image' }} </label>
                                                <div class='file-input'>
                                                    <input type='file' name="pro_pic" onchange="readURL2(this);">
                                                    <span class='button'>Choose</span>
                                                    <span class='label' data-js-label>No file selected</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 text-center">
                                            @if($companyProfile->pro_pic)
                                            <img id="img" class="uploaded-img-preview" src="{{ asset('storage/company-profile/'.$companyProfile->pro_pic) }}"
                                                alt="{{ $companyProfile->name }}" />
                                            @else
                                            <img id="img" class="uploaded-img-preview" src="http://placehold.it/180" alt="{{ $companyProfile->name }}" />
                                            @endif
                                        </div>
                                    </div>

                                    <div class="row mg-t-20">
                                        <div class="col-md-12">
                                            <div class="nk-int-st">
                                                <label for="location" class="control-label">{{ 'Location' }}</label>
                                                <textarea style="padding-top: 10px; padding-bottom: 10px;" class="form-control" name="location" type="text" id="location" rows=5>{{ isset($companyProfile->location) ? $companyProfile->location : ''}}</textarea>
                                                {!! $errors->first('location', '<p class="help-block">:message</p>') !!}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mg-t-20">
                                        <div class="col-md-6">
                                            <div class="nk-int-st">
                                                <label for="address" class="control-label">{{ 'Address' }}</label>
                                                <input class="form-control" name="address" type="text" id="address" value="{{ isset($companyProfile->address) ? $companyProfile->address : ''}}" >
                                                {!! $errors->first('address', '<p class="help-block">:message</p>') !!}
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="nk-int-st">
                                                <label for="copyright" class="control-label">{{ 'Copyright' }}</label>
                                                <input class="form-control" name="copyright" type="text" id="copyright" value="{{ isset($companyProfile->copyright) ? $companyProfile->copyright : ''}}" >
                                                {!! $errors->first('copyright', '<p class="help-block">:message</p>') !!}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mg-t-20">
                                        <div class="col-md-6">
                                            <div class="nk-int-st">
                                                <label for="fb_link" class="control-label">{{ 'Facebook' }}</label>
                                                <input class="form-control" name="fb_link" type="text" id="fb_link" value="{{ isset($companyProfile->fb_link) ? $companyProfile->fb_link : ''}}" >
                                                {!! $errors->first('fb_link', '<p class="help-block">:message</p>') !!}
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="nk-int-st">
                                                <label for="tw_link" class="control-label">{{ 'Twitter' }}</label>
                                                <input class="form-control" name="tw_link" type="text" id="tw_link" value="{{ isset($companyProfile->tw_link) ? $companyProfile->tw_link : ''}}" >
                                                {!! $errors->first('tw_link', '<p class="help-block">:message</p>') !!}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mg-t-20">
                                        <div class="col-md-6">
                                            <div class="nk-int-st">
                                                <label for="ln_link" class="control-label">{{ 'Linkedin' }}</label>
                                                <input class="form-control" name="ln_link" type="text" id="ln_link" value="{{ isset($companyProfile->ln_link) ? $companyProfile->ln_link : ''}}" >
                                                {!! $errors->first('ln_link', '<p class="help-block">:message</p>') !!}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12 mg-t-30">
                                            <div class="form-example-int">
                                                <button class="btn btn-success notika-btn-success waves-effect" type="submit">Update</button>
                                            </div>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer-script')
    <script type="text/javascript">
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#blah').attr('src', e.target.result);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
        function readURL2(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#img').attr('src', e.target.result);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
@endsection
