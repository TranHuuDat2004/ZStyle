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
<div class="app-fixed">
        <ul class="app-fixed-menu">
          <li class="app-fixed-list">
            <a href="index.php" class="app-fixed-link">
              <i class="fa fa-home" aria-hidden="true"></i>
            </a>
          </li>
          <li class="app-fixed-list active">
            <a href="index.php?pg=product" class="app-fixed-link">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="35"
                height="28"
                viewBox="0 0 35 28"
                fill="none">
                <path
                  d="M25 14C25 16.7614 22.7614 19 20 19C17.2386 19 15 16.7614 15 14C15 11.2386 17.2386 9 20 9C22.7614 9 25 11.2386 25 14Z"
                  fill="white" />
                <circle cx="20" cy="14" r="5" fill="#46694F" />
                <path
                  d="M34.5175 5.27734L23.8712 0C22.7722 1.52031 20.3389 2.58125 17.501 2.58125C14.6631 2.58125 12.2298 1.52031 11.1307 0L0.48448 5.27734C0.0525059 5.49609 -0.122471 6.02109 0.090782 6.45312L3.21849 12.7148C3.43721 13.1469 3.96214 13.3219 4.39412 13.1086L7.48902 11.5938C8.06863 11.3094 8.74667 11.7305 8.74667 12.3812V26.25C8.74667 27.218 9.52859 28 10.4964 28H24.4946C25.4624 28 26.2444 27.218 26.2444 26.25V12.3758C26.2444 11.7305 26.9224 11.3039 27.502 11.5883L30.5969 13.1031C31.0289 13.3219 31.5538 13.1469 31.7725 12.7094L34.9057 6.45312C35.1244 6.02109 34.9494 5.49062 34.5175 5.27734Z"
                  fill="white" />
              </svg>
            </a>
          </li>
          <li class="app-fixed-list">
            <a href="index.php?pg=design" class="app-fixed-link">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="31"
                height="31"
                viewBox="0 0 31 31"
                fill="none">
                <path
                  d="M18 15.5C18 16.8807 16.8807 18 15.5 18C14.1193 18 13 16.8807 13 15.5C13 14.1193 14.1193 13 15.5 13C16.8807 13 18 14.1193 18 15.5Z"
                  fill="white" />
                <circle cx="15.5" cy="15.5" r="2.5" fill="#46694F" />
                <path
                  d="M6.62767 14.7762L14.7759 6.62915L12.1047 3.95787L8.37018 7.69233C8.32565 7.73695 8.27275 7.77235 8.21452 7.7965C8.15629 7.82066 8.09387 7.83309 8.03082 7.83309C7.96778 7.83309 7.90536 7.82066 7.84713 7.7965C7.78889 7.77235 7.736 7.73695 7.69146 7.69233L7.01274 7.01361C6.82505 6.82592 6.82505 6.52198 7.01274 6.3349L10.7472 2.60044L8.71045 0.563075C7.96029 -0.187086 6.74452 -0.187086 5.99436 0.563075L0.562779 5.99463C-0.186781 6.74479 -0.187386 7.96055 0.562779 8.71071L6.62767 14.7762ZM30.148 7.70444C31.2838 6.5686 31.2832 4.72741 30.148 3.59157L27.4083 0.851878C26.2724 -0.283959 24.4306 -0.283959 23.2942 0.851878L20.5078 3.63759L27.3616 10.4914L30.148 7.70444ZM19.1377 5.00834L1.15552 22.988L0.019681 29.493C-0.1335 30.3703 0.63059 31.1344 1.50851 30.98L8.01417 29.8393L25.9915 11.8615L19.1377 5.00834ZM30.4374 22.2899L28.4006 20.2531L24.6661 23.9876C24.4784 24.1753 24.1745 24.1753 23.9874 23.9876L23.3087 23.3089C23.1216 23.1212 23.1216 22.8173 23.3087 22.6302L27.0432 18.8957L24.3707 16.2232L16.2224 24.3703L22.2897 30.4369C23.0399 31.1871 24.2556 31.1871 25.0058 30.4369L30.4374 25.006C31.1875 24.2558 31.1875 23.0401 30.4374 22.2899Z"
                  fill="white" />
              </svg>
            </a>
          </li>
          <li class="app-fixed-list">
            <a href="index.php?pg=login" class="app-fixed-link">
              <i class="fa fa-user-circle" aria-hidden="true"></i>
            </a>
          </li>
          <div class="selected-option-bg"></div>
        </ul>
      </div>
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
