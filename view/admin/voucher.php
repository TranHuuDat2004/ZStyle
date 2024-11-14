<?php
    $html_voucher='';
    foreach ($voucher as $vou) {
        extract($vou);
        // echo $ma_voucher;
        $html_voucher.='<tr>
          <td>'.$id.'</td>
          <td >'.$ma_voucher.'</td>
          <td>'.$giamgia.'</td>
          <td>'.$ngaybatdau.'</td>
          <td>'.$ngayketthuc.'</td>
          <td>'.$dieukien.'</td>
          <td>
              <a href="index.php?pg=update_voucher&id='.$id.'" class="edit">Sửa</a>
              <a href="index.php?pg=del_voucher&id='.$id.'" class="del">Xóa</a>
          </td>
        </tr>';
    $active='';
    $id='';
    $ma_voucher='';
    $giamgia='';
    $ngaybatdau='';
    $ngayketthuc='';
    $dieukien='';
    if(isset($_SESSION['update_id']) && $_SESSION['update_id']){
      $active='active';
      if(isset($voucher_detail)){
        extract($voucher_detail);
      }
    }
    }
?>

<div class="main">
        <div class="header-main">
          <div class="header-left">
            <div class="header-bar">
              <i class="fa fa-angle-left icon-bar" aria-hidden="true"></i>
            </div>
            <form action="" class="header-form">
              <div class="header-input">
                <input type="text" placeholder="Tìm kiếm " />
                <div class="header-input-icon">
                  <i class="fa fa-search" aria-hidden="true"></i>
                </div>
              </div>
            </form>
          </div>
          <div class="header-right">
            <div class="header-bell">
              <i class="fa fa-bell" aria-hidden="true"></i>
            </div>
            <div class="header-auth">
              <div class="header-avatar">
                <img src="../layout/assets/images/avatar.png" alt="" />
              </div>
              <div class="header-name">Chào, ZStyle</div>
            </div>
          </div>
        </div>
        <div class="dashboard">
          <div class="container">
<div class="dashboard-content" data-tab="10">
    
<div class="modal modal-addpro">
                <div class="modal-overlay"></div>
                <div class="modal-content modal-addproduct">
                  <span class="modal-close">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke="currentColor"
                      stroke-width="2">
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M6 18L18 6M6 6l12 12" />
                    </svg>
                  </span>
                  <div class="modal-main">
                    <form action="index.php?pg=add_voucher" method="post"  enctype="multipart/form-data">
                    <div class="modal-heading">Thêm voucher mới</div>
                    <div class="modal-form modal-form-addpro">
                      <div class="modal-form-item">
                        <div class="modal-form-name">Mã Voucher*</div>
                        <input name="mavoucher" type="text" />
                      </div>
                      <div class="modal-form-item">
                        <div class="modal-form-name">Giảm giá*</div>
                        <input name="dale" type="text" />
                      </div>
                      <div class="modal-form-item">
                        <div class="modal-form-name">Ngày bắt đầu*</div>
                        <input name="start" type="date" />
                      </div>
                      <div class="modal-form-item">
                        <div class="modal-form-name">Ngày kết thúc*</div>
                        <input name="end" type="date" />
                      </div>
                      <div class="modal-form-item">
                        <div class="modal-form-name">Điều kiện*</div>
                        <input name="dk" type="text" />
                      </div>
                    </div> 
                    <div class="modal-btn">
                      <button name="btnsave" class="modal-button">Lưu</button>
                    </div>
                </form>
                  </div>
                </div>
              </div>


              <div class="dashboard-heading">
                <h2 class="title-primary">Voucher</h2>
                <button class="dashboard-add">
                  <i class="fa fa-plus" aria-hidden="true"></i>
                  Thêm
                </button>
                <div class="modal">
                  <div class="modal-overlay"></div>
                  <div class="modal-content">
                    <span class="modal-close">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="2">
                        <path
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          d="M6 18L18 6M6 6l12 12" />
                      </svg>
                    </span>
                  </div>
                </div>
              </div>
              
                <div class="modal modal-update <?=$active?>">
                  <div class="modal-overlay"></div>
                  <div class="modal-content">
                    <a href="index.php?pg=update_voucher&close=1">
                    <span class="modal-close">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="2">
                        <path
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          d="M6 18L18 6M6 6l12 12" />
                      </svg>
                    </span>
                    </a>
                    <div class="modal-main">
                        <form action="index.php?pg=update_voucher" method="post"  enctype="multipart/form-data">
                        <div class="modal-heading">Cập nhật voucher</div>
                        <div class="modal-form  modal-form-addpro">
                            <div class="modal-form-item">
                              <div class="modal-form-name">Mã Voucher*</div>
                              <input name="mavoucher" type="text" value="<?=$ma_voucher?>" />
                            </div>
                            <div class="modal-form-item">
                              <div class="modal-form-name">Giảm giá*</div>
                              <input name="dale" type="text" value="<?=$giamgia?>"/>
                            </div>
                            <div class="modal-form-item">
                              <div class="modal-form-name">Ngày bắt đầu*</div>
                              <input name="start" type="date" value="<?=$ngaybatdau?>"/>
                            </div>
                            <div class="modal-form-item">
                              <div class="modal-form-name">Ngày kết thúc*</div>
                              <input name="end" type="date" value="<?=$ngayketthuc?>"/>
                            </div>
                            <div class="modal-form-item">
                              <div class="modal-form-name">Điều kiện*</div>
                              <input name="dk" type="text" value="<?=$dieukien?>" />
                            </div>
                        </div>
                        <div class="modal-btn">
                          <button name="btnupdate" class="modal-button">Lưu</button>
                        </div>
                    </form>
                    </div>
                  </div>
                </div>

                <table class="product">
                <thead>
                  <tr>
                    <th>STT</th>
                    <th>Mã voucher</th>
                    <th>Giảm giá</th>
                    <th>Ngày bắt đầu</th>
                    <th>Ngày kết thúc</th>
                    <th>Điều kiện</th>
                    <th>Thao tác</th>
                  </tr>
                </thead>
                <tbody>
                    
                    <?=$html_voucher?>

                </tbody>
              </table>
            </div>