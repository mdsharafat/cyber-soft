<section class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content modal-popup">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">

                            <div class="col-md-12 col-sm-12">
                                    <div class="modal-title">
                                        <h2>CyberSoft</h2>
                                    </div>

                                    <!-- NAV TABS -->
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li class="active"><a href="#sign_up" aria-controls="sign_up"
                                                role="tab" data-toggle="tab">Please send us your email
                                                address</a></li>
                                    </ul>

                                    <!-- TAB PANES -->
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane fade in active" id="sign_up">
                                            <form role="form" action="">
                                                <input type="email" class="form-control email" id="email" name="email"
                                                        placeholder="Email" required>
                                                <span class="error text-danger" id="invalid_email">Email-id is invalid</span>
                                                {{-- <input type="submit" id="submit" class="form-control" value="Subscribe"> --}}
                                                <button type="button" id="submit" class="btn section-btn submit">Subscribe</button>
                                            </form>
                                        </div>
                                    </div>
                            </div>

                        </div>
                    </div>
                </div>

        </div>
    </div>
</section>