<section class="blog-listing ptb80" id="version1">
    <div class="container">
        <div class="row">

            <!-- Start of Blog Posts -->
            <div class="col-md-12 col-xs-12 blog-posts-wrapper">

                <!-- Start of Blog Post Article 1 -->
                @foreach($data as $d)
                <article class="col-md-12 blog-post">

                    <!-- Blog Post Thumbnail -->
                    <div class="col-md-4 blog-thumbnail">
                        <a href="blog-post-right-sidebar.html" class="hover-link"><img src="{{ asset('images/news/'.$d->image) }}" class="img-responsive" alt=""></a>
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
                        </div>

                        <p>{!! Str::limit($d->content, 250) !!}</p>
                        <a href="{{ route('conten',$d->slug2) }}" class="btn btn-blue btn-effect mt10">read more</a>
                        
                    </div>
                </article>
                @endforeach
                <!-- End of Blog Post Article 1 -->

                <!-- Start of Pagination -->
                <div class="col-md-12">
                    <ul class="pagination list-inline text-center">
                        {{ $data->links() }}
                    </ul>
                </div>
                <!-- End of Pagination -->

            </div>
            <!-- End of Blog Posts -->


         
        </div>
    </div>
</section>