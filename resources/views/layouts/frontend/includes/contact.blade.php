<section id="contact" data-stellar-background-ratio="0.5">
    <div class="container">
        {{-- @if(Session::has('flash_message'))
            <script type="text/javascript">
                swal({
                    title:'Success!',
                    text:"{{Session::get('flash_message')}}",
                    timer:5000,
                    type:'success'
                }).then((value) => {
                //location.reload();
                }).catch(swal.noop);
            </script>
        @endif --}}
        <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="section-title">
                        <h2>Contact us</h2>
                        <span class="line-bar">...</span>
                    </div>
                </div>

                <div class="col-md-8 col-sm-8">
                    <!-- CONTACT FORM HERE -->
                    <form id="contact-form" role="form">
                        <div class="col-md-6 col-sm-6">
                            <input type="text" class="form-control cf-name" placeholder="Full Name" id="cf-name"
                                    name="name" required>
                        </div>

                        <div class="col-md-6 col-sm-6">
                            <input type="email" class="form-control cf-email" placeholder="Your Email" id="cf-email"
                                    name="email" required>
                        </div>

                        <div class="col-md-12 col-sm-12">
                            <textarea class="form-control cf-message" rows="6" placeholder="Your requirements"
                                    id="cf-message" name="message" required></textarea>
                        </div>

                        <div class="col-md-4 col-sm-12">
                            <button type="button" class="contactFormSubmit btn section-btn" id="contactFormSubmit" name="submit">Send Message</button>
                        </div>

                    </form>
                </div>

                <div class="col-md-4 col-sm-4">
                    <div class="google-map">
                        <iframe src="{{ $companyProfileObject->location }}"
                            allowfullscreen></iframe>
                    </div>
                </div>

        </div>
    </div>
</section>