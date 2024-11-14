<?php
    $html_voucher='';
    foreach ($dadung_voucher as $voucher) {
        extract($voucher);
        $html_voucher.='<tr>
        <td>'.$id.'</td>
        <td>'.$id_user.'</td>
        <td>'.$id_voucher.'</td>
        </tr>
        ';
    }
    $active='';
    $id='';
    $id_user='';
    $id_voucher='';
   
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
<div class="dashboard-content" data-tab="11">
  <div class="dashboard-heading">
    <h2 class="title-primary">Voucher đã dùng</h2>
  </div>

    <table class="product">
    <thead>
      <tr>
      <th>id</th>
        <th>id_voucher</th>
        <th>id_user</th>
                    
      </tr>
    </thead>
    <tbody>
                    
        <?=$html_voucher?>

    </tbody>
  </table>  </div>