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
                            <h5 class="text-muted">Tambah Tenaga Ahli</h5>
                            <form action="{{ route('expert.store') }}" method="post" class="m-t-lg">
                                @csrf
                                @if ($message = Session::get('warning'))
                                    <div class="alert alert-warning mb-2">{{ $message }}</div>
                                @endif
                                @include('web.page.expert.field')
                                <div class="row m-b">
                                    <div class="col-md-3" style="padding-top:10px"></div>
                                    <div class="col-md-7">
                                        <button class="btn btn-primary">Save</button>
                                        <a href="{{ route('expert.index') }}" class="btn btn-danger">Cancel</a>
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