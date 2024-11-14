<?php
  
  $html_product_checkout='';
  $tongtien=0;
  $tongsoluong=0;
  if(isset($_SESSION['giohang'])){
    foreach ($_SESSION['giohang'] as $item) {
      extract($item);
      $tongsoluong+=$soluong;
      $tongtien+=$soluong*$price;
      if($soluong==1){
        $soluong='';
      }else{
        $soluong='<div class="checkout-right-quantity">
        <span class="number">'.$soluong.'</span>
      </div>';
      }
      $html_product_checkout.='<div class="checkout-right-list">
      <div class="checkout-right-item">
        <div class="checkout-right-image">
          '.check_img($img).$soluong.'
        </div>
        <div class="checkout-right-content">
          <div class="checkout-right-title">'.$name.'</div>
          <div class="checkout-right-main">
            <div class="checkout-right-color">Màu: '.$color.'</div>
            <div class="checkout-right-size">Size: '.$size.'</div>
          </div>
        </div>
      </div>
      <div class="checkout-right-price">'.number_format($price,0,'',',').'đ</div>
    </div>';
    }
  }
  $html_giamgia='';
  $html_phuongthuc='<label class="phuongthuctt">
          <input name="phuongthuc" value="Thanh toán trực tiếp khi giao hàng" type="radio" checked="checked"/>
          Thanh toán trực tiếp khi giao hàng
        </label><br>
        <label id="phuongthuctt"
          >
          <input name="phuongthuc" value="Thanh toán bằng Thẻ quốc tế / Thẻ nội địa" type="radio"/>
          Thanh toán bằng Thẻ quốc tế / Thẻ nội địa
        </label><br>
        <label id="phuongthuctt"
          >
          <input name="phuongthuc" value="Thanh toán bằng ví MoMo" type="radio"/>
          Thanh toán bằng ví MoMo
        </label>';
  if(isset($_SESSION['giamgia']) && $_SESSION['giamgia']>0){
    $html_giamgia='<div class="form-flex">
    <span> Giảm giá</span>
    <span>'.number_format($_SESSION['giamgia']*$tongtien/100,0,'',',').'đ</span>
  </div>';
  }
  $html_tocdo='';
  if(isset($user) && !isset($_SESSION['btngiamgia']) && isset($_SESSION['namenhan']) && $_SESSION['namenhan']==''){
    extract($user);
    $namenhan='';
    $emailnhan='';
    $sdtnhan='';
    $diachinhan='';
    $_SESSION['namenhan']=$namenhan;
    $_SESSION['emailnhan']=$emailnhan;
    $_SESSION['sdtnhan']=$sdtnhan;
    $_SESSION['diachinhan']=$diachinhan;
    $_SESSION['name']=$name;
    $_SESSION['email']=$email;
    $_SESSION['sdt']=$sdt;
    $_SESSION['diachi']=$diachi;
  }
      
        if(isset($_SESSION['giaohangnhanh']) && $_SESSION['giaohangnhanh']==1){
          $html_tocdo=' checked="checked"';
        }
        if(isset($_SESSION['phuongthuc']) && $_SESSION['phuongthuc']=='Thanh toán trực tiếp khi giao hàng'){
          $html_phuongthuc='<label class="phuongthuctt">
          <input name="phuongthuc" value="Thanh toán trực tiếp khi giao hàng" type="radio" checked="checked"/>
          Thanh toán trực tiếp khi giao hàng
        </label><br>
        <label id="phuongthuctt"
          >
          <input name="phuongthuc" value="Thanh toán bằng Thẻ quốc tế / Thẻ nội địa" type="radio"/>
          Thanh toán bằng Thẻ quốc tế / Thẻ nội địa
        </label><br>
        <label id="phuongthuctt"
          >
          <input name="phuongthuc" value="Thanh toán bằng ví MoMo" type="radio"/>
          Thanh toán bằng ví MoMo
        </label>';
        }
        if(isset($_SESSION['phuongthuc']) && $_SESSION['phuongthuc']=='Thanh toán bằng Thẻ quốc tế / Thẻ nội địa'){
          $html_phuongthuc='<label class="phuongthuctt">
          <input name="phuongthuc" value="Thanh toán trực tiếp khi giao hàng" type="radio" />
          Thanh toán trực tiếp khi giao hàng
        </label><br>
        <label id="phuongthuctt"
          >
          <input name="phuongthuc" value="Thanh toán bằng Thẻ quốc tế / Thẻ nội địa" type="radio" checked="checked"/>
          Thanh toán bằng Thẻ quốc tế / Thẻ nội địa
        </label><br>
        <label id="phuongthuctt"
          >
          <input name="phuongthuc" value="Thanh toán bằng ví MoMo" type="radio"/>
          Thanh toán bằng ví MoMo
        </label>';
        }
        if(isset($_SESSION['phuongthuc']) && $_SESSION['phuongthuc']=='Thanh toán bằng ví MoMo'){
          $html_phuongthuc='<label class="phuongthuctt">
          <input name="phuongthuc" value="Thanh toán trực tiếp khi giao hàng" type="radio"/>
          Thanh toán trực tiếp khi giao hàng
        </label><br>
        <label id="phuongthuctt"
          >
          <input name="phuongthuc" value="Thanh toán bằng Thẻ quốc tế / Thẻ nội địa" type="radio"/>
          Thanh toán bằng Thẻ quốc tế / Thẻ nội địa
        </label><br>
        <label id="phuongthuctt"
          >
          <input name="phuongthuc" value="Thanh toán bằng ví MoMo" type="radio"  checked="checked"/>
          Thanh toán bằng ví MoMo
        </label>';
        }


        
  $html_mail="";
  if(isset($_SESSION['mail']) && $_SESSION['mail']==1){
    $html_mail='<div class="modal active">
    <div class="modal-overlay"></div>
    <div class="modal-content">
      <div class="modal-main">
      <img src="view/layout/assets/images/thanhcong.png" alt="">
        <h3>Bạn đã đặt hàng thành công</h3>
        <div class="modal__succesfully">
          <form action="mailer.php" method="post">
            <input type="hidden" name="emaildat" value="'.$_SESSION['email'].'">
            <input type="hidden" name="tendat" value="'.$_SESSION['name'].'">
            <button name="sendmail" class="monal__succesfully-btn">Xem đơn hàng</button>
          </form>
        </div>
      </div>
    </div>
  </div>';
    unset($_SESSION['mail']);
  }
  
  
?>
<div class="app-fixed">
        <ul class="app-fixed-menu">
          <li class="app-fixed-list active">
            <a href="index.php" class="app-fixed-link">
              <i class="fa fa-home" aria-hidden="true"></i>
            </a>
          </li>
          <li class="app-fixed-list">
            <a href="index.php?pg=product" class="app-fixed-link">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="35"
                height="28"
                viewBox="0 0 35 28"
                fill="none">
                <path
                  d="M25 14C25 16.7614 22.7614 19 20 19C17.2386 19 15 16.7614 15 14C15 11.2386 17.2386 9 20 9C22.7614 9 25 11.2386 25 14Z"
                  fill="white" />
                <circle cx="20" cy="14" r="5" fill="#46694F" />
                <path
                  d="M34.5175 5.27734L23.8712 0C22.7722 1.52031 20.3389 2.58125 17.501 2.58125C14.6631 2.58125 12.2298 1.52031 11.1307 0L0.48448 5.27734C0.0525059 5.49609 -0.122471 6.02109 0.090782 6.45312L3.21849 12.7148C3.43721 13.1469 3.96214 13.3219 4.39412 13.1086L7.48902 11.5938C8.06863 11.3094 8.74667 11.7305 8.74667 12.3812V26.25C8.74667 27.218 9.52859 28 10.4964 28H24.4946C25.4624 28 26.2444 27.218 26.2444 26.25V12.3758C26.2444 11.7305 26.9224 11.3039 27.502 11.5883L30.5969 13.1031C31.0289 13.3219 31.5538 13.1469 31.7725 12.7094L34.9057 6.45312C35.1244 6.02109 34.9494 5.49062 34.5175 5.27734Z"
                  fill="white" />
              </svg>
            </a>
          </li>
          <li class="app-fixed-list">
            <a href="index.php?pg=design" class="app-fixed-link">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="31"
                height="31"
                viewBox="0 0 31 31"
                fill="none">
                <path
                  d="M18 15.5C18 16.8807 16.8807 18 15.5 18C14.1193 18 13 16.8807 13 15.5C13 14.1193 14.1193 13 15.5 13C16.8807 13 18 14.1193 18 15.5Z"
                  fill="white" />
                <circle cx="15.5" cy="15.5" r="2.5" fill="#46694F" />
                <path
                  d="M6.62767 14.7762L14.7759 6.62915L12.1047 3.95787L8.37018 7.69233C8.32565 7.73695 8.27275 7.77235 8.21452 7.7965C8.15629 7.82066 8.09387 7.83309 8.03082 7.83309C7.96778 7.83309 7.90536 7.82066 7.84713 7.7965C7.78889 7.77235 7.736 7.73695 7.69146 7.69233L7.01274 7.01361C6.82505 6.82592 6.82505 6.52198 7.01274 6.3349L10.7472 2.60044L8.71045 0.563075C7.96029 -0.187086 6.74452 -0.187086 5.99436 0.563075L0.562779 5.99463C-0.186781 6.74479 -0.187386 7.96055 0.562779 8.71071L6.62767 14.7762ZM30.148 7.70444C31.2838 6.5686 31.2832 4.72741 30.148 3.59157L27.4083 0.851878C26.2724 -0.283959 24.4306 -0.283959 23.2942 0.851878L20.5078 3.63759L27.3616 10.4914L30.148 7.70444ZM19.1377 5.00834L1.15552 22.988L0.019681 29.493C-0.1335 30.3703 0.63059 31.1344 1.50851 30.98L8.01417 29.8393L25.9915 11.8615L19.1377 5.00834ZM30.4374 22.2899L28.4006 20.2531L24.6661 23.9876C24.4784 24.1753 24.1745 24.1753 23.9874 23.9876L23.3087 23.3089C23.1216 23.1212 23.1216 22.8173 23.3087 22.6302L27.0432 18.8957L24.3707 16.2232L16.2224 24.3703L22.2897 30.4369C23.0399 31.1871 24.2556 31.1871 25.0058 30.4369L30.4374 25.006C31.1875 24.2558 31.1875 23.0401 30.4374 22.2899Z"
                  fill="white" />
              </svg>
            </a>
          </li>
          <li class="app-fixed-list">
            <a href="index.php?pg=login" class="app-fixed-link">
              <i class="fa fa-user-circle" aria-hidden="true"></i>
            </a>
          </li>
          <div class="selected-option-bg"></div>
        </ul>
      </div>
<div class="link-mobile">
        <a href="#">Trang chủ </a>
        <i class="fa fa-chevron-right" aria-hidden="true"></i>
        <a href="#">Áo thun</a>
      </div>
    <form action="index.php?pg=checkout" method="post">
      <section class="checkout">
       
        <div class="container">
          <div class="checkout-center">
            <div class="checkout-center-icon">
              <i class="fa fa-credit-card-alt" aria-hidden="true"></i>
            </div>
            <div class="checkout-center-text">Thanh toán</div>
            <p>Vui lòng kiểm tra thông tin khách hàng, đơn hàng trước khi thanh toán.</p>
          </div>
          <div class="checkout-main">
            <div class="checkout-left">
              <div class="order">
                <h3 class="order-title">Thông tin đặt hàng</h3>
                <div action="" class="order-form order-info">
                  
                  <input name="tendat" class="order-input" type="text" placeholder="Nhập họ tên" value="<?=$_SESSION['name']?>" />
                  <div class="errform"><?=$errname?></div>
                  <input name="emaildat" class="order-input" type="text" placeholder="Nhập email"  value="<?=$_SESSION['email']?>"/> 
                  <div class="errform"><?=$erremail?></div>
                  <input name="sdtdat" class="order-input" type="text" placeholder="Nhập số điên thoại"  value="<?=$_SESSION['sdt']?>"/> 
                  <div class="errform"><?=$errsdt?></div>
                  <input name="diachidat" class="order-input" type="text" placeholder="Nhập địa chỉ"  value="<?=$_SESSION['diachi']?>"/> 
                  <div class="errform"><?=$errdiachi?></div>
                </div>
                <div class="order-checkbox">
                  <input onchange='diachikhac()' class="checkdiachi" type="checkbox" />
                  Giao hàng đến địa chỉ khác
                </div>
                <div class="diachikhac"  style="display:none">
                  <h3 class="order-title">Thông tin nhận hàng</h3>
                  <div class="order-form order-info">
                    <input name="tennhan" class="order-input" type="text" placeholder="Nhập họ tên"  value="<?=$_SESSION['namenhan']?>"/> 
                    <div class="errform"><?=$errnamenhan?></div>
                    <input name="emailnhan" class="order-input" type="text" placeholder="Nhập email"  value="<?=$_SESSION['emailnhan']?>"/>
                    <div class="errform"><?=$erremailnhan?></div>
                    <input name="sdtnhan" class="order-input" type="text" placeholder="Nhập số điên thoại"  value="<?=$_SESSION['sdtnhan']?>"/> 
                    <div class="errform"><?=$errsdtnhan?></div>
                    <input name="diachinhan" class="order-input" type="text" placeholder="Nhập địa chỉ"  value="<?=$_SESSION['diachinhan']?>"/> 
                    <div class="errform"><?=$errdiachinhan?></div>
                  </div>
                </div>
              </div>
              <div class="order-pt">
                <h3 class="order-title">Phương thức giao hàng</h3>
                  <input type="checkbox" <?=$html_tocdo?> name="tocdo">
                  <label for="radio1">Tốc độ tiêu chuẩn (từ 2 - 5 ngày làm việc)</label>
              </div>
              <div id="order-pt">
                <h3 class="order-title">Phương thức thanh toán</h3>
                
                <?=$html_phuongthuc?>

                <!-- <form action="" class="order-form">
                  <div class="order-radio">
                    <div class="order-radio__group">
                      <input type="radio" value="Thanh toán trực tiếp khi giao hàng" />
                      <span></span>
                    </div>
                    <div class="order-radio-text">Thanh toán trực tiếp khi giao hàng</div>
                  </div>
                  <div class="order-radio">
                    <div class="order-radio__group">
                      <input
                        type="radio"
                        value="Thanh toán bằng Thẻ quốc tế / Thẻ nội địa / QR Code" />
                      <span></span>
                    </div>
                    <div class="order-radio-text">
                      Thanh toán bằng Thẻ quốc tế / Thẻ nội địa / QR Code
                    </div>
                  </div>
                  <div class="order-radio">
                    <div class="order-radio__group">
                      <input type="radio" value="Thanh toán bằng ví MoMo" />
                      <span></span>
                    </div>
                    <div class="order-radio-text">Thanh toán bằng ví MoMo</div>
                  </div>
                </form> -->
              </div>
            </div>
            <div class="checkout-right">
              <div class="checkout-right-box">
                <div class="checkout-right-title-heading">Đơn hàng (<?=$tongsoluong?> sản phẩm)</div>
                <div class="checkout-right-overflow">
                  
                <?=$html_product_checkout?>
                  
                </div>
                <div class="voucher">
                  
                    <?php
                      echo '<div class="voucher-list">
                      <div class="voucher-item">
                      <input name="magiamgia" type="text" placeholder="Nhập mã giảm giá" value='.$_SESSION['magiamgia'].'>
                    </div>
                    <div class="voucher-btn">
                      <button name="btngiamgia" class="voucher-button voucher-button-mobile">Áp dụng</button>
                    </div>
                    </div>
                    <div class="errform">'.$errvoucher.'</div>';
                    ?>
                  
                </div>
                <div class="form-group">
                  <div class="form-flex">
                    <span> Tạm tính</span>
                    <span><?=number_format($tongtien,0,'',',')?>đ</span>
                  </div>

                  <?=$html_giamgia?>

                  <div class="form-flex">
                    <span>Phí vận chuyển </span>
                    <span>-</span>
                  </div>
                </div>
                
                <div class="form-flex mt-10">
                  <span class="checkout-total">Tổng cộng </span>
                  <span><?=number_format($tongtien-$_SESSION['giamgia']*$tongtien/100,0,'',',')?>đ</span>
                </div>
                <div class="form-flex back-flex mt-10">
                  <div class="back-cart">
                    <a href="index.php?pg=cart">Quay về giỏ hàng</a>
                  </div>
                  
                  <div class="voucher-btn button-primary__primary">
                    <button name="thanhtoan"  class="voucher-button">Đặt hàng</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </section>
      </form>
      <?=$html_mail?>