<footer data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-12">
                <div class="footer-thumb">
                    <h2>Services</h2>
                    <ul class="footer-link">
                        @foreach($servicesObject as $service)
                            <li><a>{{ $service->name }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <div class="col-md-2 col-sm-12">
                <div class="footer-thumb">
                    <h2>Pages</h2>
                    <ul class="footer-link">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li><a href="{{ url('/posts') }}">Blog Posts</a></li>
                        <li><a href="{{ url('/projects') }}">Projects</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-sm-12">
                <div class="footer-thumb">
                    <h2>Address</h2>
                    <ul class="footer-link">
                        <li><a>{{ $companyProfileObject->address }}</a></li>
                        <li><a>Email: {{ $companyProfileObject->email }}</a></li>
                        <li><a>Phone: {{ $companyProfileObject->phone }}</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-md-4 col-sm-12">
                <div class="footer-thumb footer-info">
                    <h2>CyberSoft</h2>
                    <p>{{ $companyProfileObject->intro }}</p>
                </div>
            </div>

            <div class="col-md-12 col-sm-12">
                <div class="footer-bottom">
                    <div class="col-md-6 col-sm-5 text-center">
                        <div class="copyright-text">
                                <p>Copyright &copy; {{ $companyProfileObject->copyright }}</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-7 text-center">
                        <div class="phone-contact">
                                <p>Mail us at<span>{{ $companyProfileObject->email }}</span></p>
                        </div>
                        <ul class="social-icon">
                                <li><a href="{{ $companyProfileObject->fb_link }}"
                                        class="fa fa-facebook-square" attr="facebook icon"></a></li>
                                <li><a href="{{ $companyProfileObject->tw_link }}" class="fa fa-twitter"></a></li>
                                <li><a href="{{ $companyProfileObject->ln_link }}" class="fa fa-linkedin"></a></li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
</footer>