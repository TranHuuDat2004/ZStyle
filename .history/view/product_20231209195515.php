<?php
    $html_catalog='<li class="navbar-list">
    <a href="index.php?pg=product&tatca=1" class="navbar-link">Tất cả</a>
    </li>';
    foreach ($catalog as $item) {
        extract($item);
        $html_catalog.='<li class="navbar-list">
        <a href="index.php?pg=product&ind='.$id.'" class="navbar-link">'.$name.'</a>
        </li>';
    }

    $html_product='<div class="product-list list-product-items subpage" page="1">';
    $i=1;
    $j=1;
    $html_iconsubpage='';
    foreach ($_SESSION['product'] as $item) {
      $html_product.=showproduct($item);
      if($i==12*$j){
        $html_product.='</div>
        <div class="product-list list-product-items subpage" style="display:none" page="'.($j+1).'">';
        if($j==1){
          $html_iconsubpage.='<li class="product-pagination-list">
              <a onclick="changesubpage(this)" class="product-pagination-link active">'.$j.'</a>
            </li>';
              }else{
                $html_iconsubpage.='<li class="product-pagination-list">
                <a onclick="changesubpage(this)" class="product-pagination-link">'.($j).'</a>
              </li>';
              }
        
        $j++;
      }
        
        $i++;
    }
    if($j>1){
$html_iconsubpage.='<li class="product-pagination-list">
    <a onclick="changesubpage(this)" class="product-pagination-link">'.$j.'</a>
  </li>';
    }
    
    $html_product.='</div>';
    
    $catalog_show='';
    if(isset($_SESSION['filtercatalog']) && ($_SESSION['filtercatalog']>0)){
        $catalog_show=$catalog_pick['name'];
    }else{
        $catalog_show='Tất cả sản phẩm';
    }
    if(isset($_SESSION['filterprice'])){
      $checkprice=$_SESSION['filterprice'];
    }
    if(isset($_SESSION['filtergioitinh'])){
      $checkgioitinh=$_SESSION['filtergioitinh'];
    }
    $html_sort='';
    $arr_sort=['Mặc định','Từ A-Z','Từ Z-A','Giá tăng dần','Giá giảm dần'];
    if(isset($_SESSION['sort'])){
      $html_sort=$arr_sort[$_SESSION['sort']-1];
    }else{
      $html_sort='Sắp xếp theo';
    }
?>
      <div class="link-mobile">
        <a href="#">Trang chủ </a>
        <i class="fa fa-chevron-right" aria-hidden="true"></i>
        <a href="#">Áo thun</a>
      </div>
      <!-- <div class="banner">
        <a href="#">
          <img src="view/layout/assets/images/banner-product.png" alt="" />
        </a>
      </div> -->
      <section class="list-product">
        <div class="container">
          <div class="design-center mb-0">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="100"
              height="50"
              viewBox="0 0 35 28"
              fill="none">
              <path
                d="M34.5175 5.27734L23.8712 0C22.7722 1.52031 20.3389 2.58125 17.501 2.58125C14.6631 2.58125 12.2298 1.52031 11.1307 0L0.48448 5.27734C0.0525059 5.49609 -0.122471 6.02109 0.090782 6.45312L3.21849 12.7148C3.43721 13.1469 3.96214 13.3219 4.39412 13.1086L7.48902 11.5938C8.06863 11.3094 8.74667 11.7305 8.74667 12.3812V26.25C8.74667 27.218 9.52859 28 10.4964 28H24.4946C25.4624 28 26.2443 27.218 26.2443 26.25V12.3758C26.2443 11.7305 26.9224 11.3039 27.502 11.5883L30.5969 13.1031C31.0289 13.3219 31.5538 13.1469 31.7725 12.7094L34.9057 6.45312C35.1244 6.02109 34.9494 5.49063 34.5175 5.27734Z"
                fill="#46694F" />
            </svg>
            <h2 class="heading-primary">DANH SÁCH SẢN PHẨM</h2>
          </div>
          <!-- <div class="heading-primary">Danh sách sản phẩm</div> -->
          <div class="list-product__main">
            <div class="list-product__left">
              <div class="list-product__left-aside">Danh mục sản phẩm</div>
              <div class="list-product__left-aside-item">
                <ul class="navbar-aside">
                  
                <?=$html_catalog?>

                </ul>
              </div>
              <div class="list-product__left-aside">Bộ lọc sản phẩm</div>
              <div class="list-product__box">
                <div class="list-product-title">Chọn khoảng giá</div>
                <div class="list-product-menu">
                  <ul class="list-product-nav" id="listprice" checkprice="<?=$checkprice?>">
                    <li class="list-product-item">
                      <input type="checkbox" onclick="tailai(this)" link="index.php?pg=product&price=1"/>
           
                      Dưới 3 trăm nghìn đồng
                    </li>
                    <li class="list-product-item">
                      <input type="checkbox"  onclick="tailai(this)" link="index.php?pg=product&price=2"/>
                      Từ 3 trăm nghìn - 4 trăm nghìn
                    </li>
                    <li class="list-product-item">
                      <input type="checkbox"  onclick="tailai(this)" link="index.php?pg=product&price=3"/>
                      Từ 4 trăm nghìn - 5 trăm nghìn
                    </li>
                    <li class="list-product-item">
                      <input type="checkbox"  onclick="tailai(this)" link="index.php?pg=product&price=4"/>
                      Trên 5 trăm nghìn
                    </li>
                  </ul>
                </div>
                <div class="list-product-title">Màu sắc</div>
                <div class="list-product-colors">
                  <?php
                    $html_color='';
                    foreach ($listcolor as $item) {
                      $html_color.='<a href="index.php?pg=product&color='.$item['id'].'"  style="background-color:'.$item['ma_color'].'"></a>';
                    }     
                  ?>
                  <?=$html_color?>
                </div>
                <div class="list-product-title">Giới tính</div>
                <div class="list-product-menu">
                  <ul class="list-product-nav"   id="listgioitinh" checkgioitinh="<?=$checkgioitinh?>">
                    <li class="list-product-item">
                      <input type="checkbox" onclick="tailai(this)" link="index.php?pg=product&gioitinh=1"/>
                      Nam
                    </li>
                    <li class="list-product-item">
                      <input type="checkbox"  onclick="tailai(this)" link="index.php?pg=product&gioitinh=2"/>
                      Nữ
                    </li>
                    <li class="list-product-item">
                      <input type="checkbox"  onclick="tailai(this)" link="index.php?pg=product&gioitinh=3"/>
                      Unisex
                    </li>
                  </ul>
                </div>
              </div>
              <div class="banner-custom">
                <a href="#">
                  <img src="view/layout/assets/images/banner-custom-1.png" alt="" />
                </a>
              </div>
            </div>
            <div class="list-product__right">
              <div class="list-product-main">
                <div class="list-text"><?=$catalog_show?></div>
                <div class="list-val">
                  <?=$html_sort?> <i class="icon-sort fa updown-toggle fa-angle-down" aria-hidden="true"></i>
                  <ul class="list-val-menu" >
                  <li class="list-val-list">
                      <a href="index.php?pg=product&sort=1" class="list-val-link">Mặc định</a>
                    </li>
                    <li class="list-val-list">
                      <a href="index.php?pg=product&sort=2" class="list-val-link">Từ A-Z</a>
                    </li>
                    <li class="list-val-list">
                      <a href="index.php?pg=product&sort=3" class="list-val-link">Từ Z-A</a>
                    </li>
                    <li class="list-val-list">
                      <a href="index.php?pg=product&sort=4" class="list-val-link">Giá tăng dần</a>
                    </li>
                    <li class="list-val-list">
                      <a href="index.php?pg=product&sort=5" class="list-val-link">Giá giảm dần</a>
                    </li>
                  </ul>
                </div>
              </div>
              <section class="mt-10">
                
                  
                <?=$html_product?>

                
                <div class="product-pagination">
                  <ul class="product-pagination-item">
                   
                  <?=$html_iconsubpage?>
                   
                  </ul>
                </div>
                <div class="product-mobile-btn">
                  <button class="top-button">Xem thêm</button>
                </div>
              </section>
            </div>
          </div>
        </div>
      </section>
