<div class="mobile-menu-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="mobile-menu">
                    <nav id="dropdown">
                        <ul class="mobile-menu-nav">
                            <li><a href="{{ url('/dashboard') }}">Home</a>
                            </li>
                            <li><a data-toggle="collapse" data-target="#demoevent">Contact</a>
                                <ul id="demoevent" class="collapse dropdown-header-top">
                                    <li><a href="{{ url('/admin/contact-messages') }}">Inbox</a>
                                    </li>
                                    <li><a href="{{ url('/admin/archived-contact-messages') }}">Archived</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a data-toggle="collapse" data-target="#democrou">Posts</a>
                                <ul id="democrou" class="collapse dropdown-header-top">
                                    <li><a href="{{ url('/admin/posts/create') }}">Create</a>
                                    </li>
                                    <li><a href="{{ url('/admin/posts') }}">Index</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a data-toggle="collapse" data-target="#demolibra">Subscription</a>
                                <ul id="demolibra" class="collapse dropdown-header-top">
                                    <li><a href="{{ url('/admin/subscriber-lists') }}">Index</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a data-toggle="collapse" data-target="#demodepart">Comments</a>
                                <ul id="demodepart" class="collapse dropdown-header-top">
                                    <li><a href="{{ url('/admin/approved-comments') }}">Approved List</a>
                                    </li>
                                    <li><a href="{{ url('/admin/pending-comments') }}">Pending List</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a data-toggle="collapse" data-target="#demo">Others</a>
                                <ul id="demo" class="collapse dropdown-header-top">
                                    <li><a href="{{ url('admin/categories') }}">Categories</a>
                                    </li>
                                    <li><a href="{{ url('admin/skills') }}">Skills</a>
                                    </li>
                                    <li><a href="{{ url('admin/services') }}">Services</a>
                                    </li>
                                    <li><a href="{{ url('admin/tags') }}">Tags</a>
                                    </li>
                                    <li><a href="{{ url('admin/company-profile') }}">Company Profile</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a data-toggle="collapse" data-target="#Miscellaneousmob">Account</a>
                                <ul id="Miscellaneousmob" class="collapse dropdown-header-top">
                                    <li><a href="{{ url('admin/C127Wp-aqlg-SZ/change-my-password') }}">Change Password</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>