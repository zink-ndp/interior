<div class="header-upper">
            <div class="inner-container">
                <div class="auto-container clearfix">
                    <!--Info-->
                    <div class="logo-outer">
                        <div class="logo"><a href="index-2.html"><img src="images/logo.png" alt="" title=""></a></div>
                    </div>

                    <!--Nav Box-->
                    <div class="nav-outer clearfix">
                        <!--Mobile Navigation Toggler For Mobile--><div class="mobile-nav-toggler"><span class="icon flaticon-menu-1"></span></div>
                        <nav class="main-menu navbar-expand-md">
                            <div class="navbar-header">
                                <!-- Togg le Button -->      
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="icon flaticon-menu-1"></span>
                                </button>
                            </div>
                            
                            <div class="collapse navbar-collapse clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">
                                    <li><a href="index.php">Trang chủ</a>
                                        <!-- <ul>
                                            <li><a href="index-2.html">Home page 01</a></li>
                                            <li><a href="index-3.html">Home page 02</a></li>
                                            <li><a href="index-4.html">Home page 03</a></li>
											<li><a href="index-5.html">Home page 04</a></li>
                                            <li><a href="index-6.html">Home page 05</a></li>
                                            <li class="dropdown"><a href="index-2.html">Header Styles</a>
                                                <ul>
                                                    <li><a href="index-2.html">Header Style One</a></li>
                                                    <li><a href="index-3.html">Header Style Two</a></li>
                                                    <li><a href="index-4.html">Header Style Three</a></li>
													<li><a href="index-5.html">Header Style Four</a></li>
                                                    <li><a href="index-6.html">Header Style Five</a></li>
                                                </ul>
                                            </li>
                                        </ul> -->
                                    </li>
									<li class="dropdown"><a href="about.html">Về chúng tôi</a>
                                        <ul>
                                            <li><a href="about.html">Our Introduction</a></li>
											<li><a href="team.html">Our Team</a></li>
											<li><a href="testimonials.html">Testimonials</a></li>
                                        </ul>
                                    </li>
                                    <li> <a href="shop.php">Sản phẩm</a>  </li>
                                    <li class="dropdown"><a href="projects-classic.html">Nội thất</a>
                                        <ul>
                                            <li><a href="projects-classic.html">Projects Classic</a></li>
                                            <li><a href="projects-masonry.html">Project Masonry</a></li>
                                            <li><a href="projects-fullwidth.html">Project Full Screen</a></li>
                                        </ul>
                                    </li>
									<li class="dropdown"><a href="shop.php">Shop</a>
                                        <ul>
                                            <li><a href="shop.php">Main shop page</a></li>
                                            <li><a href="product-detail.php">Product Detail Page</a></li>
                                            <li><a href="cart-page.html">Cart Page</a></li>
											<li><a href="checkout.html">Checkout</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.html">Liên hệ</a></li>
                                    <?php
                                        if (isset($_SESSION["id"])){
                                            ?>
                                                <li class="dropdown"><a href="myaccount.php"></span>Hi, <?php echo $_SESSION["lname"] ?></a>
                                                    <ul>
                                                        <li><a href="about.html">Thông tin cá nhân</a></li>
                                                        <li><a href="team.html">Đổi mật khẩu</a></li>
                                                        <li><a href="logout.php">Đăng xuất</a></li>
                                                    </ul>
                                                </li>
                                            <?php
                                        } else {
                                            ?>
                                                <li><a href="login.php"><span class="icon "><i class="fas fa-user"></i></span>  Đăng nhập</a></li>
                                            <?php
                                        }
                                    ?>
                                </ul>
                            </div>
                        </nav>
                        <!-- Main Menu End-->
						
						<!-- Outer Box -->
                        <div class="outer-box clearfix">
                            <div class="search-box-btn"><span class="icon"></span><i class="fas fa-search"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>