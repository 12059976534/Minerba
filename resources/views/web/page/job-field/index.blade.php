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
                            </h5>
                            <div class="m-t m-b"><a href="{{ route('job-field.create') }}" class="btn btn-primary btn-sm">Tambah</a></div>
                            @if ($message = Session::get('success'))
                                <div class="alert alert-success mb-2">{{ $message }}</div>
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
                                                    <a href="javascript:void(0)" class="text-danger"><i class="fa fa-trash"></i></a>
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