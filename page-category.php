<?php  
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
 <?php include "includes/head.php"?>
</head>
<body>
  <div id="page" class="page-category">
    <?php include "includes/navbar-cat.php"?>
    <main>
        <div class="section">
            <div class="container wide">
                <div class="wrap">
                  <div class="heading">
                    <h1 class="title">Sweater</h1>
                  </div>
                  <div class="content">
                    <div id="sidebar-filter" class="sidebar">
                        <div class="wrap">
                            <a href="#0" class="close-trigger" close-button>
                                <i class="ri-close-line"></i>
                            </a>
                            <div class="sidebar-content">
                                <div class="sidebar-title">Filter</div>
                                <div class="widget">
                                    <div class="summary">
                                        <input type="checkbox" name="cats" id="aaa" checked>
                                        <label for="aaa">
                                            <span>Size</span>
                                            <i class="ri-arrow-down-s-line"></i>
                                        </label>
                                        <div class="accord product-size">
                                            <div class="wrap">
                                                <button>S</button>
                                                <button>M</button>
                                                <button>L</button>
                                                <button>XL</button>
                                                <button>XXL</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget">
                                    <div class="summary">
                                        <input type="checkbox" name="cats" id="aab" checked>
                                        <label for="aab">
                                            <span>Colors</span>
                                            <i class="ri-arrow-down-s-line"></i>
                                        </label>
                                        <div class="accord product-color">
                                            <div class="wrap">
                                                <button class="tosca"></button>
                                                <button class="brown"></button>
                                                <button class="ocean"></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget">
                                    <div class="summary">
                                        <input type="checkbox" name="cats" id="aac" checked>
                                        <label for="aac">
                                            <span>Categories</span>
                                            <i class="ri-arrow-down-s-line"></i>
                                        </label>
                                        <div class="accord list-block scrollto">
                                            <ul class="wrapper initial">
                                                <li><a href="">Active Wear</a></li>
                                                <li><a href="">Beauty</a></li>
                                                <li><a href="">Candles</a></li>
                                                <li><a href="">Fashion</a></li>
                                                <li><a href="">Furniture</a></li>
                                                <li><a href="">Glasses</a></li>
                                                <li><a href="">Mat</a></li>
                                                <li><a href="">Nail Polishing</a></li>
                                                <li><a href="">Organic</a></li>
                                                <li><a href="">Backpack</a></li>
                                                <li><a href="">Bedding</a></li>
                                                <li><a href="">Coffee</a></li>
                                                <li><a href="">Living</a></li>
                                                <li><a href="">Plants</a></li>
                                                <li><a href="">Sneaker</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget">
                                    <div class="summary">
                                        <input type="checkbox" name="cats" id="aad" checked>
                                        <label for="aad">
                                            <span>Brands</span>
                                            <i class="ri-arrow-down-s-line"></i>
                                        </label>
                                        <div class="accord list-block scrollto">
                                            <ul class="wrapper initial">
                                                <li><a href="">Adidas</a></li>
                                                <li><a href="">Chanel</a></li>
                                                <li><a href="">Dolce & Gabbana</a></li>
                                                <li><a href="">Ganni</a></li>
                                                <li><a href="">Gucci</a></li>
                                                <li><a href="">Louis Vuitton</a></li>
                                                <li><a href="">Nike</a></li>
                                                <li><a href="">Prada</a></li>
                                                <li><a href="">Puma</a></li>
                                                <li><a href="">Zara</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget">
                                    <div class="summary">
                                        <label><span>Price</span></label>
                                        <div class="range-track">
                                            <input type="range" value="25" min="0" max="500" step="1">
                                        </div>
                                        <div class="price-range grey-color">
                                            <span>€30</span>
                                            <span>€500</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="category-content">
                        <div class="sorter">
                            <a href="#0" class="menu-trigger search-trigger"  data-target="sidebar-filter">
                                <i class="ri-filter-line"></i>
                            </a>
                            <div class="left">
                                <span class="grey-color">Showing 9 of 35 results</span>
                            </div>
                            <div class="right">
                                <div class="sort-list">
                                    <div class="wrap">
                                        <div class="op-trigger">
                                            <span class="value">Default Sorting</span>
                                            <i class="ri-arrow-down-s-line"></i>
                                        </div>
                                        <ul>
                                            <li class="active"><a href="#0">Default sorting</a></li>
                                            <li><a href="#0">Popular</a></li>
                                            <li><a href="#0">Rating</a></li>
                                            <li><a href="#0">Latest</a></li>
                                            <li><a href="#0">Price: low to high</a></li>
                                            <li><a href="#0">Price: high to low</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="list-inline">
                                    <ul>
                                        <li><a href=""><i class="ri-pause-mini-line"></i></a></li>
                                        <li><a href=""><i class="ri-list-check-2"></i></a></li>
                                        <li><a href=""><i class="ri-layout-grid-line"></i></a></li>
                                        <li><a href=""><i class="ri-layout-masonry-line"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
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
                        <div class="button"><a href="" class="primary-btn">Loard more</a></div>
                    </div>
                  </div>
                </div>
            </div>
        </div>


    </main>
  <?php include "includes/footer.php"?>
  </div> 
  <div class="overlay" data-overly></div>
  <?php include "includes/menu-mobile.php"   ?>
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
              <form action="">
                <div class="dotgrid">
                    <div class="wrapper">
                          <div><input type="text" placeholder="Name"></div>
                          <div><input type="text" placeholder="Email"></div>
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
                <div><input type="text" placeholder="Review title"></div>
                <div><textarea placeholder="Your review is.." cols="30" rows="5"></textarea></div>
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
  <script src="script.js"></script> 
</body>
</html>

