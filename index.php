<?php
session_start();
$isAdmin = false; // Initialisation de $isAdmin à false par défaut

if(isset($_SESSION['auth'])){
    if($_SESSION['role'] === "2"){
        $welcomeMsg = "Bienvenue administrateur " . $_SESSION['pseudo'];
        $isAdmin = true;
    } else {
        $welcomeMsg = "Ravi de vous revoir utilisateur " . $_SESSION['pseudo'];
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>

<?php include 'includes/head.php'; ?>
<body>
  <div id="page" class="page-home">
 <?php include 'includes/navbar.php'; ?>

 <?php echo isset($welcomeMsg) ? '<p>' . $welcomeMsg . '</p>' : ''; ?>

 
    <main>
        <div class="slider">
            <div class="sliderbox swiper">
                <div class="wrap swiper-wrapper">
                    <div class="item swiper-slide">
                        <div class="images">
                            <div class="ob-cover">
                                <img src="images_pf/bac_home.jpg" alt="">
                            </div>
                            <div class="title-info">
                                <div class="container wide">
                                    <div class="wrap">
                                        <span class="price">€39</span>
                                        <h3 class="title">Feel the tosc color</h3>
                                        <div class="button"><a href="" class="primary-btn">Show Now</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item swiper-slide">
                        <div class="images">
                            <div class="ob-cover">
                                <img src="images_pf/bac_home2.jpg" alt="">
                            </div>
                            <div class="title-info">
                                <div class="container wide">
                                    <div class="wrap">
                                        <span class="price">€45</span>
                                        <h3 class="title">Inner world of  brown</h3>
                                        <div class="button"><a href="" class="primary-btn">Show Now</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item swiper-slide">
                        <div class="images">
                            <div class="ob-cover">
                                <img src="images_pf/bac_home3.jpg" alt="">
                            </div>
                            <div class="title-info">
                                <div class="container wide">
                                    <div class="wrap">
                                        <span class="price">€90</span>
                                        <h3 class="title">What a mix of color</h3>
                                        <div class="button"><a href="" class="primary-btn">Show Now</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="custom-pagination">
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
        <!-- slider -->
        <div class="guide">
            <div class="container">
                <div class="wrap">
                   <div class="heading">
                    <h2 class="title">Products Guide</h2>
                   </div>
                   <div class="dotgrid scrollto">
                    <div class="wrapper">
                        <div class="item">
                            <div class="dot-image">
                                <div class="thumbmail hover">
                                    <img src="images_pf/bac_home.jpg" alt="">
                                </div>
                            </div>
                            <div class="dot-info">
                                <h3 class="dot-title">The Blue Ocean MOC</h3>
                                <p class="grey-color">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nostrum minima ullam eaque.</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="dot-image">
                                <div class="thumbmail hover">
                                    <img src="images_pf/bac_home2.jpg" alt="">
                                </div>
                            </div>
                            <div class="dot-info">
                                <h3 class="dot-title">The Blue Ocean MOC</h3>
                                <p class="grey-color">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nostrum minima ullam eaque.</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="dot-image">
                                <div class="thumbmail hover">
                                    <img src="images_pf/bac_home3.jpg" alt="">
                                </div>
                            </div>
                            <div class="dot-info">
                                <h3 class="dot-title">The Blue Ocean MOC</h3>
                                <p class="grey-color">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nostrum minima ullam eaque.</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="dot-image">
                                <div class="thumbmail hover">
                                    <img src="images_pf/baskets_home.jpg" alt="">
                                </div>
                            </div>
                            <div class="dot-info">
                                <h3 class="dot-title">The Best Walking Shoes for Support and Confort</h3>
                                <p class="grey-color">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nostrum minima ullam eaque.</p>
                            </div>
                        </div>
                    </div>
                   </div>
                </div>
            </div>
        </div>

        <!-- guide -->

        <div class="carousel">
            <div class="container">
                <div class="wrap">
                    <div class="heading">
                        <h2 class="title">New Arrivals</h2>
                    </div>
                    <div class="inner-wrapper">
                        <div class="dotgrid carouselbox swiper">
                            <!-- copy from mega menu structure -->
                        <div class="wrapper swiper-wrapper">
                                <div class="item swiper-slide">
                                    <div class="dot-image">
                                        <a href="" class="product-permalink"></a>
                                        <div class="thumbmail">
                                            <img src="images_pf/chemise7.jpg" alt="">
                                        </div>
                                        <div class="thumbmail hover">
                                            <img src="images_pf/chemise4.jpg" alt="">
                                        </div>
                                        <div class="actions">
                                            <ul>
                                                <li><a href=""><i class="ri-star-line"></i></a></li>
                                                <li><a href=""><i class="ri-arrow-left-right-line"></i></a></li>
                                                <li><a href=""><i class="ri-eye-line"></i></a></li>
                                            </ul>
                                        </div>
                                        <!-- <div class="label"><span>.25%</span></div> -->
                                    </div>
                                    <div class="dot-info">
                                        <h2 class="dot-title"><a href="">The Sweater in Tosca</a></h2>
                                        <div class="product-price">
                                            <!-- <span class="before">€62.00</span> -->
                                            <span class="current">€45.00</span>  
                                        </div>
                                    </div>
                                </div>
                                <div class="item swiper-slide">
                                    <div class="dot-image">
                                        <a href="" class="product-permalink"></a>
                                        <div class="thumbmail">
                                            <img src="images_pf/shirt-girl1.jpg" alt="">
                                        </div>
                                        <div class="thumbmail hover">
                                            <img src="images_pf/chemise2.jpg" alt="">
                                        </div>
                                        <div class="actions">
                                            <ul>
                                                <li><a href=""><i class="ri-star-line"></i></a></li>
                                                <li><a href=""><i class="ri-arrow-left-right-line"></i></a></li>
                                                <li><a href=""><i class="ri-eye-line"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="label"><span>.25%</span></div>
                                    </div>
                                    <div class="dot-info">
                                        <h2 class="dot-title"><a href="">The Sweater in Tosca</a></h2>
                                        <div class="product-price">
                                            <span class="before">€62.00</span>
                                            <span class="current">€45.00</span>  
                                        </div>
                                    </div>
                                </div>
                                <div class="item swiper-slide"> 
                                    <div class="dot-image">
                                        <a href="" class="product-permalink"></a>
                                        <div class="thumbmail">
                                            <img src="images_pf/shirt-girl1.jpg" alt="">
                                        </div>
                                            <div class="thumbmail hover">
                                            <img src="images_pf/chemise3.jpg" alt="">
                                        </div>
                                        <div class="actions">
                                            <ul>
                                                <li><a href=""><i class="ri-star-line"></i></a></li>
                                                <li><a href=""><i class="ri-arrow-left-right-line"></i></a></li>
                                                <li><a href=""><i class="ri-eye-line"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="label"><span>.25%</span></div>
                                    </div>
                                    <div class="dot-info">
                                        <h2 class="dot-title"><a href="">The Sweater in Tosca</a></h2>
                                        <div class="product-price">
                                            <span class="before">€62.00</span>
                                            <span class="current">€45.00</span>  
                                        </div>
                                    </div>
                                </div>    
                                <div class="item swiper-slide">
                                    <div class="dot-image">
                                        <a href="" class="product-permalink"></a>
                                        <div class="thumbmail">
                                            <img src="images_pf/t-shirt-girl4.jpg" alt="">
                                        </div>
                                        <div class="thumbmail hover">
                                            <img src="images_pf/t-shirt-girl3.jpg" alt="">
                                        </div>
                                        <div class="actions">
                                            <ul>
                                                <li><a href=""><i class="ri-star-line"></i></a></li>
                                                <li><a href=""><i class="ri-arrow-left-right-line"></i></a></li>
                                                <li><a href=""><i class="ri-eye-line"></i></a></li>
                                            </ul>
                                        </div>
                                        <!-- <div class="label"><span>.25%</span></div> -->
                                    </div>
                                    <div class="dot-info">
                                        <h2 class="dot-title"><a href="">The Sweater in Tosca</a></h2>
                                        <div class="product-price">
                                            <!-- <span class="before">€62.00</span> -->
                                            <span class="current">€45.00</span>  
                                        </div>
                                    </div>
                                </div>        
                                  <div class="item swiper-slide">
                                    <div class="dot-image">
                                        <a href="" class="product-permalink"></a>
                                        <div class="thumbmail">
                                            <img src="images_pf/basket2.jpg" alt="">
                                        </div>
                                        <div class="thumbmail hover">
                                            <img src="images_pf/basket1.jpg" alt="">
                                        </div>
                                        <div class="actions">
                                            <ul>
                                                <li><a href=""><i class="ri-star-line"></i></a></li>
                                                <li><a href=""><i class="ri-arrow-left-right-line"></i></a></li>
                                                <li><a href=""><i class="ri-eye-line"></i></a></li>
                                            </ul>
                                        </div>
                                        <!-- <div class="label"><span>.25%</span></div> -->
                                    </div>
                                    <div class="dot-info">
                                        <h2 class="dot-title"><a href="">The Sweater in Tosca</a></h2>
                                        <div class="product-price">
                                            <!-- <span class="before">€62.00</span> -->
                                            <span class="current">€45.00</span>  
                                        </div>
                                    </div>
                                </div>
                                <div class="item swiper-slide">
                                    <div class="dot-image">
                                        <a href="" class="product-permalink"></a>
                                        <div class="thumbmail">
                                            <img src="images_pf/basket5.jpg" alt="">
                                        </div>
                                        <div class="thumbmail hover">
                                            <img src="images_pf/basket3.jpg" alt="">
                                        </div>
                                        <div class="actions">
                                            <ul>
                                                <li><a href=""><i class="ri-star-line"></i></a></li>
                                                <li><a href=""><i class="ri-arrow-left-right-line"></i></a></li>
                                                <li><a href=""><i class="ri-eye-line"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="label"><span>.25%</span></div>
                                    </div>
                                    <div class="dot-info">
                                        <h2 class="dot-title"><a href="">The Sweater in Tosca</a></h2>
                                        <div class="product-price">
                                            <span class="before">€62.00</span>
                                            <span class="current">€45.00</span>  
                                        </div>
                                    </div>
                                </div>
                                <div class="item swiper-slide"> 
                                    <div class="dot-image">
                                        <a href="" class="product-permalink"></a>
                                        <div class="thumbmail">
                                            <img src="images_pf/basket6.jpg" alt="">
                                        </div>
                                            <div class="thumbmail hover">
                                            <img src="images_pf/basket4.jpg" alt="">
                                        </div>
                                        <div class="actions">
                                            <ul>
                                                <li><a href=""><i class="ri-star-line"></i></a></li>
                                                <li><a href=""><i class="ri-arrow-left-right-line"></i></a></li>
                                                <li><a href=""><i class="ri-eye-line"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="label"><span>.25%</span></div>
                                    </div>
                                    <div class="dot-info">
                                        <h2 class="dot-title"><a href="">The Sweater in Tosca</a></h2>
                                        <div class="product-price">
                                            <span class="before">€62.00</span>
                                            <span class="current">€45.00</span>  
                                        </div>
                                    </div>
                                </div>    
                                <div class="item swiper-slide">
                                    <div class="dot-image">
                                        <a href="" class="product-permalink"></a>
                                        <div class="thumbmail">
                                            <img src="images_pf/basket7.jpg" alt="">
                                        </div>
                                        <div class="thumbmail hover">
                                            <img src="images_pf/basket8.jpg" alt="">
                                        </div>
                                        <div class="actions">
                                            <ul>
                                                <li><a href=""><i class="ri-star-line"></i></a></li>
                                                <li><a href=""><i class="ri-arrow-left-right-line"></i></a></li>
                                                <li><a href=""><i class="ri-eye-line"></i></a></li>
                                            </ul>
                                        </div>
                                        <!-- <div class="label"><span>.25%</span></div> -->
                                    </div>
                                    <div class="dot-info">
                                        <h2 class="dot-title"><a href="">The Sweater in Tosca</a></h2>
                                        <div class="product-price">
                                            <!-- <span class="before">€62.00</span> -->
                                            <span class="current">€45.00</span>  
                                        </div>
                                    </div>
                                </div>                
                         </div>
                        </div>
                        <div class="nav">
                            <div class="swiper-button-next">
                                <i class="ri-arrow-right-line"></i>
                            </div>
                            <div class="swiper-button-prev">
                                <i class="ri-arrow-left-line"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- carousel -->
        
        <div class="bycats">
            <div class="container">
                <div class="wrap">
                  <div class="heading sort-list tabs">
                    <span class="grey-color">in</span>
                    <div class="wrap">
                        <h3 class="op-trigger">
                            <span class="value">Sweater</span>
                            <i class="ri-arrow-down-s-line"></i>
                        </h3>
                        <ul>
                            <li class="active"><a data-id="sweater" href="#0" class="tabbed-trigger">Sweater</a></li>
                            <li><a data-id="hoodie" href="#0" class="tabbed-trigger">Hoodie</a></li>
                            <li><a data-id="shirt" href="#0" class="tabbed-trigger">Shirt</a></li>
                        </ul>
                    </div>
                  </div>
                  <div class="tabbed">
                        <div id="sweater" class="sort-data active">
                        <div class="dotgrid">
                            <div class="wrapper">
                                <!-- copy .item from carousel -->
                                  <div class="item">
                                    <div class="dot-image">
                                        <a href="" class="product-permalink"></a>
                                        <div class="thumbmail">
                                            <img src="images_pf/chemise7.jpg" alt="">
                                        </div>
                                        <div class="thumbmail hover">
                                            <img src="images_pf/chemise4.jpg" alt="">
                                        </div>
                                        <div class="actions">
                                            <ul>
                                                <li><a href=""><i class="ri-star-line"></i></a></li>
                                                <li><a href=""><i class="ri-arrow-left-right-line"></i></a></li>
                                                <li><a href=""><i class="ri-eye-line"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="label"><span>.25%</span></div>
                                    </div>
                                    <div class="dot-info">
                                        <h2 class="dot-title"><a href="">The Sweater in Tosca</a></h2>
                                        <div class="product-price">
                                            <span class="before">€62.00</span>
                                            <span class="current">€45.00</span>  
                                        </div>
                                    </div>
                                  </div>
                                  <div class="item">
                                    <div class="dot-image">
                                        <a href="" class="product-permalink"></a>
                                        <div class="thumbmail">
                                            <img src="images_pf/chemise7.jpg" alt="">
                                        </div>
                                        <div class="thumbmail hover">
                                            <img src="images_pf/chemise4.jpg" alt="">
                                        </div>
                                        <div class="actions">
                                            <ul>
                                                <li><a href=""><i class="ri-star-line"></i></a></li>
                                                <li><a href=""><i class="ri-arrow-left-right-line"></i></a></li>
                                                <li><a href=""><i class="ri-eye-line"></i></a></li>
                                            </ul>
                                        </div>
                                        <!-- <div class="label"><span>.25%</span></div> -->
                                    </div>
                                    <div class="dot-info">
                                        <h2 class="dot-title"><a href="">The Sweater in Tosca</a></h2>
                                        <div class="product-price">
                                            <!-- <span class="before">€62.00</span> -->
                                            <span class="current">€45.00</span>  
                                        </div>
                                    </div>
                                  </div>
                                  <div class="item">
                                    <div class="dot-image">
                                        <a href="" class="product-permalink"></a>
                                        <div class="thumbmail">
                                            <img src="images_pf/chemise7.jpg" alt="">
                                        </div>
                                        <div class="thumbmail hover">
                                            <img src="images_pf/chemise4.jpg" alt="">
                                        </div>
                                        <div class="actions">
                                            <ul>
                                                <li><a href=""><i class="ri-star-line"></i></a></li>
                                                <li><a href=""><i class="ri-arrow-left-right-line"></i></a></li>
                                                <li><a href=""><i class="ri-eye-line"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="label"><span>.25%</span></div>
                                    </div>
                                    <div class="dot-info">
                                        <h2 class="dot-title"><a href="">The Sweater in Tosca</a></h2>
                                        <div class="product-price">
                                            <span class="before">€62.00</span>
                                            <span class="current">€45.00</span>  
                                        </div>
                                    </div>
                                  </div>
                                   <div class="item">
                                    <div class="dot-image">
                                        <a href="" class="product-permalink"></a>
                                        <div class="thumbmail">
                                            <img src="images_pf/chemise7.jpg" alt="">
                                        </div>
                                        <div class="thumbmail hover">
                                            <img src="images_pf/chemise4.jpg" alt="">
                                        </div>
                                        <div class="actions">
                                            <ul>
                                                <li><a href=""><i class="ri-star-line"></i></a></li>
                                                <li><a href=""><i class="ri-arrow-left-right-line"></i></a></li>
                                                <li><a href=""><i class="ri-eye-line"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="label"><span>.25%</span></div>
                                    </div>
                                    <div class="dot-info">
                                        <h2 class="dot-title"><a href="">The Sweater in Tosca</a></h2>
                                        <div class="product-price">
                                            <span class="before">€62.00</span>
                                            <span class="current">€45.00</span>  
                                        </div>
                                    </div>
                                  </div>
                                  <div class="item">
                                    <div class="dot-image">
                                        <a href="" class="product-permalink"></a>
                                        <div class="thumbmail">
                                            <img src="images_pf/chemise7.jpg" alt="">
                                        </div>
                                        <div class="thumbmail hover">
                                            <img src="images_pf/chemise4.jpg" alt="">
                                        </div>
                                        <div class="actions">
                                            <ul>
                                                <li><a href=""><i class="ri-star-line"></i></a></li>
                                                <li><a href=""><i class="ri-arrow-left-right-line"></i></a></li>
                                                <li><a href=""><i class="ri-eye-line"></i></a></li>
                                            </ul>
                                        </div>
                                        <!-- <div class="label"><span>.25%</span></div> -->
                                    </div>
                                    <div class="dot-info">
                                        <h2 class="dot-title"><a href="">The Sweater in Tosca</a></h2>
                                        <div class="product-price">
                                            <!-- <span class="before">€62.00</span> -->
                                            <span class="current">€45.00</span>  
                                        </div>
                                    </div>
                                  </div>
                                  <div class="item">
                                    <div class="dot-image">
                                        <a href="" class="product-permalink"></a>
                                        <div class="thumbmail">
                                            <img src="images_pf/chemise7.jpg" alt="">
                                        </div>
                                        <div class="thumbmail hover">
                                            <img src="images_pf/chemise4.jpg" alt="">
                                        </div>
                                        <div class="actions">
                                            <ul>
                                                <li><a href=""><i class="ri-star-line"></i></a></li>
                                                <li><a href=""><i class="ri-arrow-left-right-line"></i></a></li>
                                                <li><a href=""><i class="ri-eye-line"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="label"><span>.25%</span></div>
                                    </div>
                                    <div class="dot-info">
                                        <h2 class="dot-title"><a href="">The Sweater in Tosca</a></h2>
                                        <div class="product-price">
                                            <span class="before">€62.00</span>
                                            <span class="current">€45.00</span>  
                                        </div>
                                    </div>
                                  </div>
                                  <div class="item">
                                    <div class="dot-image">
                                        <a href="" class="product-permalink"></a>
                                        <div class="thumbmail">
                                            <img src="images_pf/chemise7.jpg" alt="">
                                        </div>
                                        <div class="thumbmail hover">
                                            <img src="images_pf/chemise4.jpg" alt="">
                                        </div>
                                        <div class="actions">
                                            <ul>
                                                <li><a href=""><i class="ri-star-line"></i></a></li>
                                                <li><a href=""><i class="ri-arrow-left-right-line"></i></a></li>
                                                <li><a href=""><i class="ri-eye-line"></i></a></li>
                                            </ul>
                                        </div>
                                        <!-- <div class="label"><span>.25%</span></div> -->
                                    </div>
                                    <div class="dot-info">
                                        <h2 class="dot-title"><a href="">The Sweater in Tosca</a></h2>
                                        <div class="product-price">
                                            <!-- <span class="before">€62.00</span> -->
                                            <span class="current">€45.00</span>  
                                        </div>
                                    </div>
                                  </div>
                                  <div class="item">
                                    <div class="dot-image">
                                        <a href="" class="product-permalink"></a>
                                        <div class="thumbmail">
                                            <img src="images_pf/chemise7.jpg" alt="">
                                        </div>
                                        <div class="thumbmail hover">
                                            <img src="images_pf/chemise4.jpg" alt="">
                                        </div>
                                        <div class="actions">
                                            <ul>
                                                <li><a href=""><i class="ri-star-line"></i></a></li>
                                                <li><a href=""><i class="ri-arrow-left-right-line"></i></a></li>
                                                <li><a href=""><i class="ri-eye-line"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="label"><span>.25%</span></div>
                                    </div>
                                    <div class="dot-info">
                                        <h2 class="dot-title"><a href="">The Sweater in Tosca</a></h2>
                                        <div class="product-price">
                                            <span class="before">€62.00</span>
                                            <span class="current">€45.00</span>  
                                        </div>
                                    </div>
                                  </div>
                            </div>
                        </div>
                        </div>
                         <div id="hoodie" class="sort-data">
                        <div class="dotgrid">
                            <div class="wrapper">
                                <!-- copy .item from carousel -->

                                  <div class="item">
                                    <div class="dot-image">
                                        <a href="" class="product-permalink"></a>
                                        <div class="thumbmail">
                                            <img src="images_pf/chemise7.jpg" alt="">
                                        </div>
                                        <div class="thumbmail hover">
                                            <img src="images_pf/chemise4.jpg" alt="">
                                        </div>
                                        <div class="actions">
                                            <ul>
                                                <li><a href=""><i class="ri-star-line"></i></a></li>
                                                <li><a href=""><i class="ri-arrow-left-right-line"></i></a></li>
                                                <li><a href=""><i class="ri-eye-line"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="label"><span>.25%</span></div>
                                    </div>
                                    <div class="dot-info">
                                        <h2 class="dot-title"><a href="">The Sweater in Tosca</a></h2>
                                        <div class="product-price">
                                            <span class="before">€62.00</span>
                                            <span class="current">€45.00</span>  
                                        </div>
                                    </div>
                                  </div>
                                   <div class="item">
                                    <div class="dot-image">
                                        <a href="" class="product-permalink"></a>
                                        <div class="thumbmail">
                                            <img src="images_pf/chemise7.jpg" alt="">
                                        </div>
                                        <div class="thumbmail hover">
                                            <img src="images_pf/chemise4.jpg" alt="">
                                        </div>
                                        <div class="actions">
                                            <ul>
                                                <li><a href=""><i class="ri-star-line"></i></a></li>
                                                <li><a href=""><i class="ri-arrow-left-right-line"></i></a></li>
                                                <li><a href=""><i class="ri-eye-line"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="label"><span>.25%</span></div>
                                    </div>
                                    <div class="dot-info">
                                        <h2 class="dot-title"><a href="">The Sweater in Tosca</a></h2>
                                        <div class="product-price">
                                            <span class="before">€62.00</span>
                                            <span class="current">€45.00</span>  
                                        </div>
                                    </div>
                                  </div>
                                  <div class="item">
                                    <div class="dot-image">
                                        <a href="" class="product-permalink"></a>
                                        <div class="thumbmail">
                                            <img src="images_pf/chemise7.jpg" alt="">
                                        </div>
                                        <div class="thumbmail hover">
                                            <img src="images_pf/chemise4.jpg" alt="">
                                        </div>
                                        <div class="actions">
                                            <ul>
                                                <li><a href=""><i class="ri-star-line"></i></a></li>
                                                <li><a href=""><i class="ri-arrow-left-right-line"></i></a></li>
                                                <li><a href=""><i class="ri-eye-line"></i></a></li>
                                            </ul>
                                        </div>
                                        <!-- <div class="label"><span>.25%</span></div> -->
                                    </div>
                                    <div class="dot-info">
                                        <h2 class="dot-title"><a href="">The Sweater in Tosca</a></h2>
                                        <div class="product-price">
                                            <!-- <span class="before">€62.00</span> -->
                                            <span class="current">€45.00</span>  
                                        </div>
                                    </div>
                                  </div>
                                  <div class="item">
                                    <div class="dot-image">
                                        <a href="" class="product-permalink"></a>
                                        <div class="thumbmail">
                                            <img src="images_pf/chemise7.jpg" alt="">
                                        </div>
                                        <div class="thumbmail hover">
                                            <img src="images_pf/chemise4.jpg" alt="">
                                        </div>
                                        <div class="actions">
                                            <ul>
                                                <li><a href=""><i class="ri-star-line"></i></a></li>
                                                <li><a href=""><i class="ri-arrow-left-right-line"></i></a></li>
                                                <li><a href=""><i class="ri-eye-line"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="label"><span>.25%</span></div>
                                    </div>
                                    <div class="dot-info">
                                        <h2 class="dot-title"><a href="">The Sweater in Tosca</a></h2>
                                        <div class="product-price">
                                            <span class="before">€62.00</span>
                                            <span class="current">€45.00</span>  
                                        </div>
                                    </div>
                                  </div>
                                  <div class="item">
                                    <div class="dot-image">
                                        <a href="" class="product-permalink"></a>
                                        <div class="thumbmail">
                                            <img src="images_pf/chemise7.jpg" alt="">
                                        </div>
                                        <div class="thumbmail hover">
                                            <img src="images_pf/chemise4.jpg" alt="">
                                        </div>
                                        <div class="actions">
                                            <ul>
                                                <li><a href=""><i class="ri-star-line"></i></a></li>
                                                <li><a href=""><i class="ri-arrow-left-right-line"></i></a></li>
                                                <li><a href=""><i class="ri-eye-line"></i></a></li>
                                            </ul>
                                        </div>
                                        <!-- <div class="label"><span>.25%</span></div> -->
                                    </div>
                                    <div class="dot-info">
                                        <h2 class="dot-title"><a href="">The Sweater in Tosca</a></h2>
                                        <div class="product-price">
                                            <!-- <span class="before">€62.00</span> -->
                                            <span class="current">€45.00</span>  
                                        </div>
                                    </div>
                                  </div>
                                  <div class="item">
                                    <div class="dot-image">
                                        <a href="" class="product-permalink"></a>
                                        <div class="thumbmail">
                                            <img src="images_pf/chemise7.jpg" alt="">
                                        </div>
                                        <div class="thumbmail hover">
                                            <img src="images_pf/chemise4.jpg" alt="">
                                        </div>
                                        <div class="actions">
                                            <ul>
                                                <li><a href=""><i class="ri-star-line"></i></a></li>
                                                <li><a href=""><i class="ri-arrow-left-right-line"></i></a></li>
                                                <li><a href=""><i class="ri-eye-line"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="label"><span>.25%</span></div>
                                    </div>
                                    <div class="dot-info">
                                        <h2 class="dot-title"><a href="">The Sweater in Tosca</a></h2>
                                        <div class="product-price">
                                            <span class="before">€62.00</span>
                                            <span class="current">€45.00</span>  
                                        </div>
                                    </div>
                                  </div>
                            </div>
                        </div>
                        </div>
                         <div id="shirt" class="sort-data">
                        <div class="dotgrid">
                            <div class="wrapper">
                                <!-- copy .item from carousel -->
                                  <div class="item">
                                    <div class="dot-image">
                                        <a href="" class="product-permalink"></a>
                                        <div class="thumbmail">
                                            <img src="images_pf/chemise7.jpg" alt="">
                                        </div>
                                        <div class="thumbmail hover">
                                            <img src="images_pf/chemise4.jpg" alt="">
                                        </div>
                                        <div class="actions">
                                            <ul>
                                                <li><a href=""><i class="ri-star-line"></i></a></li>
                                                <li><a href=""><i class="ri-arrow-left-right-line"></i></a></li>
                                                <li><a href=""><i class="ri-eye-line"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="label"><span>.25%</span></div>
                                    </div>
                                    <div class="dot-info">
                                        <h2 class="dot-title"><a href="">The Sweater in Tosca</a></h2>
                                        <div class="product-price">
                                            <span class="before">€62.00</span>
                                            <span class="current">€45.00</span>  
                                        </div>
                                    </div>
                                  </div>
                                   <div class="item">
                                    <div class="dot-image">
                                        <a href="" class="product-permalink"></a>
                                        <div class="thumbmail">
                                            <img src="images_pf/chemise7.jpg" alt="">
                                        </div>
                                        <div class="thumbmail hover">
                                            <img src="images_pf/chemise4.jpg" alt="">
                                        </div>
                                        <div class="actions">
                                            <ul>
                                                <li><a href=""><i class="ri-star-line"></i></a></li>
                                                <li><a href=""><i class="ri-arrow-left-right-line"></i></a></li>
                                                <li><a href=""><i class="ri-eye-line"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="label"><span>.25%</span></div>
                                    </div>
                                    <div class="dot-info">
                                        <h2 class="dot-title"><a href="">The Sweater in Tosca</a></h2>
                                        <div class="product-price">
                                            <span class="before">€62.00</span>
                                            <span class="current">€45.00</span>  
                                        </div>
                                    </div>
                                  </div>
                                  <div class="item">
                                    <div class="dot-image">
                                        <a href="" class="product-permalink"></a>
                                        <div class="thumbmail">
                                            <img src="images_pf/chemise7.jpg" alt="">
                                        </div>
                                        <div class="thumbmail hover">
                                            <img src="images_pf/chemise4.jpg" alt="">
                                        </div>
                                        <div class="actions">
                                            <ul>
                                                <li><a href=""><i class="ri-star-line"></i></a></li>
                                                <li><a href=""><i class="ri-arrow-left-right-line"></i></a></li>
                                                <li><a href=""><i class="ri-eye-line"></i></a></li>
                                            </ul>
                                        </div>
                                        <!-- <div class="label"><span>.25%</span></div> -->
                                    </div>
                                    <div class="dot-info">
                                        <h2 class="dot-title"><a href="">The Sweater in Tosca</a></h2>
                                        <div class="product-price">
                                            <!-- <span class="before">€62.00</span> -->
                                            <span class="current">€45.00</span>  
                                        </div>
                                    </div>
                                  </div>
                                  <div class="item">
                                    <div class="dot-image">
                                        <a href="" class="product-permalink"></a>
                                        <div class="thumbmail">
                                            <img src="images_pf/chemise7.jpg" alt="">
                                        </div>
                                        <div class="thumbmail hover">
                                            <img src="images_pf/chemise4.jpg" alt="">
                                        </div>
                                        <div class="actions">
                                            <ul>
                                                <li><a href=""><i class="ri-star-line"></i></a></li>
                                                <li><a href=""><i class="ri-arrow-left-right-line"></i></a></li>
                                                <li><a href=""><i class="ri-eye-line"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="label"><span>.25%</span></div>
                                    </div>
                                    <div class="dot-info">
                                        <h2 class="dot-title"><a href="">The Sweater in Tosca</a></h2>
                                        <div class="product-price">
                                            <span class="before">€62.00</span>
                                            <span class="current">€45.00</span>  
                                        </div>
                                    </div>
                                  </div>
                                  <div class="item">
                                    <div class="dot-image">
                                        <a href="" class="product-permalink"></a>
                                        <div class="thumbmail">
                                            <img src="images_pf/chemise7.jpg" alt="">
                                        </div>
                                        <div class="thumbmail hover">
                                            <img src="images_pf/chemise4.jpg" alt="">
                                        </div>
                                        <div class="actions">
                                            <ul>
                                                <li><a href=""><i class="ri-star-line"></i></a></li>
                                                <li><a href=""><i class="ri-arrow-left-right-line"></i></a></li>
                                                <li><a href=""><i class="ri-eye-line"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="label"><span>.25%</span></div>
                                    </div>
                                    <div class="dot-info">
                                        <h2 class="dot-title"><a href="">The Sweater in Tosca</a></h2>
                                        <div class="product-price">
                                            <span class="before">€62.00</span>
                                            <span class="current">€45.00</span>  
                                        </div>
                                    </div>
                                  </div>
                            </div>
                        </div>
                        </div>
                  </div> 
                </div>
            </div>
        </div>
         <!-- Tabbed -->
        <div class="banner">
            <div class="container">
                <div class="wrap">
                    <div class="content">
                        <span>Promo</span>
                        <h3 class="title">Get ready!<br>Winter is coming..</h3>
                        <div class="button"><a href="" class="primary-btn">Go get it</a></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- banner -->

         <div class="fromblog">
            <div class="container">
                <div class="wrap">
                   <div class="heding">
                    <h2 class="title">From the blog</h2>
                   </div> 
                   <div class="dotgrid scrollto">
                    <div class="wrapper">
                        <div class="item">
                        <div class="dot-image">
                            <div class="thumbmail hover">
                                <a href="">
                                    <img src="images_pf/blog1.jpg" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="dot-info">
                            <a href="">Hoodie</a>
                            <h3 class="dot-title">
                                <a href="">What is easier knitting or crocheting?</a>
                            </h3>
                            </div>
                        </div>
                         <div class="item">
                        <div class="dot-image">
                            <div class="thumbmail hover">
                                <a href="">
                                    <img src="images_pf/blog2.jpg" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="dot-info">
                            <a href="">Hoodie</a>
                            <h3 class="dot-title">
                                <a href="">Properly wear a hoodie</a>
                            </h3>
                            </div>
                        </div>
                         <div class="item">
                        <div class="dot-image">
                            <div class="thumbmail hover">
                                <a href="">
                                    <img src="images_pf/blog3.jpg" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="dot-info">
                            <a href="">Hoodie</a>
                            <h3 class="dot-title">
                                <a href="">What should I wear under a sweater ?</a>
                            </h3>
                            </div>
                        </div>
                        <div class="item">
                        <div class="dot-image">
                            <div class="thumbmail hover">
                                <a href="">
                                    <img src="images_pf/blog4.jpg" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="dot-info">
                            <a href="">Hoodie</a>
                            <h3 class="dot-title">
                                <a href="">What should I wear under a sweater ?</a>
                            </h3>
                            </div>
                        </div>
                    </div>
                   </div>
                   <div class="button">
                        <a href="" class="secondary-btn">Read more</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- BLOG -->

        <div class="frominsta">
            <div class="container wide">
                <div class="wrap">
                    <div class="heading">
                        <h2 class="title">Popular Instagram Photos</h2>
                    </div>
                    <div class="dotgrid scrollto">
                        <div class="wrapper">
                            <div class="item">
                                <div class="dot-image">
                                    <a href=""></a>
                                    <div class="thumbmail">
                                        <img src="images_pf/instagram.jpg" alt="">
                                    </div>
                                    <div class="actions">
                                        <i class="ri-instagram-line"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="dot-image">
                                    <a href=""></a>
                                    <div class="thumbmail">
                                        <img src="images_pf/instagram2.jpg" alt="">
                                    </div>
                                    <div class="actions">
                                        <i class="ri-instagram-line"></i>
                                    </div>
                                </div>
                            </div>
                              <div class="item">
                                <div class="dot-image">
                                    <a href=""></a>
                                    <div class="thumbmail">
                                        <img src="images_pf/instagram1.jpg" alt="">
                                    </div>
                                    <div class="actions">
                                        <i class="ri-instagram-line"></i>
                                    </div>
                                </div>
                            </div>
                              <div class="item">
                                <div class="dot-image">
                                    <a href=""></a>
                                    <div class="thumbmail">
                                        <img src="images_pf/instagram3.jpg" alt="">
                                    </div>
                                    <div class="actions">
                                        <i class="ri-instagram-line"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

  </div> 
   <?php include 'includes/footer.php'; ?>
  <div class="overlay" data-overly></div>
   <?php include "includes/menu-mobile.php" ?>

</body>
</html>

