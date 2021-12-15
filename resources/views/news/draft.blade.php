@extends('layouts.app')

@section('css')
        <!-- DataTables -->
        <link href="{{ asset('assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />

        <!-- Responsive datatable examples -->
        <link href="{{ asset('assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />     

@endsection

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                @if ($message = Session::get('success'))
                <div class="alert alert-success">
                <p>{{ $message }}</p>
                </div>
                @endif

                <table id="datatable" class="table  dt-responsive nowrap"  >
                    <thead>
                    <tr>
                        <th>thumbnail</th>
                        <th>title</th>
                        <th>kategori</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody >
                        @foreach ($data as $d)
                        <tr>
                         
                            <td><img src="{{ asset('images/news/thumbnails/thumbnail_'.$d->image) }}" alt=""></td>
                            <td>{{ $d->title }}</td>
                           <td> <span class="badge bg-primary">{{ $d->name }}</span></td>
                            <td><div class="btn-group">
                              
                                <form action="{{ route('news-konfirmasi', $d->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <button type="submit" title="delete" class="btn btn-primary btn-sm  waves-effect waves-light">
                                        Konfirmasi
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
@section('script')
    <!-- Required datatable js -->
    <script src="{{ asset('assets/libs/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{ asset('assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <!-- Buttons examples -->
    <script src="{{ asset('assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{ asset('assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js')}}"></script>
    <script src="{{ asset('assets/libs/jszip/jszip.min.js')}}"></script>
    <script src="{{ asset('assets/libs/pdfmake/build/pdfmake.min.js')}}"></script>
    <script src="{{ asset('assets/libs/pdfmake/build/vfs_fonts.js')}}"></script>
    <script src="{{ asset('assets/libs/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
    <script src="{{ asset('assets/libs/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
    <script src="{{ asset('assets/libs/datatables.net-buttons/js/buttons.colVis.min.js')}}"></script>
    <!-- Responsive examples -->
    <script src="{{ asset('assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{ asset('assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js')}}"></script>

    <!-- Datatable init js -->
   <script>
       $(document).ready( function () {
  


    $('#datatable').DataTable( {
       
    } );
                
 
} );
   </script>
@endsection