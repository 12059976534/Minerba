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
                                Bidang Kerja
                                <a href="{{ route('job-field.create') }}" class="btn btn-primary btn-sm pull-right">Tambah</a>
                            </h5>
                            @if ($message = Session::get('success'))
                                <div class="alert alert-success m-t-lg m-b">{{ $message }}</div>
                            @endif
                            <div class="m-t-lg">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>Bidang Kerja</th>
                                            <th>Keterangan</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php $no = 0; @endphp
                                        @foreach ($job_fields as $jf)
                                            @php
                                                $no++;
                                            @endphp
                                            <tr>
                                                <td>{{ $no }}</td>
                                                <td>{{ $jf->name }}</td>
                                                <td>{{ $jf->description }}</td>
                                                <td>
                                                    <a href="{{ route('job-field.edit', $jf->id) }}" class="text-primary"><i class="fa fa-edit"></i></a>
                                                    <a href="javascript:void(0)" class="text-danger btn-delete"><i class="fa fa-trash"></i></a>
                                                    <form action="{{ route('job-field.destroy', $jf->id) }}" class="form-delete" method="post">
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