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
                                <p class="text-success text-center">{{ Session::get('flash_message') }}</p>
                            @endif
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="data-table-list">
                                        <div class="basic-tb-hd">
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <h2>Pending Comments</h2>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="table-responsive">
                                            <table id="data-table-basic" class="table table-striped" style="width: 3000px;">
                                                <thead>
                                                    <tr>
                                                        <th>SN</th>
                                                        <th>Name</th>
                                                        <th>Email</th>
                                                        <th>Post</th>
                                                        <th>Comments</th>
                                                        <th>Platform</th>
                                                        <th>Browser</th>
                                                        <th>User Agent</th>
                                                        <th>Ip</th>
                                                        <th>Country</th>
                                                        <th>City</th>
                                                        <th>State</th>
                                                        <th>Post Code</th>
                                                        <th>Latitude</th>
                                                        <th>Longitute</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($comments as $item)
                                                        <tr>
                                                            <td>{{ $loop->iteration }}</td>
                                                            <td>{{ $item->commenter->name }}</td>
                                                            <td>{{ $item->commenter->email }}</td>
                                                            <td>{{ $item->post->slug }}</td>
                                                            <td>{{ $item->comment }}</td>
                                                            <td>{{ $item->platform }}</td>
                                                            <td>{{ $item->browser }}</td>
                                                            <td>{{ $item->user_agent }}</td>
                                                            <td>{{ $item->ip }}</td>
                                                            <td>{{ $item->country }}</td>
                                                            <td>{{ $item->city }}</td>
                                                            <td>{{ $item->state }}</td>
                                                            <td>{{ $item->postal_code }}</td>
                                                            <td>{{ $item->lat }}</td>
                                                            <td>{{ $item->lon }}</td>
                                                            <td>
                                                                <a href="{{ url('/admin/approve-comment/' . $item->id) }}" title="Activate"><button class="btn btn-teal teal-icon-notika waves-effect"><i class="notika-icon notika-checked"></i></button></a>
                                                                <form method="POST" action="{{ url('/delete-comment' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                                    {{ method_field('DELETE') }}
                                                                    {{ csrf_field() }}
                                                                    <button type="submit" class="btn btn-danger danger-icon-notika waves-effect" title="Delete Message" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="notika-icon notika-trash"></i></button>
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