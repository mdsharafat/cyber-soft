@extends('layouts.frontend.master-single-layout')

@section('header-script')
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/comment.css') }}">
@endsection

@section('main-content')
    @if(Session::has('commentMessage'))
        <script type="text/javascript">
            swal({
                title:'Success!',
                text:"{{Session::get('commentMessage')}}",
                timer:5000,
                type:'success'
            }).then((value) => {
            //location.reload();
            }).catch(swal.noop);
        </script>
    @endif

    <!-- BLOG DETAIL -->
    <section id="blog-detail" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <div class="blog-ads-vertical">
                        <h4>Open For Advertising</h4>
                    </div>
                    <div class="blog-ads-vertical">
                        <h4>Open For Advertising</h4>
                    </div>
                </div>
                <div class="col-md-10 col-sm-12">
                    <div class="blog-detail-thumb">
                        <div class="blog-ads">
                            <h4>Open For Advertising</h4>
                        </div>
                        <div class="author">
                            <div class="author-details">
                                    <div class="author-img">
                                        <img src="{{ asset('assets/frontend/images/2.jpg') }}" alt="author">
                                    </div>
                                    <small class="author-name">By {{ $post->user->name }} / published on {{ \Carbon\Carbon::parse($post->created_at)->isoFormat('MMMM Do YYYY, h:mm:ss a') }}</small>
                            </div>
                        </div>
                        <h2>{{ $post->title }}</h2>
                            {!! $post->content !!}
                        <div class="post-related-tag">
                            @foreach($post->tags as $tag)
                                <a href="{{ url('tag/'.$tag->slug) }}"><span class="badge tag-span">{{ $tag->title }}</span></a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- BLOG -->
    @if($relatedPosts->count() > 0)
    <section id="related-posts" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="section-title">
                        <h2>Related Posts</h2>
                        <span class="line-bar">...</span>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($relatedPosts as $relatedPost)
                    <div class="col-md-6 col-sm-6">
                            <div class="media blog-thumb">
                                <div class="media-body blog-info">
                                    <small style="display: inline-block;"><i class="fa fa-clock-o"></i> {{ \Carbon\Carbon::parse($relatedPost->created_at)->isoFormat('MMMM Do YYYY, h:mm:ss a') }}</small>
                                    <small style="display: inline-block;" class="media-blog-small pull-right"><i class="fa fa-eye"></i>{{ $relatedPost->view_count }}</small>
                                    <h3 class="blog-heading"><a href="{{ url('/post/'.$relatedPost->slug) }}">{{ $relatedPost->title }}</a></h3>
                                    <p>{!! \Illuminate\Support\Str::words($relatedPost->short_desc, 10,'....')  !!}</p>
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6 col-xs-6 pull-left">
                                            <a href="{{ url('/post/'.$relatedPost->slug) }}" target="__blank" class="btn section-btn">Read article</a>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-6 pull-right">
                                            <small class="mg-t-20"><img class="front-author-img" src="{{ asset('storage/users/'.$relatedPost->user->pro_pic) }}"> &nbsp; {{ $relatedPost->user->name }}</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                @endforeach
            </div>
            <div class="row">
                    <div class="col-md-3 pull-right text-right">
                        <a href="{{ url('/posts') }}" class=""> <button type="button" class="btn section-btn">Show all posts</button></a>
                    </div>
            </div>
        </div>
    </section>
    @endif

    <!-- BLOG -->
    <section id="comment-box" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="section-title">
                        <h2>Leave a comment</h2>
                        <span class="line-bar">...</span>
                    </div>
                </div>
            </div>
            <div class="row bootstrap snippets">
                <div class="col-md-12 col-sm-12">
                    <div class="comment-wrapper">
                        <div class="panel panel-info">
                            <div class="panel-body">
                                <div class="main-comment-form">
                                    <p class="comment-note text-left"><span class="text-danger">*</span>We will not publish your email address.</p>
                                    <form id="comment-form" class="comment-form" enctype="multipart/form-data">
                                        <input type="hidden" class="post-name" name="post" value="{{ $post->slug }}">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <input type="text" class="form-control cm-name" placeholder="Name" id="cm-name" name="name" required="required">
                                            </div>
                                            <div class="col-md-6">
                                                <input type="email" class="form-control cm-email" placeholder="Email" id="cm-name" name="email" required="required">
                                            </div>
                                        </div>
                                        <br>
                                        <textarea class="form-control cm-comment" required placeholder="Write a comment..." rows="5" name="comment"></textarea>
                                        <br>
                                        <button type="button" class="btn section-btn pull-right submit-comment">Submit</button>
                                    </form>
                                </div>
                                <div class="clearfix"></div>
                                <hr>
                                <ul class="media-list">
                                    @foreach($post->comments as $comment)
                                        @if($comment->is_pending == 0)
                                            <li class="media">
                                                <a href="#" class="pull-left">
                                                    <img src="{{ asset('assets/frontend/images/commenters.jpg') }}" alt="" class="img-circle">
                                                </a>
                                                <div class="media-body">
                                                    <span class="text-muted pull-right">
                                                        <small class="text-muted">{{ \Carbon\Carbon::parse($comment->created_at)->isoFormat('MMMM Do YYYY, h:mm:ss a') }}</small>
                                                    </span>
                                                    <div class="text-left">
                                                        <strong class="text-success">{{ $comment->commenter->name }}</strong>
                                                        <p class="">{{ $comment->comment }}</p>
                                                    </div>
                                                </div>
                                            </li>
                                        @endif
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('footer-script')
<script>
    $(document).on('ready', function(){
        $('#file-upload').change(function() {
            var filepath = this.value;
            var m = filepath.match(/([^\/\\]+)$/);
            var filename = m[1];
            $('#filename').html(filename);

        });
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
        $(document).on('click', '.submit-comment', function(){
            let name    = $('.cm-name').val();
            let email   = $('.cm-email').val();
            let comment = $('.cm-comment').val();
            let post    = $('.post-name').val();

            $.ajax({
                type: 'POST',
                url: "{{ url('/comment') }}",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {
                    name: name,
                    email: email,
                    comment: comment,
                    post: post
                },
                success: function (data) {
                    if (data.msg == 'comment-success') {
                        swal("Thank You!",''+data.text+'', "success");
                        $("#comment-form")[0].reset();
                    } else {
                        swal("Error",''+data.msg+'', "warning");
                    }
                }
            });

        })
    });
</script>
<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5e8be88eea77955a"></script>
@endsection