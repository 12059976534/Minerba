@extends('web.app')
@section('content')
    <div class="container">
        <div class="row m-t-xxl m-b-xxl">
            <div class="col-xs-12 col-md-3">
                @include('web.sidebar-menu')
            </div>
            <div class="col-xs-12 col-md-9">
                <div class="thumbnail">
                    <div class="caption p-lg">
                        <div class="m-b-xl">
                            <h5 class="text-muted">Bio Perusahaan</h5>
                            <div class="m-t-lg">
                                @if ($message = Session::get('success'))
                                    <div class="alert alert-success mb-2">{{ $message }}</div>
                                @endif
                                <div class="row m-b m-t">
                                    <div class="col-xs-3" style="padding-top:10px">
                                        <label for="company-name">Nama Perusahaan</label>
                                    </div>
                                    <div class="col-xs-7" style="padding-top:10px">
                                        {{ $company->name }}
                                    </div>
                                </div>
                                <div class="row m-b">
                                    <div class="col-xs-3" style="padding-top:10px">
                                        <label for="category">Kategori Perusahaan</label>
                                    </div>
                                    <div class="col-xs-7" style="padding-top:10px">
                                        {{ $company->category }}
                                    </div>
                                </div>
                                <div class="row m-b">
                                    <div class="col-xs-3" style="padding-top:10px">
                                        <label for="company-email">Email Perusahaan</label>
                                    </div>
                                    <div class="col-xs-7" style="padding-top:10px">
                                        {{ $company->email }}
                                    </div>
                                </div>
                                <div class="row m-b">
                                    <div class="col-xs-3" style="padding-top:10px">
                                        <label for="npwp">NPWP</label>
                                    </div>
                                    <div class="col-xs-7" style="padding-top:10px">
                                        {{ $company->npwp }}
                                    </div>
                                </div>
                                <div class="row m-b">
                                    <div class="col-xs-3" style="padding-top:10px">
                                        <label for="nib">NIB</label>
                                    </div>
                                    <div class="col-xs-7" style="padding-top:10px">
                                        {{ $company->nib }}
                                    </div>
                                </div>
                                <div class="row m-b">
                                    <div class="col-xs-3" style="padding-top:10px">
                                        <label for="telephone">Telephone</label>
                                    </div>
                                    <div class="col-xs-7" style="padding-top:10px">
                                        {{ $company->telephone }}
                                    </div>
                                </div>
                                <div class="row m-b">
                                    <div class="col-xs-3" style="padding-top:10px">
                                        <label for="company-address">Alamat</label>
                                    </div>
                                    <div class="col-xs-7" style="padding-top:10px">
                                        {{ $company->address }}
                                    </div>
                                </div>
                                <div class="row m-b">
                                    <div class="col-xs-3" style="padding-top:10px">
                                        <label for="description">Deskripsi Perusahaan</label>
                                    </div>
                                    <div class="col-xs-7" style="padding-top:10px">
                                        {{ $company->description }}
                                    </div>
                                </div>
                                <div class="m-t-lg">
                                    <a href="{{ route('my-company.edit') }}" class="btn btn-warning"><i class="fa fa-edit"></i> Edit</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection()