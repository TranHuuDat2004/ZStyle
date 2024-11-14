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
              <div class="login-title">ĐĂNG KÝ</div>
              <div class="login-regiter">
                Đã có tài khoản, đăng nhập
                <a href="index.php?pg=login" class="regester-link">tại đây </a>
              </div>
            </div>
            <form action="index.php?pg=register" method="post" class="login-form">
              <?php
                if(!isset($_SESSION['usernamesignup']) || !isset($_SESSION['passwordsignup'])){
                  $_SESSION['usernamesignup']='';
                  $_SESSION['passwordsignup']='';
                  $_SESSION['emailsignup']='';
                  $_SESSION['repasswordsignup']='';
               }
               echo '<input name="user" type="text" placeholder="Tên tài khoản" value='.$_SESSION['usernamesignup'].'> 
               <div class="errform mb-unset">'.$errusername.'</div>
               <input name="email" type="text" placeholder="Email "  value='.$_SESSION['emailsignup'].'> 
               <div class="errform mb-unset">'.$erremail.'</div>
               <div class="login-password">
                 <input name="pass" type="password" placeholder="Mật khẩu "  value='.$_SESSION['passwordsignup'].'>
                 <i class="fa fa-eye hien"  onclick="anmatkhau()" aria-hidden="true"></i>
               </div>
               <div class="errform mb-unset">'.$errpassword.'</div>
               <div class="login-password">
                 <input name="repass" type="password" placeholder="Nhập lại mật khẩu "  value='.$_SESSION['repasswordsignup'].'>
                 <i class="fa fa-eye hien"  onclick="anmatkhau1()" aria-hidden="true"></i>
               </div>
               <div class="errform mb-unset">'.$errrepassword.'</div>';
              ?>
              
              <div class="login-button">
                <button name="btn_register" class="login-btn">Đăng ký</button>
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