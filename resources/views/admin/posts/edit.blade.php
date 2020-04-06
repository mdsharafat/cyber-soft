@extends('layouts.admin.master-layout')

@section('header-script')
    <link rel="stylesheet" href="{{ asset('assets/admin/css/bootstrap-select/bootstrap-select.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote.min.css" rel="stylesheet">
    <style>
        .bootstrap-select:not([class*="col-"]):not([class*="form-control"]):not(.input-group-btn) {
            width: 100%;
        }
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
                                        <h3>Edit Post</h3>
                                    </div>
                                    <div class="col-md-4 text-right">
                                        <a href="{{ url('/admin/posts') }}" title="Back"><button class="btn btn-warning primary-icon-notika waves-effect"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                                    </div>
                                </div>
                                <hr>
                                <form method="POST" action="{{ url('/admin/posts/' . $post->id) }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                                    {{ method_field('PATCH') }}
                                    {{ csrf_field() }}

                                    @include ('admin.posts.form', ['formMode' => 'edit'])

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
    <script src="{{ asset('assets/admin/js/bootstrap-select/bootstrap-select.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote.min.js"></script>
    <script>
        $(document).on('ready', function() {
            $('#summernote').summernote();
        });
    //    function readURL(input) {
    //        if (input.files && input.files[0]) {
    //            var reader = new FileReader();
    //            reader.onload = function (e) {
    //                $('#blah').attr('src', e.target.result);
    //            };
    //            reader.readAsDataURL(input.files[0]);
    //        }
    //    }
    </script>
@endsection