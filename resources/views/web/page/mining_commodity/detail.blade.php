@extends('web.app')

@section('content') 
 
 <!-- ===== Start of Shop Cart Section ===== -->
 <section class="shop ptb80">
    <div class="container">

        <!-- Start of Row -->
        <div class="row">
            <!-- Start of Product Wrapper -->
            <div class="col-md-12 product-wrapper">

                <!-- ===== Start of Row ===== -->
                <div class="row">
                    <!-- Start of First Column -->
                    <div class="col-md-6">

                        <!-- ===== Start of Owl Slider ===== -->
                        <div class="owl-carousel product-slider">

                            <!-- Owl Item -->
                            <div class="item">
                                <div>
                                    <img src="https://awsimages.detik.net.id/visual/2018/05/07/ef341df1-188e-442f-9d92-8febfc3a3597.jpeg?w=650" alt="" class="img-responsive">
                                </div>
                            </div>

                            <!-- Owl Item -->
                            <div class="item">
                                <div>
                                    <img src="https://awsimages.detik.net.id/visual/2018/05/07/ef341df1-188e-442f-9d92-8febfc3a3597.jpeg?w=650" alt="" class="img-responsive">
                                </div>
                            </div>

                            <!-- Owl Item -->
                            <div class="item">
                                <div>
                                    <img src="https://awsimages.detik.net.id/visual/2018/05/07/ef341df1-188e-442f-9d92-8febfc3a3597.jpeg?w=650" alt="" class="img-responsive">
                                </div>
                            </div>

                        </div>
                        <!-- ===== End of Owl Slider ===== -->

                    </div>
                    <!-- End of First Column -->


                    <!-- Start of Second Column -->
                    <div class="col-md-6">

                        <!-- Start of Product Details -->
                        <div class="product-details">

                            <h2>Batu Bara</h2>

                            <!-- Start of Product Rating -->
                            <div class="product-rating mt10">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-half-o" aria-hidden="true"></i>
                            </div>
                            <!-- End of Product Rating -->

                            <!-- Start of Product Price -->
                            <div class="product-price">
                                <span class="price">Rp.2000000</span>
                            </div>
                            <!-- End of Product Price -->

                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>


                            {{-- <!-- Start of Product Quantity -->
                            <div class="product-cart mt20">
                                <div class="input-group product-quantity">
                                    <input type="button" value="-" class="minus">
                                    <input type="text" class="qty" value="1">
                                    <input type="button" value="+" class="plus">
                                </div>
                            </div>
                            <!-- End of Product Quantity --> --}}

                            <button class="btn btn-blue btn-effect mt20">Add to Cart</button>

                        </div>
                        <!-- End of Product Details -->

                    </div>
                    <!-- End of Second Column -->
                </div>
                <!-- ===== End of Row ===== -->


                <!-- ===== Start of Row ===== -->
                <div class="row mt60">
                    <div class="col-md-12">

                        <!-- Start of Tabs Product -->
                        <div class="tabs tabs-product">

                            <!-- Start of Nav Tabs -->
                            <ul class="nav nav-tabs">
                                <li class="active">
                                    <a href="#productDescription" data-toggle="tab" aria-expanded="false"><h6>Description</h6></a>
                                </li>

                                <li>
                                    <a href="#productReviews" data-toggle="tab" aria-expanded="true"><h6>Profile Pengguna</h6></a>
                                </li>
                            </ul>
                            <!-- End of Nav Tabs -->


                            <!-- Start of Tab Content -->
                            <div class="tab-content">

                                <!-- Start of Tab Pane -->
                                <div class="tab-pane active" id="productDescription">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer a odio ut tortor scelerisque dapibus ut sed leo. Suspendisse sit amet sollicitudin libero. In diam ligula, viverra ut lorem eu, eleifend fringilla risus. Suspendisse consectetur id leo vel ullamcorper. Donec faucibus nulla eu auctor ornare. Mauris malesuada, erat vitae elementum porta, justo sapien tempus ante, in convallis nibh odio vel magna. Nunc a scelerisque est. Quisque a odio vel velit interdum porta ac ac nibh. Cras risus diam, ornare quis purus eget, eleifend volutpat metus. Donec vel elit varius, cursus nisl quis, finibus lorem. Nunc vestibulum vulputate nulla, ut fringilla orci posuere sed. In tellus urna, elementum quis est quis, consectetur porttitor dui.</p>
                                </div>
                                <!-- End of Tab Pane -->


                                <!-- Start of Tab Pane -->
                                <div class="tab-pane" id="productReviews">

                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer a odio ut tortor scelerisque dapibus ut sed leo. Suspendisse sit amet sollicitudin libero. In diam ligula, viverra ut lorem eu, eleifend fringilla risus. Suspendisse consectetur id leo vel ullamcorper. Donec faucibus nulla eu auctor ornare. Mauris malesuada, erat vitae elementum porta, justo sapien tempus ante, in convallis nibh odio vel magna. Nunc a scelerisque est. Quisque a odio vel velit interdum porta ac ac nibh. Cras risus diam, ornare quis purus eget, eleifend volutpat metus. Donec vel elit varius, cursus nisl quis, finibus lorem. Nunc vestibulum vulputate nulla, ut fringilla orci posuere sed. In tellus urna, elementum quis est quis, consectetur porttitor dui.</p>

                                </div>
                                <!-- End of Tab Pane -->

                            </div>
                            <!-- End of Tab Content -->

                        </div>
                        <!-- End of Tabs Product -->

                    </div>
                </div>
                <!-- ===== End of Row ===== -->

            </div>
            <!-- End of Product Wrapper -->
        </div>
        <!-- End of Row -->
    </div>

</section>
<!-- ===== End of Shop Cart Section ===== -->
@endsection