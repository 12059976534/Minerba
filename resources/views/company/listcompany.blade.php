{{-- <div class="col-lg-12">
    <div class="card">
        <div class="card-body">
            <div class="button-items">
                <a href="{{ route('educations.create') }}" class="btn btn-primary"> <i class="mdi mdi-plus-circle-multiple"></i>  Create Company</a>
            
            </div>
        </div>
    </div>
</div> --}}
<div class="col-12">
    <div class="card">
        <div class="card-body">
            @if ($message = Session::get('success'))
            <div class="alert alert-success">
            <p>{{ $message }}</p>
            </div>
            @endif

            <table id="datatable" class="table dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;" >
                <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Npwp</th>
                    <th>Nib</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody >
                    @foreach ($data as $d)
                    <tr>
                       <td></td>
                       <td>{{ $d->name }}</td>
                       <td>{{ $d->npwp }}</td>
                       <td>{{ $d->nib }}</td>
                        <td><div class="btn-group">
                            <form action="{{ route('educations.destroy',$d['id']) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit"  title="delete" class="btn btn-primary btn-sm waves-effect waves-light">
                                    <i class="ri-eye-fill"></i> detail
                                </button>
                            </form>
                        </div></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
</div>