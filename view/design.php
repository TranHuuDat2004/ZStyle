<?php
  $html_color='';
  $i=0;
  foreach ($list_color as $item) {
    $i++;
    extract($item);
    $html_color.='<a href="index.php?pg=design&id_color='.$id.'" style="background-color:'.$ma_color.';"></a>';
  }
  $html_size='';
  if(isset($_SESSION['id_size_design'])){
    foreach ($list_size as $item) {
      extract($item);
      if($id==$_SESSION['id_size_design']){
        $html_size.='
        <a href="index.php?pg=design&id_size='.$id.'"><div class="custom-btn active">'.$ma_size.'</div></a>
      ';
      }else{
        $html_size.='
        <a href="index.php?pg=design&id_size='.$id.'"><div class="custom-btn">'.$ma_size.'</div></a>';
      }
    }
  }else{
    $i=0;
    foreach ($list_size as $item) {
      $i++;
      extract($item);
      if($i==1){
        $html_size.='
        <a href="index.php?pg=design&id_size='.$id.'"><div class="custom-btn active">'.$ma_size.'</div></a>
      ';
      }else{
        $html_size.='
        <a href="index.php?pg=design&id_size='.$id.'"><div class="custom-btn">'.$ma_size.'</div></a>';
      }
    }
  }
  

  $img_main=$imgproduct[0]['main_img'];
  $img_sub1=$imgproduct[0]['main_img'];
  $img_sub2=$imgproduct[0]['sub_img1'];
  if(isset($_SESSION['id_color_design'])){
    foreach ($imgproduct as $item) {
      extract($item);
      if($id_color==$_SESSION['id_color_design'] && $id_product==1){
        $img_main=$main_img;
        $img_sub1=$main_img;
        $img_sub2=$sub_img1;
      }
    }
  }
  $html_img_design_user='';
  if(isset($img_design_user)){
    foreach ($img_design_user as $item) {
      extract($item);
      if(check_img($img)!=''){
        $html_img_design_user.=substr_replace(check_img($img), ' onclick="add_img(this)" ', 5, 0);
      }
    }
  }
  $html_img_design='';
  foreach ($img_design as $item) {
    extract($item);
    if(check_img($img)!=''){
      $html_img_design.=substr_replace(check_img($img), ' onclick="add_img(this)" ', 5, 0);
    }
  }
  $html_product_design='';
  if(isset($product_design)){
    foreach ($product_design as $item) {
      extract($item);
      if(check_img($img_front)!=''){
        $html_product_design.=substr_replace(check_img($img_front), ' onclick="predesign(this)" ', 5, 0);
        $html_product_design.=substr_replace(check_img($img_back), ' style="display:none" ', 5, 0);
        $html_product_design.='<p  style="display:none">'.$id.'</p>';
      }
    }
  }
  $html_login;
  if(isset($_SESSION['iduser']) && isset($_SESSION['role']) &&  $_SESSION['role']==0){
    $html_login='';
  }else{
    $html_login='<div class="modal active">
    <div class="modal-overlay"></div>
    <div class="modal-content">
      <div class="modal-main">
      <img src="view/layout/assets/images/thatbai.png" alt="">
        <h3>Bạn phải đăng nhập vào tài khoản trước khi sử dụng chức năng thiết kế</h3>
        <div class="modal__succesfully">
            <a href="index.php?pg=login"><button class="monal__succesfully-btn">Đăng nhập</button>
        </div>
      </div>
    </div>
  </div>';
  }
  
?>
<div class="app-fixed">
        <ul class="app-fixed-menu">
          <li class="app-fixed-list">
            <a href="index.php" class="app-fixed-link">
              <i class="fa fa-home" aria-hidden="true"></i>
            </a>
          </li>
          <li class="app-fixed-list">
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
          <li class="app-fixed-list active">
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
      <!-- DESIGN -->
      <section class="design">
        <div class="container">
          <div class="design-center">
            
            <h2>THIẾT KẾ SẢN PHẨM</h2>
            <p>Bắt đầu thiết kế cho mình một chiếc áo đặc biệt</p>
          </div>
          <div class="design-main">
            <div class="design-right">
              <div class="custom-box">
                <div class="custom-heading">
                  <img src="view/layout/assets/images/design-color.png" alt="" />
                  <span>Chọn màu</span>
                </div>
                <input type="hidden" name="picksize" value="#ffffff">
                <div class="custom-color">
                  <?=$html_color?>
                </div>
                <div class="custom-heading">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="25"
                    height="24"
                    viewBox="0 0 25 24"
                    fill="none">
                    <path
                      d="M0.889082 8.70693L0.889081 1.94864C0.889081 1.14879 1.56161 0.500444 2.39131 0.500444L9.40172 0.500444C10.74 0.500444 11.4103 2.06039 10.4639 2.97268L8.19948 5.15566L12.6611 9.45678L17.1227 5.15566L14.8583 2.97268C13.9119 2.06035 14.5822 0.500443 15.9205 0.500401L22.9309 0.5004C23.7606 0.5004 24.4332 1.14879 24.4332 1.9486L24.4332 8.70689C24.4332 9.99708 22.815 10.6433 21.8687 9.73092L19.6013 7.54508L15.1397 11.8462L19.6013 16.1473L21.8687 13.9614C22.8151 13.0491 24.4332 13.6952 24.4332 14.9855L24.4332 21.7437C24.4332 22.5436 23.7607 23.1919 22.931 23.1919L15.9206 23.1919C14.5822 23.1919 13.912 21.632 14.8583 20.7197L17.1228 18.5367L12.6612 14.2356L8.19962 18.5367L10.464 20.7197C11.4104 21.632 10.7402 23.1919 9.40185 23.1919L2.39144 23.1919C1.56174 23.1919 0.889169 22.5435 0.889214 21.7437L0.889213 14.9854C0.889213 13.6952 2.50735 13.0491 3.45368 13.9614L5.72106 16.1473L10.1826 11.8462L5.72102 7.54508L3.45359 9.73097C2.50722 10.6433 0.889126 9.99717 0.889082 8.70693Z"
                      fill="#46694F" />
                  </svg>
                  Chọn size
                </div>
                <input type="hidden" name="picksize" value="XS">
                <div class="custom-size">

                  <?=$html_size?>

                </div>
                <div class="custom-heading">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="25"
                    height="25"
                    viewBox="0 0 25 25"
                    fill="none">
                    <path
                      d="M22.6562 21.875H2.34375C1.04932 21.875 0 20.8257 0 19.5312V5.46875C0 4.17432 1.04932 3.125 2.34375 3.125H22.6562C23.9507 3.125 25 4.17432 25 5.46875V19.5312C25 20.8257 23.9507 21.875 22.6562 21.875ZM5.46875 5.85938C3.95859 5.85938 2.73438 7.08359 2.73438 8.59375C2.73438 10.1039 3.95859 11.3281 5.46875 11.3281C6.97891 11.3281 8.20312 10.1039 8.20312 8.59375C8.20312 7.08359 6.97891 5.85938 5.46875 5.85938ZM3.125 18.75H21.875V13.2812L17.6018 9.00806C17.373 8.77925 17.002 8.77925 16.7731 9.00806L10.1562 15.625L7.44556 12.9143C7.21675 12.6855 6.84575 12.6855 6.61689 12.9143L3.125 16.4062V18.75Z"
                      fill="#46694F" />
                  </svg>
                  Chọn ảnh
                </div>
                <div class="custom-design-icon">
                  <div class="custom-design-item">
                    
                  <?=$html_img_design?>

                  </div>
                </div>
                <div class="custom-heading">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="25"
                    height="20"
                    viewBox="0 0 25 20"
                    fill="none">
                    <path
                      d="M22.5 2.48803H12.5L10 0.0779419H2.5C1.125 0.0779419 0.0125 1.16248 0.0125 2.48803L0 16.9486C0 18.2741 1.125 19.3587 2.5 19.3587H22.5C23.875 19.3587 25 18.2741 25 16.9486V4.89812C25 3.57257 23.875 2.48803 22.5 2.48803ZM22.5 16.9486H2.5V4.89812H22.5V16.9486ZM7.5 10.9354L9.2625 12.6345L11.25 10.7305V15.7435H13.75V10.7305L15.7375 12.6466L17.5 10.9354L12.5125 6.10317L7.5 10.9354Z"
                      fill="#46694F" />
                  </svg>
                  Upload ảnh
                </div>
                <form action="index.php?pg=design" method="post" enctype="multipart/form-data">
                <div class="design-upload">   
                    <input name="img_design" type="file"  accept="image/*"/>
                    <button name="design_upload"><i class="fas fa-upload"></i></button>        
                </div>
                </form>
                <div class="custom-design-icon">
                  <div class="custom-design-item">
                    <?=$html_img_design_user?>
                  </div>
                </div>
                <div class="custom-heading">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="20"
                    height="20"
                    viewBox="0 0 20 20"
                    fill="none">
                    <path
                      d="M20 9.98111C20.0102 15.4908 15.5169 19.9961 10.0072 20C7.62761 20.0017 5.44181 19.1722 3.72411 17.7858C3.27746 17.4254 3.24407 16.756 3.64996 16.3501L4.10427 15.8958C4.45141 15.5486 5.0056 15.5106 5.3902 15.8158C6.65572 16.82 8.25729 17.4194 9.99999 17.4194C14.101 17.4194 17.4193 14.1004 17.4193 10C17.4193 5.899 14.1004 2.58065 9.99999 2.58065C8.03169 2.58065 6.24399 3.34553 4.91661 4.59404L6.96314 6.64058C7.36959 7.04703 7.08173 7.74195 6.50697 7.74195H0.645161C0.28883 7.74195 0 7.45312 0 7.09679V1.23496C0 0.660203 0.694919 0.372339 1.10137 0.778751L3.09217 2.76956C4.88746 1.05387 7.32064 0 9.99999 0C15.5165 0 19.9898 4.46694 20 9.98111ZM12.7052 13.1579L13.1012 12.6486C13.4294 12.2267 13.3534 11.6187 12.9315 11.2906L11.2903 10.0141V5.80646C11.2903 5.27199 10.857 4.83872 10.3226 4.83872H9.67741C9.14294 4.83872 8.70967 5.27199 8.70967 5.80646V11.2763L11.3471 13.3276C11.769 13.6558 12.377 13.5798 12.7052 13.1579Z"
                      fill="#46694F" />
                  </svg>
                  Lịch sử thiết kế
                </div>
                <div class="custom-design-icon">
                  <div class="custom-design-item">
                    <?=$html_product_design?>
                  </div>
                </div>
              </div>
              <div class="design-left-save design-left-save-mobile">
                <div class="detail-btn custom-add">
                  <button class="detail-button__cart design-btn save-btn">Lưu thiết kế</button>
                </div>
              </div>
              <div class="custom-box custom-total custom-total-mobile">
                <h3 class="custom-title">Tổng cộng</h3>
                <div class="custom-price">
                  <p>Tiền áo:</p>
                  <p>Tiền in:</p>
                  <p>Thành tiền:</p>
                </div>
                <div class="detail-btn custom-add">
                  <button class="detail-button__cart design-btn">Thêm vào giỏ hàng</button>
                </div>
              </div>
            </div>
            <div class="design-left-flex">
              <div class="design-left">
                <div class="design-card" style="display:block">
                  <div class="design-icon" style="display:none">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="20"
                      height="28"
                      viewBox="0 0 20 28"
                      fill="none">
                      <path
                        d="M9.93067 6.26373L9.96575 9.96581L14.8551 4.98293L9.87221 0.0935951L9.90729 3.79567C4.45289 3.84735 0.0769356 8.30703 0.128616 13.7614C0.146973 15.6988 0.731695 17.4951 1.70862 19.0039L3.49323 17.1851C2.92821 16.1661 2.60848 14.9844 2.59667 13.738C2.55797 9.65341 5.84605 6.30243 9.93067 6.26373ZM18.293 8.33189L16.5084 10.1506C17.0612 11.1821 17.3932 12.3514 17.405 13.5977C17.4437 17.6824 14.1556 21.0333 10.071 21.072L10.0359 17.37L5.14657 22.3528L10.1294 27.2422L10.0944 23.5401C15.5488 23.4884 19.9247 19.0287 19.873 13.5743C19.8547 11.6369 19.27 9.84062 18.293 8.33189Z"
                        fill="#D9D9D9" />
                    </svg>
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="38"
                      height="27"
                      viewBox="0 0 38 27"
                      fill="none">
                      <path
                        d="M19.0015 0.667847C10.3651 0.667847 2.98965 6.05851 0.00146484 13.6678C2.98965 21.2772 10.3651 26.6678 19.0015 26.6678C27.6378 26.6678 35.0133 21.2772 38.0015 13.6678C35.0133 6.05851 27.6378 0.667847 19.0015 0.667847ZM19.0015 22.3345C14.2342 22.3345 10.3651 18.4518 10.3651 13.6678C10.3651 8.88385 14.2342 5.00118 19.0015 5.00118C23.7687 5.00118 27.6378 8.88385 27.6378 13.6678C27.6378 18.4518 23.7687 22.3345 19.0015 22.3345ZM19.0015 8.46785C16.1342 8.46785 13.8196 10.7905 13.8196 13.6678C13.8196 16.5452 16.1342 18.8678 19.0015 18.8678C21.8687 18.8678 24.1833 16.5452 24.1833 13.6678C24.1833 10.7905 21.8687 8.46785 19.0015 8.46785Z"
                        fill="#D9D9D9" />
                    </svg>
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="22"
                      height="27"
                      viewBox="0 0 22 27"
                      fill="none">
                      <path
                        d="M21.2157 2.29286H15.3229L14.8613 1.34325C14.7635 1.14023 14.6129 0.969457 14.4264 0.850139C14.2398 0.730821 14.0248 0.667693 13.8055 0.667856H8.19254C7.9737 0.666986 7.75906 0.729879 7.5732 0.849329C7.38734 0.96878 7.23777 1.13996 7.14164 1.34325L6.68004 2.29286H0.787179C0.578795 2.29286 0.378945 2.37846 0.231595 2.53083C0.0842452 2.6832 0.00146484 2.88987 0.00146484 3.10535L0.00146484 4.73035C0.00146484 4.94584 0.0842452 5.1525 0.231595 5.30488C0.378945 5.45725 0.578795 5.54285 0.787179 5.54285H21.2157C21.4241 5.54285 21.624 5.45725 21.7713 5.30488C21.9187 5.1525 22.0015 4.94584 22.0015 4.73035V3.10535C22.0015 2.88987 21.9187 2.6832 21.7713 2.53083C21.624 2.37846 21.4241 2.29286 21.2157 2.29286ZM2.61396 24.3827C2.65144 25.0015 2.91556 25.5823 3.35256 26.0069C3.78957 26.4314 4.3666 26.6678 4.9662 26.6678H17.0367C17.6363 26.6678 18.2134 26.4314 18.6504 26.0069C19.0874 25.5823 19.3515 25.0015 19.389 24.3827L20.43 7.16785H1.57289L2.61396 24.3827Z"
                        fill="#D9D9D9" />
                    </svg>
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="27"
                      height="28"
                      viewBox="0 0 27 28"
                      fill="none">
                      <path
                        d="M16.0335 10.2919V11.9792C16.0335 12.3272 15.7487 12.6119 15.4007 12.6119H12.4474V15.5648C12.4474 15.9128 12.1626 16.1975 11.8145 16.1975H10.127C9.7789 16.1975 9.49412 15.9128 9.49412 15.5648V12.6119H6.54085C6.19278 12.6119 5.908 12.3272 5.908 11.9792V10.2919C5.908 9.94385 6.19278 9.65911 6.54085 9.65911H9.49412V6.70627C9.49412 6.35826 9.7789 6.07352 10.127 6.07352H11.8145C12.1626 6.07352 12.4474 6.35826 12.4474 6.70627V9.65911H15.4007C15.7487 9.65911 16.0335 9.94385 16.0335 10.2919ZM26.6336 25.3039L25.1412 26.7961C24.6454 27.2918 23.8438 27.2918 23.3534 26.7961L18.0902 21.539C17.8529 21.3017 17.7211 20.9801 17.7211 20.6426V19.7831C15.8595 21.2384 13.5179 22.1032 10.9707 22.1032C4.91127 22.1032 0.00146484 17.1941 0.00146484 11.1355C0.00146484 5.07694 4.91127 0.167847 10.9707 0.167847C17.0302 0.167847 21.94 5.07694 21.94 11.1355C21.94 13.6823 21.0751 16.0235 19.6196 17.8849H20.4792C20.8167 17.8849 21.1384 18.0167 21.3757 18.254L26.6336 23.5111C27.1241 24.0067 27.1241 24.8082 26.6336 25.3039ZM18.143 11.1355C18.143 7.17029 14.9366 3.96435 10.9707 3.96435C7.00493 3.96435 3.79853 7.17029 3.79853 11.1355C3.79853 15.1008 7.00493 18.3067 10.9707 18.3067C14.9366 18.3067 18.143 15.1008 18.143 11.1355Z"
                        fill="#D9D9D9" />
                    </svg>
                  </div>
                  <div class="design-image"  id="targetElement1">
                    <?=check_img($img_main)?>
                    <div id="image-container" mat="1" onmouseover="hienborder(this)"  onmouseout="anborder(this)" class="drop-area" ondrop="drop(event)" ondragover="allowDrop(event)">
                      

                    </div>
                  </div>
                  <div class='mataolon'>Mặt trước</div>
                </div>
                <div class="design-image-list">
                  <div class="design-image-item" onclick="mattruoc()">
                  <?=check_img($img_sub1)?>
                  <div class='mataonho'>Mặt trước</div>
                  </div>
                  <div class="design-image-item" onclick="matsau()">
                  <?=check_img($img_sub2)?>
                  <div class='mataonho'>Mặt sau</div>
                  </div>
                </div>

                <div class="design-card" style="display:none">
                  <div class="design-icon"  style="display:none">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="20"
                      height="28"
                      viewBox="0 0 20 28"
                      fill="none">
                      <path
                        d="M9.93067 6.26373L9.96575 9.96581L14.8551 4.98293L9.87221 0.0935951L9.90729 3.79567C4.45289 3.84735 0.0769356 8.30703 0.128616 13.7614C0.146973 15.6988 0.731695 17.4951 1.70862 19.0039L3.49323 17.1851C2.92821 16.1661 2.60848 14.9844 2.59667 13.738C2.55797 9.65341 5.84605 6.30243 9.93067 6.26373ZM18.293 8.33189L16.5084 10.1506C17.0612 11.1821 17.3932 12.3514 17.405 13.5977C17.4437 17.6824 14.1556 21.0333 10.071 21.072L10.0359 17.37L5.14657 22.3528L10.1294 27.2422L10.0944 23.5401C15.5488 23.4884 19.9247 19.0287 19.873 13.5743C19.8547 11.6369 19.27 9.84062 18.293 8.33189Z"
                        fill="#D9D9D9" />
                    </svg>
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="38"
                      height="27"
                      viewBox="0 0 38 27"
                      fill="none">
                      <path
                        d="M19.0015 0.667847C10.3651 0.667847 2.98965 6.05851 0.00146484 13.6678C2.98965 21.2772 10.3651 26.6678 19.0015 26.6678C27.6378 26.6678 35.0133 21.2772 38.0015 13.6678C35.0133 6.05851 27.6378 0.667847 19.0015 0.667847ZM19.0015 22.3345C14.2342 22.3345 10.3651 18.4518 10.3651 13.6678C10.3651 8.88385 14.2342 5.00118 19.0015 5.00118C23.7687 5.00118 27.6378 8.88385 27.6378 13.6678C27.6378 18.4518 23.7687 22.3345 19.0015 22.3345ZM19.0015 8.46785C16.1342 8.46785 13.8196 10.7905 13.8196 13.6678C13.8196 16.5452 16.1342 18.8678 19.0015 18.8678C21.8687 18.8678 24.1833 16.5452 24.1833 13.6678C24.1833 10.7905 21.8687 8.46785 19.0015 8.46785Z"
                        fill="#D9D9D9" />
                    </svg>
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="22"
                      height="27"
                      viewBox="0 0 22 27"
                      fill="none">
                      <path
                        d="M21.2157 2.29286H15.3229L14.8613 1.34325C14.7635 1.14023 14.6129 0.969457 14.4264 0.850139C14.2398 0.730821 14.0248 0.667693 13.8055 0.667856H8.19254C7.9737 0.666986 7.75906 0.729879 7.5732 0.849329C7.38734 0.96878 7.23777 1.13996 7.14164 1.34325L6.68004 2.29286H0.787179C0.578795 2.29286 0.378945 2.37846 0.231595 2.53083C0.0842452 2.6832 0.00146484 2.88987 0.00146484 3.10535L0.00146484 4.73035C0.00146484 4.94584 0.0842452 5.1525 0.231595 5.30488C0.378945 5.45725 0.578795 5.54285 0.787179 5.54285H21.2157C21.4241 5.54285 21.624 5.45725 21.7713 5.30488C21.9187 5.1525 22.0015 4.94584 22.0015 4.73035V3.10535C22.0015 2.88987 21.9187 2.6832 21.7713 2.53083C21.624 2.37846 21.4241 2.29286 21.2157 2.29286ZM2.61396 24.3827C2.65144 25.0015 2.91556 25.5823 3.35256 26.0069C3.78957 26.4314 4.3666 26.6678 4.9662 26.6678H17.0367C17.6363 26.6678 18.2134 26.4314 18.6504 26.0069C19.0874 25.5823 19.3515 25.0015 19.389 24.3827L20.43 7.16785H1.57289L2.61396 24.3827Z"
                        fill="#D9D9D9" />
                    </svg>
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="27"
                      height="28"
                      viewBox="0 0 27 28"
                      fill="none">
                      <path
                        d="M16.0335 10.2919V11.9792C16.0335 12.3272 15.7487 12.6119 15.4007 12.6119H12.4474V15.5648C12.4474 15.9128 12.1626 16.1975 11.8145 16.1975H10.127C9.7789 16.1975 9.49412 15.9128 9.49412 15.5648V12.6119H6.54085C6.19278 12.6119 5.908 12.3272 5.908 11.9792V10.2919C5.908 9.94385 6.19278 9.65911 6.54085 9.65911H9.49412V6.70627C9.49412 6.35826 9.7789 6.07352 10.127 6.07352H11.8145C12.1626 6.07352 12.4474 6.35826 12.4474 6.70627V9.65911H15.4007C15.7487 9.65911 16.0335 9.94385 16.0335 10.2919ZM26.6336 25.3039L25.1412 26.7961C24.6454 27.2918 23.8438 27.2918 23.3534 26.7961L18.0902 21.539C17.8529 21.3017 17.7211 20.9801 17.7211 20.6426V19.7831C15.8595 21.2384 13.5179 22.1032 10.9707 22.1032C4.91127 22.1032 0.00146484 17.1941 0.00146484 11.1355C0.00146484 5.07694 4.91127 0.167847 10.9707 0.167847C17.0302 0.167847 21.94 5.07694 21.94 11.1355C21.94 13.6823 21.0751 16.0235 19.6196 17.8849H20.4792C20.8167 17.8849 21.1384 18.0167 21.3757 18.254L26.6336 23.5111C27.1241 24.0067 27.1241 24.8082 26.6336 25.3039ZM18.143 11.1355C18.143 7.17029 14.9366 3.96435 10.9707 3.96435C7.00493 3.96435 3.79853 7.17029 3.79853 11.1355C3.79853 15.1008 7.00493 18.3067 10.9707 18.3067C14.9366 18.3067 18.143 15.1008 18.143 11.1355Z"
                        fill="#D9D9D9" />
                    </svg>
                  </div>
                  <div class="design-image" id="targetElement2">
                    <?=check_img($img_sub2)?>
                    <div id="image-container1" mat="2" onmouseover="hienborder(this)"  onmouseout="anborder(this)" class="drop-area" ondrop="drop(event)" ondragover="allowDrop(event)">
                      

                    </div>
                  </div>
                  <div class='mataolon'>Mặt sau</div>
                </div>
                <div class="design-image-list"  style="display:none">
                  <div class="design-image-item" onclick="mattruoc()">
                  <?=check_img($img_sub1)?>
                  <div class='mataonho'>Mặt trước</div>
                  </div>
                  <div class="design-image-item" onclick="matsau()">
                  <?=check_img($img_sub2)?>
                  <div class='mataonho'>Mặt sau</div>
                  </div>
                </div>

                <div class="design-left-save">
                  <div class="detail-btn custom-add">
                    
                        <button onclick="convertToImage()" class="detail-button__cart design-btn save-btn">Lưu thiết kế</button>
                  
                  </div>
                </div>
              </div>
              <div class="design-mobile-custom-list">
                <div class="design-mobile-item active" id="color" data-tab="1">
                  <img src="view/layout/assets/images/design-color.png" alt="" />
                </div>
                <div class="design-mobile-item" id="size" data-tab="2">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="20"
                    height="19"
                    viewBox="0 0 20 19"
                    fill="none">
                    <path
                      d="M0.648776 6.8578L0.648775 1.49008C0.648775 0.854802 1.18293 0.339861 1.84191 0.339861L7.40987 0.339862C8.47283 0.339862 9.00519 1.57884 8.25351 2.30341L6.45501 4.03723L9.99865 7.45336L13.5422 4.03723L11.7437 2.30341C10.9921 1.5788 11.5244 0.339861 12.5874 0.339827L18.1554 0.339826C18.8143 0.339826 19.3485 0.854801 19.3485 1.49005L19.3485 6.85777C19.3485 7.8825 18.0633 8.39571 17.3116 7.6711L15.5108 5.93501L11.9672 9.35114L15.5108 12.7673L17.3117 11.0311C18.0633 10.3065 19.3485 10.8197 19.3485 11.8445L19.3485 17.2122C19.3485 17.8475 18.8144 18.3624 18.1554 18.3624L12.5874 18.3624C11.5245 18.3624 10.9921 17.1234 11.7438 16.3988L13.5423 14.665L9.99868 11.2489L6.45511 14.665L8.25361 16.3988C9.00526 17.1234 8.47293 18.3624 7.40998 18.3624L1.84201 18.3624C1.18303 18.3624 0.648844 17.8474 0.64888 17.2122L0.64888 11.8444C0.64888 10.8197 1.93408 10.3065 2.68568 11.0311L4.48654 12.7672L8.03008 9.35114L4.48651 5.93501L2.68561 7.67113C1.93397 8.39574 0.648811 7.88256 0.648776 6.8578Z"
                      fill="#46694F" />
                  </svg>
                </div>
                <div class="design-mobile-item" id="image" data-tab="3">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="22"
                    height="17"
                    viewBox="0 0 22 17"
                    fill="none">
                    <path
                      d="M19.9346 16.6011H2.05957C0.920469 16.6011 -0.00292969 15.6777 -0.00292969 14.5386V2.16357C-0.00292969 1.02447 0.920469 0.101074 2.05957 0.101074H19.9346C21.0737 0.101074 21.9971 1.02447 21.9971 2.16357V14.5386C21.9971 15.6777 21.0737 16.6011 19.9346 16.6011ZM4.80957 2.50732C3.48063 2.50732 2.40332 3.58464 2.40332 4.91357C2.40332 6.24251 3.48063 7.31982 4.80957 7.31982C6.13851 7.31982 7.21582 6.24251 7.21582 4.91357C7.21582 3.58464 6.13851 2.50732 4.80957 2.50732ZM2.74707 13.8511H19.2471V9.03857L15.4867 5.27816C15.2853 5.07681 14.9588 5.07681 14.7574 5.27816L8.93457 11.1011L6.54916 8.71566C6.34781 8.51431 6.02133 8.51431 5.81994 8.71566L2.74707 11.7886V13.8511Z"
                      fill="#46694F" />
                  </svg>
                </div>
                <div class="design-mobile-item" id="upload" data-tab="4">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="25"
                    height="20"
                    viewBox="0 0 25 20"
                    fill="none">
                    <path
                      d="M22.4971 3.12078H12.4971L9.99707 0.710693H2.49707C1.12207 0.710693 0.0095703 1.79523 0.0095703 3.12078L-0.00292969 17.5813C-0.00292969 18.9069 1.12207 19.9914 2.49707 19.9914H22.4971C23.8721 19.9914 24.9971 18.9069 24.9971 17.5813V5.53087C24.9971 4.20532 23.8721 3.12078 22.4971 3.12078ZM22.4971 17.5813H2.49707V5.53087H22.4971V17.5813ZM7.49707 11.5681L9.25957 13.2673L11.2471 11.3633V16.3763H13.7471V11.3633L15.7346 13.2793L17.4971 11.5681L12.5096 6.73592L7.49707 11.5681Z"
                      fill="#46694F" />
                  </svg>
                </div>
                <div class="design-mobile-item" id="history" data-tab="5">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="20"
                    height="21"
                    viewBox="0 0 20 21"
                    fill="none">
                    <path
                      d="M19.9971 10.3322C20.0073 15.8419 15.514 20.3472 10.0043 20.3511C7.62468 20.3528 5.43888 19.5232 3.72118 18.1369C3.27453 17.7764 3.24114 17.107 3.64703 16.7011L4.10134 16.2468C4.44848 15.8997 5.00267 15.8617 5.38727 16.1668C6.65279 17.1711 8.25436 17.7705 9.99706 17.7705C14.0981 17.7705 17.4164 14.4515 17.4164 10.3511C17.4164 6.25008 14.0974 2.93172 9.99706 2.93172C8.02876 2.93172 6.24106 3.6966 4.91368 4.94512L6.96021 6.99165C7.36666 7.3981 7.0788 8.09302 6.50404 8.09302H0.642231C0.285901 8.09302 -0.00292969 7.80419 -0.00292969 7.44786V1.58604C-0.00292969 1.01128 0.691989 0.723414 1.09844 1.12983L3.08924 3.12064C4.88453 1.40495 7.31771 0.351074 9.99706 0.351074C15.5136 0.351074 19.9869 4.81802 19.9971 10.3322ZM12.7022 13.509L13.0983 12.9997C13.4265 12.5778 13.3504 11.9698 12.9286 11.6417L11.2874 10.3652V6.15754C11.2874 5.62306 10.8541 5.18979 10.3196 5.18979H9.67448C9.14001 5.18979 8.70674 5.62306 8.70674 6.15754V11.6273L11.3442 13.6787C11.7661 14.0068 12.3741 13.9309 12.7022 13.509Z"
                      fill="#46694F" />
                  </svg>
                </div>
              </div>

              <div class="design-mobile-content active design-mobile-content-size">
                <div class="custom-box-mobile">
                  <div class="custom-heading-mobile">
                    <span>Chọn size</span>
                  </div>
                  <div class="custom-size">
                    <button class="custom-btn active">S</button>
                    <button class="custom-btn">M</button>
                    <button class="custom-btn">L</button>
                    <button class="custom-btn">XL</button>
                  </div>
                </div>
                <div class="design-mobile-icon-close">
                  <i class="fa fa-times" aria-hidden="true"></i>
                </div>
              </div>
              <div class="design-mobile-content design-mobile-content-upload">
                <div class="custom-box-mobile">
                  <div class="custom-heading-mobile">
                    <span>Chọn ảnh từ thư viện</span>
                  </div>
                  <div class="custom-design-icon">
                    <div class="custom-design-item">
                      <img src="view/layout/assets/images/custom-1.svg" alt="" />
                      <img src="view/layout/assets/images/custom-2.svg" alt="" />
                      <img src="view/layout/assets/images/custom-3.svg" alt="" />
                      <img src="view/layout/assets/images/custom-4.svg" alt="" />
                      <img src="view/layout/assets/images/custom-5.svg" alt="" />
                      <img src="view/layout/assets/images/custom-6.svg" alt="" />
                    </div>
                  </div>
                </div>
                <div class="design-mobile-icon-close">
                  <i class="fa fa-times" aria-hidden="true"></i>
                </div>
              </div>
              <div class="design-mobile-content design-mobile-content-upload-file">
                <div class="custom-box-mobile">
                  <div class="custom-heading-mobile">
                    <span>Tải ảnh lên</span>
                  </div>
                  <div class="design-upload">
                    <input type="file" />
                  </div>
                </div>
                <div class="design-mobile-icon-close">
                  <i class="fa fa-times" aria-hidden="true"></i>
                </div>
              </div>
              <div class="design-mobile-content design-mobile-content-history">
                <div class="custom-box-mobile">
                  <div class="custom-heading-mobile">
                    <span>Lịch sử thiết kế</span>
                  </div>
                  <div class="custom-design-icon">
                    <div class="custom-design-item">
                      <img src="view/layout/assets/images/custom-1.svg" alt="" />
                      <img src="view/layout/assets/images/custom-2.svg" alt="" />
                    </div>
                  </div>
                </div>
                <div class="design-mobile-icon-close">
                  <i class="fa fa-times" aria-hidden="true"></i>
                </div>
              </div>
              <div class="custom-box custom-total">
                <h3 class="custom-title">Tổng cộng</h3>
                <div class="custom-price">
                  <p>Tiền áo:</p>
                  <p class="price-design">250,000đ</p>
                  <p>Tiền in:</p>
                  <p class="price-design">50,000đ</p>
                  <p>Thành tiền:</p>
                  <p class="price-design">300,000</p>
                </div>
                <div class="detail-btn custom-add" id="addcart">
                  <button onclick="convertToImagecart()" class="detail-button__cart design-btn">Thêm vào giỏ hàng</button>
                </div>
                
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="blog-design">
        <div class="container">
          <div class="blog-design-center">
            <div class="heading-primary heading-secondary">Làm thế nào để nó hoạt động</div>
            <p>3 bước để làm ra một chiếc áo đặc biệt cho riêng bạn</p>
          </div>
          <div class="blog-design-list">
            <div class="blog-design-item">
              <div class="blog-design-image">
                <a href="#">
                  <img src="view/layout/assets/images/blog-design-1.png" alt="" />
                </a>
              </div>
              <div class="blog-design-content">
                <div class="blog-design-title">Thiết kế trực tuyến</div>
                <p class="blog-design-desc">
                  Chúng tôi hỗ trợ bạn thiết kế online ngay tại nhà. Chọn hình ảnh theo mẫu có sẳn
                  hoặc tải ảnh lên theo ý muốn của bạn.
                </p>
              </div>
            </div>
            <div class="blog-design-item">
              <div class="blog-design-image">
                <a href="#">
                  <img src="view/layout/assets/images/blog-design-2.png" alt="" />
                </a>
              </div>
              <div class="blog-design-content">
                <div class="blog-design-title">In ấn chuyên nghiệp</div>
                <p class="blog-design-desc">
                  Khi bạn đã thiết kế xong chiếc áo của mình thì phần còn lại cứ giao cho chúng tôi.
                </p>
              </div>
            </div>
            <div class="blog-design-item">
              <div class="blog-design-image">
                <a href="#">
                  <img src="view/layout/assets/images/blog-design-1.png" alt="" />
                </a>
              </div>
              <div class="blog-design-content">
                <div class="blog-design-title">Sản phẩm đến tay bạn</div>
                <p class="blog-design-desc">
                  Chúng tôi sẽ giao những chiếc áo đặc biệt này đến tận tay của bạn.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>
      
      <script src="https://html2canvas.hertzen.com/dist/html2canvas.min.js"></script>
    
      <div class="modal">
  <div class="modal-overlay"></div>
  <div class="modal-content">
    <div class="modal-main">
    <img src="view/layout/assets/images/thanhcong.png" alt="">
      <h3>Đã lưu thiết kế thành công</h3>
      <div class="modal__succesfully">
        <form action="index.php?pg=design" method="post">
          <button name='save_btn' class="monal__succesfully-btn">Đồng ý</button>
        </form>
      </div>
    </div>
  </div>
</div>
<div class="modal">
  <div class="modal-overlay"></div>
  <div class="modal-content">
    <div class="modal-main">
    <img src="view/layout/assets/images/thanhcong.png" alt="">
      <h3>Đã thêm thiết kế vào giỏ hàng thành công</h3>
      <div class="modal__succesfully">
        <form action="index.php?pg=design" method="post">
          <button name='addcart_btn_cart' class="monal__succesfully-btn">Xem giỏ hàng</button>
          <button name='addcart_btn_con' class="monal__succesfully-btn">Tiếp tục thiết kế</button>
        </form>
      </div>
    </div>
  </div>
</div>
      <?=$html_login?>
