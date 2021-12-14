@extends('web.app')

@section('content')

<!-- <section class="page-header">
        <div class="container">

            Start of Page Title
            <div class="row">
                <div class="col-md-12">
                    <h2>Mining const</h2>
                </div>
            </div>
            End of Page Title

            Start of Breadcrumb
            <div class="row">
                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="#">home</a></li>
                        <li class="active">shop</li>
                    </ul>
                </div>
            </div>
            End of Breadcrumb

        </div>
    </section> -->


  

    <section class="shop ptb80">
        <div class="container">
            <div class="row">

                 <!-- Start of Shop Sidebar -->
                 <div class="col-md-4 col-xs-12 " style="margin-bottom: 26px;">

                    <!-- Start of Search -->
                    <!-- <div class="col-md-12">
                       
                        <form action="#" method="get">
                            
                            <input type="text" class="form-control" placeholder="Lokasi...">
                        </form>
                    </div> -->
                    <!-- End of Search -->


                    <!-- Start of Price Filter -->
                    <div class="col-md-12 price-filter ">
                        <div id="price-slider"></div>

                        <div class="price-slider-amount ">
                           <select name="" id="amount" class="form-control">
                               <option value="">Jenis kontraktor</option>
                               <option value="">Coal</option>
                               <option value="">Nickel</option>
                               <option value="">Gold</option>
                               <option value="">Bauxite</option>
                           </select>
                        </div>
                        <div class="price-slider-amount mt10">
                            <select name="" id="amount" class="form-control">
                                <option value="">Lokasi</option>
                                <option value="">Jawa Barat</option>
                                <option value="">Nusa Tengara Barat </option>
                                <option value="">Sulawesi Selatan</option>
                                <option value="">Kali Mantan</option>
                            </select>
                         </div>
                         <div class="price-slider-amount mt10">
                            <select name="" id="amount" class="form-control">
                                <option value="">Lokasi</option>
                                <option value="">Bali</option>
                                <option value="">Sumbawa</option>
                                <option value="">Lombok Barat</option>
                                <option value="">Jakarta Utara</option>
                            </select>
                         </div>
                        <button class="btn btn-blue btn-effect mt10" type="submit"><i class="fa fa-search"></i> Filter</button>
                        <!-- <button class="btn btn-blue btn-effect mt10" type="submit"><i class="fa fa-plus"></i></button> -->
                    </div>
                    <!-- End of Price Filter -->


               

                </div>
                <!-- End of Shop Sidebar -->

                <!-- Start of Shop Product Wrapper -->
                <div class="col-md-8 col-xs-12 shop-products-wrapper">

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
                                        <a href="cart.html"><i class="fa fa-eye"></i>Lihat Detail</a>
                                    </div>

                                </div>

                                <!-- Product Description -->
                                <div class="col-md deskripsi" style="margin: 5%;">
                                    <a href="">
                                        <div class="name text-dark" style="color: rgb(110, 110, 110); font-weight: bold; font-size: large;">PT.Lamaru Bagun </div>
                                    </a>
                                    <a href="">
                                        <div class="type" style="color: rgb(110, 110, 110); font-weight: bold;">Constraktor</div>
                                    </a>
                                    <table>
                                        <tr >
                                            <td style="padding: 5%;">
                                                <a href="">
                                                    <div class="tombol" style="margin-right: 12px; padding: 2%; width: 100%; background-color: rgb(105, 105, 105); border-radius: 15%;">
                                                        <div class="tx" style="font-size: 80%; color: rgb(255, 255, 255);">JORC</div>
                                                    </div>
                                                </a>
                                            </td>

                                            <td>
                                                <a href="">
                                                    <div class="tombol" style=" margin: 1px; padding: 2%; width: 100%; background-color: rgb(105, 105, 105); border-radius: 15%;">
                                                       <div class="tx" style="font-size: 80%; color: rgb(255, 255, 255);">JORC</div>
                                                    </div>
                                                </a>
                                            </td>
                                        </tr>
                                        
                                    </table>
                                    <a href="" class="row-md-2" style="color: black;" >
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
                                        <a href="cart.html"><i class="fa fa-eye"></i>Lihat Detail</a>
                                    </div>

                                </div>

                                <!-- Product Description -->
                                <div class="col-md deskripsi" style="margin: 5%;">
                                    <a href="">
                                        <div class="name text-dark" style="color: rgb(110, 110, 110); font-weight: bold; font-size: large;">PT.Lamaru Bagun </div>
                                    </a>
                                    <a href="">
                                        <div class="type" style="color: rgb(110, 110, 110); font-weight: bold;">Constraktor</div>
                                    </a>
                                    <table>
                                        <tr >
                                            <td style="padding: 5%;">
                                                <a href="">
                                                    <div class="tombol" style="margin-right: 12px; padding: 2%; width: 100%; background-color: rgb(105, 105, 105); border-radius: 15%;">
                                                        <div class="tx" style="font-size: 80%; color: rgb(255, 255, 255);">JORC</div>
                                                    </div>
                                                </a>
                                            </td>

                                            <td>
                                                <a href="">
                                                    <div class="tombol" style=" margin: 1px; padding: 2%; width: 100%; background-color: rgb(105, 105, 105); border-radius: 15%;">
                                                       <div class="tx" style="font-size: 80%; color: rgb(255, 255, 255);">JORC</div>
                                                    </div>
                                                </a>
                                            </td>
                                        </tr>
                                        
                                    </table>
                                    <a href="" class="row-md-2" style="color: black;" >
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
                                        <a href="cart.html"><i class="fa fa-eye"></i>Lihat Detail</a>
                                    </div>

                                </div>

                                <!-- Product Description -->
                                <div class="col-md deskripsi" style="margin: 5%;">
                                    <a href="">
                                        <div class="name text-dark" style="color: rgb(110, 110, 110); font-weight: bold; font-size: large;">PT.Lamaru Bagun </div>
                                    </a>
                                    <a href="">
                                        <div class="type" style="color: rgb(110, 110, 110); font-weight: bold;">Constraktor</div>
                                    </a>
                                    <table>
                                        <tr >
                                            <td style="padding: 5%;">
                                                <a href="">
                                                    <div class="tombol" style="margin-right: 12px; padding: 2%; width: 100%; background-color: rgb(105, 105, 105); border-radius: 15%;">
                                                        <div class="tx" style="font-size: 80%; color: rgb(255, 255, 255);">JORC</div>
                                                    </div>
                                                </a>
                                            </td>

                                            <td>
                                                <a href="">
                                                    <div class="tombol" style=" margin: 1px; padding: 2%; width: 100%; background-color: rgb(105, 105, 105); border-radius: 15%;">
                                                       <div class="tx" style="font-size: 80%; color: rgb(255, 255, 255);">JORC</div>
                                                    </div>
                                                </a>
                                            </td>
                                        </tr>
                                        
                                    </table>
                                    <a href="" class="row-md-2" style="color: black;" >
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
                                            <a href="cart.html"><i class="fa fa-eye"></i>Lihat Detail</a>
                                        </div>
    
                                    </div>
    
                                    <!-- Product Description -->
                                    <div class="col-md deskripsi" style="margin: 5%;">
                                        <a href="">
                                            <div class="name text-dark" style="color: rgb(110, 110, 110); font-weight: bold; font-size: large;">PT.Lamaru Bagun </div>
                                        </a>
                                        <a href="">
                                            <div class="type" style="color: rgb(110, 110, 110); font-weight: bold;">Constraktor</div>
                                        </a>
                                        <table>
                                            <tr >
                                                <td style="padding: 5%;">
                                                    <a href="">
                                                        <div class="tombol" style="margin-right: 12px; padding: 2%; width: 100%; background-color: rgb(105, 105, 105); border-radius: 15%;">
                                                            <div class="tx" style="font-size: 80%; color: rgb(255, 255, 255);">JORC</div>
                                                        </div>
                                                    </a>
                                                </td>
    
                                                <td>
                                                    <a href="">
                                                        <div class="tombol" style=" margin: 1px; padding: 2%; width: 100%; background-color: rgb(105, 105, 105); border-radius: 15%;">
                                                           <div class="tx" style="font-size: 80%; color: rgb(255, 255, 255);">JORC</div>
                                                        </div>
                                                    </a>
                                                </td>
                                            </tr>
                                            
                                        </table>
                                        <a href="" class="row-md-2" style="color: black;" >
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
                                                <a href="cart.html"><i class="fa fa-eye"></i>Lihat Detail</a>
                                            </div>
        
                                        </div>
        
                                        <!-- Product Description -->
                                        <div class="col-md deskripsi" style="margin: 5%;">
                                            <a href="">
                                                <div class="name text-dark" style="color: rgb(110, 110, 110); font-weight: bold; font-size: large;">PT.Lamaru Bagun </div>
                                            </a>
                                            <a href="">
                                                <div class="type" style="color: rgb(110, 110, 110); font-weight: bold;">Constraktor</div>
                                            </a>
                                            <table>
                                                <tr >
                                                    <td style="padding: 5%;">
                                                        <a href="">
                                                            <div class="tombol" style="margin-right: 12px; padding: 2%; width: 100%; background-color: rgb(105, 105, 105); border-radius: 15%;">
                                                                <div class="tx" style="font-size: 80%; color: rgb(255, 255, 255);">JORC</div>
                                                            </div>
                                                        </a>
                                                    </td>
        
                                                    <td>
                                                        <a href="">
                                                            <div class="tombol" style=" margin: 1px; padding: 2%; width: 100%; background-color: rgb(105, 105, 105); border-radius: 15%;">
                                                               <div class="tx" style="font-size: 80%; color: rgb(255, 255, 255);">JORC</div>
                                                            </div>
                                                        </a>
                                                    </td>
                                                </tr>
                                                
                                            </table>
                                            <a href="" class="row-md-2" style="color: black;" >
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
                                            <a href="cart.html"><i class="fa fa-eye"></i>Lihat Detail</a>
                                        </div>
    
                                    </div>
    
                                    <!-- Product Description -->
                                    <div class="col-md deskripsi" style="margin: 5%;">
                                        <a href="">
                                            <div class="name text-dark" style="color: rgb(110, 110, 110); font-weight: bold; font-size: large;">PT.Lamaru Bagun </div>
                                        </a>
                                        <a href="">
                                            <div class="type" style="color: rgb(110, 110, 110); font-weight: bold;">Constraktor</div>
                                        </a>
                                        <table>
                                            <tr >
                                                <td style="padding: 5%;">
                                                    <a href="">
                                                        <div class="tombol" style="margin-right: 12px; padding: 2%; width: 100%; background-color: rgb(105, 105, 105); border-radius: 15%;">
                                                            <div class="tx" style="font-size: 80%; color: rgb(255, 255, 255);">JORC</div>
                                                        </div>
                                                    </a>
                                                </td>
    
                                                <td>
                                                    <a href="">
                                                        <div class="tombol" style=" margin: 1px; padding: 2%; width: 100%; background-color: rgb(105, 105, 105); border-radius: 15%;">
                                                           <div class="tx" style="font-size: 80%; color: rgb(255, 255, 255);">JORC</div>
                                                        </div>
                                                    </a>
                                                </td>
                                            </tr>
                                            
                                        </table>
                                        <a href="" class="row-md-2" style="color: black;" >
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
                                                <a href="cart.html"><i class="fa fa-eye"></i>Lihat Detail</a>
                                            </div>
        
                                        </div>
        
                                        <!-- Product Description -->
                                        <div class="col-md deskripsi" style="margin: 5%;">
                                            <a href="">
                                                <div class="name text-dark" style="color: rgb(110, 110, 110); font-weight: bold; font-size: large;">PT.Lamaru Bagun </div>
                                            </a>
                                            <a href="">
                                                <div class="type" style="color: rgb(110, 110, 110); font-weight: bold;">Constraktor</div>
                                            </a>
                                            <table>
                                                <tr >
                                                    <td style="padding: 5%;">
                                                        <a href="">
                                                            <div class="tombol" style="margin-right: 12px; padding: 2%; width: 100%; background-color: rgb(105, 105, 105); border-radius: 15%;">
                                                                <div class="tx" style="font-size: 80%; color: rgb(255, 255, 255);">JORC</div>
                                                            </div>
                                                        </a>
                                                    </td>
        
                                                    <td>
                                                        <a href="">
                                                            <div class="tombol" style=" margin: 1px; padding: 2%; width: 100%; background-color: rgb(105, 105, 105); border-radius: 15%;">
                                                               <div class="tx" style="font-size: 80%; color: rgb(255, 255, 255);">JORC</div>
                                                            </div>
                                                        </a>
                                                    </td>
                                                </tr>
                                                
                                            </table>
                                            <a href="" class="row-md-2" style="color: black;" >
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
                                            <a href="cart.html"><i class="fa fa-eye"></i>Lihat Detail</a>
                                        </div>
    
                                    </div>
    
                                    <!-- Product Description -->
                                    <div class="col-md deskripsi" style="margin: 5%;">
                                        <a href="">
                                            <div class="name text-dark" style="color: rgb(110, 110, 110); font-weight: bold; font-size: large;">PT.Lamaru Bagun </div>
                                        </a>
                                        <a href="">
                                            <div class="type" style="color: rgb(110, 110, 110); font-weight: bold;">Constraktor</div>
                                        </a>
                                        <table>
                                            <tr >
                                                <td style="padding: 5%;">
                                                    <a href="">
                                                        <div class="tombol" style="margin-right: 12px; padding: 2%; width: 100%; background-color: rgb(105, 105, 105); border-radius: 15%;">
                                                            <div class="tx" style="font-size: 80%; color: rgb(255, 255, 255);">JORC</div>
                                                        </div>
                                                    </a>
                                                </td>
    
                                                <td>
                                                    <a href="">
                                                        <div class="tombol" style=" margin: 1px; padding: 2%; width: 100%; background-color: rgb(105, 105, 105); border-radius: 15%;">
                                                           <div class="tx" style="font-size: 80%; color: rgb(255, 255, 255);">JORC</div>
                                                        </div>
                                                    </a>
                                                </td>
                                            </tr>
                                            
                                        </table>
                                        <a href="" class="row-md-2" style="color: black;" >
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
                                                <a href="cart.html"><i class="fa fa-eye"></i>Lihat Detail</a>
                                            </div>
        
                                        </div>
        
                                        <!-- Product Description -->
                                        <div class="col-md deskripsi" style="margin: 5%;">
                                            <a href="">
                                                <div class="name text-dark" style="color: rgb(110, 110, 110); font-weight: bold; font-size: large;">PT.Lamaru Bagun </div>
                                            </a>
                                            <a href="">
                                                <div class="type" style="color: rgb(110, 110, 110); font-weight: bold;">Constraktor</div>
                                            </a>
                                            <table>
                                                <tr >
                                                    <td style="padding: 5%;">
                                                        <a href="">
                                                            <div class="tombol" style="margin-right: 12px; padding: 2%; width: 100%; background-color: rgb(105, 105, 105); border-radius: 15%;">
                                                                <div class="tx" style="font-size: 80%; color: rgb(255, 255, 255);">JORC</div>
                                                            </div>
                                                        </a>
                                                    </td>
        
                                                    <td>
                                                        <a href="">
                                                            <div class="tombol" style=" margin: 1px; padding: 2%; width: 100%; background-color: rgb(105, 105, 105); border-radius: 15%;">
                                                               <div class="tx" style="font-size: 80%; color: rgb(255, 255, 255);">JORC</div>
                                                            </div>
                                                        </a>
                                                    </td>
                                                </tr>
                                                
                                            </table>
                                            <a href="" class="row-md-2" style="color: black;" >
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




               

            </div>
        </div>
    </section>


    
    
      

@endsection