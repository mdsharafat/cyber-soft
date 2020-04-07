@extends('layouts.frontend.master-single-layout')

@section('main-content')
    <!-- WORK -->
    <section id="work" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="section-title">
                            <h2>Our Projects</h2>
                            <span class="line-bar">...</span>
                        </div>
                    </div>
                    @isset($projects)
                        @if($projects->count() > 0)
                            @foreach($projects as $project)
                                <div class="col-md-3 col-sm-6 mg-t-20">
                                    <div class="work-thumb">
                                        <a href="{{ asset('storage/projects/'.$project->image) }}" class="image-popup">
                                            <img src="{{ asset('storage/projects/'.$project->image) }}" class="img-responsive" alt="Work">

                                            <div class="work-info">
                                                    <h3>{{ $project->title }}</h3>
                                                    <small>{{ $project->short_desc }}</small>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    @endisset
            </div>
        </div>
    </section>
@endsection

@section('footer-script')
<script>
    $(document).on('ready', function(){
        $('.error').hide();
        $(document).on('keyup', '#email', function () {
            $('.error').hide();
        });
        $(document).on('click', '#submit', function () {
            var email = $('#email').val();
            if (IsEmail(email) == false) {
                $('#invalid_email').show();
                return false;
            } else {
                $.ajax({
                    type: 'POST',
                    url: "{{ url('/subscribe') }}",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: {
                        email: email
                    },
                    success: function (data) {
                        if (data.msg == 'success') {
                            swal("Thank You!",''+data.text+'', "success");
                            $(".close").trigger("click");
                            $("#modalSubscribeForm")[0].reset();
                        } else {
                            swal("Duplicate",''+data.msg+'', "warning");
                        }
                    }
                });
            }
        });
        function IsEmail(email) {
            var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
            if (!regex.test(email)) {
                return false;
            } else {
                return true;
            }
        }
        $(document).on('click', '.contactFormSubmit', function(){
            let name    = $('.cf-name').val();
            let email   = $('.cf-email').val();
            let message = $('.cf-message').val();
            $.ajax({
                type: 'POST',
                url: "{{ url('/contact') }}",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {
                    name: name,
                    email: email,
                    message: message
                },
                success: function (data) {
                    if (data.msg == 'yes') {
                        swal("Thank You!",''+data.text+'', "success");
                        $("#contact-form")[0].reset();
                    } else {
                        swal("Error",''+data.msg+'', "warning");
                    }
                }
            });
        });
    });
</script>
@endsection
