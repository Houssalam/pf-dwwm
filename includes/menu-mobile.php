  <div id="menu-mobile" class="mobile-menu">
    <div class="wrap">
        <a href="" class="close-trigger" close-button>
            <i class="ri-close-line"></i>
        </a>
        <div class="main-menu scrollto">
            <nav class="wrapper">
                <ul>
                    <li><a href=""><span>Home</span></a></li>
                    <li class="has-child"><a href="">
                        <span>Products</span>
                        <span class="child-trigger"><i class="ri-arrow-down-s-line"></i></span>
                    </a>
                     <ul class="sub-menu list-block">
                        <li><a href="">Adidas</a></li>
                        <li><a href="">Chanel</a></li>
                        <li><a href="">Dolce & Gabbana</a></li>
                        <li><a href="">Ganni</a></li>
                        <li><a href="">Gocci</a></li>
                        <li><a href="">Louis Witton</a></li>
                        <li><a href="">Nike</a></li>
                        <li><a href="">Prada</a></li>
                        <li><a href="">Puma</a></li>
                        <li><a href="">Zara</a></li>
                        <li><a href="">Adidas</a></li>
                        <li><a href="">Chanel</a></li>
                        <li><a href="">Dolce & Gabbana</a></li>
                        <li><a href="">Ganni</a></li>
                        <li><a href="">Gocci</a></li>
                        <li><a href="">Louis Witton</a></li>
                        <li><a href="">Nike</a></li>
                        <li><a href="">Prada</a></li>
                        <li><a href="">Puma</a></li>
                        <li><a href="">Zara</a></li>
                    </ul>
                    </li>
                    <li><a href=""><span>Discount</span></a></li>
                    <li class="has-child">
                        <a href="">
                             <span>Specials</span>
                        <span class="child-trigger"><i class="ri-arrow-down-s-line"></i></span>

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
            <div class="button">
                <?php if(!isset($_SESSION['auth'])): ?>
                <a href="page-signin.php" class="secondary-btn">Login</a>
                <a href="page-signup.php" class="primary-btn">Register</a>
                <?php endif; ?> 
                 <?php if(isset($_SESSION['auth'])): ?>
                <a href="actions/users/logout.php">Logout</a>
                <a href="profile.php?user_id=<?= $_SESSION['iduser']; ?>">Profile</a>
                <?php endif; ?>
                <?php if(isset($_SESSION['auth']) && isset($_SESSION['role']) && $_SESSION['role'] == 2): ?>
                <a href="users.php">Users</a>
                <?php endif; ?>

                                        
            </div>
        </div>
    </div>
  </div>