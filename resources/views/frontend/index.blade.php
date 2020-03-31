@extends('layouts.frontend.master-home-layout')

@section('main-content')
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
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.
                            </p>
                        </div>
                    </div>
            </div>
            <div class="row">
                    <div class="col-md-8 col-sm-12">
                        <div class="about-info skill-thumb">
                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                        <strong>Web Design</strong>
                                        <span class="pull-right">85%</span>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-primary" role="progressbar"
                                                aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"
                                                style="width: 85%;"></div>
                                        </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                        <strong>Photography</strong>
                                        <span class="pull-right">90%</span>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-primary" role="progressbar"
                                                aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"
                                                style="width: 90%;"></div>
                                        </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                        <strong>Content Marketing</strong>
                                        <span class="pull-right">75%</span>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-primary" role="progressbar"
                                                aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"
                                                style="width: 75%;"></div>
                                        </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                        <strong>CMS Admin</strong>
                                        <span class="pull-right">70%</span>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-primary" role="progressbar"
                                                aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"
                                                style="width: 70%;"></div>
                                        </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                        <strong>Web Design</strong>
                                        <span class="pull-right">85%</span>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-primary" role="progressbar"
                                                aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"
                                                style="width: 85%;"></div>
                                        </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                        <strong>Photography</strong>
                                        <span class="pull-right">90%</span>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-primary" role="progressbar"
                                                aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"
                                                style="width: 90%;"></div>
                                        </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                        <strong>Content Marketing</strong>
                                        <span class="pull-right">75%</span>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-primary" role="progressbar"
                                                aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"
                                                style="width: 75%;"></div>
                                        </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                        <strong>CMS Admin</strong>
                                        <span class="pull-right">70%</span>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-primary" role="progressbar"
                                                aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"
                                                style="width: 70%;"></div>
                                        </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                        <strong>Content Marketing</strong>
                                        <span class="pull-right">75%</span>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-primary" role="progressbar"
                                                aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"
                                                style="width: 75%;"></div>
                                        </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                        <strong>CMS Admin</strong>
                                        <span class="pull-right">70%</span>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-primary" role="progressbar"
                                                aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"
                                                style="width: 70%;"></div>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="about-image">
                            <img src="{{ asset('assets/frontend/images/2.jpg') }}" class="img-responsive" alt="">
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
                    <div class="col-md-4 col-sm-4">
                        <div class="service-info">
                            <div class="media-body">
                                <div class="service-icon"><i class="fa fa-cog"></i></div>
                                <h3>UX/UI Design</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="service-info">
                            <div class="media-body">
                                <div class="service-icon"><i class="fa fa-cog"></i></div>
                                <h3>Web Application with Laravel</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="service-info">
                            <div class="media-body">
                                <div class="service-icon"><i class="fa fa-cog"></i></div>
                                <h3>Wordpress Theme Customization</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="service-info">
                            <div class="media-body">
                                <div class="service-icon"><i class="fa fa-cog"></i></div>
                                <h3>Wordpress Theme Development</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="service-info">
                            <div class="media-body">
                                <div class="service-icon"><i class="fa fa-cog"></i></div>
                                <h3>Wordpress Plugins Development</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="service-info">
                            <div class="media-body">
                                <div class="service-icon"><i class="fa fa-cog"></i></div>
                                <h3>Technical Content Writing</h3>
                            </div>
                        </div>
                    </div>

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
                    <div class="col-md-6 col-sm-6">
                        <div class="media blog-thumb">
                            <div class="media-body blog-info">
                                <small class="media-blog-small"><i class="fa fa-clock-o"></i> December 22,
                                        2017</small>
                                <small class="media-blog-small pull-right"><i class="fa fa-pencil"></i> By
                                        Mohammad
                                        Sharafat Hossain</small>
                                <h3><a href="{{ url('/single-post') }}">How To Find Out Beautiful Workspace. How To
                                            Find</a></h3>
                                <a href="{{ url('/single-post') }}" class="btn section-btn">Read article</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6">
                        <div class="media blog-thumb">
                            <div class="media-body blog-info">
                                <small class="media-blog-small"><i class="fa fa-clock-o"></i> December 22,
                                        2017</small>
                                <small class="media-blog-small pull-right"><i class="fa fa-pencil"></i> By
                                        Mohammad
                                        Sharafat Hossain</small>
                                <h3><a href="{{ url('/single-post') }}">How To Find Out Beautiful Workspace. How To
                                            Find</a></h3>
                                <a href="{{ url('/single-post') }}" class="btn section-btn">Read article</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6">
                        <div class="media blog-thumb">
                            <div class="media-body blog-info">
                                <small class="media-blog-small"><i class="fa fa-clock-o"></i> December 22,
                                        2017</small>
                                <small class="media-blog-small pull-right"><i class="fa fa-pencil"></i> By
                                        Mohammad
                                        Sharafat Hossain</small>
                                <h3><a href="{{ url('/single-post') }}">How To Find Out Beautiful Workspace. How To
                                            Find</a></h3>
                                <a href="{{ url('/single-post') }}" class="btn section-btn">Read article</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6">
                        <div class="media blog-thumb">
                            <div class="media-body blog-info">
                                <small class="media-blog-small"><i class="fa fa-clock-o"></i> December 22,
                                        2017</small>
                                <small class="media-blog-small pull-right"><i class="fa fa-pencil"></i> By
                                        Mohammad
                                        Sharafat Hossain</small>
                                <h3><a href="{{ url('/single-post') }}">How To Find Out Beautiful Workspace. How To
                                            Find</a></h3>
                                <a href="{{ url('/single-post') }}" class="btn section-btn">Read article</a>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="row">
                    <div class="col-md-3 pull-right text-right">
                        <a href="{{ url('/posts') }}" class=""> <button type="button" class="btn section-btn">Show all
                                posts</button></a>
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
                            <h2>Our work</h2>
                            <span class="line-bar">...</span>
                        </div>
                    </div>
            </div>
            <div class="responsive">
                    <div class="slick-child">
                        <!-- WORK THUMB -->
                        <div class="work-thumb">
                            <a href="{{ url('assets/frontend/images/work-image1.jpg') }}" class="image-popup">
                                <img src="{{ asset('assets/frontend/images/work-image1.jpg') }}" class="img-responsive" alt="Work">

                                <div class="work-info">
                                        <h3>Clean &amp; Minimal</h3>
                                        <small>Product Design</small>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="slick-child">
                        <!-- WORK THUMB -->
                        <div class="work-thumb">
                            <a href="{{ url('assets/frontend/images/work-image2.jpg') }}" class="image-popup">
                                <img src="{{ asset('assets/frontend/images/work-image2.jpg') }}" class="img-responsive" alt="Work">

                                <div class="work-info">
                                        <h3>Studio Bag</h3>
                                        <small>Branding</small>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="slick-child">
                        <!-- WORK THUMB -->
                        <div class="work-thumb">
                            <a href="{{ url('assets/frontend/images/work-image3.jpg') }}" class="image-popup">
                                <img src="{{ asset('assets/frontend/images/work-image3.jpg') }}" class="img-responsive" alt="Work">

                                <div class="work-info">
                                        <h3>Frame Design</h3>
                                        <small>Photography</small>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="slick-child">
                        <div class="work-thumb">
                            <a href="{{ url('assets/frontend/images/work-image4.jpg') }}" class="image-popup">
                                <img src="{{ asset('assets/frontend/images/work-image4.jpg') }}" class="img-responsive" alt="Work">

                                <div class="work-info">
                                        <h3>Paint Work</h3>
                                        <small>Art, Design</small>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="slick-child">
                        <div class="work-thumb">
                            <a href="{{ url('assets/frontend/images/work-image4.jpg') }}" class="image-popup">
                                <img src="{{ asset('assets/frontend/images/work-image4.jpg') }}" class="img-responsive" alt="Work">

                                <div class="work-info">
                                        <h3>Paint Work</h3>
                                        <small>Art, Design</small>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="slick-child">
                        <div class="work-thumb">
                            <a href="{{ url('assets/frontend/images/work-image4.jpg') }}" class="image-popup">
                                <img src="{{ asset('assets/frontend/images/work-image4.jpg') }}" class="img-responsive" alt="Work">

                                <div class="work-info">
                                        <h3>Paint Work</h3>
                                        <small>Art, Design</small>
                                </div>
                            </a>
                        </div>
                    </div>

            </div>
            <br>
            <div class="row">
                    <div class="col-md-3 pull-right text-right">
                        <a href="{{ url('/projects') }}" class="">
                            <button type="button" class="btn section-btn">Show all
                                Project</button>
                        </a>
                    </div>
            </div>
        </div>
    </section>
@endsection

@section('footer-script')
    <script>
        $(document).on('ready', function () {
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
        });
    </script>
@endsection