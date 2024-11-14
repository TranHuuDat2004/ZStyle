<?php
  $html_color='';
  $i=0;
  foreach ($list_color as $item) {
    $i++;
    extract($item);
    if($i==1){
      $html_color.='
      <div id_color="'.$id.'" onclick="change_color(this)" class="detail-circle">
        <div  style="display:none;">'.$color.'</div>
        <span class="detail-color__circle" style="background-color: '.$ma_color.'"></span>
      </div>
    ';
    }else{
      $html_color.='
      <div  id_color="'.$id.'" onclick="change_color(this)" class="detail-circle">
        <div style="display:none;">'.$color.'</div>
        <span class="detail-color__circle" style="background-color: '.$ma_color.'"></span>
    
    </div>';
    }
  }
  $html_size='';
  $i=0;
 
  foreach ($list_size as $item) {
    $i++;
    extract($item);
    if($i==1){
      $html_size.='
      <div id_size="'.$id.'" onclick="change_size(this)" class="detail-size__item active">'.$ma_size.'</div>
    ';
    }else{
      $html_size.='
      <div id_size="'.$id.'" onclick="change_size(this)" class="detail-size__item">'.$ma_size.'</div>';
    }
  }
  $html_relative_product='';
  foreach ($splienquan as $item) {
    $html_relative_product.=showproduct($item);
  }

  
  $arr='';
  if(isset($listsoluongtonkho)){
    usort($listsoluongtonkho, function($a, $b) {
      if ($a['id_color'] == $b['id_color']) {
          return $a['id_size'] - $b['id_size'];
      }
      return $a['id_color'] - $b['id_color'];
  });
    $arr = json_encode($listsoluongtonkho);
  }
  $html_err_comment='';
  if(isset($_SESSION['err_comment']) && $_SESSION['err_comment']>0){
    if($_SESSION['err_comment']==1){
      $html_err_comment='<div class="modal active">
      <div class="modal-overlay"></div>
      <div class="modal-content">
        <div class="modal-main">
          <img src="view/layout/assets/images/thatbai.png" alt="">
          <h3>Bạn phải đăng nhập vào tài khoản trước khi bình luận</h3>
          <div class="modal__succesfully">
              <button onclick="tatthongbaocart()" class="monal__succesfully-btn">Đồng ý</button>
          </div>
        </div>
      </div>
    </div>';
    }else{
      if($_SESSION['err_comment']==2){
        $html_err_comment='<div class="modal active">
      <div class="modal-overlay"></div>
      <div class="modal-content">
        <div class="modal-main">
          <img src="view/layout/assets/images/thatbai.png" alt="">
          <h3>Bạn phải đặt hàng thành công ít nhất một sản phẩm mới có thể bình luận</h3>
          <div class="modal__succesfully">
              <button onclick="tatthongbaocart()" class="monal__succesfully-btn">Đồng ý</button>
          </div>
        </div>
      </div>
    </div>';
      }
    }
    unset($_SESSION['err_comment']);
  }
?>



<div id="myData" data-array='<?php echo $arr; ?>'></div>
<script>
   var soluongtonkho = JSON.parse(document.getElementById('myData').getAttribute('data-array'));
    console.log(soluongtonkho); // ['apple', 'banana', 'orange']
</script>
<?=$html_err_comment?>

<div class="link-mobile">
    <a href="#">Trang chủ </a>
    <i class="fa fa-chevron-right" aria-hidden="true"></i>
    <a href="#">Áo thun</a>
</div>

<section class="detail">
        <div class="container">
          <div class="detail-main">

            <?=showimgdetail($imgproduct);?>

            <div class="detail-content">
              <h3 class="detail-title"><?=$name?></h3>
              <div class="detail-code">Mã sản phẩm: <span><?=$ma_sanpham?></span></div>
              <div class="detail-price"><?=number_format($detail['price'],0,'',',')?>đ
                <?=sale($detail)?>
              </div>
              <div class="detail-auth__color">
                <div class="detail-colors">Màu sắc: </div>
                <?=$html_color?>
              </div>
              <div class="detail-size">Size: <span class="pick-size">XS</span></div>
              <div class="detail-size__list">

                <?php
                  echo $html_size;
                ?>

              </div>
              <div class="detail-auth">
                <div class="detail-text">Số lượng:</div>
                <div class="detail-input">
                  <button onclick="minus()" class="detail-input__minus">-</button>
                  <input onchange="update_soluong()" type="text" value=1 />
                  <button onclick="plus()" class="detail-input__plus">+</button>
                </div>
                <div class="detail-inventory">Còn hàng</div>
                <div style="display:none" id="slcon"></div>
              </div>
              <div class="detail-btn">
                <form id="checkoutdung" action="index.php?pg=checkout" method="post">
                  <input  type="hidden" name="soluong_checkout" value=1>
                  <input type="hidden" name="id_checkout" value=<?=$detail['id']?>>
                  <button name="btndetailcheckout" class="detail-button">Mua ngay</button>
              </form>
              <button style="display:none" id="checkoutsai" onclick="hethang()" class="detail-button">Mua ngay</button>
              </div>
              <div class="detail-btn">
                <form id="cartdung" class="addtocart" action="index.php?pg=addtocart" method="post">
                  <input type="hidden" name="id" value=<?=$detail['id']?>>
                  <input  type="hidden" name="img" value="">
                  <input type="hidden" name="name" value="<?=$name?>">
                  <input type="hidden" name="color" value="">
                  <input  type="hidden" name="size" value="">
                  <input  type="hidden" name="soluong" value="">
                  <input  type="hidden" name="price" value=<?=$price?>>
                  <button name="addtocart" class="detail-button__cart">Thêm vào giỏ hàng</button>
                </form>
                <button style="display:none" id="cartsai" onclick="hethang()" class="detail-button__cart">Thêm vào giỏ hàng</button>
              </div>
            </div>
          </div>
          <section id="tab" class="detail-menu-comment">
            <div class="detail-menu">
              <ul class="detail-tab">
                <li class="detail-tab__item" id="iddetail">
                  <a href="#tab" class="detail-tab__link active">Thông tin chi tiết</a>
                </li>
                <li class="detail-tab__item" id="policy">
                  <a href="#tab" class="detail-tab__link">Chính sách bán hàng</a>
                </li>
                <li class="detail-tab__item" id="comment">
                  <a href="#tab" class="detail-tab__link">Đánh giá sản phẩm</a>
                </li>
              </ul>
            </div>
            <div class="detail-policy">
              <div class="detail-body">
                <p class="detail-body__text">
                  Áo thun Half được DESCENTE thổi hồn khả năng sáng tạo qua thiết kế phối màu tinh
                  tế. Với sự kết hợp các gam màu một cách hài hòa, Half tạo ra điểm nhấn độc đáo và
                  tươi mới cho phong cách của bạn. Chưa hết, nhờ chất vải mềm mại, thấm hút mồ hôi
                  và khô nhanh, Half mang lại sự thoải mái và độ bền trong mọi hoạt động. Áo thun
                  Half không chỉ là sự lựa chọn thời trang mà còn là cảm hứng cho những ngày sôi
                  động.
                </p>
              </div>
              <div class="detail-brand">
                <div class="detail-brand__text">Thương hiệu: Zstyle</div>
                <div class="detail-brand__text">Xuất xứ: Việt Nam</div>
                <div class="detail-brand__text">Giới tính: Nam</div>
                <div class="detail-brand__text">Màu sắc: Blue, Black</div>
                <div class="detail-brand__text">Chất liệu: Polyester, Polyurethane</div>
              </div>
              <div class="detail-desc">
                Thiết kế
                <ul class="detail-design">
                  <li class="detail-design__item">
                    Chi tiết phản quang được đưa vào phía sau để tăng độ an toàn khi chạy vào ban
                    đêm
                  </li>
                  <li class="detail-design__item">Chất vải mềm mại và thấm hút tốt</li>
                  <li class="detail-design__item">
                    Gam màu hiện đại dễ dàng phối với nhiều trang phục
                  </li>
                </ul>
              </div>
            </div>
            <div class="detail-content-2">
              <h3 class="detail-content-heading">CHÍNH SÁCH ĐỔI SẢN PHẨM:</h3>
              <div class="detail-content-title">1. Điều kiện đổi hàng</div>
              <ul class="detail-menu">
                <li class="detail-menu-item">
                  Bạn lưu ý giữ lại hoá đơn để đổi hàng trong vòng 30 ngày.
                </li>
                <li class="detail-menu-item">
                  Đối với mặt hàng giảm giá phụ kiện cá nhân không nhận đổi hàng.
                </li>
                <li class="detail-menu-item">
                  Tất cả sản phẩm đã mua sẽ không được đổi trả lại bằng tiền mặt.
                </li>
                <li class="detail-menu-item">
                  Bạn có thể đổi size hoặc sản phẩm khác trong 30 ngày (Lưu ý: sản phẩm chưa qua sử
                  dụng, còn tag nhãn và hoá đơn mua hàng).
                </li>
                <li class="detail-menu-item">
                  Bạn vui lòng gửi cho chúng mình clip đóng gói và hình ảnh đơn hàng đổi trả của
                  bạn, nhân viên tư vấn sẽ xác nhận và tiến hành lên đơn đổi trả cho bạn.
                </li>
              </ul>
              <div class="detail-content-title">2.Trường hợp khiếu nại</div>
              <ul class="detail-menu">
                <li class="detail-menu-item">
                  Bạn lưu ý giữ lại hoá đơn để đổi hàng trong vòng 30 ngày.
                </li>
                <li class="detail-menu-item">
                  Đối với mặt hàng giảm giá phụ kiện cá nhân không nhận đổi hàng.
                </li>
                <li class="detail-menu-item">
                  Tất cả sản phẩm đã mua sẽ không được đổi trả lại bằng tiền mặt.
                </li>
                <li class="detail-menu-item">
                  Bạn có thể đổi size hoặc sản phẩm khác trong 30 ngày (Lưu ý: sản phẩm chưa qua sử
                  dụng, còn tag nhãn và hoá đơn mua hàng).
                </li>
                <li class="detail-menu-item">
                  Bạn vui lòng gửi cho chúng mình clip đóng gói và hình ảnh đơn hàng đổi trả của
                  bạn, nhân viên tư vấn sẽ xác nhận và tiến hành lên đơn đổi trả cho bạn.
                </li>
              </ul>
            </div>
            <div class="detail-content-comment">
              <h2 class="detail-content-heading"><?=count($listcomment)?> Đánh giá</h2>

              
              <?=showcomment($listcomment)?>
              <div class="review">
                Đánh giá của bạn
                <div class="your-rating">
                    <input type="radio" id="star5" name="rating" value="5">
                    <label for="star5"></label>
                    <input type="radio" id="star4" name="rating" value="4">
                    <label for="star4"></label>
                    <input type="radio" id="star3" name="rating" value="3">
                    <label for="star3"></label>
                    <input type="radio" id="star2" name="rating" value="2">
                    <label for="star2"></label>
                    <input type="radio" id="star1" name="rating" value="1">
                    <label for="star1"></label>
                </div>
                
                <!-- <form class="div-comment" action="index.php?pg=comment" method="post">
                    <input id="selectedRating" type="hidden" name="rate">
                    <input type="text" name="comment" class="comment" placeholder="Bình luận...">
                    <button type="submit" name="send"><i class="fa fa-send send"></i></button>
                </form> -->
  
              </div>
              <form class="div-comment" action="index.php?pg=comment" method="post">
                    <input id="selectedRating" type="hidden" name="rate">
                    <input type="hidden" name="id_product" value=<?=$detail['id']?>>
                    <input type="text" name="comment" class="comment" placeholder="Bình luận...">
                    <button type="submit" name="send"><i class="fa fa-send send"></i></button>
                </form>
            </div>
          </section>
        </div>
      </section>
      <section class="product">
        <div class="container">
          <div class="heading-primary">SẢN PHẨM CÙNG DANH MỤC</div>
          <div class="product-list">
              
          <?=$html_relative_product?>

          </div>
        </div>
        <div class="product-btn">
          <a href='index.php?pg=product'><button class="button-primary">Xem tất cả</button></a>
        </div>
      </section>
      <div class="modal">
    <div class="modal-overlay"></div>
    <div class="modal-content">
      <div class="modal-main">
        <img src="view/layout/assets/images/thatbai.png" alt="">
        <h3>Số lượng sẳn phẩm còn lại không đủ với yêu cầu của bạn</h3>
        <div class="modal__succesfully">
            <button onclick="tatthongbaocart()" class="monal__succesfully-btn">Đồng ý</button>
        </div>
      </div>
    </div>
  </div>
  <div class="app-fixed">
        <ul class="app-fixed-menu">
          <li class="app-fixed-list">
            <a href="index.php" class="app-fixed-link">
              <i class="fa fa-home" aria-hidden="true"></i>
            </a>
          </li>
          <li class="app-fixed-list active">
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