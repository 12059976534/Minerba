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
                            <form action="{{ route('my-company.update') }}" method="post" class="m-t-lg">
                                @method('PUT')
                                @csrf
                                @if ($message = Session::get('warning'))
                                    <div class="alert alert-warning mb-2">{{ $message }}</div>
                                @endif
                                <div class="row m-b">
                                    <div class="col-xs-3" style="padding-top:10px">
                                        <label for="company-name">Nama Perusahaan</label>
                                    </div>
                                    <div class="col-xs-7">
                                        <input type="text" name="name" id="company-name" class="form-control" value="{{ $company->name }}" required>
                                    </div>
                                </div>
                                <div class="row m-b">
                                    <div class="col-xs-3" style="padding-top:10px">
                                        <label for="category">Kategori Perusahaan</label>
                                    </div>
                                    <div class="col-xs-7">
                                        <input type="text" name="category" id="category" class="form-control" value="{{ $company->category }}" required>
                                    </div>
                                </div>
                                <div class="row m-b">
                                    <div class="col-xs-3" style="padding-top:10px">
                                        <label for="company-email">Email Perusahaan</label>
                                    </div>
                                    <div class="col-xs-7">
                                        <input type="email" name="email" id="company-email" class="form-control" value="{{ $company->email }}" required>
                                    </div>
                                </div>
                                <div class="row m-b">
                                    <div class="col-xs-3" style="padding-top:10px">
                                        <label for="npwp">NPWP</label>
                                    </div>
                                    <div class="col-xs-7">
                                        <input type="text" name="npwp" id="npwp" class="form-control" value="{{ $company->npwp }}" required>
                                    </div>
                                </div>
                                <div class="row m-b">
                                    <div class="col-xs-3" style="padding-top:10px">
                                        <label for="nib">NIB</label>
                                    </div>
                                    <div class="col-xs-7">
                                        <input type="text" name="nib" id="nib" class="form-control" value="{{ $company->nib }}" required>
                                    </div>
                                </div>
                                <div class="row m-b">
                                    <div class="col-xs-3" style="padding-top:10px">
                                        <label for="telephone">Telephone</label>
                                    </div>
                                    <div class="col-xs-7">
                                        <input type="text" name="telephone" id="telephone" class="form-control phone-number" value="{{ $company->telephone }}" required>
                                    </div>
                                </div>
                                <div class="row m-b">
                                    <div class="col-xs-3" style="padding-top:10px">
                                        <label for="company-address">Alamat</label>
                                    </div>
                                    <div class="col-xs-7">
                                        <textarea name="address" id="company-address" class="form-control">{{ $company->address }}</textarea>
                                    </div>
                                </div>
                                <div class="row m-b">
                                    <div class="col-xs-3" style="padding-top:10px">
                                        <label for="description">Deskripsi Perusahaan</label>
                                    </div>
                                    <div class="col-xs-7">
                                        <textarea name="description" id="description" class="form-control">{{ $company->description }}</textarea>
                                    </div>
                                </div>
                                <div class="row m-b">
                                    <div class="col-md-3" style="padding-top:10px"></div>
                                    <div class="col-md-7">
                                        <button class="btn btn-primary">Save</button>
                                        <a href="{{ route('profile.index') }}" class="btn btn-danger">Cancel</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection()


@section('script')
    @include('js.cleave')
    <script>
        $(function(){
            new Cleave('.phone-number', {
                phone: true,
                phoneRegionCode: 'id',
                delimiter: '',
            });
        });
    </script>
@endsection