@extends('web.app')

@section('content')
<section class="page-header">
        <div class="container">

            <!-- Start of Page Title -->
            <div class="row">
                <div class="col-md-12">
                    <h2>Mining Investment</h2>
                </div>
            </div>
            <!-- End of Page Title -->

            <!-- Start of Breadcrumb -->
            <div class="row">
                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="#">home</a></li>
                        <li class="active">blog</li>
                        <li class="active">blog - right sidebar</li>
                    </ul>
                </div>
            </div>
            <!-- End of Breadcrumb -->
            

        </div>
    </section>


    <!-- conten list -->
    <section class="blog-listing ptb80" id="version1">
        <div class="container">
            <div class="row">

                <!-- Start of Blog Posts -->
                <div class="col-md-8 col-xs-12 blog-posts-wrapper">

                    <!-- Start of Blog Post Article 1 -->
                    @foreach($data as $d)
                    <article class="col-md-12 blog-post">

                        <!-- Blog Post Thumbnail -->
                        <div class="col-md-4 blog-thumbnail">
                            <a href="blog-post-right-sidebar.html" class="hover-link"><img src="{{ asset('images/news/thumbnails/thumbnail_'.$d->image) }}" class="img-responsive" alt=""></a>
                            <div class="date">
                                <span class="day">11</span>
                                <span class="publish-month">Mar</span>
                            </div>
                        </div>

                        <!-- Blog Post Description -->
                        <div class="col-md-8 blog-desc">
                            <h5><a href="blog-post-right-sidebar.html">{{$d->title}}</a></h5>
                            <div class="post-detail pt10 pb20">
                                <span><i class="fa fa-user"></i>Author</span>
                                <span><i class="fa fa-clock-o"></i>4:30</span>
                                <span><i class="fa fa-comments-o"></i>12 Comments</span>
                            </div>

                            <p>{!! Str::limit($d->content, 100) !!}</p>
                            <a href="{{ route('conten',$d->slug2) }}" class="btn btn-blue btn-effect mt10">read more</a>
                            
                        </div>
                    </article>
                    @endforeach
                    <!-- End of Blog Post Article 1 -->

                    <!-- Start of Pagination -->
                    <div class="col-md-12">
                        <ul class="pagination list-inline text-center">
                            <li class="active"><a href="javascript:void(0)">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">Next</a></li>
                        </ul>
                    </div>
                    <!-- End of Pagination -->

                </div>
                <!-- End of Blog Posts -->


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

                        <!-- Blog Post 1 -->
                        <div class="sidebar-blog-post">
                            <!-- Thumbnail -->
                            <div class="thumbnail-post">
                                <a href="blog-post-right-sidebar.html">
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSAvvJi6l-Qr0oGbL82CoyhzwTe38LggckRzg&usqp=CAU" alt="">
                                </a>
                            </div>

                            <!-- Link -->
                            <div class="post-info">
                                <a href="blog-post-right-sidebar.html">top 10 tips for web developers</a>
                                <span>1 day ago</span>
                            </div>
                        </div>

                        <!-- Blog Post 2 -->
                        <div class="sidebar-blog-post">
                            <!-- Thumbnail -->
                            <div class="thumbnail-post">
                                <a href="blog-post-right-sidebar.html">
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSAvvJi6l-Qr0oGbL82CoyhzwTe38LggckRzg&usqp=CAU" alt="">
                                </a>
                            </div>

                            <!-- Link -->
                            <div class="post-info">
                                <a href="blog-post-right-sidebar.html">how to prepare for an interview</a>
                                <span>2 days ago</span>
                            </div>
                        </div>

                        <!-- Blog Post 3 -->
                        <div class="sidebar-blog-post">
                            <!-- Thumbnail -->
                            <div class="thumbnail-post">
                                <a href="blog-post-right-sidebar.html">
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSAvvJi6l-Qr0oGbL82CoyhzwTe38LggckRzg&usqp=CAU" alt="">
                                </a>
                            </div>

                            <!-- Link -->
                            <div class="post-info">
                                <a href="blog-post-right-sidebar.html">freelance vs employment</a>
                                <span>3 days ago</span>
                            </div>
                        </div>

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
        </div>
    </section>
    <!-- end content list -->
@endsection