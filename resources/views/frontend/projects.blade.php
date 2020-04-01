@extends('layouts.frontend.master-single-layout')

@section('main-content')
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

                    <div class="col-md-3 col-sm-6">
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

                    <div class="col-md-3 col-sm-6">
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

                    <div class="col-md-3 col-sm-6">
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

                    <div class="col-md-3 col-sm-6">
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
            </div>
            <br>
            <div class="row">
                    <div class="col-md-3 col-sm-6">
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
            </div>
        </div>
    </section>
@endsection