@extends('layouts.app')

@section('content')

    <form action="{{ route('permission.update',$permission->id) }}" method="post">
        @csrf
        @include('permission.fields')
    </form>
@endsection