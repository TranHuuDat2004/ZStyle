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
              <div class="login-title">QUÊN MẬT KHẨU</div>
              <div class="login-regiter">
                Nếu bạn chưa có tài khoản, đăng ký
                <a href="index.php?pg=register" class="regester-link"> tại đây</a>
              </div>
            </div>
            <div class="login-form">
              <?php
              
               if((isset($_SESSION['code']) && $_SESSION['code']) || (isset($_SESSION['codedung']) && $_SESSION['codedung'])){
                    echo '<form action="index.php?pg=forgetpass" method="post" class="login-form">
                    <input name="codexn" type="text" placeholder="Mã xác nhận" value="'.$_SESSION['code'].'">
                    <div style="color:red; margin-bottom:10px">'.$_SESSION['errcode'].'</div>
                    <div class="login-button">
                    <button class="login-btn" name="nhapcode">Gửi mã</button>
                </div>
                </form>';
               }else{
                    if(isset($_SESSION['xacnhanemail']) && $_SESSION['xacnhanemail']==1){
                        echo '<form action="index.php?pg=forgetpass" method="post" class="login-form">
                                <div class="login-password">
                                    <input name="pass" type="password" placeholder="Mật khẩu mới"  value="'.$_SESSION['passnew'].'">
                                    <i class="fa fa-eye hien"  onclick="anmatkhau()" aria-hidden="true"></i>
                                </div>
                                <div style="color:red; margin-bottom:10px">'.$_SESSION['errpassnew'].'</div>
                                <div class="login-password">
                                    <input name="repass" type="password" placeholder="Nhập lại mật khẩu "  value="'.$_SESSION['repassnew'].'">
                                    <i class="fa fa-eye hien"  onclick="anmatkhau1()" aria-hidden="true"></i>
                                </div>
                                <div style="color:red; margin-bottom:10px">'.$_SESSION['errrepassnew'].'</div>
                                <div class="login-button">
                                <button class="login-btn" name="nhappass">Tạo mật khẩu</button>
                            </div>
                            </form>';
                    }else{
                        echo '<form action="mailer.php" method="post" class="login-form">
                        <input name="emailxn" type="text" placeholder="Email" value="'.$_SESSION['emailxn'].'">
                        <div style="color:red; margin-bottom:10px">'.$_SESSION['erremailxn'].'</div>
                        <div class="login-button">
                        <button class="login-btn" name="guima">Xác nhận email</button>
                      </div>
                      </form>';
                    }
               }
                
              ?>
              

              
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
            </div>
          </div>
        </div>
      </section>