@extends('layouts.admin.master-layout')

@section('main-content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @if ($errors->any())
                    <ul class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif

                <div class="form-element-list">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-8">
                                <h3>Add Skill</h3>
                            </div>
                            <div class="col-md-4 text-right">
                                <a href="{{ url('/admin/skills') }}" title="Back"><button class="btn btn-warning primary-icon-notika waves-effect"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                            </div>
                        </div>
                        <hr>
                        <form method="POST" action="{{ url('/admin/skills') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            @include ('admin.skills.form', ['formMode' => 'create'])
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
