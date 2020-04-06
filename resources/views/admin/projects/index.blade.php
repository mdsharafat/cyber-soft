@extends('layouts.admin.master-layout')

@section('header-script')
    <link rel="stylesheet" href="{{ asset('assets/admin/css/jquery.dataTables.min.css') }}">
@endsection

@section('main-content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="data-table-area">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="data-table-list">
                                        <div class="basic-tb-hd">
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <h2>Project Lists</h2>
                                                </div>
                                                <div class="col-md-4 text-right">
                                                    <a href="{{ url('/admin/projects/create') }}" class="btn btn-success btn-sm" title="Add New Project">
                                                        <i class="fa fa-plus" aria-hidden="true"></i> Add New
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="table-responsive">
                                            <table id="data-table-basic" class="table table-striped" style="width: 2000px;">
                                                <thead>
                                                    <tr>
                                                        <th>SN</th>
                                                        <th>Image</th>
                                                        <th>Title</th>
                                                        <th>Short Desc</th>
                                                        <th>Url</th>
                                                        <th>Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($projects as $item)
                                                        <tr>
                                                            <td>{{ $loop->iteration }}</td>
                                                            <td>@isset($item->image) <img style="width: 50px; height: 50px;" src="{{ asset('storage/projects/'.$item->image) }}" alt="Image"> @endisset</td>
                                                            <td>{{ $item->title }}</td><td>{{ $item->short_desc }}</td><td>{{ $item->url }}</td>
                                                            <td>
                                                                <a href="{{ url('/admin/projects/' . $item->id) }}" title="View Project"><button class="btn btn-success success-icon-notika waves-effect"><i class="notika-icon notika-eye"></i></button></a>
                                                                <a href="{{ url('/admin/projects/' . $item->id . '/edit') }}" title="Edit Project"><button class="btn btn-primary primary-icon-notika waves-effect"><i class="notika-icon notika-edit"></i></button></a>
                                                                
                                                                <form method="POST" action="{{ url('/admin/projects' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                                    {{ method_field('DELETE') }}
                                                                    {{ csrf_field() }}
                                                                    <button type="submit" class="btn btn-danger danger-icon-notika waves-effect" title="Delete Project" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
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