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
                <div class="diachikhac">
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