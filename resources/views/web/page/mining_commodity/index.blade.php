@extends('web.app')

@section('content')

    <section class="shop ptb80">
        <div class="container">
            <div class="row">

                <!-- Start of Shop Product Wrapper -->
                <div class="col-md-8 col-md-push-4 col-xs-12 shop-products-wrapper">

                    <!-- Start of Products -->
                    <div class="row">

                        <!-- Start of Product 1 -->
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="product">

                                <!-- Product Image -->
                                <div class="product-image">

                                    <a href="https://awsimages.detik.net.id/visual/2018/05/07/ef341df1-188e-442f-9d92-8febfc3a3597.jpeg?w=650" class="hover-zoom">
                                        <img src="https://awsimages.detik.net.id/visual/2018/05/07/ef341df1-188e-442f-9d92-8febfc3a3597.jpeg?w=650" class="img-responsive" alt="">
                                    </a>

                                    <!-- Product overlay -->
                                    <div class="product-overlay">
                                        <a href="cart.html"><i class="fa fa-shopping-cart"></i>Beli Komoditas</a>
                                    </div>

                                </div>

                                <!-- Product Description -->
                                <div class="col-md deskripsi" style="margin: 5%;">
                                    <a href="{{ route('komoditas-detail',1) }}">
                                        <div class="name text-dark" style="color: rgb(110, 110, 110); font-weight: bold; font-size: large;">Batu Bara</div>
                                    </a>
                                    <a href="{{ route('komoditas-detail',1) }}">
                                        <div class="type" style="color: rgb(110, 110, 110); font-weight: bold;">Rp .29000000/ton</div>
                                    </a>
                                    <table>
                                        <tr >
                                            <td style="padding: 5%;">
                                                <a href="{{ route('komoditas-detail',1) }}">
                                                    <div class="tombol" style="margin-right: 12px; padding: 2%; width: 100%; background-color: rgb(105, 105, 105); border-radius: 15%;">
                                                        <div class="tx" style="font-size: 80%; color: rgb(255, 255, 255);">Batu Bara</div>
                                                    </div>
                                                </a>
                                            </td>
                                        </tr>
                                        
                                    </table>
                                    <a href="{{ route('komoditas-detail',1) }}" class="row-md-2" style="color: black;" >
                                        <i class="fa fa-map-marker fa-lg" aria-hidden="true" style="margin-top: 10px; color: coral;"></i>
                                        Jakarta Selatan
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- End of Product 1 -->


                        <!-- Start of Product 2 -->
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="product">

                                <!-- Product Image -->
                                <div class="product-image">

                                    <a href="https://awsimages.detik.net.id/visual/2018/05/07/ef341df1-188e-442f-9d92-8febfc3a3597.jpeg?w=650" class="hover-zoom">
                                        <img src="https://awsimages.detik.net.id/visual/2018/05/07/ef341df1-188e-442f-9d92-8febfc3a3597.jpeg?w=650" class="img-responsive" alt="">
                                    </a>

                                    <!-- Product overlay -->
                                    <div class="product-overlay">
                                        <a href="cart.html"><i class="fa fa-shopping-cart"></i>Beli Komoditas</a>
                                    </div>
                                    <span class="price">
                                        <span class="amount">Mataram - Lombok</span>
                                    </span>
                                </div>

                               <!-- Product Description -->
                               <div class="col-md deskripsi" style="margin: 5%;">
                                <a href="{{ route('komoditas-detail',1) }}">
                                    <div class="name text-dark" style="color: rgb(110, 110, 110); font-weight: bold; font-size: large;">Batu Bara</div>
                                </a>
                                <a href="{{ route('komoditas-detail',1) }}">
                                    <div class="type" style="color: rgb(110, 110, 110); font-weight: bold;">Rp .29000000/ton</div>
                                </a>
                                <table>
                                    <tr >
                                        <td style="padding: 5%;">
                                            <a href="{{ route('komoditas-detail',1) }}">
                                                <div class="tombol" style="margin-right: 12px; padding: 2%; width: 100%; background-color: rgb(105, 105, 105); border-radius: 15%;">
                                                    <div class="tx" style="font-size: 80%; color: rgb(255, 255, 255);">Batu Bara</div>
                                                </div>
                                            </a>
                                        </td>
                                    </tr>
                                    
                                </table>
                                <a href="{{ route('komoditas-detail',1) }}" class="row-md-2" style="color: black;" >
                                    <i class="fa fa-map-marker fa-lg" aria-hidden="true" style="margin-top: 10px; color: coral;"></i>
                                    Jakarta Selatan
                                </a>
                            </div>

                            </div>
                        </div>
                        <!-- End of Product 2 -->


                        <!-- Start of Product 3 -->
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="product">

                                <!-- Product Image -->
                                <div class="product-image">

                                    <a href="https://awsimages.detik.net.id/visual/2018/05/07/ef341df1-188e-442f-9d92-8febfc3a3597.jpeg?w=650" class="hover-zoom">
                                        <img src="https://awsimages.detik.net.id/visual/2018/05/07/ef341df1-188e-442f-9d92-8febfc3a3597.jpeg?w=650" class="img-responsive" alt="">
                                    </a>

                                    <!-- Product overlay -->
                                    <div class="product-overlay">
                                        <a href="cart.html"><i class="fa fa-shopping-cart"></i>Beli Komoditas</a>
                                    </div>

                                </div>

                                <!-- Product Description -->
                                <div class="col-md deskripsi" style="margin: 5%;">
                                    <a href="{{ route('komoditas-detail',1) }}">
                                        <div class="name text-dark" style="color: rgb(110, 110, 110); font-weight: bold; font-size: large;">Batu Bara</div>
                                    </a>
                                    <a href="{{ route('komoditas-detail',1) }}">
                                        <div class="type" style="color: rgb(110, 110, 110); font-weight: bold;">Rp .29000000/ton</div>
                                    </a>
                                    <table>
                                        <tr >
                                            <td style="padding: 5%;">
                                                <a href="{{ route('komoditas-detail',1) }}">
                                                    <div class="tombol" style="margin-right: 12px; padding: 2%; width: 100%; background-color: rgb(105, 105, 105); border-radius: 15%;">
                                                        <div class="tx" style="font-size: 80%; color: rgb(255, 255, 255);">Batu Bara</div>
                                                    </div>
                                                </a>
                                            </td>
                                        </tr>
                                        
                                    </table>
                                    <a href="{{ route('komoditas-detail',1) }}" class="row-md-2" style="color: black;" >
                                        <i class="fa fa-map-marker fa-lg" aria-hidden="true" style="margin-top: 10px; color: coral;"></i>
                                        Jakarta Selatan
                                    </a>
                                </div>

                            </div>
                        </div>
                        <!-- End of Product 3 -->

                              <!-- Start of Product 3 -->
                              <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="product">
    
                                    <!-- Product Image -->
                                    <div class="product-image">
    
                                        <a href="https://awsimages.detik.net.id/visual/2018/05/07/ef341df1-188e-442f-9d92-8febfc3a3597.jpeg?w=650" class="hover-zoom">
                                            <img src="https://awsimages.detik.net.id/visual/2018/05/07/ef341df1-188e-442f-9d92-8febfc3a3597.jpeg?w=650" class="img-responsive" alt="">
                                        </a>
    
                                        <!-- Product overlay -->
                                        <div class="product-overlay">
                                            <a href="cart.html"><i class="fa fa-shopping-cart"></i>Beli Komoditas</a>
                                        </div>
    
                                    </div>
    
                                   <!-- Product Description -->
                                   <div class="col-md deskripsi" style="margin: 5%;">
                                    <a href="{{ route('komoditas-detail',1) }}">
                                        <div class="name text-dark" style="color: rgb(110, 110, 110); font-weight: bold; font-size: large;">Batu Bara</div>
                                    </a>
                                    <a href="{{ route('komoditas-detail',1) }}">
                                        <div class="type" style="color: rgb(110, 110, 110); font-weight: bold;">Rp .29000000/ton</div>
                                    </a>
                                    <table>
                                        <tr >
                                            <td style="padding: 5%;">
                                                <a href="{{ route('komoditas-detail',1) }}">
                                                    <div class="tombol" style="margin-right: 12px; padding: 2%; width: 100%; background-color: rgb(105, 105, 105); border-radius: 15%;">
                                                        <div class="tx" style="font-size: 80%; color: rgb(255, 255, 255);">Batu Bara</div>
                                                    </div>
                                                </a>
                                            </td>
                                        </tr>
                                        
                                    </table>
                                    <a href="{{ route('komoditas-detail',1) }}" class="row-md-2" style="color: black;" >
                                        <i class="fa fa-map-marker fa-lg" aria-hidden="true" style="margin-top: 10px; color: coral;"></i>
                                        Jakarta Selatan
                                    </a>
                                </div>
    
                                </div>
                            </div>
                            <!-- End of Product 3 -->

                                  <!-- Start of Product 3 -->
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="product">

                                <!-- Product Image -->
                                <div class="product-image">

                                    <a href="https://awsimages.detik.net.id/visual/2018/05/07/ef341df1-188e-442f-9d92-8febfc3a3597.jpeg?w=650" class="hover-zoom">
                                        <img src="https://awsimages.detik.net.id/visual/2018/05/07/ef341df1-188e-442f-9d92-8febfc3a3597.jpeg?w=650" class="img-responsive" alt="">
                                    </a>

                                    <!-- Product overlay -->
                                    <div class="product-overlay">
                                        <a href="cart.html"><i class="fa fa-shopping-cart"></i>Beli Komoditas</a>
                                    </div>

                                </div>

                                 <!-- Product Description -->
                                 <div class="col-md deskripsi" style="margin: 5%;">
                                    <a href="{{ route('komoditas-detail',1) }}">
                                        <div class="name text-dark" style="color: rgb(110, 110, 110); font-weight: bold; font-size: large;">Batu Bara</div>
                                    </a>
                                    <a href="{{ route('komoditas-detail',1) }}">
                                        <div class="type" style="color: rgb(110, 110, 110); font-weight: bold;">Rp .29000000/ton</div>
                                    </a>
                                    <table>
                                        <tr >
                                            <td style="padding: 5%;">
                                                <a href="{{ route('komoditas-detail',1) }}">
                                                    <div class="tombol" style="margin-right: 12px; padding: 2%; width: 100%; background-color: rgb(105, 105, 105); border-radius: 15%;">
                                                        <div class="tx" style="font-size: 80%; color: rgb(255, 255, 255);">Batu Bara</div>
                                                    </div>
                                                </a>
                                            </td>
                                        </tr>
                                        
                                    </table>
                                    <a href="{{ route('komoditas-detail',1) }}" class="row-md-2" style="color: black;" >
                                        <i class="fa fa-map-marker fa-lg" aria-hidden="true" style="margin-top: 10px; color: coral;"></i>
                                        Jakarta Selatan
                                    </a>
                                </div>

                            </div>
                        </div>
                        <!-- End of Product 3 -->

                              <!-- Start of Product 3 -->
                              <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="product">
    
                                    <!-- Product Image -->
                                    <div class="product-image">
    
                                        <a href="https://awsimages.detik.net.id/visual/2018/05/07/ef341df1-188e-442f-9d92-8febfc3a3597.jpeg?w=650" class="hover-zoom">
                                            <img src="https://awsimages.detik.net.id/visual/2018/05/07/ef341df1-188e-442f-9d92-8febfc3a3597.jpeg?w=650" class="img-responsive" alt="">
                                        </a>
    
                                        <!-- Product overlay -->
                                        <div class="product-overlay">
                                            <a href="cart.html"><i class="fa fa-shopping-cart"></i>Beli Komoditas</a>
                                        </div>
    
                                    </div>
    
                                     <!-- Product Description -->
                                <div class="col-md deskripsi" style="margin: 5%;">
                                    <a href="{{ route('komoditas-detail',1) }}">
                                        <div class="name text-dark" style="color: rgb(110, 110, 110); font-weight: bold; font-size: large;">Batu Bara</div>
                                    </a>
                                    <a href="{{ route('komoditas-detail',1) }}">
                                        <div class="type" style="color: rgb(110, 110, 110); font-weight: bold;">Rp .29000000/ton</div>
                                    </a>
                                    <table>
                                        <tr >
                                            <td style="padding: 5%;">
                                                <a href="{{ route('komoditas-detail',1) }}">
                                                    <div class="tombol" style="margin-right: 12px; padding: 2%; width: 100%; background-color: rgb(105, 105, 105); border-radius: 15%;">
                                                        <div class="tx" style="font-size: 80%; color: rgb(255, 255, 255);">Batu Bara</div>
                                                    </div>
                                                </a>
                                            </td>
                                        </tr>
                                        
                                    </table>
                                    <a href="{{ route('komoditas-detail',1) }}" class="row-md-2" style="color: black;" >
                                        <i class="fa fa-map-marker fa-lg" aria-hidden="true" style="margin-top: 10px; color: coral;"></i>
                                        Jakarta Selatan
                                    </a>
                                </div>
    
                                </div>
                            </div>
                            <!-- End of Product 3 -->

                                  <!-- Start of Product 3 -->
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="product">

                                <!-- Product Image -->
                                <div class="product-image">

                                    <a href="https://awsimages.detik.net.id/visual/2018/05/07/ef341df1-188e-442f-9d92-8febfc3a3597.jpeg?w=650" class="hover-zoom">
                                        <img src="https://awsimages.detik.net.id/visual/2018/05/07/ef341df1-188e-442f-9d92-8febfc3a3597.jpeg?w=650" class="img-responsive" alt="">
                                    </a>

                                    <!-- Product overlay -->
                                    <div class="product-overlay">
                                        <a href="cart.html"><i class="fa fa-shopping-cart"></i>Beli Komoditas</a>
                                    </div>

                                </div>

                                <!-- Product Description -->
                                <div class="col-md deskripsi" style="margin: 5%;">
                                    <a href="{{ route('komoditas-detail',1) }}">
                                        <div class="name text-dark" style="color: rgb(110, 110, 110); font-weight: bold; font-size: large;">Batu Bara</div>
                                    </a>
                                    <a href="{{ route('komoditas-detail',1) }}">
                                        <div class="type" style="color: rgb(110, 110, 110); font-weight: bold;">Rp .29000000/ton</div>
                                    </a>
                                    <table>
                                        <tr >
                                            <td style="padding: 5%;">
                                                <a href="{{ route('komoditas-detail',1) }}">
                                                    <div class="tombol" style="margin-right: 12px; padding: 2%; width: 100%; background-color: rgb(105, 105, 105); border-radius: 15%;">
                                                        <div class="tx" style="font-size: 80%; color: rgb(255, 255, 255);">Batu Bara</div>
                                                    </div>
                                                </a>
                                            </td>
                                        </tr>
                                        
                                    </table>
                                    <a href="{{ route('komoditas-detail',1) }}" class="row-md-2" style="color: black;" >
                                        <i class="fa fa-map-marker fa-lg" aria-hidden="true" style="margin-top: 10px; color: coral;"></i>
                                        Jakarta Selatan
                                    </a>
                                </div>

                            </div>
                        </div>
                        <!-- End of Product 3 -->

                              <!-- Start of Product 3 -->
                              <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="product">
    
                                    <!-- Product Image -->
                                    <div class="product-image">
    
                                        <a href="https://awsimages.detik.net.id/visual/2018/05/07/ef341df1-188e-442f-9d92-8febfc3a3597.jpeg?w=650" class="hover-zoom">
                                            <img src="https://awsimages.detik.net.id/visual/2018/05/07/ef341df1-188e-442f-9d92-8febfc3a3597.jpeg?w=650" class="img-responsive" alt="">
                                        </a>
    
                                        <!-- Product overlay -->
                                        <div class="product-overlay">
                                            <a href="cart.html"><i class="fa fa-shopping-cart"></i>Beli Komoditas</a>
                                        </div>
    
                                    </div>
    
                                     <!-- Product Description -->
                                <div class="col-md deskripsi" style="margin: 5%;">
                                    <a href="{{ route('komoditas-detail',1) }}">
                                        <div class="name text-dark" style="color: rgb(110, 110, 110); font-weight: bold; font-size: large;">Batu Bara</div>
                                    </a>
                                    <a href="{{ route('komoditas-detail',1) }}">
                                        <div class="type" style="color: rgb(110, 110, 110); font-weight: bold;">Rp .29000000/ton</div>
                                    </a>
                                    <table>
                                        <tr >
                                            <td style="padding: 5%;">
                                                <a href="{{ route('komoditas-detail',1) }}">
                                                    <div class="tombol" style="margin-right: 12px; padding: 2%; width: 100%; background-color: rgb(105, 105, 105); border-radius: 15%;">
                                                        <div class="tx" style="font-size: 80%; color: rgb(255, 255, 255);">Batu Bara</div>
                                                    </div>
                                                </a>
                                            </td>
                                        </tr>
                                        
                                    </table>
                                    <a href="{{ route('komoditas-detail',1) }}" class="row-md-2" style="color: black;" >
                                        <i class="fa fa-map-marker fa-lg" aria-hidden="true" style="margin-top: 10px; color: coral;"></i>
                                        Jakarta Selatan
                                    </a>
                                </div>
    
                                </div>
                            </div>
                            <!-- End of Product 3 -->

                                  <!-- Start of Product 3 -->
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="product">

                                <!-- Product Image -->
                                <div class="product-image">

                                    <a href="https://awsimages.detik.net.id/visual/2018/05/07/ef341df1-188e-442f-9d92-8febfc3a3597.jpeg?w=650" class="hover-zoom">
                                        <img src="https://awsimages.detik.net.id/visual/2018/05/07/ef341df1-188e-442f-9d92-8febfc3a3597.jpeg?w=650" class="img-responsive" alt="">
                                    </a>

                                    <!-- Product overlay -->
                                    <div class="product-overlay">
                                        <a href="cart.html"><i class="fa fa-shopping-cart"></i>Beli Komoditas</a>
                                    </div>

                                </div>

                                <!-- Product Description -->
                                <div class="col-md deskripsi" style="margin: 5%;">
                                    <a href="{{ route('komoditas-detail',1) }}">
                                        <div class="name text-dark" style="color: rgb(110, 110, 110); font-weight: bold; font-size: large;">Batu Bara</div>
                                    </a>
                                    <a href="{{ route('komoditas-detail',1) }}">
                                        <div class="type" style="color: rgb(110, 110, 110); font-weight: bold;">Rp .29000000/ton</div>
                                    </a>
                                    <table>
                                        <tr >
                                            <td style="padding: 5%;">
                                                <a href="{{ route('komoditas-detail',1) }}">
                                                    <div class="tombol" style="margin-right: 12px; padding: 2%; width: 100%; background-color: rgb(105, 105, 105); border-radius: 15%;">
                                                        <div class="tx" style="font-size: 80%; color: rgb(255, 255, 255);">Batu Bara</div>
                                                    </div>
                                                </a>
                                            </td>
                                        </tr>
                                        
                                    </table>
                                    <a href="{{ route('komoditas-detail',1) }}" class="row-md-2" style="color: black;" >
                                        <i class="fa fa-map-marker fa-lg" aria-hidden="true" style="margin-top: 10px; color: coral;"></i>
                                        Jakarta Selatan
                                    </a>
                                </div>

                            </div>
                        </div>
                        <!-- End of Product 3 -->



                   
                    </div>
                    <!-- End of Products -->


                    <!-- Start of Pagination -->
                    <div class="row">
                        <div class="col-md-12">
                            <ul class="pagination list-inline text-center">
                                <li class="active"><a href="javascript:void(0)">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">Next</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- End of Pagination -->

                </div>
                <!-- End of Shop Product Wrapper -->




                <!-- Start of Shop Sidebar -->
                <div class="col-md-4 col-md-pull-8 col-xs-12 shop-sidebar">

                    <!-- Start of Search -->
                    <div class="col-md-12">
                       
                        <form action="#" method="get">
                            
                            <input type="text" class="form-control" placeholder="Lokasi...">
                        </form>
                    </div>
                    <!-- End of Search -->


                    <!-- Start of Price Filter -->
                    <div class="col-md-12 price-filter mt10">
                        <div id="price-slider"></div>

                        <div class="price-slider-amount mt10">
                           <select name="" id="amount" class="form-control">
                               <option value="">Select Komoditas</option>
                               <option value="">Coal</option>
                               <option value="">Nickel</option>
                               <option value="">Gold</option>
                               <option value="">Bauxite</option>
                           </select>
                            
                        </div>
                        <button class="btn btn-blue btn-effect mt10" type="submit"><i class="fa fa-search"></i> Filter</button>
                        <button class="btn btn-blue btn-effect mt10" type="submit"><i class="fa fa-plus"></i> Jual Komoditas</button>
                    </div>
                    <!-- End of Price Filter -->


               

                </div>
                <!-- End of Shop Sidebar -->

            </div>
        </div>
    </section>


    
    
      

@endsection