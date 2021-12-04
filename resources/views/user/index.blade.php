@extends('layouts.app')

@section('css')
        <!-- DataTables -->
        <link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />

        <!-- Responsive datatable examples -->
        <link href="assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />     

@endsection
@section('script')
    <!-- Required datatable js -->
    <script src="assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <!-- Buttons examples -->
    <script src="assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
    <script src="assets/libs/jszip/jszip.min.js"></script>
    <script src="assets/libs/pdfmake/build/pdfmake.min.js"></script>
    <script src="assets/libs/pdfmake/build/vfs_fonts.js"></script>
    <script src="assets/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="assets/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="assets/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>
    <!-- Responsive examples -->
    <script src="assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

    <!-- Datatable init js -->
    <script src="assets/js/pages/datatables.init.js"></script> 
@endsection
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                {{-- <h4 class="card-title">Toggle states</h4>
                <p class="card-title-desc">Add <code>data-bs-toggle="button"</code>
                    to toggle a button’s <code>active</code>
                    state. If you’re pre-toggling a button, you must manually add the <code>.active</code> class
                    <strong>and</strong> <code>aria-pressed="true"</code> to the
                    <code>&lt;button&gt;</code>.
                </p> --}}

                <div class="button-items">
                    <a href="{{ route('users.create') }}" class="btn btn-primary"> <i class="mdi mdi-plus-circle-multiple"></i>  Create Users</a>
                
                </div>
            </div>
        </div>
    </div>
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                @if ($message = Session::get('success'))
                <div class="alert alert-success">
                <p>{{ $message }}</p>
                </div>
                @endif

                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>email</th>
                        <th>Position</th>
                        <th>Action</th>
                    </tr>
                    </thead>


                    <tbody>
                        @foreach ($data as $d)
                        <tr>
                            <td>{{ $d->name }}</td>
                            <td>{{ $d->email }}</td>
                            <td>  @if(!empty($d->getRoleNames()))
                                @foreach($d->getRoleNames() as $v)
                               <span class="badge bg-primary"> {{ $v }}</span>
                                @endforeach
                              @endif</td>
                          
                            <td><div class="btn-group">
                                <a href="{{ route('users.edit',$d->id) }}" class="btn btn-primary btn-sm waves-effect waves-light"><i class="ri-pencil-fill align-middle ms-2"></i> edit  </a>
                                <form action="{{ route('users.destroy', $d->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" title="delete" class="btn btn-danger btn-sm waves-effect waves-light">
                                        <i class=" ri-delete-bin-7-line align-middle ms-2"></i> delete 
                                    </button>
                                </form>  
                            </div></td>
                        </tr>
                        @endforeach
                  
                
                    </tbody>
                </table>

            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->

@endsection