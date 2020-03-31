@extends('layouts.frontend.master-single-layout')

@section('main-content')
    <!-- BLOG DETAIL -->
    <section id="blog-detail" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">
                    <div class="col-md-offset-1 col-md-10 col-sm-12">
                        <!-- BLOG THUMB -->
                        <div class="blog-detail-thumb">
                            <div class="blog-image">
                                <img src="{{ asset('assets/frontend/images/blog-detail-image.jpg') }}" class="img-responsive" alt="Blog Image">
                            </div>
                            <div class="author">
                                <div class="author-details">
                                        <div class="author-img">
                                            <img src="{{ asset('assets/frontend/images/2.jpg') }}" alt="author">
                                        </div>
                                        <small class="author-name">By Md Sharafat Hossain / published on December
                                            22,
                                            2017</small>
                                </div>
                            </div>
                            <h2>What makes you happy everyday?</h2>
                            <p>Lorem ipsum dolor sit amet, maecenas eget vestibulum justo imperdiet, wisi risus
                                purus augue vulputate voluptate neque, curabitur dolor libero sodales vitae elit
                                massa. Lorem ipsum dolor sit amet, maecenas eget vestibulum justo imperdiet,
                                wisi risus purus augue vulputate voluptate neque</p>

                            <blockquote>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi,
                                quisquam, aut, eum, natus excepturi impedit ipsa rerum ratione id dolores
                                ducimus minus eos veniam similique.</blockquote>

                            <p>Vivamus quis velit sed ante suscipit aliquam nec sed ex. Maecenas porta leo at mi
                                suscipit congue. Donec ipsum metus, tristique eu leo ut, luctu Vivamus sit amet
                                purus nec risus mollis tempor.</p>

                            <div class="blog-ads">
                                <h4>Blog Sample Advertising</h4>
                            </div>

                            <ul>
                                <li>Brand Identity ipsum dolor eget vestibulum justo imper diet.</li>
                                <li>Social Marketing porta leo at mi suscipit congue. Donec ipsum metus,
                                        tristique leo luctus.</li>
                                <li>Wordpress Themes augue vulputate voluptate neque, curabitur dolor vitae
                                        massa.</li>
                            </ul>
                            <p>Lorem ipsum dolor sit amet, maecenas eget vestibulum justo imperdiet, wisi risus
                                purus augue vulputate voluptate neque, curabitur dolor libero sodales vitae elit
                                massa.</p>
                            <div class="blog-social-share">
                                <h4>Share this article</h4>
                                <a href="https://www.facebook.com/templatemo" class="btn btn-primary"><i
                                            class="fa fa-facebook"></i>facebook</a>
                                <a href="#" class="btn btn-success"><i class="fa fa-twitter"></i>twitter</a>
                                <a href="#" class="btn btn-danger"><i class="fa fa-linkedin"></i>linkedin</a>
                            </div>
                        </div>
                    </div>

            </div>
        </div>
    </section>

    <!-- BLOG -->
    <section id="related-posts" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="section-title">
                            <h2>Related Posts</h2>
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
                                <h3><a href="blog-detail.html">How To Find Out Beautiful Workspace. How To
                                            Find</a></h3>
                                <a href="blog-detail.html" class="btn section-btn">Read article</a>
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
                                <h3><a href="blog-detail.html">How To Find Out Beautiful Workspace. How To
                                            Find</a></h3>
                                <a href="blog-detail.html" class="btn section-btn">Read article</a>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="row">
                    <div class="col-md-3 pull-right text-right">
                        <a href="all-blog.html" class=""> <button type="button" class="btn section-btn">Show all
                                posts</button></a>
                    </div>
            </div>
        </div>
    </section>
@endsection