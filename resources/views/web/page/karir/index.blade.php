@extends('web.app')

@section('content')

    <section class="shop ptb80">
        <div class="container"> 
            <ul class="nav nav-tabs">
              <li class="active"><a data-toggle="tab" href="#home">job Vacansi</a></li>
              <li><a data-toggle="tab" href="#menu1">Employee Database</a></li>
              <li><a data-toggle="tab" href="#menu2">Traning Course</a></li>
            </ul>
          
            <div class="tab-content">
              <div id="home" class="tab-pane fade in active">
                @include('web.page.karir.job.index')
              </div>
              <div id="menu1" class="tab-pane fade">
              
                <form class="job-search-form row pt40" action="#" method="get">
   
                  <!-- Start of keywords input -->
                  <div class="col-md-3 col-sm-12 search-keywords">
                      <label for="search-keywords">Keywords</label>
                      <input type="text" name="search-keywords" id="search-keywords" placeholder="Keywords">
                  </div>
  
                  <!-- Start of category input -->
                  <div class="col-md-3 col-sm-12 search-categories">
                      <label for="search-categories">Category</label>
                      <select name="search-categories" class="selectpicker" id="search-categories" data-live-search="true" title="Any Category" data-size="5" data-container="body">
                          <option value="1">Accountance</option>
                          <option value="2">Banking</option>
                          <option value="3">Design & Art</option>
                          <option value="4">Developement</option>
                          <option value="5">Insurance</option>
                          <option value="6">IT Engineer</option>
                          <option value="7">Healthcare</option>
                          <option value="8">Marketing</option>
                          <option value="9">Management</option>
                      </select>
                  </div>
  
                  <!-- Start of location input -->
                  <div class="col-md-4 col-sm-12 search-location">
                      <label for="search-location">Location</label>
                      <input type="text" name="search-location" id="search-location" placeholder="Location">
                  </div>
  
                  <!-- Start of submit input -->
                  <div class="col-md-2 col-sm-12 search-submit">
                      <button type="submit" class="btn btn-blue btn-effect btn-large"><i class="fa fa-search"></i>search</button>
                     
                    </div>
  
              </form>
           

              
              @include('web.page.karir.employe.index')
              </div>
              <div id="menu2" class="tab-pane fade">
                @include('web.page.karir.traning.index')
              </div>
            </div>
          </div>
    </section>


    
    
      

@endsection