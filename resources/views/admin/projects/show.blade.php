@extends('layouts.admin.master-layout')

@section('main-content')
    <div class="container">
        <div class="row" style="background: #ffffff;">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="button-div text-right mg-t-20">
                            <a href="{{ url('/admin/projects') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                            <a href="{{ url('/admin/projects/' . $project->id . '/edit') }}" title="Edit Project"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                            <form method="POST" action="{{ url('admin/projects' . '/' . $project->id) }}" accept-charset="UTF-8" style="display:inline">
                                {{ method_field('DELETE') }}
                                {{ csrf_field() }}
                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Project" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                            </form>
                        </div>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr><th> Cover</th><td class="text-center"><img src="{{ asset('storage/projects/'.$project->image) }}"> </td></tr>
                                    <tr><th> ID</th><td>{{ $project->id }}</td></tr>
                                    <tr><th> Title </th><td> <h4>{{ $project->title }}</h4></td></tr>
                                    <tr><th> Url </th><td> {{ $project->url }} </td></tr>
                                    <tr><th> Short Desc </th><td> {!! $project->short_desc !!} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
