@extends('layouts.app')

@section('content')
<div class="col-lg-12">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title"> <i class="mdi mdi-account-plus"></i>Form Create educations</h4>
            <p class="card-title-desc">Management Kategori Comudity create
            </p>
        </div>
    </div>
</div>
    <form action="{{ route('educations.store') }}" method="post">
        @csrf
        @include('educations.fields')
    </form>
@endsection