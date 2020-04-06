<section id="home" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">

                <div class="col-md-6 col-sm-12">
                    <div class="home-info">
                        <h1>
                            {{ $companyProfileObject->moto }}
                        </h1>
                        <a href="#contact" class="btn section-btn smoothScroll">Start a project</a>
                        <span>
                            Send us email at {{ $companyProfileObject->email }}
                            <small>For any inquiry</small>
                        </span>
                    </div>
                </div>

                <div class="col-md-6 col-sm-12">
                    <div class="home-video">
                        <div class="embed-responsive embed-responsive-16by9">
                            {{-- <iframe src="https://www.youtube.com/embed/AqcjdkPMPJA" frameborder="0"
                                    allowfullscreen></iframe> --}}
                        </div>
                    </div>
                </div>

        </div>
    </div>
</section>