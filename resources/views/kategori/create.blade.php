@extends('layouts.app')

@section('content')
<div class="col-lg-12">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title"> <i class="mdi mdi-account-plus"></i> Form Kategori</h4>
            <p class="card-title-desc">Management Kategori
            </p>
        </div>
    </div>
</div>
    <form action="{{ route('kategori.store') }}" method="post">
        @csrf
        @include('kategori.fields')
    </form>
@endsection