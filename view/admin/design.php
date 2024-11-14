<?php
    $html_design='';
    foreach ($design as $item) {
        extract($item);
        if(check_img_admin($img_front)==''){
          $img_front=check_img_admin('user.webp');
        }else{
            $img_front=check_img_admin($img_front);
        }
        if(check_img_admin($img_back)==''){
          $img_back=check_img_admin('user.webp');
        }else{
            $img_back=check_img_admin($img_back);
        }
        $html_design.='<tr>
        <td>'.$id.'</td>
        <td>'.$id_color.'</td>
        <td>'.$id_size.'</td>
        <td>'.$img_front.'</td>
        <td>'.$img_back.'</td>
        
        <td>'.$id_user.'</td>
        </tr>
        ';
    }
    $active='';
    $id_color='';
    $id_size='';
    $img_front='';
    $img_back='';
    $price='';
    $id_user='';
   
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
<div class="dashboard-content" data-tab="12">
              <div class="dashboard-heading">
                <h2 class="title-primary">Design</h2>
              </div>

                <table class="product">
                <thead>
                  <tr>
                  <th>id</th>
                    <th>id_color</th>
                    <th>id_size</th>
                    <th>img_front</th>
                    <th>img_back</th>
                    <th>id_user</th>
                  </tr>
                </thead>
                <tbody>
                    
                    <?=$html_design?>

                </tbody>
              </table>
            </div>