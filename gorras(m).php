<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>GUARDIASHOP</title>

    <!-- Favicon  -->
    <link rel="icon" href="./img/core-img/logoguardiashop.ico">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="css/core-styleff.css">
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <!-- ##### Header Area Start ##### -->
    <?php include './arc/nav.php'; ?>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Breadcumb Area Start ##### -->
    <div class="breadcumb_area bg-img" style="background-image: url(img/bg-img/breadcumb.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="page-title text-center">
                        <h2 style="color:#444242;">GORRAS</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Shop Grid Area Start ##### -->
    <section class="shop_grid_area section-padding-80" style="background-color:#EFD9AB;">
        <div class="container" >
            <div class="row">
                <div class="col-12 col-md-4 col-lg-3">
                    <div class="shop_sidebar_area">

                        <!-- ##### Single Widget ##### -->
                        <div class="widget catagory mb-50">
                            <!-- Widget Title -->
                            <h6 class="widget-title mb-30" style="color:#444242;">Categorias</h6>

                             <!--  Catagories  -->
                             <div class="catagories-menu">
                                <ul id="menu-content2" class="menu-content collapse show">
                                    <!-- Single Item -->
                                    <li data-toggle="collapse" data-target="#clothing">
                                        <a href="#" style="color:#444242;">Ropa</a>
                                        <ul class="sub-menu collapse show" id="clothing">
                                            <li><a href="./shop.php" style="color:#444242; font-weight: 600;">Todo</a></li>
                                            <li><a href="./gorras(m).php" style="color:#444242; font-weight: 600;">Gorras</a></li>
                                            <li><a href="./blusas.php" style="color:#444242; font-weight: 600;">Blusas</a></li>
                                            <li><a href="./camisetas.php" style="color:#444242; font-weight: 600;">Camisetas</a></li>
                                            <li><a href="./short.php" style="color:#444242; font-weight: 600;">Shorts</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!-- ##### Single Widget ##### -->
                        <div class="widget price mb-50">
                            <!-- Widget Title -->
                            <h6 class="widget-title mb-30" style="color:#444242;">Filtro Por</h6>
                            <!-- Widget Title 2 -->
                            <p class="widget-title2 mb-30" style="color:#444242;">Precio</p>

                            <div class="widget-desc">
                                <div class="slider-range">
                                    <div data-min="49" data-max="360" data-unit="$" class="slider-range-price ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" data-value-min="49" data-value-max="360" data-label-result="Range:">
                                        <div class="ui-slider-range ui-widget-header ui-corner-all"></div>
                                        <span style="color: #2c4926;" class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                                        <span  style="color: #2c4926;"class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                                    </div>
                                    <div class="range-price"style="color:#444242;">Range: $49.00 - $360.00</div>
                                </div>
                            </div>
                        </div>

                        <!-- ##### Single Widget ##### -->
                        <div class="widget color mb-50">
                            <!-- Widget Title 2 -->
                            <p class="widget-title2 mb-30" style="color:#444242;">Color</p>
                            <div class="widget-desc">
                                <ul class="d-flex">
                                    <li><a href="#" class="color1"></a></li>
                                    <li><a href="#" class="color2"></a></li>
                                    <li><a href="#" class="color3"></a></li>
                                    <li><a href="#" class="color4"></a></li>
                                    <li><a href="#" class="color5"></a></li>
                                    <li><a href="#" class="color6"></a></li>
                                    <li><a href="#" class="color7"></a></li>
                                    <li><a href="#" class="color8"></a></li>
                                    <li><a href="#" class="color9"></a></li>
                                    <li><a href="#" class="color10"></a></li>
                                </ul>
                            </div>
                        </div>

                        <!-- ##### Single Widget ##### -->
                        <div class="widget brands mb-50">
                            <!-- Widget Title 2 -->
                            <p class="widget-title2 mb-30" style="color:#444242;">Marcas</p>
                            <div class="widget-desc">
                                <ul>
                                    <li><a href="#" style="color:#444242; font-weight: 600;">Asos</a></li>
                                    <li><a href="#" style="color:#444242; font-weight: 600;">Mango</a></li>
                                    <li><a href="#" style="color:#444242; font-weight: 600;">River Island</a></li>
                                    <li><a href="#" style="color:#444242; font-weight: 600;">Topshop</a></li>
                                    <li><a href="#" style="color:#444242; font-weight: 600;">Zara</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-8 col-lg-9">
                    <div class="shop_grid_product_area">
                        <div class="row">
                            <div class="col-12">
                                <div class="product-topbar d-flex align-items-center justify-content-between" style="color: #444242; border: 2px solid green;">
                                    <!-- Total Products -->
                                    <div class="total-products">
                                        <p style="color:#444242"><span style="color:#2c4926">9</span> Productos Encontrados</p>
                                    </div>
                                    <!-- Sorting -->
                                    <div class="product-sorting d-flex" >
                                        <p>Ordenado Por:</p>
                                        <form action="#" method="get">
                                            <select name="select" id="sortByselect">
                                                <option value="value">Precio Alto</option>
                                                <option value="value">Precio bajo</option>
                                            </select>
                                            <input type="submit" class="d-none" value="">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">

                           <!-- Single Product -->
                        <div class="col-12 col-sm-6 col-lg-4">
                            <div class="single-product-wrapper">
                                <!-- Product Image -->
                                <div class="product-img">
                                    <img src="img/productos/gorras(m)/g1.jpeg" alt="">
                                    
                                    
                                    <div class="product-favourite">
                                        <a href="#" class="favme fa fa-heart"></a>
                                    </div>
                                </div>
                                <div class="product-description" style="background-color: #EFD9AB;">
                                    <span style="color: #444242;">topshop</span>
                                    <a href="#">
                                        <h6 style="color: #444242;">Gallito Urbano</h6>
                                    </a>
                                    <p class="product-price" style="color: #444242;">$230.000</p>
                                    <div class="hover-content">
                                        <div class="add-to-cart-btn">
                                            <a href="#" class="btn essence-btn">Añadir Al Carrito</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        
                        <div class="col-12 col-sm-6 col-lg-4">
                            <div class="single-product-wrapper">
                                <div class="product-img">
                                    <img src="img/productos/gorras(m)/g2.jpeg" alt="">
                                    
                                    <div class="product-favourite">
                                        <a href="#" class="favme fa fa-heart"></a>
                                    </div>
                                </div>
                                <div class="product-description" style="background-color: #EFD9AB;">
                                    <span style="color: #444242;">topshop</span>
                                    <a href="#">
                                        <h6 style="color: #444242;">Brooklyn Minimal</h6>
                                    </a>
                                    <p class="product-price" style="color: #444242;">$245.000</p>
                                    <div class="hover-content">
                                        <div class="add-to-cart-btn">
                                            <a href="#" class="btn essence-btn">Añadir Al Carrito</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-lg-4">
                            <div class="single-product-wrapper">
                                <div class="product-img">
                                    <img src="img/productos/gorras(m)/g3.jpeg" alt="">
                                    
                                    <div class="product-badge new-badge" style="background-color: #2c4926;">
                                        <span style="color: #EFD9AB;">New</span>
                                    </div>
                                    <div class="product-favourite">
                                        <a href="#" class="favme fa fa-heart"></a>
                                    </div>
                                </div>
                                <div class="product-description" style="background-color: #EFD9AB;">
                                    <span style="color: #444242;">topshop</span>
                                    <a href="#">
                                        <h6 style="color: #444242;">Palmeras Vintage</h6>
                                    </a>
                                    <p class="product-price" style="color: #444242;">$255.000</p>
                                    <div class="hover-content">
                                        <div class="add-to-cart-btn">
                                            <a href="#" class="btn essence-btn">Añadir Al Carrito</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-lg-4">
                            <div class="single-product-wrapper">
                                <div class="product-img">
                                    <img src="img/productos/gorras(m)/g4.jpeg" alt="">
                                   
                                    <div class="product-favourite">
                                        <a href="#" class="favme fa fa-heart"></a>
                                    </div>
                                </div>
                                <div class="product-description" style="background-color: #EFD9AB;">
                                    <span style="color: #444242;">topshop</span>
                                    <a href="#">
                                        <h6 style="color: #444242;">Línea Calma</h6>
                                    </a>
                                    <p class="product-price" style="color: #444242;">$220.000</p>
                                    <div class="hover-content">
                                        <div class="add-to-cart-btn">
                                            <a href="#" class="btn essence-btn">Añadir Al Carrito</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-lg-4">
                            <div class="single-product-wrapper">
                                <div class="product-img">
                                    <img src="img/productos/gorras(m)/g5.jpeg" alt="">
                                    
                        
                                    <div class="product-favourite">
                                        <a href="#" class="favme fa fa-heart"></a>
                                    </div>
                                </div>
                                <div class="product-description" style="background-color: #EFD9AB;">
                                    <span style="color: #444242;">topshop</span>
                                    <a href="#">
                                        <h6 style="color: #444242;">American Soul</h6>
                                    </a>
                                    <p class="product-price" style="color: #444242;"> $265.000</p>
                                    <div class="hover-content">
                                        <div class="add-to-cart-btn">
                                            <a href="#" class="btn essence-btn">Añadir Al Carrito</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-lg-4">
                            <div class="single-product-wrapper">
                                <div class="product-img">
                                    <img src="img/productos/gorras(m)/g6.jpeg" alt="">
                                    
                                    <div class="product-favourite">
                                        <a href="#" class="favme fa fa-heart"></a>
                                    </div>
                                </div>
                                <div class="product-description" style="background-color: #EFD9AB;">
                                    <span style="color: #444242;">topshop</span>
                                    <a href="l">
                                        <h6 style="color: #444242;">Gorra Verde Teal</h6>
                                    </a>
                                    <p class="product-price" style="color: #444242;">$250.000</p>
                                    <div class="hover-content">
                                        <div class="add-to-cart-btn">
                                            <a href="#" class="btn essence-btn">Añadir Al Carrito</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-lg-4">
                            <div class="single-product-wrapper">
                                <div class="product-img">
                                    <img src="img/productos/gorras(m)/g7.jpeg" alt="" style="height: 310px;">
                                    <div class="product-badge new-badge" style="background-color: #2c4926;">
                                        <span style="color: #EFD9AB;">New</span>
                                    </div>
                                    <div class="product-favourite">
                                        <a href="#" class="favme fa fa-heart"></a>
                                    </div>
                                </div>
                                <div class="product-description" style="background-color: #EFD9AB;">
                                    <span style="color: #444242;">topshop</span>
                                    <a href="#">
                                        <h6 style="color: #444242;">Caos Urbano</h6>
                                    </a>
                                    <p class="product-price" style="color: #444242;">$275.000</p>
                                    <div class="hover-content">
                                        <div class="add-to-cart-btn">
                                            <a href="#" class="btn essence-btn">Añadir Al Carrito</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-lg-4">
                            <div class="single-product-wrapper">
                                <div class="product-img">
                                    <img src="img/productos/gorras(m)/g8.jpeg" alt="" style="height: 310px;">
                                    
                                    <div class="product-favourite">
                                        <a href="#" class="favme fa fa-heart"></a>
                                    </div>
                                </div>
                                <div class="product-description" style="background-color: #EFD9AB;">
                                    <span style="color: #444242;">topshop</span>
                                    <a href="#">
                                        <h6 style="color: #444242;">Universidad Clásica</h6>
                                    </a>
                                    <p class="product-price" style="color: #444242;">$260.000</p>
                                    <div class="hover-content">
                                        <div class="add-to-cart-btn">
                                            <a href="#" class="btn essence-btn">Añadir Al Carrito</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-lg-4">
                            <div class="single-product-wrapper">
                                <div class="product-img">
                                    <img src="img/productos/gorras(m)/g9.jpeg" alt="" style="height: 310px;">
                                 
                                    <div class="product-favourite">
                                        <a href="#" class="favme fa fa-heart"></a>
                                    </div>
                                </div>
                                <div class="product-description" style="background-color: #EFD9AB;">
                                    <span style="color: #444242;">topshop</span>
                                    <a href="">
                                        <h6 style="color: #444242;">Gorra Bicolor</h6>
                                    </a>
                                    <p class="product-price" style="color: #444242;">$265.000</p>
                                    <div class="hover-content">
                                        <div class="add-to-cart-btn">
                                            <a href="#" class="btn essence-btn">Añadir Al Carrito</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <!-- Pagination -->
                    <nav aria-label="navigation">
                        <ul class="pagination mt-50 mb-70">
                            <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-left"></i></a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">...</a></li>
                            <li class="page-item"><a class="page-link" href="#">21</a></li>
                            <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-right"></i></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Shop Grid Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <?php include './arc/footer.php';?>
    <!-- ##### Footer Area End ##### -->

    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="js/plugins.js"></script>
    <!-- Classy Nav js -->
    <script src="js/classy-nav.min.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>

</body>

</html>