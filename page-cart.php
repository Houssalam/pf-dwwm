<?php  
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
 <?php include "includes/head.php"?>
</head>
<body>
  <div id="page" class="page-cart">
    <?php include "includes/navbar-cart.php" ?>
    <main>
        <div class="section">
            <div class="container wide">
                <div class="wrap">
                  <div class="heading">
                    <h1 class="title">Cart</h1>
                  </div>
                  <div class="content">
                    <div class="cart-table">
                        <div class="product-list has-bg">
                            <div class="table-title">
                                <ul>
                                    <li class="dotgrid">
                                       <div class="grouping wrapper">
                                            <span></span>
                                            <span>Product</span>
                                        </div>
                                        <div class="grouping wrapper">
                                            <span>Price</span>
                                            <span>Qty</span>
                                            <span>Total</span>
                                            <span></span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="table-content">
                                <ul>
                                    <li class="dotgrid">
                                        <div class="grouping wrapper">
                                            <!-- copy structure from floating cart -->
                                            <div class="thumbmail ob-cover">
                                                <a href="">
                                                    <img src="images_pf/shirt_giril2.jpg" alt="">
                                                </a>
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
                                            </div>
                                        </div>
                                        <div class="grouping wrapper">
                                            <div class="price">€45.00</div>
                                                <div class="quantity">
                                                    <div class="control">
                                                        <button>-</button>
                                                        <input type="text" value="1">
                                                        <button>+</button>
                                                    </div>
                                                </div>
                                                <div class="price-sub">€45.00</div>
                                                <a href="" class="item-remove">
                                                    <i class="ri-close-line"></i>
                                                </a>
                                        </div>
                                    </li>
                                    <li class="dotgrid">
                                        <div class="grouping wrapper">
                                            <!-- copy structure from floating cart -->
                                            <div class="thumbmail ob-cover">
                                                <a href="">
                                                    <img src="images_pf/t-shirt-femme-dites-le-avec-des-fleurs-hulk.jpg" alt="">
                                                </a>
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
                                            </div>
                                        </div>
                                        <div class="grouping wrapper">
                                            <div class="price">€45.00</div>
                                                <div class="quantity">
                                                    <div class="control">
                                                        <button>-</button>
                                                        <input type="text" value="1">
                                                        <button>+</button>
                                                    </div>
                                                </div>
                                                <div class="price-sub">€45.00</div>
                                                <a href="" class="item-remove">
                                                    <i class="ri-close-line"></i>
                                                </a>
                                        </div>
                                    </li>
                                    <li class="dotgrid">
                                        <div class="grouping wrapper">
                                            <!-- copy structure from floating cart -->
                                            <div class="thumbmail ob-cover">
                                                <a href="">
                                                    <img src="images_pf/shirt-girl1.jpg" alt="">
                                                </a>
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
                                            </div>
                                        </div>
                                        <div class="grouping wrapper">
                                            <div class="price">€45.00</div>
                                                <div class="quantity">
                                                    <div class="control">
                                                        <button>-</button>
                                                        <input type="text" value="1">
                                                        <button>+</button>
                                                    </div>
                                                </div>
                                                <div class="price-sub">€45.00</div>
                                                <a href="" class="item-remove">
                                                    <i class="ri-close-line"></i>
                                                </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="cart-total">
                        <div class="product-list has-bg">
                            <div class="table-content">
                                <div class="grouping">
                                    <div class="add-note">
                                        <textarea  rows="3" placeholder="Additonal note +"></textarea>
                                    </div>
                                    <div class="sub-total">
                                        <div class="sub-pricing">
                                            <span>Subtotal</span>
                                            <span class="sub-total-price">€147.00</span>
                                        </div>
                                        <div class="sub-terms">
                                            <input type="checkbox" class="checker" id="terms">
                                            <label for="terms">I gree to <a href="" class="grey-link">Terms & Conditions</a></label>
                                       </div>
                                       <div class="button">
                                            <a href="" class="secondary-btn">Checkout</a>
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


    </main>
   <?php include "includes/footer.php" ?>
  </div> 
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
 
</body>
</html>

