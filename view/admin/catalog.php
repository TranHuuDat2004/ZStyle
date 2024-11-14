<?php
    $html_catalog='';
    foreach ($catalog as $item) {
        extract($item);
        if($sethome==0){
            $sethome='Không hiển thị';
        }else{
            $sethome='Hiển thị';
        }
        $html_catalog.='<tr>
        <td>'.$stt.'</td>
        <td>'.$name.'</td>
        <td>'.$sethome.'</td>
        <td>
            <a href="index.php?pg=updatecatalog&id='.$id.'" class="edit">Sửa</a>
            <a href="index.php?pg=delcatalog&id='.$id.'" class="del">Xóa</a>
        </td>
        </tr>
        ';
    }
  


    // check form add catalog
    if(!isset($_SESSION['addcatalog'])){
      $activeadd='';
      $sttadd='';
      $nameadd='';
      $err_sttadd='';
      $err_nameadd='';
    }else{
      $activeadd='active';
      if($err_sttadd!=''){
        $err_sttadd='<div style="margin-left: 225px; color: red">'.$err_sttadd.'</div>';
      }
      if($err_nameadd!=''){
        $err_nameadd='<div style="margin-left: 225px; color: red">'.$err_nameadd.'</div>';
      }
    }


    
    // check form update catalog
    if(isset($_SESSION['update_id'])  && $_SESSION['update_id'] && !isset($_SESSION['editcatalog'])){
      $activeedit='';
      extract($catalogdetail);
      $sttup=$stt;
      $nameup=$name;
      if($sethome==1){
        $sethomeup='Hiển thị';
      }else{
        $sethomeup='Không hiển thị';
      }
    }
    if(isset($_SESSION['update_id']) && $_SESSION['update_id'] && isset($_SESSION['editcatalog'])){
      if($sethomeup==1){
        $sethomeup='Hiển thị';
      }else{
        $sethomeup='Không hiển thị';
      }
    }
    if(!isset($_SESSION['update_id'])){
      $activeedit='';
      $sttup='';
      $nameup='';
      $sethomeup='';
      $err_nameup='';
      $err_sttup='';
    }else{
      $activeedit='active';
      if($err_sttup!=''){
        $err_sttup='<div style="margin-left: 225px; color: red">'.$err_sttup.'</div>';
      }
      if($err_nameup!=''){
        $err_nameup='<div style="margin-left: 225px; color: red">'.$err_nameup.'</div>';
      }
    }

?>
<div class="main">
        <div class="header-main">
          <div class="header-left">
            <div class="header-bar">
              <i class="fa fa-angle-left icon-bar" aria-hidden="true"></i>
            </div>
            <form action="index.php?pg=catalog" method="post" class="header-form">
              <div class="header-input">
                <input name="keywordcatalog" type="text" placeholder="Tìm kiếm " />
                <div class="header-input-icon">
                  <button name="searchcatalog"><i class="fa fa-search" aria-hidden="true"></i></button>
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
<div class="dashboard-content" data-tab="2">
    
              <div class="modal modal-addpro <?=$activeadd?>">
                <div class="modal-overlay"></div>
                <div class="modal-content modal-addproduct">
                <a href="index.php?pg=addcatalog&close=1">

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
                    <form action="index.php?pg=addcatalog" method="post">
                    <div class="modal-heading">Thêm danh mục mới</div>
                    <div class="modal-form modal-form-addpro">
                      <div class="modal-form-item">
                        <div class="modal-form-name">Stt hiển thị*</div>
                        <input name="stt" type="text" value="<?=$sttadd?>" />
                      </div>
                      <?=$err_sttadd?>
                      <div class="modal-form-item">
                        <div class="modal-form-name">Tên danh mục*</div>
                        <input name="name" type="text" value="<?=$nameadd?>"/>
                      </div>
                      <?=$err_nameadd?>
                      <div class="modal-form-item">
                        <div class="modal-form-name">Hiển thị ở trang chủ</div>

                        <div class="dropdown">
                          <div class="dropdown-select">
                              <div class="dropdown-content" dropdown="1">
                              Hiển thị
                              </div>
                              <input name="sethome" type="hidden" class="dropdown-input" value="Hiển thị" dropdown="1"/>
                              <i
                                class="fa fa-angle-down dropdown-icon icon1"
                                aria-hidden="true" dropdown="1" onclick="dropdown(this)"></i>
                          </div>
                          <div class="dropdown-list active" dropdown="1">
                            <div class="dropdown-item" onclick="select(this)">Hiển thị</div>
                            <div class="dropdown-item" onclick="select(this)">Không hiển thị</div>
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
                <h2 class="title-primary">Danh mục sản phẩm</h2>
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
                    <a href="index.php?pg=updatecatalog&close=1">
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
                      <form action="index.php?pg=updatecatalog" method="post">
                      <div class="modal-heading">Cập nhật danh mục</div>
                      <div class="modal-form modal-form-addpro">
                      <div class="modal-form-item">
                        <div class="modal-form-name">Stt hiển thị*</div>
                        <input name="stt" type="text" value=<?=$sttup?>>
                      </div>
                      <?=$err_sttup?>
                      <div class="modal-form-item">
                        <div class="modal-form-name">Tên danh mục*</div>
                        <input name="name" type="text"  value=<?=$nameup?>>
                      </div>
                      <?=$err_nameup?>
                      
                      <div class="modal-form-item">
                        <div class="modal-form-name">Hiển thị ở trang chủ</div>

                        <div class="dropdown">
                          <div class="dropdown-select">
                              <div class="dropdown-content" dropdown="2">
                              <?=$sethomeup?>
                              </div>
                              <input name="sethome" type="hidden" class="dropdown-input" value="<?=$sethomeup?>" dropdown="2"/>
                              <i
                                class="fa fa-angle-down dropdown-icon icon1"
                                aria-hidden="true" dropdown="2" onclick="dropdown(this)"></i>
                          </div>
                          <div class="dropdown-list active" dropdown="2">
                            <div class="dropdown-item" onclick="select(this)">Hiển thị</div>
                            <div class="dropdown-item" onclick="select(this)">Không hiển thị</div>
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
                    <th>Stt hiển thị</th>
                    <th>Tên danh mục</th>
                    <th>Hiển thị ở trang chủ</th>
                    <th>Thao tác</th>
                  </tr>
                </thead>
                <tbody>
                    
                    <?=$html_catalog;?>

                </tbody>
              </table>
            </div>