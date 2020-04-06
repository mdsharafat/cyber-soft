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
                                                <div class="col-md-12">
                                                    <h2>Company Profile</h2>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="table-responsive">
                                            <table id="data-table-basic" class="table table-striped" style="width: 4000px;">
                                                <thead>
                                                    <tr>
                                                        <th>Name</th>
                                                        <th>Moto</th>
                                                        <th>Email</th>
                                                        <th>Phone</th>
                                                        <th>Introduction Text</th>
                                                        <th>Logo</th>
                                                        <th>Pic</th>
                                                        <th>Location</th>
                                                        <th>Address</th>
                                                        <th>Copyright</th>
                                                        <th>Facebook</th>
                                                        <th>Twitter</th>
                                                        <th>Linkedin</th>
                                                        <th>Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @isset($companyProfile)
                                                        <tr>
                                                            <td>@isset($companyProfile->name){{ $companyProfile->name }} @endisset</td>
                                                            <td>@isset($companyProfile->moto) {{ $companyProfile->moto }} @endisset</td>
                                                            <td>@isset($companyProfile->email) {{ $companyProfile->email }} @endisset</td>
                                                            <td>@isset($companyProfile->phone) {{ $companyProfile->phone }} @endisset</td>
                                                            <td>@isset($companyProfile->intro) {{ $companyProfile->intro }} @endisset</td>
                                                            <td>@isset($companyProfile->logo) <img style="width: 90px; height: 60px;" src="{{ asset('storage/company-profile/'.$companyProfile->logo) }}" alt="logo"> @endisset</td>
                                                            <td>@isset($companyProfile->pro_pic) <img style="width: 90px; height: 60px;" src="{{ asset('storage/company-profile/'.$companyProfile->pro_pic) }}" alt="Pro Pic"> @endisset</td>
                                                            <td>@isset($companyProfile->location) {{ $companyProfile->location }} @endisset</td>
                                                            <td>@isset($companyProfile->address) {{ $companyProfile->address }} @endisset</td>
                                                            <td>@isset($companyProfile->copyright) {{ $companyProfile->copyright }} @endisset</td>
                                                            <td>@isset($companyProfile->fb_link) {{ $companyProfile->fb_link }} @endisset</td>
                                                            <td>@isset($companyProfile->tw_link) {{ $companyProfile->tw_link }} @endisset</td>
                                                            <td>@isset($companyProfile->ln_link) {{ $companyProfile->ln_link }} @endisset</td>
                                                            <td>
                                                                <a href="{{ url('/admin/company-profile/edit') }}" title="Edit Company Profile"><button class="btn btn-primary primary-icon-notika waves-effect"><i class="notika-icon notika-edit"></i></button></a>
                                                            </td>
                                                        </tr>
                                                    @endisset
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