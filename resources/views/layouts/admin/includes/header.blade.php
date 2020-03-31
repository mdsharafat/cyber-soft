<div class="header-top-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="logo-area">
                    <a href="{{ url('/dashboard') }}">CyberSoft</a>
                </div>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                <div class="header-top-menu">
                    <ul class="nav navbar-nav notika-top-nav">
                        <li class="nav-item">
                            <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><span><i class="notika-icon notika-search"></i></span></a>
                            <div role="menu" class="dropdown-menu search-dd animated flipInX">
                                <div class="search-input">
                                    <i class="notika-icon notika-left-arrow"></i>
                                    <input type="text" />
                                </div>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                <span><i class="notika-icon notika-menus"></i></span>
                            </a>
                            <div role="menu" class="dropdown-menu message-dd notification-dd animated zoomIn">
                                <div class="hd-message-info">
                                    <a href="#">
                                        <div class="hd-message-sn">
                                            <div class="hd-message-img">
                                                <img src="{{ asset('assets/frontend/images/2.jpg') }}" alt="" />
                                            </div>
                                            <div class="hd-mg-ctn">
                                                <h3>Md Sharafat Hossain</h3>
                                                <p>CEO, CyberSoft</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="hd-mg-va">
                                    <h3>
                                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                                    </h3>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>