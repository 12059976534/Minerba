@extends('web.app')

@section('content')
<section class="shop ptb80">
    <div class="container"> 
        <ul class="nav nav-tabs">
          <li class="active"><a data-toggle="tab" href="#home">All News</a></li>
          <li><a data-toggle="tab" href="#menu1">MINING INVESTEMENT</a></li>
          <li><a data-toggle="tab" href="#menu2">MINING OPERATION</a></li>
          <li><a data-toggle="tab" href="#menu3">ENVIROMENTAL CSR AND HSE</a></li>
          <li><a data-toggle="tab" href="#menu4">MINING REGULATION</a></li>
        </ul>
      
        <div class="tab-content">
          <div id="home" class="tab-pane fade in active">
            <!-- conten list -->
            @include('web.page.news.all')
            <!-- end content list -->
          </div>
          <div id="menu1" class="tab-pane fade">
          
            @include('web.page.news.all')
          </div>
          <div id="menu2" class="tab-pane fade">
            @include('web.page.news.all')
          </div>
          <div id="menu3" class="tab-pane fade">
            @include('web.page.news.all')
          </div>
          <div id="menu4" class="tab-pane fade">
            @include('web.page.news.all')
          </div>
        </div>
      </div>
</section>

@endsection