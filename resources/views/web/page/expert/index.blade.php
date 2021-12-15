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
                            <h5 class="text-muted">
                                Tenaga Ahli
                                <a href="{{ route('expert.create') }}" class="btn btn-primary btn-sm pull-right">Tambah</a>
                            </h5>
                            @if ($message = Session::get('success'))
                                <div class="alert alert-success m-b m-t-lg">{{ $message }}</div>
                            @endif
                            <div class="m-t-lg">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php $no = 0; @endphp
                                        @foreach ($experts as $ex)
                                            @php
                                                $no++;
                                            @endphp
                                            <tr>
                                                <td width="2%">
                                                    <img src="{{ asset('images/no-image.png') }}" alt="photo" style="height:125px; width:110px;object-position:center;object-fit:cover;o-onject-position:center;o-object-fit:center">
                                                </td>
                                                <td>
                                                    <table width="100%">
                                                        <tr>
                                                            <td width="15%">Nama</td>
                                                            <td width="1%"> : </td>
                                                            <td>{{ $ex->name }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Pendidikan</td>
                                                            <td> : </td>
                                                            <td>{{ isset($ex->education) ? $ex->education->name : '' }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Jabatan</td>
                                                            <td> : </td>
                                                            <td>{{ $ex->position }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td valign="top">Training</td>
                                                            <td valign="top"> : </td>
                                                            <td>{!! nl2br($ex->training) !!}</td>
                                                        </tr>
                                                        <tr>
                                                            <td valign="top">Keahlian</td>
                                                            <td valign="top"> : </td>
                                                            <td>{!! nl2br($ex->skill) !!}</td>
                                                        </tr>
                                                    </table>
                                                    <div class="m-t">
                                                        <span><a href="{{ route('expert.edit', $ex->id) }}"><i class="fa fa-edit"></i> Edit</a></span>
                                                        <span><a href="javascript:void(0)" class="btn-delete m-l"><i class="fa fa-trash"></i> Delete</a></span>
                                                    </div>
                                                    <form action="{{ route('expert.destroy', $ex->id) }}" class="form-delete" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection()

@section('script')
    <script src="{{ asset('vendors/sweetalert2/sweetalert2.all.min.js') }}"></script>
    <script>
        $(function(){
            $('.btn-delete').on('click', function(){
                var t = $(this);
                Swal.fire({
                    title: 'Apakah anda yakin?',
                    showCancelButton: true,
                    confirmButtonText: 'Ya',
                    cancelButtonText: 'Tidak',
                    icon: 'question'
                }).then((result) => {
                    if (result.isConfirmed) {
                        t.closest('tr td').find('form.form-delete').submit();
                    }
                });
            });
        });
    </script>
@endsection