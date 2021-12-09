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
                            <h5 class="text-muted">About Us</h5>
                            <p>{{ $company->description }}</p>
                        </div>
                        <div class="m-t-xl">
                            <h5 class="text-muted m-t-xxl">Address</h5>
                            <p>{{ $company->address }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection()