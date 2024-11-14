<?php
    $html_catalog='';
    foreach ($catalog as $item) {
        extract($item);
        $html_catalog.='<div class="dropdown-item" onclick="select(this)">'.$name.'</div>';
    }
    $html_product='';
    foreach ($product as $item) {
        extract($item);
        if($hot==1){
            $hot='x';
        }else{
            $hot='';
        }
        if($noibat==1){
            $noibat='x';
        }else{
            $noibat='';
        }
        if($bestsell==1){
            $bestsell='x';
        }else{
            $bestsell='';
        }
        if($trend==1){
            $trend='x';
        }else{
            $trend='';
        }
        $html_product.='<tr>
        <td>'.$ma_sanpham.'</td>
        <td>'.$name.'</td>
        <td>'.number_format($price,0,'.',',').'</td>
        <td>'.$noibat.'</td>
        <td>'.$bestsell.'</td>
        <td>'.$trend.'</td>
        <td>'.$view.'</td>
        <td>
            <a href="index.php?pg=updateproduct&id='.$id.'" class="edit">Sửa</a>
            <a href="index.php?pg=delproduct&id='.$id.'" class="del">Xóa</a>
        </td>
        </tr>';
        
    }

    if(!isset($_SESSION['update_id'])){
      $activeedit='';
      $ma_sanphamup='';
      $nameup='';
      $priceup='';
      $priceoldup='';
      $hotup='';
      $noibatup='';
      $chitietup='';
      $gioitinhup='';
      $danhmucup='';
      $bestsellup='';
      $trendup='';
      $viewup='';
    }else{
      $activeedit='active';
      if($errma_sanphamup!=''){
        $errma_sanphamup='<div style="margin-left: 225px; color: red">'.$errma_sanphamup.'</div>';
      }
      if($errnameup!=''){
        $errnameup='<div style="margin-left: 225px; color: red">'.$errnameup.'</div>';
      }
      if($errviewup!=''){
        $errviewup='<div style="margin-left: 225px; color: red">'.$errviewup.'</div>';
      }
      if($errpriceup!=''){
        $errpriceup='<div style="margin-left: 225px; color: red">'.$errpriceup.'</div>';
      }
    }
    if(!isset($_SESSION['addproduct'])){
      $activeadd='';
      $ma_sanphamadd='';
      $nameadd='';
      $priceadd='';
      $priceoldadd='';
      $hotadd='';
      $noibatadd='';
      $chitietadd='';
      $gioitinhadd='';
      $danhmucadd='';
      $bestselladd='';
      $trendadd='';
      $viewadd='';
    }else{
      $activeadd='active';
      if($errma_sanphamadd!=''){
        $errma_sanphamadd='<div style="margin-left: 225px; color: red">'.$errma_sanphamadd.'</div>';
      }
      if($errnameadd!=''){
        $errnameadd='<div style="margin-left: 225px; color: red">'.$errnameadd.'</div>';
      }
      if($errviewadd!=''){
        $errviewadd='<div style="margin-left: 225px; color: red">'.$errviewadd.'</div>';
      }
      if($errpriceadd!=''){
        $errpriceadd='<div style="margin-left: 225px; color: red">'.$errpriceadd.'</div>';
      }
    }
    if(!isset($_SESSION['update_id'])){
      $ma_sanphamup='';
      $nameup='';
      $priceup='';
      $priceoldup='';
      $chitietup='';
      $viewup='';
      $hotup='';
      $noibatup='';
      $gioitinhup='';
      $idcatalogup='';
      $bestsellup='';
      $trendup='';
      $danhmuc='';
    }
    if(isset($_SESSION['update_id']) && $_SESSION['update_id'] && !isset($_SESSION['editproduct'])){
      $activeedit='active';
      if(isset($product_detail)){
        extract($product_detail);
        if($hot==1){
          $hotup='Có';
        }else{
          $hotup='Không';
        }
        if($noibat==1){
            $noibatup='Có';
          }else{
            $noibatup='Không';
          }
          if($bestsell==1){
            $bestsellup='Có';
          }else{
            $bestsellup='Không';
          }
          if($trend==1){
            $trendup='Có';
          }else{
            $trendup='Không';
          }
          if($gioitinh==1){
            $gioitinhup='Nam';
          }else{
            if($gioitinh==2){
                $gioitinhup='Nữ';
            }else{
                $gioitinhup='Unisex';
            }
          }
          $ma_sanphamup=$ma_sanpham;
          $nameup=$name;
          $priceup=$price;
          $priceoldup=$priceold;
          $chitietup=$chitiet;
          $viewup=$view;
          $danhmucup=$catalog_product['name'];
      }
    }
    if(isset($_SESSION['update_id']) && $_SESSION['update_id'] && isset($_SESSION['editproduct'])){
      if($hotup==1){
        $hotup='Có';
      }else{
        $hotup='Không';
      }
      if($noibatup==1){
          $noibatup='Có';
        }else{
          $noibatup='Không';
        }
        if($bestsellup==1){
          $bestsellup='Có';
        }else{
          $bestsellup='Không';
        }
        if($trendup==1){
          $trendup='Có';
        }else{
          $trendup='Không';
        }
        if($gioitinhup==1){
          $gioitinhup='Nam';
        }else{
          if($gioitinhup==2){
              $gioitinhup='Nữ';
          }else{
              $gioitinhup='Unisex';
          }
        }
    }
    if(isset($errdelete) && $errdelete==1){
      echo '<div class="modaladmin active">
      <div class="modal-overlay"></div>
      <div class="modal-content">
        <div class="modal-main">
        <img src="../../view/layout/assets/images/thatbai.png" alt="">
          <h3>Bạn không thể xóa sản phẩm này bảng sản phẩm chứa chứa thuộc tính khóa ngoại</h3>
          <div class="modal__succesfully">
              <a href="index.php?pg=product"><button class="monal__succesfully-btn">Đồng ý</button>
          </div>
        </div>
      </div>
    </div>';
    }
    if(!isset($errma_sanphamadd)){
      $errma_sanphamadd='';
      $errnameadd='';
      $errpriceadd='';
      $errviewadd='';
      $errnameup='';
      $errpriceup='';
      $errma_sanphamup='';
      $errviewup='';
    }
?>

<div class="main">
        <div class="header-main">
          <div class="header-left">
            <div class="header-bar">
              <i class="fa fa-angle-left icon-bar" aria-hidden="true"></i>
            </div>
            <form action="index.php?pg=product" method="post" class="header-form">
              <div class="header-input">
                <input name="keywordproduct" type="text" placeholder="Tìm kiếm " />
                <div class="header-input-icon">
                  <button name="searchproduct"><i class="fa fa-search" aria-hidden="true"></i></button>
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
<div class="dashboard-content" data-tab="3">
    
<div class="modal modal-addpro <?=$activeadd?>">
                <div class="modal-overlay"></div>
                <div class="modal-content modal-addproduct">
                <a href="index.php?pg=addproduct&close=1">
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
                    <form action="index.php?pg=addproduct" method="post">
                    <div class="modal-heading">Thêm sản phẩm mới</div>
                    <div class="modal-form modal-form-addpro">
                      <div class="modal-form-item">
                        <div class="modal-form-name">Mã sản phẩm*</div>
                        <input name="ma_sanpham" type="text" value="<?=$ma_sanphamadd?>">
                      </div>
                      <?=$errma_sanphamadd?>
                      <div class="modal-form-item">
                        <div class="modal-form-name">Tên sản phẩm*</div>
                        <input name="name" type="text" value="<?=$nameadd?>">
                      </div>
                      <?=$errnameadd?>
                      <div class="modal-form-item">
                        <div class="modal-form-name">Giá hiện tại*</div>
                        <input name="price" type="text" value="<?=$priceadd?>">
                      </div>
                      <?=$errpriceadd?>
                      <div class="modal-form-item">
                        <div class="modal-form-name">Giá cũ</div>
                        <input name="priceold" type="text" />
                      </div>
                      <div class="modal-form-item">
                        <div class="modal-form-name">Sản phẩm hot</div>

                        <div class="dropdown">
                          <div class="dropdown-select">
                              <div class="dropdown-content" dropdown="1">
                              Không
                              </div>
                              <input name="hot" type="hidden" class="dropdown-input" value="Không" dropdown="1"/>
                              <i
                                class="fa fa-angle-down dropdown-icon icon1"
                                aria-hidden="true" dropdown="1" onclick="dropdown(this)"></i>
                          </div>
                          <div class="dropdown-list active" dropdown="1">
                            <div class="dropdown-item" onclick="select(this)">Có</div>
                            <div class="dropdown-item" onclick="select(this)">Không</div>
                          </div>
                        </div>
                      </div> 
                      <div class="modal-form-item">
                        <div class="modal-form-name">Sản phẩm nổi bật</div>

                        <div class="dropdown">
                          <div class="dropdown-select">
                              <div class="dropdown-content" dropdown="2">
                              Không
                              </div>
                              <input name="noibat" type="hidden" class="dropdown-input" value="Không" dropdown="2"/>
                              <i
                                class="fa fa-angle-down dropdown-icon icon1"
                                aria-hidden="true" dropdown="2" onclick="dropdown(this)"></i>
                          </div>
                          <div class="dropdown-list active" dropdown="2">
                            <div class="dropdown-item" onclick="select(this)">Có</div>
                            <div class="dropdown-item" onclick="select(this)">Không</div>
                          </div>
                        </div>
                      </div>  
                      <div class="modal-form-item">
                        <div class="modal-form-name">Giới tính</div>

                        <div class="dropdown">
                          <div class="dropdown-select">
                              <div class="dropdown-content" dropdown="3">
                              Unisex
                              </div>
                              <input name="gioitinh" type="hidden" class="dropdown-input" value="Unisex" dropdown="3"/>
                              <i
                                class="fa fa-angle-down dropdown-icon icon1"
                                aria-hidden="true" dropdown="3" onclick="dropdown(this)"></i>
                          </div>
                          <div class="dropdown-list active" dropdown="3">
                            <div class="dropdown-item" onclick="select(this)">Unisex</div>
                            <div class="dropdown-item" onclick="select(this)">Nam</div>
                            <div class="dropdown-item" onclick="select(this)">Nữ</div>
                          </div>
                        </div>
                      </div>   
                      <div class="modal-form-item">
                        <div class="modal-form-name">Danh mục</div>

                        <div class="dropdown">
                          <div class="dropdown-select">
                              <div class="dropdown-content" dropdown="4">
                              <?=$catalog[0]['name']?>
                              </div>
                              <input name="idcatalog" type="hidden" class="dropdown-input" value="<?=$catalog[0]['name']?>" dropdown="4"/>
                              <i
                                class="fa fa-angle-down dropdown-icon icon1"
                                aria-hidden="true" dropdown="4" onclick="dropdown(this)"></i>
                          </div>
                          <div class="dropdown-list active" dropdown="4">
                            
                                <?=$html_catalog?>

                          </div>
                        </div>
                      </div>   
                      <div class="modal-form-item">
                        <div class="modal-form-name">Sản phẩm bán chạy</div>

                        <div class="dropdown">
                          <div class="dropdown-select">
                              <div class="dropdown-content" dropdown="5">
                              Không
                              </div>
                              <input name="bestsell" type="hidden" class="dropdown-input" value="Không" dropdown="5"/>
                              <i
                                class="fa fa-angle-down dropdown-icon icon1"
                                aria-hidden="true" dropdown="5" onclick="dropdown(this)"></i>
                          </div>
                          <div class="dropdown-list active" dropdown="5">
                            <div class="dropdown-item" onclick="select(this)">Có</div>
                            <div class="dropdown-item" onclick="select(this)">Không</div>
                          </div>
                        </div>
                      </div> 
                      <div class="modal-form-item">
                        <div class="modal-form-name">Sản phẩm xu hướng</div>

                        <div class="dropdown">
                          <div class="dropdown-select">
                              <div class="dropdown-content" dropdown="6">
                              Không
                              </div>
                              <input name="trend" type="hidden" class="dropdown-input" value="Không" dropdown="6"/>
                              <i
                                class="fa fa-angle-down dropdown-icon icon1"
                                aria-hidden="true" dropdown="6" onclick="dropdown(this)"></i>
                          </div>
                          <div class="dropdown-list active" dropdown="6">
                            <div class="dropdown-item" onclick="select(this)">Có</div>
                            <div class="dropdown-item" onclick="select(this)">Không</div>
                          </div>
                        </div>
                      </div>  
                      <div class="modal-form-item">
                        <div class="modal-form-name">Lượt xem*</div>
                        <input name="view" type="text" value="<?=$viewadd?>">
                      </div> 
                      <?=$errviewadd?>
                      <div class="modal-form-item">
                        <div class="modal-form-name">Chi tiết</div>
                        <input name="chitiet" type="text" />
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
                <h2 class="title-primary">Sản phẩm</h2>
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
                    <a href="index.php?pg=updateproduct&close=1">
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
                      <form action="index.php?pg=updateproduct" method="post">
                      <div class="modal-heading">Cập nhật sản phẩm</div>
                      <div class="modal-form  modal-form-addpro">
                      <div class="modal-form-item">
                        <div class="modal-form-name">Mã sản phẩm*</div>
                        <input name="ma_sanpham" type="text" value="<?=$ma_sanphamup?>"/>
                      </div>
                      <?=$errma_sanphamup?>
                      <div class="modal-form-item">
                        <div class="modal-form-name">Tên sản phẩm*</div>
                        <input name="name" type="text" value="<?=$nameup?>"/>
                      </div>
                      <?=$errnameup?>
                      <div class="modal-form-item">
                        <div class="modal-form-name">Giá hiện tại*</div>
                        <input name="price" type="text" value="<?=$priceup?>"/>
                      </div>
                      <?=$errpriceup?>
                      <div class="modal-form-item">
                        <div class="modal-form-name">Giá cũ</div>
                        <input name="priceold" type="text" value="<?=$priceoldup?>"/>
                      </div>
                      <div class="modal-form-item">
                        <div class="modal-form-name">Sản phẩm hot</div>

                        <div class="dropdown">
                          <div class="dropdown-select">
                              <div class="dropdown-content" dropdown="7">
                              <?=$hotup?>
                              </div>
                              <input name="hot" type="hidden" class="dropdown-input" value="<?=$hotup?>" dropdown="7"/>
                              <i
                                class="fa fa-angle-down dropdown-icon icon1"
                                aria-hidden="true" dropdown="7" onclick="dropdown(this)"></i>
                          </div>
                          <div class="dropdown-list active" dropdown="7">
                            <div class="dropdown-item" onclick="select(this)">Có</div>
                            <div class="dropdown-item" onclick="select(this)">Không</div>
                          </div>
                        </div>
                      </div> 
                      <div class="modal-form-item">
                        <div class="modal-form-name">Sản phẩm nổi bật</div>

                        <div class="dropdown">
                          <div class="dropdown-select">
                              <div class="dropdown-content" dropdown="8">
                              <?=$noibatup?>
                              </div>
                              <input name="noibat" type="hidden" class="dropdown-input" value="<?=$noibatup?>" dropdown="8"/>
                              <i
                                class="fa fa-angle-down dropdown-icon icon1"
                                aria-hidden="true" dropdown="8" onclick="dropdown(this)"></i>
                          </div>
                          <div class="dropdown-list active" dropdown="8">
                            <div class="dropdown-item" onclick="select(this)">Có</div>
                            <div class="dropdown-item" onclick="select(this)">Không</div>
                          </div>
                        </div>
                      </div>  
                      <div class="modal-form-item">
                        <div class="modal-form-name">Giới tính</div>

                        <div class="dropdown">
                          <div class="dropdown-select">
                              <div class="dropdown-content" dropdown="9">
                              <?=$gioitinhup?>
                              </div>
                              <input name="gioitinh" type="hidden" class="dropdown-input" value="<?=$gioitinhup?>" dropdown="9"/>
                              <i
                                class="fa fa-angle-down dropdown-icon icon1"
                                aria-hidden="true" dropdown="9" onclick="dropdown(this)"></i>
                          </div>
                          <div class="dropdown-list active" dropdown="9">
                            <div class="dropdown-item" onclick="select(this)">Unisex</div>
                            <div class="dropdown-item" onclick="select(this)">Nam</div>
                            <div class="dropdown-item" onclick="select(this)">Nữ</div>
                          </div>
                        </div>
                      </div>   
                      <div class="modal-form-item">
                        <div class="modal-form-name">Danh mục</div>

                        <div class="dropdown">
                          <div class="dropdown-select">
                              <div class="dropdown-content" dropdown="10">
                              <?=$danhmucup?>
                              </div>
                              <input name="idcatalog" type="hidden" class="dropdown-input" value="<?=$danhmucup?>" dropdown="10"/>
                              <i
                                class="fa fa-angle-down dropdown-icon icon1"
                                aria-hidden="true" dropdown="10" onclick="dropdown(this)"></i>
                          </div>
                          <div class="dropdown-list active" dropdown="10">
                            
                                <?=$html_catalog?>

                          </div>
                        </div>
                      </div>   
                      <div class="modal-form-item">
                        <div class="modal-form-name">Sản phẩm bán chạy</div>

                        <div class="dropdown">
                          <div class="dropdown-select">
                              <div class="dropdown-content" dropdown="11">
                              <?=$bestsellup?>
                              </div>
                              <input name="bestsell" type="hidden" class="dropdown-input" value="<?=$bestsellup?>" dropdown="11"/>
                              <i
                                class="fa fa-angle-down dropdown-icon icon1"
                                aria-hidden="true" dropdown="11" onclick="dropdown(this)"></i>
                          </div>
                          <div class="dropdown-list active" dropdown="11">
                            <div class="dropdown-item" onclick="select(this)">Có</div>
                            <div class="dropdown-item" onclick="select(this)">Không</div>
                          </div>
                        </div>
                      </div> 
                      <div class="modal-form-item">
                        <div class="modal-form-name">Sản phẩm xu hướng</div>

                        <div class="dropdown">
                          <div class="dropdown-select">
                              <div class="dropdown-content" dropdown="12">
                              <?=$trendup?>
                              </div>
                              <input name="trend" type="hidden" class="dropdown-input" value="<?=$trendup?>" dropdown="12"/>
                              <i
                                class="fa fa-angle-down dropdown-icon icon1"
                                aria-hidden="true" dropdown="12" onclick="dropdown(this)"></i>
                          </div>
                          <div class="dropdown-list active" dropdown="12">
                            <div class="dropdown-item" onclick="select(this)">Có</div>
                            <div class="dropdown-item" onclick="select(this)">Không</div>
                          </div>
                        </div>
                      </div>  
                      <div class="modal-form-item">
                        <div class="modal-form-name">Lượt xem*</div>
                        <input name="view" type="text" value="<?=$viewup?>"/>
                      </div> 
                      <?=$errviewup?>
                      <div class="modal-form-item">
                        <div class="modal-form-name">Chi tiết</div>
                        <input name="chitiet" type="text" <?=$chitiet?>/>
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
                    <th>Mã sản phẩm</th>
                    <th>Tên sản phẩm</th>
                    <th>Giá</th>
                    <th>Nổi bật</th>
                    <th>Bán chạy</th>
                    <th>Xu hướng</th>
                    <th>Lượt xem</th>
                    <th>Thao tác</th>
                  </tr>
                </thead>
                <tbody>
                    
                    <?=$html_product;?>

                </tbody>
              </table>
            </div>