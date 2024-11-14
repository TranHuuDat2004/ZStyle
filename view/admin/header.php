<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin</title>
    <link rel="stylesheet" href="../layout/assets/css/admin.css" />
    
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
      integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer" />
      <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <link
      href="https://fonts.googleapis.com/css?family=Poppins:100,100italic,200,200italic,300,300italic,regular,italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic"
      rel="stylesheet" />
    <link rel="icon" class="js-site-favicon" type="image/svg+xml" href="../layout/assets/images/logo-admin.png" />
  </head>
  <body>
    <div class="app">
      <!-- <header class="header">
        <div class="container">
          <div class="header-main">
            <div class="header-left">
              <div class="header-logo">
                <a href="#">
                  <img src="../layout/assets/images/logo-admin.png" alt="" />
                </a>
              </div>
              <div class="header-bar">
                <i class="fa fa-bars icon-bar" aria-hidden="true"></i>
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
        </div>
      </header> -->
      <div class="navigation">
        <ul class="dashboard-menu">
          <li class="dashboard-menu-list">
            <img src="../layout/assets/images/logo-admin.png" alt="" />
          </li>
          <li class="dashboard-menu-list">
            <a href="index.php" class="dashboard-menu-link" data-tab="1">
              <i class="fa fa-tachometer" aria-hidden="true"></i>
              Dashboard
            </a>
          </li>
          <li class="dashboard-menu-list">
            <a href="index.php?pg=catalog" class="dashboard-menu-link" data-tab="2">
              <i class="fa fa-list" aria-hidden="true"></i>
              Danh mục sản phẩm
            </a>
          </li>
          <li class="dashboard-menu-list">
            <a href="index.php?pg=product" class="dashboard-menu-link" data-tab="3">
              <i class="fa fa-shopping-cart" aria-hidden="true"></i>
              Sản phẩm
            </a>
          </li>
          <li class="dashboard-menu-list">
            <a href="index.php?pg=user" class="dashboard-menu-link" data-tab="4">
              <i class="fa fa-user" aria-hidden="true"></i>
              Tài khoản
            </a>
          </li>
          <li class="dashboard-menu-list">
            <a href="index.php?pg=donhang" class="dashboard-menu-link" data-tab="5">
              <i class="fa fa-shopping-bag " aria-hidden="true"></i>
              Đơn hàng
            </a>
          </li>
          <li class="dashboard-menu-list">
            <a href="index.php?pg=cart" class="dashboard-menu-link" data-tab="6">
              <i class="	fa fa-shopping-cart" aria-hidden="true"></i>
              Giỏ hàng
            </a>
          </li>
          <li class="dashboard-menu-list">
            <a href="index.php?pg=binhluan" class="dashboard-menu-link" data-tab="7">
              <i class="fa fa-commenting" aria-hidden="true"></i>
              Bình luận
            </a>
          </li>
          <li class="dashboard-menu-list">
            <a href="index.php?pg=tintuc" class="dashboard-menu-link" data-tab="8">
            <ion-icon name="newspaper"></ion-icon>
              Tin tức
            </a>
          </li>
          <li class="dashboard-menu-list">
            <a href="index.php?pg=img_product_color" class="dashboard-menu-link" data-tab="9">
            <ion-icon name="image"></ion-icon>
              Hình ảnh sản phẩm
            </a>
          </li>
          <li class="dashboard-menu-list">
            <a href="index.php?pg=voucher" class="dashboard-menu-link" data-tab="10">
            <ion-icon name="gift"></ion-icon>
              Voucher
            </a>
          </li>
          <li class="dashboard-menu-list">
            <a href="index.php?pg=dadung_voucher" class="dashboard-menu-link" data-tab="11">
            <ion-icon name="gift"></ion-icon>
              Voucher đã dùng
            </a>
          </li>
          <li class="dashboard-menu-list">
            <a href="index.php?pg=design" class="dashboard-menu-link" data-tab="12">
            <i class="fa fa-pencil" aria-hidden="true"></i>
              Design
            </a>
          </li>
          <li class="dashboard-menu-list">
            <a href="index.php?pg=img_design" class="dashboard-menu-link" data-tab="13">
            <ion-icon name="images"></ion-icon>
              Ảnh design
            </a>
          </li>
          <li class="dashboard-menu-list">
            <a href="index.php?pg=logout" class="dashboard-menu-link">
              <i class="fa fa-sign-out" aria-hidden="true"></i>
              Đăng xuất
            </a>
          </li>
        </ul>
      </div>
      