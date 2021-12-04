@extends('layouts.app')

@section('content')
<div class="col-lg-12">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title"> <i class="mdi mdi-account-plus"></i> Form Users</h4>
            <p class="card-title-desc">Management Users
            </p>
        </div>
    </div>
</div>
    <form action="{{ route('users.store') }}" method="post">
        @csrf
        @include('user.fields')
    </form>
@endsection