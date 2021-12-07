@extends('layouts.app')

@section('content')
<div class="col-lg-12">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title"> <i class="mdi mdi-account-plus"></i> Form Product</h4>
            <p class="card-title-desc">Management Product
            </p>
        </div>
    </div>
</div>
    <form action="{{ route('Product.update',$data->id) }}" method="post">
        @csrf
        @method('PUT')
        @include('product.fields')
    </form>
@endsection