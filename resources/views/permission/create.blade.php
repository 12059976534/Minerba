@extends('layouts.app')

@section('content')
<div class="col-lg-12">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title"> <i class="mdi mdi-account-plus"></i> Form Permission</h4>
            <p class="card-title-desc">Management Permission
            </p>
        </div>
    </div>
</div>
    <form action="{{ route('permission.store') }}" method="post">
        @csrf
        @include('permission.fields')
    </form>
@endsection