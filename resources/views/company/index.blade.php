@extends('layouts.app')

@section('css')
        <!-- DataTables -->
        <link href="{{ asset('assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />

        <!-- Responsive datatable examples -->
        <link href="{{ asset('assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />     

@endsection

@section('content')
@include('Kategory_Comudity.modal')
<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">

                <h4 class="card-title">Management Company</h4>
                <p class="card-title-desc"></p>

                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link {{ Session::get('tab') == "company" ? "active" : ""}}"  href="{{ route('company') }}" role="tab">
                            <i class="ri-building-4-line"></i> <span class="d-none d-md-inline-block">Company</span> 
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Session::get('tab') == "companyunconfirm" ? "active" : ""}} " href="{{ route('company-unconfirm') }}" role="tab">
                            <i class="ri-building-4-line"></i> <span class="d-none d-md-inline-block">UnConfirm Company</span>
                        </a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content p-3">
                    <div class="tab-pane {{ Session::get('tab') == "company" ? "active" : ""}}" id="home" role="tabpanel">
                      @include('company.listcompany')
                    </div>
                    <div class="tab-pane {{ Session::get('tab') == "companyunconfirm" ? "active" : ""}}" id="profile" role="tabpanel">
                        @include('company.listUnconfirm')
                    </div>
                  
                </div>

            </div>
        </div>
    </div>
    <!-- end col -->
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
        "fnRowCallback": function( nRow, aData, iDisplayIndex, iDisplayIndexFull ) {
        $('td:eq(0)', nRow).html(iDisplayIndexFull +1);
    }
    } );


    $('#datatable1').DataTable( {
        "fnRowCallback": function( nRow, aData, iDisplayIndex, iDisplayIndexFull ) {
        $('td:eq(0)', nRow).html(iDisplayIndexFull +1);
    }
    } );
                
 
} );
   </script>
@endsection