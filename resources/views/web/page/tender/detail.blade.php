@extends('web.app')

@section('content')
<section class="ptb80" id="blog-post">
        <div class="container">

            <!-- Start of Blog Post Content Wrapper -->
            <div class="col-md-12 col-xs-12 post-content-wrapper">

                <!-- Start of Post Title -->
                <div class="post-title">
                 
       
                    <img class="img-fluid" src="{{ asset('images/news/'.$data->image) }}" alt="">
                  
                 
                    <div class="post-detail">
                        <h5>Judul</h5>

                    </div>
                    <!-- Post Details -->
                    <div class="post-detail">
                        <span><i class="fa fa-user"></i>Author</span>
                        <span><i class="fa fa-clock-o"></i>4:30</span>
                    </div>
                </div>
                <!-- End of Post Title -->

                <!-- Start of Post Content -->
                <div class="post-content">
                    
                    conten
                    <!-- Start of Social Media Buttons -->
                    <ul class="social-btns list-inline mt20">
                        <!-- Social Media -->
                        <li>
                            <a href="#" class="social-btn-roll facebook">
                                <div class="social-btn-roll-icons">
                                    <i class="social-btn-roll-icon fa fa-facebook"></i>
                                    <i class="social-btn-roll-icon fa fa-facebook"></i>
                                </div>
                            </a>
                        </li>

                        <!-- Social Media -->
                        <li>
                            <a href="#" class="social-btn-roll twitter">
                                <div class="social-btn-roll-icons">
                                    <i class="social-btn-roll-icon fa fa-twitter"></i>
                                    <i class="social-btn-roll-icon fa fa-twitter"></i>
                                </div>
                            </a>
                        </li>

                        <!-- Social Media -->
                        <li>
                            <a href="#" class="social-btn-roll google-plus">
                                <div class="social-btn-roll-icons">
                                    <i class="social-btn-roll-icon fa fa-google-plus"></i>
                                    <i class="social-btn-roll-icon fa fa-google-plus"></i>
                                </div>
                            </a>
                        </li>

                        <!-- Social Media -->
                        <li>
                            <a href="#" class="social-btn-roll pinterest">
                                <div class="social-btn-roll-icons">
                                    <i class="social-btn-roll-icon fa fa-pinterest"></i>
                                    <i class="social-btn-roll-icon fa fa-pinterest"></i>
                                </div>
                            </a>
                        </li>

                        <!-- Social Media -->
                        <li>
                            <a href="#" class="social-btn-roll linkedin">
                                <div class="social-btn-roll-icons">
                                    <i class="social-btn-roll-icon fa fa-linkedin"></i>
                                    <i class="social-btn-roll-icon fa fa-linkedin"></i>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <!-- End of Social Media Buttons -->


                    <!-- Start of Blog Post Comments -->
                    
                    <!-- Start of Blog Post Comments -->

                </div>
                <!-- End of Post Content -->

            </div>
            <!-- End of Blog Post Content Wrapper -->


           

        </div>
    </section>
@endsection