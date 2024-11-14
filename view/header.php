<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Trang chủ</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link
      rel="stylesheet"
      type="text/css"
      href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="view/layout/assets/css/style.css" />
    <link rel="stylesheet" href="view/layout/assets/css/responsive.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
      integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer" />
      <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
      integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />
    <link
      rel="stylesheet"
      type="text/css"
      href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />

    <link
      href="https://fonts.googleapis.com/css?family=Poppins:100,100italic,200,200italic,300,300italic,regular,italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic"
      rel="stylesheet" />
  </head>
  <body>
    <div class="app">
      
      <!-- Header -->
      <header class="header">
        <div class="container">
          <div class="header-main">
            <div class="header-bars">
              <i class="fa fa-bars menu-toggle" aria-hidden="true"></i>
            </div>
            <div class="header-logo">
              <a href="index.php">
                <img src="view/layout/assets/images/header-logo.svg" alt="" />
              </a>
            </div>
            <div class="header-logo-mobile">
              <a href="#">
                <img src="view/layout/assets/images/logo-footer.svg" alt="" />
              </a>
            </div>
            <div class="header-bad">
              <i class="fa fa-shopping-bag" aria-hidden="true"></i>
            </div>
            <div class="header-form">
              <div class="header-input">
                <form action="index.php?pg=product" method="post">
                <input name="search" type="text" placeholder="Tìm kiếm sản phẩm" />
                <div class="header-input-icon">
                  <button name="btn_search"><i class="fa fa-search" aria-hidden="true"></i></button>
                </div>
                </form>
              </div>
            </div>
            <div class="header-auth">
              <div class="header-auth__item">
                <i class="fa fa-heart" aria-hidden="true"></i>
                <a href="#" class="header-link">Yêu thích</a>
              </div>
              <div class="header-auth__item">
              <?php
                $link_taikhoan='';
                $tentaikhoan='Tài khoản';
                  if(isset($_SESSION['loginuser']) && isset($_SESSION['iduser']) && isset($_SESSION['role']) && $_SESSION['role']==0){
                    $taikhoan=getuser($_SESSION['iduser']);
                    $tentaikhoan=$taikhoan['user'];
                    $img=$taikhoan['img'];
                    if(check_img($img)==''){
                      $img='<img src="view/layout/assets/images/avatar.png" alt="" />';
                    }else{
                      $img=check_img($img);
                    }
                    $link_taikhoan='index.php?pg=account';
                  }else{
                    $img='<i class="fa fa-user-circle" aria-hidden="true"></i>';
                    $link_taikhoan='index.php?pg=login';
                  }
                  
                
                    
                  
                ?>
                
                <?=$img?>
                <a href="<?=$link_taikhoan?>" class="header-link"><?=$tentaikhoan?></a>
              </div>
              <div class="header-auth__item">
                <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                <a href="index.php?pg=cart" class="header-link">Giỏ hàng</a>
              </div>
            </div>
          </div>
        </div>
      </header>
      <ul class="menu-mobile">
        <li class="menu-mobile-item">
          <a href="#" class="menu-mobile-link icon-close"
            ><i class="fa fa-times close-menu" aria-hidden="true"></i
          ></a>
        </li>
        <li class="menu-mobile-item">
          <a href="#" class="menu-mobile-link active">Trang chủ</a>
        </li>
        <li class="menu-mobile-item">
          <a href="index.php?pg=about" class="menu-mobile-link">Giới thiệu</a>
        </li>
        <li class="menu-mobile-item">
          <a href="index.php?pg=product" class="menu-mobile-link">Sản phẩm</a>
        </li>
        <li class="menu-mobile-item">
          <a href="index.php?pg=design" class="menu-mobile-link">Thiết kế</a>
        </li>
        <li class="menu-mobile-item">
          <a href="index.php?pg=news" class="menu-mobile-link">Tin Tức</a>
        </li>
        <li class="menu-mobile-item">
          <a href="index.php?pg=contact" class="menu-mobile-link">Liên hệ</a>
        </li>
        <li class="menu-mobile-item">
          <a href="#" class="menu-mobile-link">Tài khoản</a>
        </li>
        <li class="menu-mobile-item">
          <a href="#" class="menu-mobile-link logout">Đăng xuất</a>
        </li>
      </ul>

      <section class="header-bottom">
        <div class="container">
          <div class="header-bottom__main">
            <form action="" class="header-form header-form-mobile">
              <div class="header-input">
                <input type="text" placeholder="Tìm kiếm sản phẩm" />
                <div class="header-input-icon">
                  <i class="fa fa-search" aria-hidden="true"></i>
                </div>
              </div>
            </form>
            <ul class="header-menu">
              <li class="header-menu-item">
                <a href="index.php" class="header-menu-link">Trang chủ</a>
              </li>
              <li class="header-menu-item">
                <a href="index.php?pg=design" class="header-menu-link">Thiết kế</a>
              </li>
              <li class="header-menu-item">
                <a href="index.php?pg=about" class="header-menu-link">Giới thiệu</a>
              </li>
              <li class="header-menu-item">
                <a href="index.php?pg=product" class="header-menu-link">Sản phẩm</a>
              </li>
              <li class="header-menu-item">
                <a href="index.php?pg=news" class="header-menu-link">Tin tức</a>
              </li>
              <li class="header-menu-item">
                <a href="index.php?pg=contact" class="header-menu-link">Liên hệ</a>
              </li>
            </ul>
          </div>
        </div>
      </section>
      