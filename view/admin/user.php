<?php
    $html_user='';
    foreach ($usertable as $item) {
        extract($item);
        if(check_img_admin($img)==''){
            $img=check_img_admin('user.webp');
        }else{
            $img=check_img_admin($img);
        }
        $html_user.='<tr>
        <td>'.$name.'</td>
        <td >'.$img.'</td>
        <td>'.$user.'</td>
        <td>'.$pass.'</td>
        <td>'.$sdt.'</td>
        <td>
            <a href="index.php?pg=updateuser&id='.$id.'" class="edit">Sửa</a>
            <a href="index.php?pg=deluser&id='.$id.'" class="del">Xóa</a>
        </td>
        </tr>';
    }


    
    // check form add catalog
    if(!isset($_SESSION['adduser'])){
      $activeadd='';
      $nameadd='';
      $useradd='';
      $passadd='';
      $emailadd='';
      $sdtadd='';
      $ngaysinhadd='';
      $diachiadd='';
      $imgadd='user.webp';
      $hinhcu='';
      $err_useradd='';
      $err_passadd='';
      $err_emailadd='';
    }else{
      $activeadd='active';
     
      if($err_useradd!=''){
        $err_useradd='<div style="margin-left: 225px; color: red">'.$err_useradd.'</div>';
      }
      if($err_passadd!=''){
        $err_passadd='<div style="margin-left: 225px; color: red">'.$err_passadd.'</div>';
      }
      if($err_emailadd!=''){
        $err_emailadd='<div style="margin-left: 225px; color: red">'.$err_emailadd.'</div>';
      }
      
    }


    // check form update user
    if(isset($_SESSION['update_id'])  && $_SESSION['update_id'] && !isset($_SESSION['edituser'])){
      $activeedit='';
      extract($user_detail);
      $nameup=$name;
      $userup=$user;
      $passup=$pass;
      $emailup=$email;
      $sdtup=$sdt;
      $gioitinhup=$gioitinh;
      $ngaysinhup=$ngaysinh;
      $diachiup=$diachi;
      $roleup=$role;
      $kichhoatup=$kichhoat;
      
      if($roleup==1){
        $roleup='Quản trị viên';
      }else{
        $roleup='Khách hàng';
      }
      if($kichhoatup==1){
          $kichhoatup='Kích hoạt';
      }else{
          $kichhoatup='Bị khóa';
      }
      if($gioitinhup==0){
          $gioitinhup='Khác';
      }else{
          if($gioitinhup==1){
              $gioitinhup='Nam';
          }else{
              $gioitinhup='Nữ';
          }
      }
      $hinhcu=$img;
        if($img==''){
          $img='user.webp';
        }
    }
    
    if(isset($_SESSION['update_id'])  && $_SESSION['update_id'] && isset($_SESSION['edituser'])){
      extract($user_detail);
      $nameup=$name;
      $userup=$user;
      $passup=$pass;
      $emailup=$email;
      $sdtup=$sdt;
      $gioitinhup=$gioitinh;
      $ngaysinhup=$ngaysinh;
      $diachiup=$diachi;
      $roleup=$role;
      $kichhoatup=$kichhoat;
      if($roleup==1){
        $roleup='Quản trị viên';
      }else{
        $roleup='Khách hàng';
      }
      if($kichhoatup==1){
          $kichhoatup='Kích hoạt';
      }else{
          $kichhoatup='Bị khóa';
      }
      if($gioitinhup==0){
          $gioitinhup='Khác';
      }else{
          if($gioitinhup==1){
              $gioitinhup='Nam';
          }else{
              $gioitinhup='Nữ';
          }
      }
      $hinhcu=$img;
        if($img==''){
          $img='user.webp';
        }
    }

    if(!isset($_SESSION['update_id'])){
      $activeedit='';
      $nameup='';
      $userup='';
      $passup='';
      $emailup='';
      $sdtup='';
      $gioitinhup='';
      $ngaysinhup='';
      $diachiup='';
      $roleup='';
      $kichhoatup='';
      $err_userup='';
      $err_passup='';
      $err_emailup='';
    }else{
      $activeedit='active';
      if($err_userup!=''){
        $err_userup='<div style="margin-left: 225px; color: red">'.$err_userup.'</div>';
      }
      if($err_passup!=''){
        $err_passup='<div style="margin-left: 225px; color: red">'.$err_passup.'</div>';
      }
      if($err_emailup!=''){
        $err_emailup='<div style="margin-left: 225px; color: red">'.$err_emailup.'</div>';
      }
    }


    // $active='';
    // $name='';
    // $user='';
    // $pass='';
    // $email='';
    // $sdt='';
    // $gioitinh='';
    // $ngaysinh='';
    // $diachi='';
    // $role='';
    // $img='user.webp';
    // $kichhoat='';
    // $hinhcu='';
    // if(isset($_SESSION['update_id']) && $_SESSION['update_id']){
    //   $active='active';
    //   if(isset($user_detail)){
    //     extract($user_detail);
    //     if($role==1){
    //       $role='Quản trị viên';
    //     }else{
    //       $role='Khách hàng';
    //     }
    //     if($kichhoat==1){
    //         $kichhoat='Kích hoạt';
    //     }else{
    //         $kichhoat='Bị khóa';
    //     }
    //     if($gioitinh==0){
    //         $gioitinh='Khác';
    //     }else{
    //         if($gioitinh==1){
    //             $gioitinh='Nam';
    //         }else{
    //             $gioitinh='Nữ';
    //         }
    //     }
    //     $hinhcu=$img;
    //     if($img==''){
    //       $img='user.webp';
    //     }
    //   }
    // }
?>

<div class="main">
        <div class="header-main">
          <div class="header-left">
            <div class="header-bar">
              <i class="fa fa-angle-left icon-bar" aria-hidden="true"></i>
            </div>
            <form action="index.php?pg=user" method="post" class="header-form">
              <div class="header-input">
                <input name="keyworduser" type="text" placeholder="Tìm kiếm " />
                <div class="header-input-icon">
                  <button name="searchuser"><i class="fa fa-search" aria-hidden="true"></i></button>
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
<div class="dashboard-content" data-tab="4">
    
<div class="modal modal-addpro <?=$activeadd?>">
                <div class="modal-overlay"></div>
                <div class="modal-content modal-addproduct">
                <a href="index.php?pg=adduser&close=1">
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
                    <form action="index.php?pg=adduser" method="post"  enctype="multipart/form-data">
                    <div class="modal-heading">Thêm tài khoản mới</div>
                    <div class="modal-form modal-form-addpro">
                      <div class="modal-form-item">
                        <div class="modal-form-name">Họ tên</div>
                        <input name="name" type="text" value="<?=$nameadd?>"/>
                      </div>
                

                      <div class="modal-form-item">
                        <div class="modal-form-name">Tên đăng nhập*</div>
                        <input name="user" type="text" value="<?=$useradd?>" />
                      </div>
                      <?=$err_useradd?>

                      <div class="modal-form-item">
                        <div class="modal-form-name">Mật khẩu*</div>
                        <input name="pass" type="text" value="<?=$passadd?>" />
                      </div>
                      <?=$err_passadd?>

                      <div class="modal-form-item">
                        <div class="modal-form-name">Email*</div>
                        <input name="email" type="text" value="<?=$emailadd?>"/>
                      </div>
                      <?=$err_emailadd?>

                      <div class="modal-form-item">
                        <div class="modal-form-name">Số điện thoại</div>
                        <input name="sdt" type="text" value="<?=$sdtadd?>"/>
                      </div>
                

                      <div class="modal-form-item">
                        <div class="modal-form-name">Giới tính</div>

                        <div class="dropdown">
                          <div class="dropdown-select">
                              <div class="dropdown-content" dropdown="1">
                              Khác
                              </div>
                              <input name="gioitinh" type="hidden" class="dropdown-input" value="Khác" dropdown="1"/>
                              <i
                                class="fa fa-angle-down dropdown-icon icon1"
                                aria-hidden="true" dropdown="1" onclick="dropdown(this)"></i>
                          </div>
                          <div class="dropdown-list active" dropdown="1">
                            <div class="dropdown-item" onclick="select(this)">Khác</div>
                            <div class="dropdown-item" onclick="select(this)">Nam</div>
                            <div class="dropdown-item" onclick="select(this)">Nữ</div>
                          </div>
                        </div>
                      </div>  
                      <div class="modal-form-item">
                        <div class="modal-form-name">Ngày sinh</div>
                        <input name="ngaysinh" type="date" value="<?=$ngaysinhadd?>"/>
                      </div>
                  

                      <div class="modal-form-item">
                        <div class="modal-form-name">Địa chỉ</div>
                        <input name="diachi" type="text" value="<?=$diachiadd?>" />
                      </div>
               

                      <div class="modal-form-item">
                        <div class="modal-form-name">Hình ảnh</div>
                        <div class='input-image'>
                            <input id="file-input1" name="img1" type="file"  accept="image/*"/>
                            <?=substr_replace(check_img_admin('user.webp'), ' id="img-preview1" ', 5, 0)?>
                        </div>
                      </div>
                      <script>
                          var input = document.getElementById("file-input1");
                          var image = document.getElementById("img-preview1");

                          input.addEventListener("change", (e) => {
                              if (e.target.files.length) {
                                  const src = URL.createObjectURL(e.target.files[0]);
                                  image.src = src;
                              }
                          });
                      </script>
                      <div class="modal-form-item">
                        <div class="modal-form-name">Vai trò</div>

                        <div class="dropdown">
                          <div class="dropdown-select">
                              <div class="dropdown-content" dropdown="2">
                              Khách hàng
                              </div>
                              <input name="role" type="hidden" class="dropdown-input" value="Khách hàng" dropdown="2"/>
                              <i
                                class="fa fa-angle-down dropdown-icon icon1"
                                aria-hidden="true" dropdown="2" onclick="dropdown(this)"></i>
                          </div>
                          <div class="dropdown-list active" dropdown="2">
                            <div class="dropdown-item" onclick="select(this)">Khách hàng</div>
                            <div class="dropdown-item" onclick="select(this)">Quản trị viên</div>
                          </div>
                        </div>
                      </div> 
                      <div class="modal-form-item">
                        <div class="modal-form-name">Kích hoạt</div>

                        <div class="dropdown">
                          <div class="dropdown-select">
                              <div class="dropdown-content" dropdown="3">
                              Kích hoạt
                              </div>
                              <input name="kichhoat" type="hidden" class="dropdown-input" value="Kích hoạt" dropdown="3"/>
                              <i
                                class="fa fa-angle-down dropdown-icon icon1"
                                aria-hidden="true" dropdown="3" onclick="dropdown(this)"></i>
                          </div>
                          <div class="dropdown-list active" dropdown="3">
                            <div class="dropdown-item" onclick="select(this)">Kích hoạt</div>
                            <div class="dropdown-item" onclick="select(this)">Bị khóa</div>
                          </div>
                        </div>
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
                <h2 class="title-primary">Tài khoản</h2>
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
              
                <div class="modal modal-update <?=$activeedit?>">
                  <div class="modal-overlay"></div>
                  <div class="modal-content">
                    <a href="index.php?pg=updateuser&close=1">
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
                        <form action="index.php?pg=updateuser" method="post"  enctype="multipart/form-data">
                        <div class="modal-heading">Cập nhật tài khoản</div>
                        <div class="modal-form  modal-form-addpro">
                        <div class="modal-form-item">
                            <div class="modal-form-name">Họ tên</div>
                            <input name="name" type="text" value="<?=$nameup?>"/>
                        </div>
                       
                        <div class="modal-form-item">
                            <div class="modal-form-name">Tên đăng nhập*</div>
                            <input name="user" type="text"  value="<?=$userup?>"/>
                        </div>
                        <?=$err_userup?>
                        <div class="modal-form-item">
                            <div class="modal-form-name">Mật khẩu*</div>
                            <input name="pass" type="text"  value="<?=$passup?>"/>
                        </div>
                        <?=$err_passup?>
                        <div class="modal-form-item">
                            <div class="modal-form-name">Email*</div>
                            <input name="email" type="text"  value="<?=$emailup?>"/>
                        </div>
                        <?=$err_emailup?>
                        <div class="modal-form-item">
                            <div class="modal-form-name">Số điện thoại</div>
                            <input name="sdt" type="text"  value="<?=$sdtup?>"/>
                        </div>
                     
                        <div class="modal-form-item">
                            <div class="modal-form-name">Giới tính</div>

                            <div class="dropdown">
                            <div class="dropdown-select">
                                <div class="dropdown-content" dropdown="4">
                                <?=$gioitinh?>
                                </div>
                                <input name="gioitinh" type="hidden" class="dropdown-input" value="<?=$gioitinhup?>" dropdown="4"/>
                                <i
                                    class="fa fa-angle-down dropdown-icon icon1"
                                    aria-hidden="true" dropdown="4" onclick="dropdown(this)"></i>
                            </div>
                            <div class="dropdown-list active" dropdown="4">
                                <div class="dropdown-item" onclick="select(this)">Khác</div>
                                <div class="dropdown-item" onclick="select(this)">Nam</div>
                                <div class="dropdown-item" onclick="select(this)">Nữ</div>
                            </div>
                            </div>
                        </div>  
                        <div class="modal-form-item">
                            <div class="modal-form-name">Ngày sinh</div>
                            <input name="ngaysinh" type="date"  value="<?=$ngaysinhup?>"/>
                        </div>
                   
                        <div class="modal-form-item">
                            <div class="modal-form-name">Địa chỉ</div>
                            <input name="diachi" type="text"  value="<?=$diachiup?>"/>
                        </div>
                  
                        <div class="modal-form-item">
                        <div class="modal-form-name">Hình ảnh</div>
                            <div class='input-image'>
                                <input id="file-input2" name="img2" type="file"  accept="image/*"/>
                                <?=substr_replace(check_img_admin($img), ' id="img-preview2" ', 5, 0)?>
                            </div>
                        </div>
                        <input type="hidden" name="hinhcu" value="<?=$hinhcu?>">
                        <script>
                          var input2 = document.getElementById("file-input2");
                          var image2 = document.getElementById("img-preview2");

                          input2.addEventListener("change", (e) => {
                              if (e.target.files.length) {
                                  const src = URL.createObjectURL(e.target.files[0]);
                                  image2.src = src;
                              }
                          });
                      </script>
                        <div class="modal-form-item">
                            <div class="modal-form-name">Vai trò</div>

                            <div class="dropdown">
                            <div class="dropdown-select">
                                <div class="dropdown-content" dropdown="5">
                                <?=$role?>
                                </div>
                                <input name="role" type="hidden" class="dropdown-input" value="<?=$roleup?>" dropdown="5"/>
                                <i
                                    class="fa fa-angle-down dropdown-icon icon1"
                                    aria-hidden="true" dropdown="5" onclick="dropdown(this)"></i>
                            </div>
                            <div class="dropdown-list active" dropdown="5">
                                <div class="dropdown-item" onclick="select(this)">Khách hàng</div>
                                <div class="dropdown-item" onclick="select(this)">Quản trị viên</div>
                            </div>
                            </div>
                        </div> 
                        <div class="modal-form-item">
                            <div class="modal-form-name">Kích hoạt</div>

                            <div class="dropdown">
                            <div class="dropdown-select">
                                <div class="dropdown-content" dropdown="6">
                                <?=$kichhoat?>
                                </div>
                                <input name="kichhoat" type="hidden" class="dropdown-input" value="<?=$kichhoatup?>" dropdown="6"/>
                                <i
                                    class="fa fa-angle-down dropdown-icon icon1"
                                    aria-hidden="true" dropdown="6" onclick="dropdown(this)"></i>
                            </div>
                            <div class="dropdown-list active" dropdown="6">
                                <div class="dropdown-item" onclick="select(this)">Kích hoạt</div>
                                <div class="dropdown-item" onclick="select(this)">Bị khóa</div>
                            </div>
                            </div>
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
                    <th>Tên</th>
                    <th>Hình ảnh</th>
                    <th>Tên đăng nhập</th>
                    <th>Mật khẩu</th>
                    <th>SDT</th>
                    <th>Thao tác</th>
                  </tr>
                </thead>
                <tbody>
                    
                    <?=$html_user;?>

                </tbody>
              </table>
            </div>