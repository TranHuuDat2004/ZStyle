
<?php
  if($erremail!=''){
    $erremail='<div style="color:red; font-size: 14px">'.$erremail.'</div>';
  }
  if($erruser!=''){
    $erruser='<div class="errform mb-unset">'.$erruser.'</div>';
  }

?>
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