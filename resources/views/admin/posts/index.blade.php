@extends('layouts.admin.master-layout')

@section('header-script')
    <link rel="stylesheet" href="{{ asset('assets/admin/css/jquery.dataTables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/css/wave/button.css') }}">
@endsection

@section('main-content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="data-table-area">
                            @if(Session::has('flash_message'))
                                <h4 class="text-success text-center">{{ Session::get('flash_message') }}</h4>
                            @endif
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="data-table-list">
                                        <div class="basic-tb-hd">
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <h2>Post Lists</h2>
                                                </div>
                                                <div class="col-md-4 text-right">
                                                    <a href="{{ url('/admin/posts/create') }}" class="btn btn-success btn-sm" title="Add New Post">
                                                        <i class="fa fa-plus" aria-hidden="true"></i> Add New
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="table-responsive">
                                            <table id="data-table-basic" class="table table-striped" style="width: 1800px;">
                                                <thead>
                                                    <tr>
                                                        <th>SN</th>
                                                        <th>Title</th>
                                                        <th>Slug</th>
                                                        <th>Author</th>
                                                        <th>Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($posts as $item)
                                                        <tr>
                                                            <td>{{ $loop->iteration }}</td>
                                                            <td>@isset($item->title) {{ $item->title }} @endisset</td>
                                                            <td>@isset($item->slug){{ $item->slug }} @endisset</td>
                                                            <td>@isset($item->user_id){{ $item->user->name }} @endisset</td>
                                                            <td>
                                                                @if($item->is_published == 0)<a href="{{ url('/admin/posts/publish/' . $item->id) }}" title="Publish"><button class="btn btn-lightgreen lightgreen-icon-notika waves-effect"><i class="notika-icon notika-checked"></i></button></a> @endif
                                                                @if($item->is_email_sent == 0)<a href="{{ url('/admin/A-l23VtZ-dskR54-8/send-email-to-subscriber/' . $item->id) }}" title="Send Mail"><button class="btn btn-teal teal-icon-notika waves-effect"><i class="notika-icon notika-mail"></i></button></a> @endif
                                                                <a href="{{ url('/admin/posts/' . $item->id) }}" title="View Post"><button class="btn btn-success success-icon-notika waves-effect"><i class="notika-icon notika-eye"></i></button></a>
                                                                <a href="{{ url('/admin/posts/' . $item->id . '/edit') }}" title="Edit Post"><button class="btn btn-primary primary-icon-notika waves-effect"><i class="notika-icon notika-edit"></i></button></a>
                                                                
                                                                <form method="POST" action="{{ url('/admin/posts' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                                    {{ method_field('DELETE') }}
                                                                    {{ csrf_field() }}
                                                                    <button type="submit" class="btn btn-danger danger-icon-notika waves-effect" title="Delete Post" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                                                </form>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer-script')
    <script src="{{ asset('assets/admin/js/data-table/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/data-table/data-table-act.js') }}"></script>
@endsection