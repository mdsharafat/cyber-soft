@extends('layouts.frontend.master-single-layout')

@section('header-script')
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/all-blog.css') }}">
@endsection

@section('main-content')
    <!-- BLOG DETAIL -->
    <section id="blog-detail" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="section-title">
                            <h2>Our Blog</h2>
                            <span class="line-bar">...</span>
                        </div>
                    </div>
            </div>
            <div class="row">
                    <div class="col-md-4">
                        <div class="search-box">
                            <form class="search-form" method="post">
                                <input type="text" class="textbox" placeholder="Search">
                                <input title="Search" value="" type="submit" class="button">
                            </form>
                        </div>
                        <br>
                        <br>
                        <br>
                        <div class="categories widget">
                            <h3 class="widget-head">Categories</h3>
                            <ul>
                                <li>
                                        <a href="">Audio</a> <span class="badge">1</span>
                                </li>
                                <li>
                                        <a href="">Gallery</a> <span class="badge">2</span>
                                </li>
                                <li>
                                        <a href="">Image</a> <span class="badge">4</span>
                                </li>
                                <li>
                                        <a href="">Standard</a> <span class="badge">2</span>
                                </li>
                                <li>
                                        <a href="">Status</a> <span class="badge">3</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <div class="media blog-thumb">
                                    <div class="media-body blog-info">
                                        <small class="media-blog-small"><i class="fa fa-clock-o"></i> December 22,
                                                2017</small>
                                        <small class="media-blog-small pull-right"><i class="fa fa-pencil"></i> By
                                                Mohammad
                                                Sharafat Hossain</small>
                                        <h3><a href="{{ url('/single-post') }}">How To Find Out Beautiful Workspace. How To
                                                    Find</a></h3>
                                        <p>Lorem ipsum dolor sit consectetur adipiscing morbi venenatis. Lorem ipsum dolor sit consectetur adipiscing morbi venenatis.</p>
                                        <a href="{{ url('/single-post') }}" class="btn section-btn">Read article</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 col-sm-12">
                                <div class="media blog-thumb">
                                    <div class="media-body blog-info">
                                        <small class="media-blog-small"><i class="fa fa-clock-o"></i> December 22,
                                                2017</small>
                                        <small class="media-blog-small pull-right"><i class="fa fa-pencil"></i> By
                                                Mohammad
                                                Sharafat Hossain</small>
                                        <h3><a href="{{ url('/single-post') }}">How To Find Out Beautiful Workspace. How To
                                                    Find</a></h3>
                                        <p>Lorem ipsum dolor sit consectetur adipiscing morbi venenatis. Lorem ipsum dolor sit consectetur adipiscing morbi venenatis.</p>
                                        <a href="{{ url('/single-post') }}" class="btn section-btn">Read article</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 col-sm-12">
                                <div class="media blog-thumb">
                                    <div class="media-body blog-info">
                                        <small class="media-blog-small"><i class="fa fa-clock-o"></i> December 22,
                                                2017</small>
                                        <small class="media-blog-small pull-right"><i class="fa fa-pencil"></i> By
                                                Mohammad
                                                Sharafat Hossain</small>
                                        <h3><a href="{{ url('/single-post') }}">How To Find Out Beautiful Workspace. How To
                                                    Find</a></h3>
                                        <p>Lorem ipsum dolor sit consectetur adipiscing morbi venenatis. Lorem ipsum dolor sit consectetur adipiscing morbi venenatis.</p>
                                        <a href="{{ url('/single-post') }}" class="btn section-btn">Read article</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 col-sm-12">
                                <div class="media blog-thumb">
                                    <div class="media-body blog-info">
                                        <small class="media-blog-small"><i class="fa fa-clock-o"></i> December 22,
                                                2017</small>
                                        <small class="media-blog-small pull-right"><i class="fa fa-pencil"></i> By
                                                Mohammad
                                                Sharafat Hossain</small>
                                        <h3><a href="{{ url('/single-post') }}">How To Find Out Beautiful Workspace. How To
                                                    Find</a></h3>
                                        <p>Lorem ipsum dolor sit consectetur adipiscing morbi venenatis. Lorem ipsum dolor sit consectetur adipiscing morbi venenatis.</p>
                                        <a href="{{ url('/single-post') }}" class="btn section-btn">Read article</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 col-sm-12">
                                <div class="media blog-thumb">
                                    <div class="media-body blog-info">
                                        <small class="media-blog-small"><i class="fa fa-clock-o"></i> December 22,
                                                2017</small>
                                        <small class="media-blog-small pull-right"><i class="fa fa-pencil"></i> By
                                                Mohammad
                                                Sharafat Hossain</small>
                                        <h3><a href="{{ url('/single-post') }}">How To Find Out Beautiful Workspace. How To
                                                    Find</a></h3>
                                        <p>Lorem ipsum dolor sit consectetur adipiscing morbi venenatis. Lorem ipsum dolor sit consectetur adipiscing morbi venenatis.</p>
                                        <a href="{{ url('/single-post') }}" class="btn section-btn">Read article</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 col-sm-12">
                                <div class="media blog-thumb">
                                    <div class="media-body blog-info">
                                        <small class="media-blog-small"><i class="fa fa-clock-o"></i> December 22,
                                                2017</small>
                                        <small class="media-blog-small pull-right"><i class="fa fa-pencil"></i> By
                                                Mohammad
                                                Sharafat Hossain</small>
                                        <h3><a href="{{ url('/single-post') }}">How To Find Out Beautiful Workspace. How To
                                                    Find</a></h3>
                                        <p>Lorem ipsum dolor sit consectetur adipiscing morbi venenatis. Lorem ipsum dolor sit consectetur adipiscing morbi venenatis.</p>
                                        <a href="{{ url('/single-post') }}" class="btn section-btn">Read article</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 col-sm-12">
                                <div class="media blog-thumb">
                                    <div class="media-body blog-info">
                                        <small class="media-blog-small"><i class="fa fa-clock-o"></i> December 22,
                                                2017</small>
                                        <small class="media-blog-small pull-right"><i class="fa fa-pencil"></i> By
                                                Mohammad
                                                Sharafat Hossain</small>
                                        <h3><a href="{{ url('/single-post') }}">How To Find Out Beautiful Workspace. How To
                                                    Find</a></h3>
                                        <p>Lorem ipsum dolor sit consectetur adipiscing morbi venenatis. Lorem ipsum dolor sit consectetur adipiscing morbi venenatis.</p>
                                        <a href="{{ url('/single-post') }}" class="btn section-btn">Read article</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 col-sm-12">
                                <div class="media blog-thumb">
                                    <div class="media-body blog-info">
                                        <small class="media-blog-small"><i class="fa fa-clock-o"></i> December 22,
                                                2017</small>
                                        <small class="media-blog-small pull-right"><i class="fa fa-pencil"></i> By
                                                Mohammad
                                                Sharafat Hossain</small>
                                        <h3><a href="{{ url('/single-post') }}">How To Find Out Beautiful Workspace. How To
                                                    Find</a></h3>
                                        <p>Lorem ipsum dolor sit consectetur adipiscing morbi venenatis. Lorem ipsum dolor sit consectetur adipiscing morbi venenatis.</p>
                                        <a href="{{ url('/single-post') }}" class="btn section-btn">Read article</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </section>

@endsection

@section('footer-script')
<script>
    $(document).on('ready', function(){
        $('.error').hide();
        $(document).on('keyup', '#email', function () {
            $('.error').hide();
        });
        $(document).on('click', '#submit', function () {
            var email = $('#email').val();
            if (IsEmail(email) == false) {
                $('#invalid_email').show();
                return false;
            } else {
                $.ajax({
                    type: 'POST',
                    url: "{{ url('/subscribe') }}",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: {
                        email: email
                    },
                    success: function (data) {
                        if (data.msg == 'success') {
                            swal("Thank You!",''+data.text+'', "success")
                        } else {
                            swal("Duplicate",''+data.msg+'', "warning");
                        }
                    }
                });
            }
        });
        function IsEmail(email) {
            var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
            if (!regex.test(email)) {
                return false;
            } else {
                return true;
            }
        }
    });
</script>
@endsection