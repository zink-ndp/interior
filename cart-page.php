<!DOCTYPE html>
<html lang="en">

<?php require 'head.php' ?>

<body>

<div class="page-wrapper">
    <!-- Preloader -->
    <!-- <div class="preloader"></div> -->

    <header class="main-header header-style-one">
        <?php
			require 'head-top.php';
			require 'head-upper.php';
			require 'mobile-menu.php';
		?>
    </header>
    <!-- End Main Header -->

    <!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/5.jpg)">
    </section>
    <!--End Page Title-->
	
	<!--Cart Section-->
    <section class="cart-section">
        <div class="auto-container">

            <!--Cart Outer-->
            <div class="cart-outer">
                <div class="table-outer">
                    <table class="cart-table">
                        <thead class="cart-header">
                            <tr>
                            	<th>Hình ảnh</th>
                            	<th class="prod-column">Tên sản phẩm</th>
                                <th class="price">Đơn giá</th>
                                <th>Số lượng</th>
                                <th>Tổng tiền</th>
                                <th>&nbsp;</th>
                            </tr>
                        </thead>

                        <tbody>
                        	<tr>
                                <td class="prod-column">
                                    <div class="column-box">
                                        <figure class="prod-thumb"><a href="#"><img src="images/resource/products/8.jpg" alt=""></a></figure>
                                    </div>
                                </td>
                                <td><h4 class="prod-title">Tool</h4></td>
                                <td class="sub-total">$25.00</td>
                                <td class="qty"><div class="item-quantity"><input class="quantity-spinner" type="text" value="2" name="quantity"></div></td>
                                <td class="total-price">$25.00</td>
                                <td><a href="#" class="remove-btn"><span class="fas fa-times"></span></a></td>
                            </tr>

                        </tbody>
                    </table>
                </div>

                <div class="cart-options clearfix">
                    <div class="pull-left">
                        <div class="apply-coupon clearfix">
                            <div class="form-group clearfix">
                                <input type="text" name="coupon-code" value="" placeholder="Mã giảm giá">
                            </div>
                            <div class="form-group clearfix">
                                <button type="button" class="theme-btn coupon-btn">Áp dụng mã</button>
                            </div>
                        </div>
                    </div>

                    <div class="pull-right">
                        <a href="shop.php" type="button" class="theme-btn cart-btn">Thêm sản phẩm khác</a>
                    </div>

                </div>

                <div class="row clearfix">

					<div class="column col-lg-7 col-md-5 col-sm-12">
					</div>
					
                    <div class="column col-lg-5 col-md-7 col-sm-12">
                        <!--Totals Table-->
                        <ul class="totals-table">
                        	<li><h3>Tổng giỏ hàng</h3></li>
                            <!-- <li class="clearfix"><span class="col">Sub Total</span><span class="col">$25.00</span></li> -->
                            <li class="clearfix total"><span class="col">Total</span><span class="col price">$25.00</span></li>
                            <li class="text-right"><button type="submit" class="theme-btn proceed-btn">Thanh toán</button></li>
                        </ul>
					</div>
				</div>
			</div>

        </div>
    </section>
    <!--End Cart Section-->
	
	<?php require 'footer.php' ?>
	
</div>  
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>

<!--Search Popup-->
<div id="search-popup" class="search-popup">
	<div class="close-search theme-btn"><span class="flaticon-cancel"></span></div>
	<div class="popup-inner">
		<div class="overlay-layer"></div>
    	<div class="search-form">
        	<form method="post" action="templateshub.net">
            	<div class="form-group">
                	<fieldset>
                        <input type="search" class="form-control" name="search-input" value="" placeholder="Search Here" required >
                        <input type="submit" value="Search Now!" class="theme-btn">
                    </fieldset>
                </div>
            </form>
            
            <br>
            <h3>Recent Search Keywords</h3>
            <ul class="recent-searches">
                <li><a href="#">Home Interiors</a></li>
                <li><a href="#">Offices Interiors</a></li>
                <li><a href="#">Showroom Interiors</a></li>
                <li><a href="#">Building Interiors</a></li>
                <li><a href="#">Shops Interiors</a></li>
            </ul>
        
        </div>
        
    </div>
</div>

<!--Scroll to top-->
<script src="js/jquery.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/owl.js"></script>
<script src="js/wow.js"></script>
<script src="js/appear.js"></script>
<script src="js/jquery.bootstrap-touchspin.js"></script>
<script src="js/scrollbar.js"></script>
<script src="js/script.js"></script>
</body>

<!-- stella-orre/cart-page.html  30 Nov 2019 03:52:15 GMT -->
</html>