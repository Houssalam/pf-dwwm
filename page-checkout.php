<?php  
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<?php  include "includes/head.php" ?>
</head>
<body>
  <div id="page" class="page-checkout">

  <?php  include "includes/navbar-check.php" ?>
    <main>
        <div class="section">
            <div class="container wide">
                <div class="wrap">
                  <div class="heading">
                    <h1 class="title">Checkout</h1>
                  </div>
                  <div class="content">
                    <div class="checkout-address">
                        <h2>Billing dettails</h2>
                        <form action="">
                            <div class="dotgrid">
                                <div class="wrapper">
                                    <div>
                                        <label>First name *</label>
                                        <input type="text" placeholder="First name">
                                    </div>
                                    <div>
                                        <label>Last name *</label>
                                        <input type="text" placeholder="Last name">
                                    </div>
                                </div>
                            </div>
                            <div>
                               <label>Company name </label>
                               <input type="text" placeholder="Company name"> 
                            </div>
                            <div>
                                <label for="Contry">Contry / Region *</label>
                                <select name="Contry" id="contry">
                                    <option value=""></option>
                                    <option value="1">Afganistan</option>
                                    <option value="2">Aland Island</option>
                                    <option value="3">Albanie</option>
                                    <option value="4" selected="selected">United States</option>
                                    <option value="5">Others</option>
                                </select>
                            </div>
                            <div>
                               <label>Street address *</label>
                               <input type="text" placeholder="Street address"> 
                               <input type="text" placeholder="Appartment, suite etc, (Optional)"> 
                            </div>
                            <div>
                                <label>Town / City *</label>
                                <input type="text" placeholder="Town / City">
                            </div>
                            <div>
                                <label>State *</label>
                                <input type="text" placeholder="State">
                            </div>
                            <div>
                                <label>Zip Code *</label>
                                <input type="text" placeholder="Zip Code">
                            </div>
                            <div class="dotgrid">
                                <div class="wrapper">
                                    <div>
                                        <label>Phone *</label>
                                        <input type="tel" placeholder="Phone">
                                    </div>
                                    <div>
                                        <label>Email address *</label>
                                        <input type="text" placeholder="Email address">
                                    </div>
                                </div>
                            </div>
                            <div>
                                <label class="check-option">
                                    <input type="checkbox" class="checker">
                                    <span>Create an account?</span>
                                </label>
                            </div>
                        </form>
                    </div>
                    <div class="checkout-products has-bg">
                        <div class="order-summary">
                            <div class="wrapper">
                                <h2>Order Summary</h2>
                                <div class="product-list">
                                    <ul>
                                        <li>
                                            <div class="grouping">
                                                <div class="thumbmail ob-cover">
                                                    <span class="item-floating">xl</span>
                                                    <img src="images_pf/shirt-girl1.jpg" alt="">
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
                                                <div class="price-item">
                                                    <span>€45.00</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="grouping">
                                                <div class="thumbmail ob-cover">
                                                    <span class="item-floating">xl</span>
                                                    <img src="images_pf/shirt_giril2.jpg" alt="">
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
                                                <div class="price-item">
                                                    <span>€45.00</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="grouping">
                                                <div class="thumbmail ob-cover">
                                                    <span class="item-floating">xl</span>
                                                    <img src="images_pf/t-shirt-girl3.jpg" alt="">
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
                                                <div class="price-item">
                                                    <span>€45.00</span>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="total-summary has-bg">
                            <div class="wrapper cart-footer">
                                <div class="payment-options list-inline">
                                    <span>Select payment</span>
                                    <ul>
                                        <li>
                                            <input type="radio" name="pay-option" id="cc">
                                            <label for="cc"><i class="ri-bank-card-line"></i></label>
                                        </li>
                                        <li>
                                            <input type="radio" name="pay-option" id="pp">
                                            <label for="pp"><i class="ri-paypal-line"></i></label>
                                        </li>
                                        <li>
                                            <input type="radio" name="pay-option" id="cod">
                                            <label for="cod"><i class="ri-hand-coin-line"></i></label>
                                        </li>
                                    </ul>
                                </div>
                                <div class="discount">
                                    <form action="">
                                        <input type="text" class="input" placeholder="Coupon">
                                        <input type="submit" class="submit" value="Apply">
                                    </form>
                                </div>
                                <div class="math-pricing">
                                    <ul>
                                        <li>
                                            <span>Subtotal</span>
                                            <span class="value">€147.00</span>
                                        </li>
                                        <li>
                                            <span>Tax</span>
                                            <span class="value">€14.70</span>
                                        </li>
                                        <li>
                                           <ul>
                                            <li><span>Shipping</span></li>
                                            <li>
                                                <div>
                                                    <input type="radio" class="checker">
                                                    <label>Free</label>
                                                </div>
                                                <span class="value">€0.00</span>
                                            </li>
                                            <li>
                                                <div>
                                                    <input type="radio" class="checker">
                                                    <label>Flat</label>
                                                </div>
                                                <span class="value">€10.00</span>
                                            </li>
                                           </ul> 
                                        </li>
                                         <li>
                                            <span>Promo discount</span>
                                            <span class="value">€00.00</span>
                                        </li>
                                         <li class="total">
                                            <span>Total</span>
                                            <span class="value">€161.70</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="button">
                                    <a href="" class="secondary-btn">Place order</a>
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>


    </main>
  <?php include "includes/footer.php"  ?>
  </div> 
  <div class="overlay" data-overly></div>
  <?php include "includes/menu-mobile.php"  ?>
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
    <div id="data-mobile-nav" class="mobile-nav">
        <div class="wrap">
            <a href="#0"><i class="ri-home-4-line"></i></a>
            <a href="#0"><i class="ri-user-line"></i></a>
            <a href="#0">
                <i class="ri-star-line"></i>
                <span class="item-floating">7</span>
            </a>
            <a href="#0" class="search-trigger" data-target="data-cart">
                <i class="ri-shopping-bag-line"></i>
                <span class="item-floating">3</span>
            </a>
            <a href="#0"><i class="ri-arrow-up-line "></i></a>
        </div>
    </div>

   <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
  <script src="script.js"></script> 
</body>
</html>

