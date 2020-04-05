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
                                                    <h2>Subscriber Lists</h2>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="table-responsive">
                                            <table id="data-table-basic" class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>SN</th>
                                                        <th>Email</th>
                                                        <th>Status</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($subscribers as $item)
                                                        <tr>
                                                            <td>{{ $loop->iteration }}</td>
                                                            <td>{{ $item->email }}</td>
                                                            <td>
                                                                @if($item->status == 1)
                                                                    <span class='bg-success badge'>Active</span>
                                                                @else
                                                                    <span class='bg-danger badge'>Deactivated</span>
                                                                @endif
                                                            </td>
                                                            <td>
                                                                {{-- <a href="{{ url('/admin/skills/' . $item->id . '/edit') }}" title="Edit Skill"><button class="btn btn-primary primary-icon-notika waves-effect"><i class="notika-icon notika-edit"></i></button></a>
                                                                <form method="POST" action="{{ url('/admin/skills' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                                    {{ method_field('DELETE') }}
                                                                    {{ csrf_field() }}
                                                                    <button type="submit" class="btn btn-danger danger-icon-notika waves-effect" title="Delete Skill" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="notika-icon notika-trash"></i></button>
                                                                </form> --}}
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