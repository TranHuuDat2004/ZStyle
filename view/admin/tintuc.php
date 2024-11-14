<?php
    $html_tintuc='';
    foreach ($tintuc as $news) {
        extract($news);
        if(check_img_admin($img)==''){
            $img=check_img_admin('user.webp');
        }else{
            $img=check_img_admin($img);
        }
        $html_tintuc.='<tr>
        <td>'.$id.'</td>
        <td >'.$title.'</td>
        <td>'.$img.'</td>
        <td>'.$thoigian.'</td>
        <td>'.$noidung.'</td>
        <td class="chunhieu">
            <a href="index.php?pg=update_tintuc&id='.$id.'" class="edit">Sửa</a>
            <a href="index.php?pg=del_tintuc&id='.$id.'" class="del">Xóa</a>
        </td>
        </tr>';
    $active='';
    // $id='';
    // $title='';
    // $img='';
    // $thoigian='';
    // $noidung='';
    $img='user.webp';
    $hinhcu='';
    if(isset($_SESSION['update_id']) && $_SESSION['update_id']){
      $active='active';
      if(isset($tintuc_detail)){
        extract($tintuc_detail);
        $hinhcu=$img;
        if($img==''){
          $img='user.webp';
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
<div class="dashboard-content" data-tab="8">
    
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
                    <form action="index.php?pg=add_tintuc" method="post"  enctype="multipart/form-data">
                    <div class="modal-heading">Thêm tin tức mới</div>
                    <div class="modal-form modal-form-addpro">
                      <div class="modal-form-item">
                        <div class="modal-form-name">Tiêu đề*</div>
                        <input name="title" type="text" />
                      </div>
                      <div class="modal-form-item">
                        <div class="modal-form-name">Hình ảnh*</div>
                        <div class='input-image'>
                            <input id="file-input1" name="img" type="file"  accept="image/*"/>
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
                        <div class="modal-form-name">Thời gian*</div>
                        <input name="thoigian" type="text" />
                      </div>
                      <div class="modal-form-item">
                        <div class="modal-form-name">Nội dung*</div>
                        <input name="noidung" type="text" />
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
                <h2 class="title-primary">Tin Tức</h2>
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
                    <a href="index.php?pg=update_tintuc&close=1">
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
                        <form action="index.php?pg=update_tintuc" method="post"  enctype="multipart/form-data">
                        <div class="modal-heading">Cập nhật tin tức</div>
                        <div class="modal-form  modal-form-addpro">
                          <div class="modal-form-item">
                              <div class="modal-form-name">Tiêu đề*</div>
                              <input name="title" type="text" value="<?=$title?>"/>
                          </div>
                          <div class="modal-form-item">
                            <div class="modal-form-name">Hình ảnh*</div>
                            <div class='input-image'>
                                <input id="file-input2" name="img1" type="file"  accept="image/*"/>
                                <?=substr_replace(check_img_admin($hinhcu), ' id="img-preview2" ', 5, 0)?>
                            </div>
                          </div>
                          <?php
                            // Đường dẫn tương đối đến thư mục upload
                            $duongdan_upload = '../../upload/';
                            // Đường dẫn đến hình ảnh cũ
                            $hinhcu = $duongdan_upload . $hinhcu;
                          ?>
                          <input type="hidden" name="hinhcu" value="<?=$hinhcu?>">
                          
                          <script>
                              var input = document.getElementById("file-input2");
                              var image = document.getElementById("img-preview2");
                              var hiddenInput = document.querySelector('input[name="hinhcu"]');
                              // console.log(hiddenInput.value);
                              // Hiển thị hình ảnh cũ khi trang tải lên
                              if (hiddenInput.value) {
                                  image.src = hiddenInput.value;
                              }

                              input.addEventListener("change", (e) => {
                                  if (e.target.files.length) {
                                      const src = URL.createObjectURL(e.target.files[0]);
                                      image.src = src;
                                  } else {
                                      // Nếu không có hình ảnh mới được chọn, hiển thị hình ảnh cũ
                                      image.src = hiddenInput.value;
                                  }
                              });
                          </script>
                          <div class="modal-form-item">
                              <div class="modal-form-name">Thời gian*</div>
                              <input name="thoigian" type="text"  value="<?=$thoigian?>"/>
                          </div>
                          <div class="modal-form-item">
                              <div class="modal-form-name">Nội dung</div>
                              <input name="noidung" type="text"  value="<?=$noidung?>"/>
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
                    <th>Tiêu đề</th>
                    <th>Hình ảnh</th>
                    <th>Thời gian</th>
                    <th>Nội dung</th>
                    <th>Thao tác</th>
                  </tr>
                </thead>
                <tbody>
                    
                    <?=$html_tintuc?>

                </tbody>
              </table>
            </div>