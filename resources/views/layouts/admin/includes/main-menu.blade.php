<div class="main-menu-area mg-tb-40">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <ul class="nav nav-tabs notika-menu-wrap menu-it-icon-pro">
                    <li class="active"><a href="{{ url('/dashboard') }}" style="cursor:pointer;"><i class="notika-icon notika-house"></i> Home</a>
                    </li>
                    <li><a data-toggle="tab" href="#Contact"><i class="notika-icon notika-mail"></i> Contact</a>
                    </li>
                    <li><a data-toggle="tab" href="#Posts"><i class="notika-icon notika-edit"></i> Posts</a>
                    </li>
                    <li><a data-toggle="tab" href="#Subscription"><i class="notika-icon notika-star"></i> Subscription</a>
                    </li>
                    <li><a data-toggle="tab" href="#Comments"><i class="notika-icon notika-windows"></i> Comments</a>
                    </li>
                    <li><a data-toggle="tab" href="#Projects"><i class="notika-icon notika-form"></i> Projects</a>
                    </li>
                    <li><a data-toggle="tab" href="#Others"><i class="notika-icon notika-app"></i> Others</a>
                    </li>
                    <li><a data-toggle="tab" href="#Account"><i class="notika-icon notika-support"></i> Account</a>
                    </li>
                </ul>
                <div class="tab-content custom-menu-content">
                    <div id="Contact" class="tab-pane notika-tab-menu-bg animated flipInX">
                        <ul class="notika-main-menu-dropdown">
                            <li><a href="{{ url('/admin/contact-messages') }}">Inbox</a>
                            </li>
                            <li><a href="{{ url('/admin/archived-contact-messages') }}">Archived</a>
                            </li>
                        </ul>
                    </div>
                    <div id="Posts" class="tab-pane notika-tab-menu-bg animated flipInX">
                        <ul class="notika-main-menu-dropdown">
                            <li><a href="{{ url('/admin/posts/create') }}">Create</a>
                            </li>
                            <li><a href="{{ url('/admin/posts') }}">Index</a>
                            </li>
                        </ul>
                    </div>
                    <div id="Subscription" class="tab-pane notika-tab-menu-bg animated flipInX">
                        <ul class="notika-main-menu-dropdown">
                            <li><a href="{{ url('/admin/subscriber-lists') }}">Index</a>
                            </li>
                        </ul>
                    </div>
                    <div id="Comments" class="tab-pane notika-tab-menu-bg animated flipInX">
                        <ul class="notika-main-menu-dropdown">
                            <li><a href="{{ url('/admin/approved-comments') }}">Approved List</a>
                            </li>
                            <li><a href="{{ url('/admin/pending-comments') }}">Pending List</a>
                            </li>
                        </ul>
                    </div>
                    <div id="Projects" class="tab-pane notika-tab-menu-bg animated flipInX">
                        <ul class="notika-main-menu-dropdown">
                            <li><a href="{{ url('/admin/projects/create') }}">Add Project</a>
                            </li>
                            <li><a href="{{ url('/admin/projects') }}">Project List</a>
                            </li>
                        </ul>
                    </div>
                    <div id="Others" class="tab-pane notika-tab-menu-bg animated flipInX">
                        <ul class="notika-main-menu-dropdown">
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
                    </div>
                    <div id="Account" class="tab-pane notika-tab-menu-bg animated flipInX">
                        <ul class="notika-main-menu-dropdown">
                            <li><a href="{{ url('admin/C127Wp-aqlg-SZ/change-my-password') }}">Change Password</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>