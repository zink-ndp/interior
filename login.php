<!DOCTYPE html>
<html lang="en">

<?php
  session_start();
  require 'connect.php';
?>

<!-- stella-orre/shop.html  30 Nov 2019 03:52:07 GMT -->
<?php
    require 'head.php';
?>

<body>

<div class="page-wrapper">
    <!-- Preloader -->
    <!-- <div class="preloader"></div> -->

    <header class="main-header header-style-one">
        <!--Header Top-->
        <?php
			require 'head-top.php';
		?>
        <!-- End Header Top -->

        <!-- Header Upper -->
        <?php
			require 'head-upper.php';
		?>
        <!--End Header Upper-->

    	<!-- Mobile Menu  -->
        <?php
			require 'mobile-menu.php';
		?>
        <!-- End Mobile Menu -->

    </header>
    <!-- End Main Header -->

    <!-- main -->
    <main class="main-content  mt-0">
    <section>
      <div class="page-header min-vh-100">
        <div class="container">
          <div class="row">
            <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto">
              <div class="card card-plain">
                <div class="card-header pb-0 text-start">
                  <h4 class="font-weight-bolder">Đăng nhập trang quản lý</h4>
                  <p class="mb-0">Nhập username và password để đăng nhập</p>
                </div>
                <div class="card-body">
                  <form role="form" method="post" action="log.php">
                    <div class="mb-3">
                      <input required type="text" name="usname" class="form-control form-control-lg" placeholder="Username" aria-label="Username">
                    </div>
                    <div class="mb-3">
                      <input required type="password" name="pass" class="form-control form-control-lg" placeholder="Password" aria-label="Password" id="passInput">
                    </div>
                    <div class="mb-3 d-flex justify-content-center">                      
                      <button class="btn btn-link" type="button" id="showPasswordBtn">
                        Hiện mật khẩu <i class="fa fa-eye" aria-hidden="true"></i>
                      </button>
                    </div>
                    <!-- <div class="form-check form-switch">
                      <input class="form-check-input" type="checkbox" id="rememberMe">
                      <label class="form-check-label" for="rememberMe">Remember me</label>
                    </div> -->
                    <div class="text-center">
                      <button type="submit" class="btn btn-lg btn-primary btn-lg w-100 mt-n3 mb-0">Đăng nhập</button>
                    </div>
                  </form>
                  <div class="text-center">
                    <p class="mt-3 text-xs text-secondary ">- Hoặc -</p>
                  </div>
                  <div class="text-center">
                    <a href="../index.php" class="btn btn-lg btn-outline-primary text-primary btn-lg w-100 mt-0 mb-0">Quay lại trang bán hàng</a>
                  </div>
                </div>
                <script>
                  const passInput = document.getElementById('passInput');
                  const showPasswordBtn = document.getElementById('showPasswordBtn');
                  showPasswordBtn.addEventListener('click', () => {
                      if (passInput.type === 'password') {
                          passInput.type = 'text';
                          showPasswordBtn.innerHTML = 'Ẩn mật khẩu <i class="fa fa-eye-slash" aria-hidden="true"></i>';
                      } else {
                          passInput.type = 'password';
                          showPasswordBtn.innerHTML = 'Hiện mật khẩu <i class="fa fa-eye" aria-hidden="true"></i>';
                      }
                  });
                </script>

                <!-- <div class="card-footer text-center pt-0 px-lg-2 px-1">
                  <p class="mb-4 text-sm mx-auto">
                    Don't have an account?
                    <a href="javascript:;" class="text-primary text-gradient font-weight-bold">Sign up</a>
                  </p>
                </div> -->
              </div>
            </div>
            <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 end-0 text-center justify-content-center flex-column">
              <div class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center overflow-hidden" style="background-image: url('https://images.unsplash.com/photo-1599488615731-7e5c2823ff28?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80');
          background-size: cover;">
                <span class="mask bg-gradient-primary opacity-6"></span>
                <h4 class="mt-5 text-white font-weight-bolder position-relative">"Forish ornamental fish shop"</h4>
                <p class="text-white position-relative">Let the captivating beauty of our ornamental fish rejuvenate your living space with a touch of nature's artistry. Our store offers an extensive selection of fish species, featuring vibrant colors, unique patterns, and exquisite shapes- elevating your aquarium to a breathtaking work of art.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  
	
	
	
	<!--Main Footer-->
    <?php
        include "footer.php";
    ?>
	
</div>  
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>

<!--Scroll to top-->
<script src="js/jquery.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/isotope.js"></script>
<script src="js/owl.js"></script>
<script src="js/wow.js"></script>
<script src="js/appear.js"></script>
<script src="js/scrollbar.js"></script>
<script src="js/script.js"></script>
</body>

<!-- stella-orre/shop.html  30 Nov 2019 03:52:14 GMT -->
</html>