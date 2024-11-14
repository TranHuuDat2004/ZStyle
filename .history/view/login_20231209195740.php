<div class="link-mobile">
        <a href="#">Trang chủ </a>
        <i class="fa fa-chevron-right" aria-hidden="true"></i>
        <a href="#">Áo thun</a>
      </div>
      <!-- Login -->
      <section class="login">
        <div class="container">
          <div class="login-box">
            <div class="login-auth__login">
              <div class="login-title">ĐĂNG NHẬP</div>
              <div class="login-regiter">
                Nếu bạn chưa có tài khoản, đăng ký
                <a href="index.php?pg=register" class="regester-link"> tại đây</a>
              </div>
            </div>
            <form action="index.php?pg=login" method="post" class="login-form">
              <?php
                if(!isset($_SESSION['usernamelogin']) || !isset($_SESSION['passwordlogin'])){
                  $_SESSION['usernamelogin']='';
                  $_SESSION['passwordlogin']='';
               }
                echo '<input name="username" type="text" placeholder="Tên tài khoản" value='.$_SESSION['usernamelogin'].'> 
                <div class="errform mb-unset">'.$errusername.'</div>
  
                <div class="login-password">
                  <input name="password" type="password" placeholder="Mật khẩu" value='.$_SESSION['passwordlogin'].' >
                  <i class="fa fa-eye hien"  onclick="anmatkhau()" aria-hidden="true"></i>
                </div>
                <div class="errform mb-unset">'.$errpassword.'</div>';
              ?>
              

              <a href="index.php?pg=forgetpass"><div class="form-group-center">Quên mật khẩu</div></a>
              <div class="login-button">
                <button class="login-btn" name="login">Đăng nhập</button>
              </div>
              <div class="login__center">
                <div class="form-group-center text">Hoặc đăng nhập bằng</div>
                <div class="form-app">
                  <div class="form-app__fb">
                    <button>
                      <span><i class="fa fa-facebook" aria-hidden="true"></i> Facebook</span>
                    </button>
                  </div>
                  <div class="form-app__google">
                    <button>
                      <span><i class="fa fa-google-plus" aria-hidden="true"></i> Google</span>
                    </button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </section>