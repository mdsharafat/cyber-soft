@extends('layouts.frontend.master-home-layout')

@section('main-content')
    <!-- PRE LOADER -->
    <section class="preloader">
        <div class="spinner">
            <span class="spinner-rotate"></span>
        </div>
    </section>

    <!-- ABOUT -->
    <section id="about" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="about-info">
                        <div class="section-title">
                            <h2>Let us introduce</h2>
                            <span class="line-bar">...</span>
                        </div>
                        <p>{{ $companyProfileObject->intro }}</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 col-sm-12">
                    <div class="about-info skill-thumb">
                        <div class="row">
                            @isset($skills)
                                @foreach($skills as $skill)
                                    <div class="col-md-6 col-sm-12">
                                            <strong>{{ $skill->name }}</strong>
                                            <span class="pull-right">{{ $skill->progress."%" }}</span>
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-primary" role="progressbar"
                                                    aria-valuenow="{{ $skill->progress }}" aria-valuemin="0" aria-valuemax="100"
                                                    style="width: {{ $skill->progress }}%;"></div>
                                            </div>
                                    </div>
                                @endforeach
                            @endisset
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="about-image">
                        <img src="{{ asset('storage/company-profile/'.$companyProfileObject->pro_pic) }}" class="img-responsive" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services -->
    <section id="services" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="section-title">
                        <h2>Our Services</h2>
                        <span class="line-bar">...</span>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($services as $service)
                    <div class="col-md-4 col-sm-4">
                        <div class="service-info">
                            <div class="media-body">
                                <div class="service-icon"><i class="fa fa-cog"></i></div>
                                <h3>{{ $service->name }}</h3>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- BLOG -->
    <section id="blog" data-stellar-background-ratio="0.5">
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
                @if($posts->count() > 0)
                    @foreach($posts as $post)
                        <div class="col-md-6 col-sm-6">
                            <div class="media blog-thumb">
                                <div class="media-body blog-info">
                                    <small style="display: inline-block;"><i class="fa fa-clock-o"></i> {{ \Carbon\Carbon::parse($post->created_at)->isoFormat('MMMM Do YYYY, h:mm:ss a') }}</small>
                                    <small style="display: inline-block;" class="media-blog-small pull-right"><i class="fa fa-eye"></i>{{ $post->view_count }}</small>
                                    <h3 class="blog-heading"><a href="{{ url('/post/'.$post->slug) }}">{{ $post->title }}</a></h3>
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
                    <h2>No Post Available</h2>
                @endif
            </div>
            <div class="row">
                    <div class="col-md-3 pull-right text-right">
                        @if($posts->count() > 0)
                            <a href="{{ url('/posts') }}" class=""> <button type="button" class="btn section-btn">Show all
                                posts</button></a>
                        @endif
                    </div>
            </div>
        </div>
    </section>

    <!-- WORK -->
    <section id="work" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="section-title">
                            <h2>Our Projects</h2>
                            <span class="line-bar">...</span>
                        </div>
                    </div>
            </div>
            <div class="responsive">
                @if($projects->count() > 0)
                    @foreach($projects as $project)
                        <div class="slick-child">
                            <div class="work-thumb">
                                <a href="{{ url('assets/frontend/images/work-image1.jpg') }}" class="image-popup">
                                    <img src="{{ asset('assets/frontend/images/work-image1.jpg') }}" class="img-responsive" alt="Work">

                                    <div class="work-info">
                                            <h3>{{ $proect->title }}</h3>
                                            <small>{{ $project->short_desc }}</small>
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endforeach
                @else
                    <h2>No Project Available</h2>
                @endif
            </div>
            <br>
            <div class="row">
                    <div class="col-md-3 pull-right text-right">
                        @if($projects->count() > 0)
                            <a href="{{ url('/projects') }}" class="">
                                <button type="button" class="btn section-btn">Show all
                                    Project</button>
                            </a>
                        @endif
                    </div>
            </div>
        </div>
    </section>
@endsection

@section('footer-script')
<script>
    $(document).on('ready', function () {
        // PRE LOADER
        $(window).load(function () {
            $('.preloader').fadeOut(100); // set duration in brackets    
        });
        $('.responsive').slick({
                dots: false,
                autoplay: true,
                speed: 300,
                slidesToShow: 4,
                slidesToScroll: 1,
                arrows: false,
                responsive: [
                    {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 3,
                            infinite: true,
                            dots: true
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                ]
        });
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