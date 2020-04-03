@extends('layouts.admin.master-layout')

@section('main-content')
    <div class="container">
        <div class="row" style="background: #ffffff;">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="button-div text-right mg-t-20">
                            <a href="{{ url('/admin/posts') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                            <a href="{{ url('/admin/posts/' . $post->id . '/edit') }}" title="Edit Post"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                            <form method="POST" action="{{ url('admin/posts' . '/' . $post->id) }}" accept-charset="UTF-8" style="display:inline">
                                {{ method_field('DELETE') }}
                                {{ csrf_field() }}
                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Post" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                            </form>
                        </div>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr><th>ID</th><td>{{ $post->id }}</td></tr>
                                    <tr><th> Title </th><td> <h4>{{ $post->title }}</h4></td></tr>
                                    <tr><th>Publication Status</th><td> @if($post->is_published == 0 ){{ "Draft" }} @else {{ "Published" }} @endif</td></tr>
                                    <tr><th> Slug </th><td> {{ $post->slug }} </td></tr>
                                    <tr><th> Content </th><td> {!! $post->content !!} </td></tr>
                                    <tr><th> Author </th><td> {{ $post->user->name }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
