<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <?php include "includes/head.php" ?>
</head>
<body>
  <div id="page" class="page-single">
  <?php include "includes/navbrar-single.php" ?>
    <main>
        <div class="section">
            <div class="container">
                <div class="wrap">
                    <div class="product dotgrid">
                        <div class="wrapper">
                            <div class="image">
                                <div class="outer-main">
                                    <div class="main-image swiper">
                                        <div class="wrap swiper-wrapper">
                                        <div class="item swiper-slide"><img src="images_pf/shirt_giril2.jpg" alt=""></div>
                                        <div class="item swiper-slide"><img src="images_pf/shirt-girl1.jpg" alt=""></div>
                                        <div class="item swiper-slide"><img src="images_pf/t-shirt-girl3.jpg" alt=""></div>
                                        <div class="item swiper-slide"><img src="images_pf/chemise1.jpg" alt=""></div>
                                        <div class="item swiper-slide"><img src="images_pf/chemise2.jpg" alt=""></div>
                                        <div class="item swiper-slide"><img src="images_pf/chemise3.jpg" alt=""></div>
                                        </div>
                                    </div>
                                    <div class="custom-pagination">
                                        <div class="swiper-pagination"></div>
                                    </div>
                                </div>
                                <div class="outer-thumb ob-cover">
                                    <div class="thumbmail-image swiper">
                                        <div class="wrap swiper-wrapper">
                                            <div class="item swiper-slide">
                                                <div class="thumb-wrap"><img src="images_pf/shirt_giril2.jpg" alt=""></div>
                                            </div>
                                            <div class="item swiper-slide">
                                                <div class="thumb-wrap"><img src="images_pf/shirt-girl1.jpg" alt=""></div>
                                            </div>
                                            <div class="item swiper-slide">
                                                <div class="thumb-wrap"><img src="images_pf/t-shirt-girl3.jpg" alt=""></div>
                                             </div>
                                             <div class="item swiper-slide">
                                                <div class="thumb-wrap"><img src="images_pf/chemise1.jpg" alt=""></div>
                                             </div>
                                              <div class="item swiper-slide">
                                                <div class="thumb-wrap"><img src="images_pf/chemise2.jpg" alt=""></div>
                                            </div>
                                             <div class="item swiper-slide">
                                                <div class="thumb-wrap"><img src="images_pf/chemise3.jpg" alt=""></div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                            </div>
                            <div class="summary">
                                <div class="entry">
                                    <h1 class="title">The Sweater in Tosc</h1>
                                    <div class="product-group">
                                        <div class="product-price">
                                            <span class="curent">€45.00</span>
                                            <div class="wrap">
                                                 <span class="before">€62.00</span>
                                                 <span class="discount">.25%</span>
                                            </div>
                                        </div>
                                        <div class="product-rating">
                                            <span>  
                                                <i class="ri-star-fill"></i>
                                                <span>4.8</span>
                                            </span>
                                            <a href="">3 Reviews</a>
                                        </div>
                                    </div>
                                    <div class="product-color">
                                        <span>Colors:</span>
                                        <div class="wrap">
                                            <button class="tosca selected"></button>
                                            <button class="brown"></button>
                                            <button class="ocean"></button>
                                        </div>
                                    </div>
                                     <div class="product-size">
                                        <span>Size:</span>
                                        <div class="wrap">
                                            <button disabled>S</button>
                                            <button>M</button>
                                            <button class="selected">L</button>
                                            <button>XL</button>
                                        </div>
                                    </div>
                                    <div class="product-stock">
                                        <div class="wrap">
                                            <strong>201</strong>
                                            <span class="grey-color">In Stock</span>
                                            <i class="ri-checkbox-circle-line"></i>
                                        </div>
                                    </div>
                                    <div class="product-action">
                                        <div class="qty">
                                            <button class="decrease">-</button>
                                            <input type="text" value="1">
                                            <button class="increase">+</button>
                                        </div>
                                        <div class="addcart button">
                                            <button type="submit" class="primary-btn">Add to cart</button>
                                        </div>
                                        <div class="buynow button">
                                            <button type="submit" class="secondary-btn">Buy Now</button>
                                        </div>
                                    </div>
                                    <div class="product-control list-inline">
                                        <ul>
                                            <li><a href=""><i class="ri-heart-line"></i><span>Add to wishlist</span></a></li>
                                            <li><a href=""><i class="ri-arrow-left-right-line"></i><span>Compare</span></a></li>
                                            <li><a href="#0" class="search-trigger" data-target="data-share"><i class="ri-share-forward-line"></i><span>Share</span></a></li>
                                            <li><a href="#0" class="search-trigger" data-target="data-question"><i class="ri-question-line"></i><span>Ask Question</span></a></li>
                                        </ul>
                                    </div>
                                    <div class="shipping">
                                        <ul>
                                            <li>
                                                <i class="ri-gift-line"></i>
                                                <span>Free shipping & return</span>
                                                <span class="grey-color">On orders over SIDD</span>
                                            </li>
                                            <li>
                                                <i class="ri-truck-line"></i>
                                                <span>Estimate delivery:</span>
                                                <span class="grey-color">20 - 25 juillet, 2030</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product detail">
                        <div class="wrapper tabbed">
                        <nav class="list-inline scrollto">
                                <ul class="wrapper">
                                    <li class="active"><a href="#0" class="tabbed-trigger" data-id="product-description"><span>Product details</span></a></li>
                                    <li><a href="#0" class="tabbed-trigger" data-id="product-custom"><span>Custom</span></a></li>
                                    <li><a href="#0"class="tabbed-trigger" data-id="product-review"><span>Reviews</span><span class="item-floating">3</span></a></li>
                                    <li><a href="#0"class="tabbed-trigger" data-id="product-shipping"><span>shipping</span></a></li>
                                </ul>
                        </nav>
                        <div id="product-description" class="product-about description active">
                            <div class="text-block">
                                <h3>The Sweater in Tosca</h3>
                                <div class="grey-color">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur voluptates hic harum veritatis nihil, incidunt repellendus provident minus odio reiciendis sunt. Dolores quae libero sit.</p>
                                    <p>Dolor sit amet consectetur adipisicing elit. Consectetur voluptates hic harum veritatis nihil, incidunt repellendus provident minus odio reiciendis sunt.</p>
                                </div>
                            </div>
                            <div class="dotgrid">
                                <div class="wrapper">
                                        <div class="list-block">
                                             <h4>What is this?</h4>
                                              <ul class="grey-color">
                                                <li>95% Polyester, 5% Spandex</li>
                                                <li>Wrap closure</li>
                                                <li>Hand Wash Only</li>
                                                <li>Simple yet flaterring dress</li>
                                              </ul>
                                        </div>
                                        <div class="list-block">
                                             <h4>What makes our products unique?</h4>
                                            <p class="grey-color">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo consectetur reprehenderit, debitis repellat neque natus tempora excepturi commodi in eaque a voluptate inventore nam iure ullam modi?</p>
                                       </div>
                                        <div class="list-block">
                                             <h4>Whashing Instuctions</h4>
                                            <p class="grey-color">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo consectetur reprehenderit, debitis repellat.</p>
                                       </div>
                                </div>
                            </div>
                        </div>
                        <div id="product-custom" class="product-about custom">
                            <h3>Our custom sizes</h3>
                            <div class="image">
                                <img src="images_pf/customer2.jpg" alt="">
                            </div>
                        </div>
                        <div id="product-review" class="product-about review">
                            <div class="wrapper">
                                <h3>Ratting & Review</h3>
                                <div class="head-review">
                                    <div class="sum-rating">
                                        <strong>4.8</strong>
                                        <span>3 reviews</span>
                                    </div>
                                    <div class="button">
                                        <a href="#0" class="primary-btn search-trigger" data-target="data-review">Write a review</a>
                                    </div>
                                </div>
                                <div class="body-review">
                                    <div class="profile1">
                                        <div class="thumb-name">
                                            <div class="image">
                                                <img src="images_pf/blog2.jpg" alt="">
                                            </div>
                                            <div class="grouping">
                                                <div class="name">Sofia</div>
                                                <div class="rating">
                                                    <i class="ri-star-fill"></i>
                                                    <i class="ri-star-fill"></i>
                                                    <i class="ri-star-fill"></i>
                                                    <i class="ri-star-fill"></i>
                                                </div>
                                                <div class="date grey-color">On Juillet 27, 2023</div>
                                            </div>
                                        </div>
                                        <div class="comment">
                                            <strong>Awesome Product</strong>
                                            <p class="grey-color">Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet, repudiandae, officiis aliquid dolorem neque fugit, nihil cum odit dolor voluptatibus quia aspernatur numquam. Vero, qui.</p>
                                        </div>
                                    </div>
                                    <div class="profile1">
                                        <div class="thumb-name">
                                            <div class="image">
                                                <img src="images_pf/blog3.jpg" alt="">
                                            </div>
                                            <div class="grouping">
                                                <div class="name">Samir</div>
                                                <div class="rating">
                                                    <i class="ri-star-fill"></i>
                                                    <i class="ri-star-fill"></i>
                                                    <i class="ri-star-fill"></i>
                                                    <i class="ri-star-fill"></i>
                                                </div>
                                                <div class="date grey-color">On Juillet 27, 2023</div>
                                            </div>
                                        </div>
                                        <div class="comment">
                                            <strong>This is what i need so bad</strong>
                                            <p class="grey-color">Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet, repudiandae, officiis aliquid dolorem neque fugit, nihil cum odit dolor voluptatibus quia aspernatur numquam. Vero, qui.</p>
                                        </div>
                                    </div>
                                     <div class="profile1">
                                        <div class="thumb-name">
                                            <div class="image">
                                                <img src="images_pf/blog1.jpg" alt="">
                                            </div>
                                            <div class="grouping">
                                                <div class="name">Mariam</div>
                                                <div class="rating">
                                                    <i class="ri-star-fill"></i>
                                                    <i class="ri-star-fill"></i>
                                                    <i class="ri-star-fill"></i>
                                                    <i class="ri-star-fill"></i>
                                                </div>
                                                <div class="date grey-color">On Juillet 29, 2023</div>
                                            </div>
                                        </div>
                                        <div class="comment">
                                            <strong>You should buy too</strong>
                                            <p class="grey-color">Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet, repudiandae, officiis aliquid dolorem neque fugit, nihil cum odit dolor voluptatibus quia aspernatur numquam. Vero, qui.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="product-shipping" class="product-about shipping">
                            <div class="color-grey">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed saepe odio, temporibus, nam numquam id quod ad qui facere assumenda, dolore labore nostrum laudantium asperiores consequatur quisquam unde quos. Voluptas.</p>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Carousel structure, copy from index.html -->

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

    </main>
     
  </div> 
  <?php include "includes/footer.php" ?>
  <div class="overlay" data-overly></div>
   <?php include "includes/menu-mobile.php" ?>
   
    <div id="data-share" class="data-popup d-share">
      <div class="wrap">
        <div class="data-content">
             <a href="#0" class="close-trigger" close-button><i class="ri-close-line"></i></a>
             <div class="form">
                  <label>Copy link</label>
                  <input type="text" disabled value="https://youtbe.com/c/dotwebdesign">
                  <span><i class="ri-file-line"></i></span>
             </div>
             <div class="media-share list-inline">
              <label>Share</label>
                    <ul>
                        <li><a href=""><i class="ri-facebook-line"></i></a></li>
                        <li><a href=""><i class="ri-instagram-line"></i></a></li>
                        <li><a href=""><i class="ri-pinterest-line"></i></a></li>
                        <li><a href=""><i class="ri-youtube-line"></i></a></li>
                        <li><a href=""><i class="ri-whatsapp-line"></i></a></li>
                    </ul>
             </div>
        </div>
      </div>
   </div>
 
   <div id="data-question" class="data-popup d-question">
    <div class="wrap">
         <div class="data-content">
              <a href="#0" class="close-trigger" close-button><i class="ri-close-line"></i></a>
              <h3>The Question</h3>
              <form action="">
                <div><input type="text" placeholder="Name"></div>
                <div><input type="text" placeholder="Email"></div>
                <div><textarea placeholder="Your question is.." cols="30" rows="5"></textarea></div>
                <div class="button">
                    <button type="submit" class="secondary-btn">Submit</button>
                </div>
              </form>
         </div>
    </div>
    </div>

        <div id="data-review" class="data-popup d-review">
        <div class="wrap">
            <div class="data-content">
                <a href="#0" class="close-trigger" close-button><i class="ri-close-line"></i></a>
                <h3>Write a Review</h3>
        <form action="actions/reviews/postReviewsAction.php" method="POST">
            <div class="dotgrid">
                <div class="wrapper">
                    <div><input type="text" name="name_review" id="name-review" placeholder="Name"></div>
                    <div><input type="email" name="email_review" id="email-review" placeholder="Email"></div>
                </div>
            </div>
            <div class="rating">
                <span>Your rating</span>
                <div class="stars">
                    <input type="radio" name="rating" id="star5">
                    <label for="star5"><i class="ri-star-fill"></i></label>
                    <input type="radio" name="rating" id="star4">
                    <label for="star4"><i class="ri-star-fill"></i></label>
                    <input type="radio" name="rating" id="star3">
                    <label for="star3"><i class="ri-star-fill"></i></label>
                    <input type="radio" name="rating" id="star2">
                    <label for="star2"><i class="ri-star-fill"></i></label>
                    <input type="radio" name="rating" id="star1">
                    <label for="star1"><i class="ri-star-fill"></i></label>
                </div>
            </div>
            <div><input type="text" name="review_title" id="review-title" placeholder="Review title"></div>
            <div><textarea name="review_text" id="review-text" placeholder="Your review is.." cols="30" rows="5"></textarea></div>
            <input type="hidden" name="product_id" value="<?php echo $product_id; ?>">
            <div class="button">
                <button type="submit" class="secondary-btn">Submit</button>
            </div>
        </form>

    </div>
    </div>
    </div>
    <div id="data-cart" class="cart-menu">
        <div class="wrap">
            <a href="#0" class="close-trigger" close-button><i class="ri-close-line"></i></a>
            <div class="scrollto cart-outer">
                <div class="wrapper">
                    <div class="cart-list">
                        <div class="wrapper">
                            <div class="cart-header">
                                <h2>Shopping cart</h2>
                            </div>
                            <div class="cart-body scrollto">
                                <div class="product-list">
                                    <div class="wrapper">
                                        <ul>
                                            <li>
                                                <div class="grouping">
                                                    <div class="quantity">
                                                        <div class="control">
                                                            <button>-</button>
                                                            <input type="text" value="1">
                                                            <button>+</button>
                                                        </div>
                                                    </div>
                                                    <div class="thumbmail">
                                                        <a href="">
                                                            <img src="images_pf/shirt_giril2.jpg" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="variants">
                                                    <h4 class="dot-title"><a href="">The Sweater in tosca</a></h4>
                                                    <div class="color gey-color">
                                                        <span>Color</span>
                                                        <span>Tosca</span>
                                                    </div>
                                                    <div class="size gey-color">
                                                        <span>Size</span>
                                                        <span>L</span>
                                                    </div>
                                                    <div class="price">€45.00</div>
                                                    <a href="" class="item-remove">
                                                        <i class="ri-close-line"></i>
                                                    </a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="grouping">
                                                    <div class="quantity">
                                                        <div class="control">
                                                            <button>-</button>
                                                            <input type="text" value="1">
                                                            <button>+</button>
                                                        </div>
                                                    </div>
                                                    <div class="thumbmail">
                                                        <a href="">
                                                            <img src="images_pf/shirt-girl1.jpg" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="variants">
                                                    <h4 class="dot-title"><a href="">Gray ELC2</a></h4>
                                                    <div class="color gey-color">
                                                        <span>Color</span>
                                                        <span>Tosca</span>
                                                    </div>
                                                    <div class="size gey-color">
                                                        <span>Size</span>
                                                        <span>L</span>
                                                    </div>
                                                    <div class="price">€45.00</div>
                                                    <a href="" class="item-remove">
                                                        <i class="ri-close-line"></i>
                                                    </a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="grouping">
                                                    <div class="quantity">
                                                        <div class="control">
                                                            <button>-</button>
                                                            <input type="text" value="1">
                                                            <button>+</button>
                                                        </div>
                                                    </div>
                                                    <div class="thumbmail">
                                                        <a href="">
                                                            <img src="images_pf/t-shirt-girl3.jpg" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="variants">
                                                    <h4 class="dot-title"><a href="">The black sweater</a></h4>
                                                    <div class="color gey-color">
                                                        <span>Color</span>
                                                        <span>Tosca</span>
                                                    </div>
                                                    <div class="size gey-color">
                                                        <span>Size</span>
                                                        <span>L</span>
                                                    </div>
                                                    <div class="price">€45.00</div>
                                                    <a href="" class="item-remove">
                                                        <i class="ri-close-line"></i>
                                                    </a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="cart-footer">
                                <div class="discount">
                                    <form action="">
                                        <input type="text" class="input" placeholder="Coupon">
                                        <input type="submit"class="submit" value="Apply">
                                    </form>
                                </div>
                                <div class="math-pricing">
                                    <ul>
                                        <li>
                                            <span>Subtotal</span>
                                            <span class="value"></span>
                                        </li>
                                        <ul>
                                            <li><span>shipping</span></li>
                                            <li>
                                                <div>
                                                    <input type="radio" class="checker" name="shipping">
                                                    <label for="">Free</label>
                                                </div>
                                                <span class="value">€0.00</span>
                                            </li>
                                              <li>
                                                <div>
                                                    <input type="radio" class="checker" name="shipping">
                                                    <label for="">Flat</label>
                                                </div>
                                                <span class="value">€10.00</span>
                                            </li>
                                        </ul>
                                        <li>
                                            <span>Prom discount</span>
                                            <span class="value">. €0.00</span>
                                        </li>
                                        <li class="total">
                                            <span>Total</span>
                                            <span class="value">€147.00</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="button">
                                    <a href="" class="secondary-btn">Checkout</a>
                                    <a href="" class="grey-link">View cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


   <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
 
</body>
</html>

