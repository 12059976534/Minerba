@extends('layouts.app')

@section('content')
<div class="col-lg-12">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title"> <i class="mdi mdi-account-plus"></i>Form Create Kategori Comudity</h4>
            <p class="card-title-desc">Management Kategori Comudity create
            </p>
        </div>
    </div>
</div>
    <form action="{{ route('Kategory_comodity.store') }}" method="post">
        @csrf
        @include('Kategory_Comudity.fields')
    </form>
@endsection