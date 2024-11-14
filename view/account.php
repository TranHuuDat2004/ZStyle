
<?php
  if($erremail!=''){
    $erremail='<div class="errform mb-unset">'.$erremail.'</div>';
  }
  if($erruser!=''){
    $erruser='<div class="errform mb-unset">'.$erruser.'</div>';
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
      <form action="index.php?pg=account" method="post" enctype="multipart/form-data">
      <section class="account">
        <div class="container">
          <h2 class="title-mobile">Hồ sơ của tôi</h2>
          <div class="account-main">
            <div class="account-left">
              <div class="account-info">
                <div class="account-avatar">
                  <?php
                  if(check_img($img)==""){
                    $img2='<img src="view/layout/assets/images/avatar.png" alt="" />';
                  }else{
                    $img2=check_img($img);
                  }         
                  ?>
                  <?=$img2?>
                </div>
                <div class="account-body">
                  <div class="account-name"><?=$user?></div>
                  <div class="account-edit">
                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                    Sửa hồ sơ
                  </div>
                </div>
              </div>
              <ul class="contact-menu account-menu">
                <li class="contact-list account-list" id="myaccount">
                  <a href="#" class="contact-link account-link active" data-tab="1">
                    <i class="fa fa-user" aria-hidden="true"></i>Tài khoản của tôi</a
                  >
                </li>
                <li class="contact-list account-list" id="history">
                  <a href="#" class="contact-link account-link" data-tab="2">
                    <i class="fa fa-calendar-check-o" aria-hidden="true"></i>Lịch sử mua hàng</a
                  >
                </li>
                <li class="contact-list account-list" style="display:none" id="history-order">
                  <a href="#" class="contact-link account-link" data-tab="2">
                    <i class="fa fa-product-hunt" aria-hidden="true"></i>Đơn hàng</a
                  >
                </li>
                <li class="contact-list account-list">
                  <a href="index.php?pg=logoutuser" class="contact-link account-link">
                  <i class="fas fa-sign-out-alt"></i>Đăng xuất</a
                  >
                </li>
              </ul>
            </div>
            
            <div class="account-right active tab-content" data-tab="1">
              
              <div class="account-box">
                <h2>Hồ sơ của tôi</h2>
                <p>Quản lý thông tin hồ sơ để bảo mật tài khoản</p>
                <div class="account-group">
                  <label for="">Tên đăng nhập:</label> <br />
                  <input name="user" type="text" value="<?=$user?>" />
                </div>
                <?=$erruser?>
                <input name="pass" type="hidden" value="<?=$pass?>" />
                <div class="account-group">
                  <label for="">Họ và tên:</label> <br />
                  <input name="name" type="text" value="<?=$name?>" />
                </div>
                <div class="account-group">
                  <label for="">Email:</label> <br />
                  <input name="email" type="text" value="<?=$email?>" />
                </div>
                <?=$erremail?>
                <div class="account-group">
                  <label for="">Số điện thoại:</label> <br />
                  <input  name="sdt" type="text" value="<?=$sdt?>" />
                </div>
                <div class="account-group">
                  <label for="">Ngày sinh:</label> <br />
                  <input name="ngaysinh" type="date" value="<?=$ngaysinh?>" />
                </div>
                <div class="account-group">
                  <label for="">Địa chỉ</label> <br />
                  <input name="diachi" type="text" value="<?=$diachi?>" />
                </div>
                <div class="product-btn account-btn">
                  <button name="update_account" class="button-primary">Cập nhật tài khoản</button>
                  <button name="del_account" class="button-primary button-del">Xoá tài khoản</button>
                </div>
                </div>
              
              <div class="account-right-image">
                <div class="account-right-avatar">
                <input type="hidden" name="hinhcu" value=<?=$img?>>
                  <?php
                    if(check_img($img)==""){
                      $img='<img id="img-preview" src="view/layout/assets/images/avatar.png" alt="" />';
                    }else{
                      $img=substr_replace(check_img($img), ' id="img-preview" ', 5, 0);
                    }
                  ?>
                  <?=$img?>
                  <input name="img" id="file-input" type="file" accept="image/*"/>
                </div>
                <script>
                    var input = document.getElementById("file-input");
                    var image = document.getElementById("img-preview");

                    input.addEventListener("change", (e) => {
                        if (e.target.files.length) {
                            const src = URL.createObjectURL(e.target.files[0]);
                            image.src = src;
                        }
                    });
                </script>
              </div>
            </div>
            
            <div class="account-history tab-content" data-tab="2">
              <p class="account-history-title">Lịch sử mua hàng</p>
              <div>Quản lý thông tin mua hàng</div>
              <table class="history-order" border="1">
                <thead>
                  <tr>
                    <th>STT</th>
                    <th>Mã đơn hàng</th>
                    <th>Mã khách hàng</th>
                    <th>Ngày đặt hàng</th>
                    <th>Thành tiền</th>
                    <th>Trạng thái</th>
                    <th>Thao tác</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    if(isset($_SESSION['iduser']) && isset($_SESSION['role']) && $_SESSION['role']==0){
                     $listdonhang;
                     $html_donhang='';
                     $i=0;
                     foreach ($listdonhang as $item) {
                      $i++;
                      extract($item);
                      $html_donhang.='<tr>
                      <td>'.$i.'</td>
                      <td>'.$ma_donhang.'</td>
                      <td>'.$iduser.'</td>
                      <td>'.$ngaylap.'</td>
                      <td>'.number_format($tongtien,0,'.',',').'</td>
                      <td>'.$trangthai.'</td>
                      <td>
                        <a href="index.php?pg=account&id='.$id.'" class="del">Hủy</a>
                      </td>
                    </tr>';
                     } 
                    }
                    echo $html_donhang;
                  ?>
                </tbody>
              </table>
            </div>
            <div class="order-history tab-content" data-tab="2">
              <p class="account-history-title">ĐƠN HÀNG</p>
              <div>Quản lý thông tin chi tiết đơn hàng</div>
              <table class="history-order" border="1">
                <thead>
                  <tr>
                    <th>STT</th>
                    <th>Mã đơn hàng</th>
                    <th>Mã sản phẩm</th>
                    <th>Đơn giá</th>
                    <th>Số lượng</th>
                    <th>Thành tiền</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>ZSTYLE120</td>
                    <td>GUEST123</td>
                    <td>12-08-2023</td>
                    <td class="green">Thành công</td>
                    <td>Xem - Hủy</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>ZSTYLE120</td>
                    <td>GUEST123</td>
                    <td>12-08-2023</td>
                    <td class="green">Thành công</td>
                    <td>Xem - Hủy</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>ZSTYLE120</td>
                    <td>GUEST123</td>
                    <td>12-08-2023</td>
                    <td class="green">Thành công</td>
                    <td>Xem - Hủy</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </section>
      </form>