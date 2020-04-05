<section id="contact" data-stellar-background-ratio="0.5">
    <div class="container">
        @if(Session::has('flash_message'))
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
        @endif
        <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="section-title">
                        <h2>Contact us</h2>
                        <span class="line-bar">...</span>
                    </div>
                </div>

                <div class="col-md-8 col-sm-8">
                    <!-- CONTACT FORM HERE -->
                    <form id="contact-form" role="form" action="{{ url('/contact') }}" method="post">
                        @csrf
                        <div class="col-md-6 col-sm-6">
                            <input type="text" class="form-control" placeholder="Full Name" id="cf-name"
                                    name="name" required="required">
                        </div>

                        <div class="col-md-6 col-sm-6">
                            <input type="email" class="form-control" placeholder="Your Email" id="cf-email"
                                    name="email" required="reqiured">
                        </div>

                        <div class="col-md-12 col-sm-12">
                            <textarea class="form-control" rows="6" placeholder="Your requirements"
                                    id="cf-message" name="message" required="required"></textarea>
                        </div>

                        <div class="col-md-4 col-sm-12">
                            <input type="submit" class="form-control" name="submit" value="Send Message">
                        </div>

                    </form>
                </div>

                <div class="col-md-4 col-sm-4">
                    <div class="google-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3647.3030413476204!2d100.5641230193719!3d13.757206847615207!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf51ce6427b7918fc!2sG+Tower!5e0!3m2!1sen!2sth!4v1510722015945"
                            allowfullscreen></iframe>
                    </div>
                </div>

        </div>
    </div>
</section>