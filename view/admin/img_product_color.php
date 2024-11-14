<?php
    $html_img_product_color='';
    foreach ($img_product_color as $item) {
        extract($item);
        
        
        $html_img_product_color.='<tr>
        <td><img src="../../upload/'.$main_img.'"></td>
        <td ><img src="../../upload/'.$sub_img1.'"></td>
        <td><img src="../../upload/'.$sub_img2.'"></td>
        <td><img src="../../upload/'.$sub_img3.'"></td>
        <td>'.$id_product.'</td>
        <td>'.$id_color.'</td>
        <td>
            <a href="index.php?pg=update_img_product_color&id='.$id.'" class="edit">Sửa</a>
            <a href="index.php?pg=del_img_product_color&id='.$id.'" class="del">Xóa</a>
        </td>
        </tr>';
    $active='';
    $main_img='';
    $sub_img1='';
    $sub_img2='';
    $sub_img3='';
    $id_product='';
    $id_color='';
    $img='user.webp';
    $kichhoat='';
    $hinhcu1='';
    $hinhcu2='';
    $hinhcu3='';
    $hinhcu4='';
    if(isset($_SESSION['update_id']) && $_SESSION['update_id']){
      $active='active';
      if(isset($img_product_color_detail)){
        extract($img_product_color_detail);
        
        $hinhcu1=$main_img;
        $hinhcu2=$sub_img1;
        $hinhcu3=$sub_img2;
        $hinhcu4=$sub_img3;
        if($main_img==''){
          $main_img='user.webp';
        }
        if($sub_img1==''){
          $sub_img1='user.webp';
        }
        if($sub_img2==''){
          $sub_img2='user.webp';
        }
        if($sub_img3==''){
          $sub_img3='user.webp';
        }
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
<div class="dashboard-content" data-tab="9">
    
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
                    <form action="index.php?pg=add_img_product_color" method="post"  enctype="multipart/form-data">
                    <div class="modal-heading">Thêm hình ảnh mới</div>
                    <div class="modal-form modal-form-addpro">
                        <?php 
                            for($i=1;$i<=4;$i++){
                              $html_id= 'id="img-preview'.$i.'" ';
                              echo '<div class="modal-form-item">
                              <div class="modal-form-name">Hình ảnh '.$i.'*</div>
                              <div class="input-image">
                                <input id="file-input'.$i.'" name="img'.$i.'" type="file" accept="image/*"/>
                                '.substr_replace(check_img_admin("user.webp"), $html_id, 5, 0).'
                              </div>
                              </div>';
                            }
                        
                        ?>
                        <script>
                          <?php 
                            for($i=1;$i<=4;$i++){
                              echo 'var input'.$i.' = document.getElementById("file-input'.$i.'");
                              var image'.$i.' = document.getElementById("img-preview'.$i.'");
    
                              input'.$i.'.addEventListener("change", (e) => {
                                  if (e.target.files.length) {
                                      const src = URL.createObjectURL(e.target.files[0]);
                                      image'.$i.'.src = src;
                                  }
                              });';
                            }
                        
                        ?>
                          
                        </script>
                      
                      <div class="modal-form-item">
                        <div class="modal-form-name">Mã sản phẩm*</div>
                        <input name="id_product" type="text" />
                      </div>
                      <div class="modal-form-item">
                        <div class="modal-form-name">Mã màu*</div>
                        <input name="id_color" type="text" />
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
                <h2 class="title-primary">Hình ảnh sản phẩm</h2>
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
                    <a href="index.php?pg=update_img_product_color&close=1">
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
                        <form action="index.php?pg=update_img_product_color" method="post"  enctype="multipart/form-data">
                        <div class="modal-heading">Cập nhật hình ảnh</div>
                        <div class="modal-form  modal-form-addpro">
                        
                          <?php 
                              $hinhcu=[$main_img,$sub_img1,$sub_img2,$sub_img3];
                              for($i=1;$i<=4;$i++){
                                $html_id= 'id="img-preview'.($i+4).'" ';
                                echo '<div class="modal-form-item">
                                <div class="modal-form-name">Hình ảnh '.$i.'*</div>
                                <div class="input-image">
                                  <input id="file-input'.($i+4).'" name="img'.($i+4).'" type="file" accept="image/*"/>
                                  '.substr_replace(check_img_admin($hinhcu[$i-1]), $html_id, 5, 0).'
                                </div>
                                </div>';
                              }
                          
                          ?>
                          <script>
                            <?php 
                              for($i=1;$i<=4;$i++){
                                echo 'var input'.($i+4).' = document.getElementById("file-input'.($i+4).'");
                                var image'.($i+4).' = document.getElementById("img-preview'.($i+4).'");
      
                                input'.($i+4).'.addEventListener("change", (e) => {
                                    if (e.target.files.length) {
                                        const src = URL.createObjectURL(e.target.files[0]);
                                        image'.($i+4).'.src = src;
                                    }
                                });';
                              }
                          
                          ?>
                          </script>
                          <input type="hidden" name="hinhcu1" value="<?=$hinhcu1?>">
                          <input type="hidden" name="hinhcu2" value="<?=$hinhcu2?>">
                          <input type="hidden" name="hinhcu3" value="<?=$hinhcu3?>">
                          <input type="hidden" name="hinhcu4" value="<?=$hinhcu4?>">
                            
                          
                          <div class="modal-form-item">
                              <div class="modal-form-name">Mã sản phẩm*</div>
                              <input name="id_product" type="text" value="<?=$id_product?>"/>
                          </div>
                          <div class="modal-form-item">
                            <div class="modal-form-name">Mã màu*</div>
                            <input name="id_color" type="text" value="<?=$id_color?>" />
                          </div>
                        </div>
                        <div class="modal-btn">
                          <button name="btnupdate" class="modal-button">Lưu</button>
                        </div>`
                    </form>
                    </div>
                  </div>
                </div>

                <table class="product">
                <thead>
                  <tr>
                    <th>Hình ảnh 1</th>
                    <th>Hình ảnh 2</th>
                    <th>Hình ảnh 3</th>
                    <th>Hình ảnh 4</th>
                    <th>Mã sản phẩm</th>
                    <th>Mã màu</th>
                    <th>Thao tác</th>
                  </tr>
                </thead>
                <tbody>
                    
                    <?=$html_img_product_color?>

                </tbody>
              </table>
            </div>