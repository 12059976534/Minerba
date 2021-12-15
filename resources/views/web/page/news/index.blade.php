@extends('web.app')

@section('content')
<section class="shop ptb80">
    <div class="container"> 
        <ul class="nav nav-tabs">
          <li class="{{ Session::get('tab') == "all" ? "active" : ""}}"><a  href="{{ route('news-web','all') }}">All News</a></li>
          <li class="{{ Session::get('tab') == "mining-investement" ? "active" : ""}}"><a  href="{{ route('news-web','mining-investement') }}">MINING INVESTEMENT</a></li>
          <li class="{{ Session::get('tab') == "mining-opration" ? "active" : ""}}"><a  href="{{ route('news-web','mining-opration') }}">MINING OPERATION</a></li>
          <li class="{{ Session::get('tab') == "enviromental-csr-and-hse" ? "active" : ""}}"><a  href="{{ route('news-web','enviromental-csr-and-hse') }}">ENVIROMENTAL CSR AND HSE</a></li>
          <li class="{{ Session::get('tab') == "mining-regulation" ? "active" : ""}}"><a href="{{ route('news-web','mining-regulation') }}">MINING REGULATION</a></li>
        </ul>
      
        <div class="tab-content">
          <div id="home" class="tab-pane fade  {{ Session::get('tab') == "all" ? "in active" : ""}}">
            <!-- conten list -->
            @include('web.page.news.all')
            <!-- end content list -->
          </div>
          <div id="menu1" class="tab-pane fade {{ Session::get('tab') == "mining-investement" ? "in active" : ""}}">
          
            @include('web.page.news.all')
          </div>
          <div id="menu2" class="tab-pane fade {{ Session::get('tab') == "mining-opration" ? "in active" : ""}}">
            @include('web.page.news.all')
          </div>
          <div id="menu3" class="tab-pane fade {{ Session::get('tab') == "enviromental-csr-and-hse" ? "in active" : ""}}">
            @include('web.page.news.all')
          </div>
          <div id="menu4" class="tab-pane fade {{ Session::get('tab') == "mining-regulation" ? "in active" : ""}}">
            @include('web.page.news.all')
          </div>
        </div>
      </div>
</section>

@endsection