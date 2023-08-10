   
   <header>
        <div class="inner-header">
            <div class="container wide">
                <div class="wrap">
                    <div class="header-left">
                        <div class="menu-bar">
                            <a href="#0" class="menu-trigger" search-trigger data-target="mobile-menu" id="menu-trigger"><i class="ri-menu-line"></i></a>
                        </div>
                        <div class="list-inline menu-trigger">
                            <ul>
                                 <li><a href="">
                                          <i class="ri-user-line"></i>
                                    </a>
                                    <ul class="sub-profile list-block" >
                                        <?php if(!isset($_SESSION['auth'])): ?>
                                        <li><a href="page-signin.php">Login</a></li>
                                        <li><a href="page-signup.php">Register</a></li>
                                         <?php endif; ?>
                                        <?php if(isset($_SESSION['auth'])): ?>
                                        <li><a href="actions/users/logout.php">Logout</a></li>
                                        <li><a href="profile.php?user_id=<?= $_SESSION['iduser']; ?>">Profile</a></li>
                                         <?php endif; ?>
                                         <?php if(isset($_SESSION['auth']) && isset($_SESSION['role']) && $_SESSION['role'] == 2): ?>
                                        <li><a href="users.php">Users</a></li>
                                        <?php endif; ?>

                                       
                                    </ul>
                                </li>
                                <li><a href=""><span class="item-floating">7</span>
                                   <i class="ri-star-line"></i>
                                </a></li>
                            </ul>
                        </div>    
                    </div>
                    <div class="header-center">
                        <nav class="menu">
                            <ul>
                                <li><a href="index.php"><span>Home</span></a></li>
                                <li><a href="">
                                      <span>Products</span>
                                        <i class="ri-arrow-down-s-line"></i>
                                    </a>
                                    <ul class="sub-mega">
                                        <li>
                                            <div class="container">
                                                <div class="wrapper">
                                                    <div class="mega-content">
                                                        <div class="dotgrid">
                                                            <div class="wrapper">
                                                                <div class="item">
                                                                    <div class="dot-image">
                                                                        <a href="" class="product-permalink"></a>
                                                                        <div class="thumbmail">
                                                                            <img src="images_pf/shirt-girl1.jpg" alt="">
                                                                        </div>
                                                                        <div class="thumbmail hover">
                                                                            <img src="images_pf/chemise1.jpg" alt="">
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
                                                                </div><div class="item">
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
                                                                
                                                            </div>
                                                        </div>
                                                        <div class="links">
                                                            <div class="list-block">
                                                                <h3 class="dot-title">Apparel</h3>
                                                                <ul>
                                                                    <li><a href="">Prada</a></li>
                                                                    <li><a href="">Gocci</a></li>
                                                                    <li><a href="">Chanel</a></li>
                                                                    <li><a href="">Ganni</a></li>
                                                                    <li><a href="">Zara</a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="list-block">
                                                                <h3 class="dot-title">Shoes</h3>
                                                                <ul>
                                                                    <li><a href="">Adidas</a></li>
                                                                    <li><a href="">Nike</a></li>
                                                                    <li><a href="">Puma</a></li>
                                                                    <li><a href="">Gocci</a></li>
                                                                    <li><a href="">Dolce & Gabbana</a></li>
                                                                    <li><a href="">Louis Vuitton</a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="list-block">
                                                                <h3 class="dot-title">Perfume</h3>
                                                                <ul>
                                                                    <li><a href="">Armani</a></li>
                                                                    <li><a href="">Chanel</a></li>
                                                                    <li><a href="">Dior</a></li>
                                                                    <li><a href="">Gocci</a></li>
                                                                    <li><a href="">Hugo Boss</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href=""><span>Disc</span></a></li>
                               
                            </ul>
                            <ul>
                              
                                <li><a href="">
                                       <span>Specials</span>
                                          <i class="ri-arrow-down-s-line"></i>
                                    </a>
                                    <ul class="sub-menu list-block">
                                        <li><a href="">Dolce & Gabbana</a></li>
                                        <li><a href="">Louis Witton</a></li>
                                        <li><a href="">Versace</a></li>
                                        <li><a href="">Dior</a></li>
                                       
                                    </ul>
                                </li>
                                <li><a href=""><span>Sale</span></a></li>
                            </ul>
                        </nav>
                        <div class="branding"><a href="">Theshop</a></div>
                    </div>
                    <div class="header-right">
                        <div class="list-inline">
                              <ul>
                                 <li><a href="#0" class="search-trigger" data-target="search-float"><i class="ri-search-line"></i></a></li>

                                 <li><a href="#0" class="search-trigger" data-target="data-cart"><span class="item-floating">3</span><i class="ri-shopping-bag-line"></i></a></li>
                             </ul>
                       </div>

                    </div>
                </div>
            </div>
            <div class="container">
                <div class="wrap">
                    <div class="breadcrumb list-inline">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><span>Checkout</span></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div id="search-float" class="search-float" data-target="search-float">
                <div class="container wide">
                    <form action="" class="search">
                        <i class="ri-search-line"></i>
                        <input type="search" class="input" id="" placeholder="Search products">
                        <i class="ri-close-line close-button"></i>

                    </form>
                </div>
            </div>
        </div>
    </header>