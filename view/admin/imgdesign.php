<?php
    $html_imgdesign='';
    foreach ($imgdesign as $item) {
        extract($item);
        $html_imgdesign.='<tr>
        <td>'.$id.'</td>
        <td><img src="../../upload/'.$img.'"></td>
        <td>'.$id_user.'</td>
        </tr>
        ';
    }
    $active='';
    $id='';
    $img='';
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
<div class="dashboard-content" data-tab="13">
              <div class="dashboard-heading">
                <h2 class="title-primary">Ảnh thiết kế</h2>
              </div>

                <table class="product">
                <thead>
                  <tr>
                  <th>id</th>
                    <th>img</th>
                    <th>id_user</th> 
                  </tr>
                </thead>
                <tbody>
                    
                    <?=$html_imgdesign?>

                </tbody>
              </table>
            </div>