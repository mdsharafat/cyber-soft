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
                            <form class="search-form" action="{{ url('/search-post') }}" method="post">
                                @csrf
                                <input type="text" class="textbox" name="keyword" placeholder="Search">
                                <input title="Search" value="" type="submit" class="button">
                            </form>
                        </div>
                        <br>
                        <br>
                        <br>
                        <div class="categories widget">
                            <h3 class="widget-head">Categories</h3>
                            @if($categories->count() > 0)
                                <ul>
                                    @foreach($categories as $category)
                                        <li>
                                            <a style="display: block;" href="{{ url('/category/'.$category->slug) }}">{{ $category->title }} <span class="badge">1</span> </a>
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            @if($postByTag->posts->count() > 0)
                                @foreach($postByTag->posts as $post)
                                    <div class="col-md-12 col-sm-12">
                                        <div class="media blog-thumb">
                                            <div class="media-body blog-info">
                                                <small class="media-blog-small"><i class="fa fa-clock-o"></i> {{ \Carbon\Carbon::parse($post->created_at)->isoFormat('MMMM Do YYYY, h:mm:ss a') }}</small>
                                                <small class="media-blog-small pull-right"><i class="fa fa-eye"></i>{{ $post->view_count }}</small>
                                                <h3><a href="{{ url('/post/'.$post->slug) }}">{{ $post->title }}</a></h3>
                                                <p>{!! \Illuminate\Support\Str::words($post->short_desc, 10,'....')  !!}</p>
                                                <div class="row">
                                                    <div class="col-md-6 pull-left">
                                                        <a href="{{ url('/post/'.$post->slug) }}" target="__blank" class="btn section-btn">Read article</a>
                                                    </div>
                                                    <div class="col-md-6 pull-right">
                                                        <small class="mg-t-20"><img class="front-author-img" src="{{ asset('storage/users/'.$post->user->pro_pic) }}"> &nbsp; {{ $post->user->name }}</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <h2 class="text-center"> Sorry, No post available.</h2>
                            @endif
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