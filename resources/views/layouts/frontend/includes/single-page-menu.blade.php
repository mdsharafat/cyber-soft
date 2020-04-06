<section class="navbar custom-navbar navbar-fixed-top" role="navigation">
    <div class="container">

        <div class="navbar-header">
                <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
                </button>

                <!-- lOGO TEXT HERE -->
                <a href="{{ url('/') }}" class="navbar-brand">CyberSoft</a>
        </div>

        <!-- MENU LINKS -->
        <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-nav-first">
                    <li><a href="{{ url('/') }}" class="smoothScroll">Home</a></li>
                    <li><a href="{{ url('/posts') }}">Posts</a></li>
                    <li><a href="{{ url('/projects') }}">Projects</a></li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li class="section-btn subscribe-btn" data-toggle="modal" data-target="#modal-form">
                        Subscribe</li>
                </ul>
        </div>

    </div>
</section>