@extends('layouts.app')

@section('content')
<div class="col-lg-12">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title"> <i class="mdi mdi-account-plus"></i> Form Roles</h4>
            <p class="card-title-desc">Management Roles
            </p>
        </div>
    </div>
</div>
    <form action="{{ route('roles.store') }}" method="post">
        @csrf
        @include('role.fields')
    </form>
@endsection