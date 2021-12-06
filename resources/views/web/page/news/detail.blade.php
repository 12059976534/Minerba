@extends('web.app')

@section('content')
<section class="ptb80" id="blog-post">
        <div class="container">

            <!-- Start of Blog Post Content Wrapper -->
            <div class="col-md-8 col-xs-12 post-content-wrapper">

                <!-- Start of Post Title -->
                <div class="post-title">
                    <h2>{{$data->title}}</h2>
       
                    <img style="max-width: 650px;" src="{{ asset('images/news/'.$data->image) }}" alt="">
            
                    <!-- Post Details -->
                    <!-- <div class="post-detail">
                        <span><i class="fa fa-user"></i>Author</span>
                        <span><i class="fa fa-clock-o"></i>4:30</span>
                        <span><i class="fa fa-comments-o"></i>12 Comments</span>
                    </div> -->
                </div>
                <!-- End of Post Title -->

                <!-- Start of Post Content -->
                <div class="post-content">
                    
                    {!! $data->content !!}
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


            <!-- Start of Blog Sidebar -->
            <div class="col-md-4 col-xs-12 blog-sidebar">

                <!-- Start of Search -->
                <div class="col-md-12">
                    <form action="#" method="get">
                        <input type="text" class="form-control" placeholder="search...">
                    </form>
                </div>
                <!-- End of Search -->

                <!-- Start of Popular Posts -->
                <div class="col-md-12 clearfix mt40">
                    <h4 class="widget-title">popular posts</h4>
                   @foreach($related as $r)
                    <!-- Blog Post 1 -->
                    <div class="sidebar-blog-post">
                        <!-- Thumbnail -->
                        <div class="thumbnail-post">
                            <a href="blog-post-right-sidebar.html">
                                <img src="{{ asset('images/news/thumbnails/thumbnail_'.$r->image) }}" alt="">
                            </a>
                        </div>

                        <!-- Link -->
                        <div class="post-info">
                            <a href="blog-post-right-sidebar.html">{{$r->title}}</a>
                            <span>{{ \Carbon\Carbon::parse($r->created_at)->format('d/m/Y')}}<span>
                        </div>
                    </div>
                 @endforeach
                    
                </div>
                <!-- End of Popular Posts -->


                <!-- Start of Newsletter -->
                <div class="col-md-12 mt40">
                    <h4 class="widget-title">newsletter</h4>

                    <!-- Start Mailchimp Form -->
                    <form action="#" class="mailchimp" novalidate="true">
                        <div class="form-group">

                            <!-- Input -->
                            <input type="email" name="EMAIL" class="form-control" id="mc-email2" placeholder="Your Email" autocomplete="off">

                            <!-- Label - Do not delete this -->
                            <label for="mc-email2"></label>

                            <!-- Subscribe Button -->
                            <button type="submit" class="btn btn-blue btn-effect mt20">subscribe</button>
                        </div>
                    </form>
                    <!-- End of Mailchimp Form -->
                </div>
                <!-- End of Newsletter -->


                <!-- Start of Trending Tags -->
                <div class="col-md-12 mt40">
                    <h4 class="widget-title">trending tags</h4>

                    <!-- Tags Wrapper -->
                    <div class="tag-wrapper">
                        <a href="#" class="tag-link">recruitment</a>
                        <a href="#" class="tag-link">tags</a>
                        <a href="#" class="tag-link">android</a>
                        <a href="#" class="tag-link">cariera template</a>
                        <a href="#" class="tag-link">html5</a>
                        <a href="#" class="tag-link">css3</a>
                        <a href="#" class="tag-link">design</a>
                        <a href="#" class="tag-link">job board</a>
                        <a href="#" class="tag-link">envato</a>
                        <a href="#" class="tag-link">creative</a>
                        <a href="#" class="tag-link">themeforest</a>
                        <a href="#" class="tag-link">web art</a>
                    </div>
                </div>
                <!-- End of Trending Tags -->


                <!-- Start of Social Media -->
                <div class="col-md-12 mt40">
                    <h4 class="widget-title">share</h4>

                    <ul class="social-btns list-inline">
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
                            <a href="#" class="social-btn-roll instagram">
                                <div class="social-btn-roll-icons">
                                    <i class="social-btn-roll-icon fa fa-instagram"></i>
                                    <i class="social-btn-roll-icon fa fa-instagram"></i>
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

                        <!-- Social Media -->
                        <li>
                            <a href="#" class="social-btn-roll rss">
                                <div class="social-btn-roll-icons">
                                    <i class="social-btn-roll-icon fa fa-rss"></i>
                                    <i class="social-btn-roll-icon fa fa-rss"></i>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- Start of Social Media -->


                <!-- Start of Categories -->
                <div class="col-md-12 mt40">
                    <h4 class="widget-title">categories</h4>

                    <ul class="sidebar-list">
                        <li><a href="#">design</a></li>
                        <li><a href="#">tech</a></li>
                        <li><a href="#">strategy</a></li>
                        <li><a href="#">job board</a></li>
                        <li><a href="#">marketing</a></li>
                        <li><a href="#">life</a></li>
                        <li><a href="#">finance</a></li>
                    </ul>
                </div>
                <!-- End of Categories -->

                <!-- Start of Archives -->
                <div class="col-md-12 mt40">
                    <h4 class="widget-title">archives</h4>

                    <ul class="sidebar-list">
                        <li><a href="#">january</a></li>
                        <li><a href="#">february</a></li>
                        <li><a href="#">march</a></li>
                        <li><a href="#">april</a></li>
                        <li><a href="#">may</a></li>
                    </ul>
                </div>
                <!-- End of Archives -->

            </div>
            <!-- End of Blog Sidebar -->

        </div>
    </section>
@endsection