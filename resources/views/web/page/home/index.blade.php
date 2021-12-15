@extends('web.app')


@section('content')

 <!-- ========== Start of Main Slider Section ========== -->
 <section class="main2">

<!-- ===== Start of Swiper Slider ===== -->
<div class="swiper-container">
    <div class="swiper-wrapper">

        <!-- Start of Slide 1 -->
        <div class="swiper-slide overlay-black" style="background: url('https://www.tenagaresources.co.id/wp-content/uploads/2020/07/89de622b-36a2-4b1d-8f0e-87cd71e46c1a_169.jpeg'); background-size: cover; background-position: 50% 50%;">

            <!-- Start of Slider Content -->
            <div class="slider-content container">

                <div class="col-md-6 col-md-offset-3 col-xs-12 text-center">

                    <div class="section-title">
                        <h2 class="text-white">your career start now!</h2>
                    </div>

                    <p class="text-white">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy t ext ever since the 1500s..</p>

                </div>

            </div>
            <!-- End of Slider Content -->

        </div>
        <!-- End of Slide 1 -->


        <!-- Start of Slide 2 -->
        <div class="swiper-slide overlay-black" style="background: url('https://i0.wp.com/ilmutambang.com/wp-content/uploads/2020/12/Tambang-Batubara-di-Indonesia.jpg'); background-size: cover; background-position: 50% 50%;">

            <!-- Start of Slider Content -->
            <div class="slider-content container">

                <div class="col-md-6 col-md-offset-3 col-xs-12 text-center">

                    <div class="section-title">
                        <h2 class="text-white">your career start now!</h2>
                    </div>

                    <p class="text-white">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy t ext ever since the 1500s..</p>

                </div>

            </div>
            <!-- End of Slider Content -->

        </div>
        <!-- End of Slide 2 -->


           <!-- Start of Slide 2 -->
           <div class="swiper-slide overlay-black" style="background: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTs_03HWmq1V_Q6Ksk6rtpunOGDCftBuClijw&usqp=CAU'); background-size: cover; background-position: 50% 50%;">

        <!-- Start of Slider Content -->
        <div class="slider-content container">

            <div class="col-md-6 col-md-offset-3 col-xs-12 text-center">

                <div class="section-title">
                    <h2 class="text-white">your career start now!</h2>
                </div>

                <p class="text-white">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy t ext ever since the 1500s..</p>

            </div>

        </div>
        <!-- End of Slider Content -->

    </div>
    <!-- End of Slide 2 -->

    </div>
    <!-- End of Swiper Wrapper -->

    <!-- Navigation Buttons -->
    <div class="swiper-button-prev"><i class="fa fa-angle-left"></i></div>
    <div class="swiper-button-next"><i class="fa fa-angle-right"></i></div>

</div>
<!-- ===== End of Swiper Slider ===== -->

</section>
<!-- ========== End of Main Slider Section ========== -->








<section class="blog-listing ptb80" id="version1">
        <div class="container">
            <div class="row">

                <!-- Start of Blog Posts -->
                <div class="col-md-12 col-xs-12 blog-posts-wrapper">
                    @foreach ($data as $d)
                          <!-- Start of Blog Post Article 1 -->
                    <article class="col-md-12 blog-post">

                        <!-- Blog Post Thumbnail -->
                        <div class="col-md-4 blog-thumbnail">
                            <a href="blog-post-right-sidebar.html" class="hover-link"><img src="{{ asset('images/news/'.$d->image) }}" class="img-responsive" alt=""></a>
                            <div class="date">
                                <span class="day">15</span>
                                <span class="publish-month">Mar</span>
                            </div>
                        </div>

                        <!-- Blog Post Description -->
                        <div class="col-md-8 blog-desc">
                            <h5><a href="blog-post-right-sidebar.html">{{$d->title}}</a></h5>
                            <div class="post-detail pt10 pb20">
                                <span><i class="fa fa-user"></i>Author</span>
                                <span><i class="fa fa-clock-o"></i>4:30</span>
                            </div>

                            <p>{!! Str::limit($d->content, 250) !!}</p>
                            <a href="{{ route('conten',$d->slug2) }}" class="btn btn-blue btn-effect mt10">read more</a>
                        </div>
                    </article>
                    <!-- End of Blog Post Article 1 -->
                    @endforeach
                  



                    <!-- Start of Pagination -->
                    {{-- <div class="col-md-12">
                        <ul class="pagination list-inline text-center">
                            <li class="active"><a href="javascript:void(0)">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">Next</a></li>
                        </ul>
                    </div> --}}
                    <!-- End of Pagination -->

                </div>
                <!-- End of Blog Posts -->


          

                </div>
                <!-- End of Blog Sidebar -->

            </div>
        </div>
    </section>






























@endsection()