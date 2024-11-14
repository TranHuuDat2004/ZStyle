<?php
   session_start();
   ob_start();

    include_once "model/connectdb.php";
    include_once "model/product.php";
    include_once "model/catalog.php";
    include_once "model/detail.php";
    include_once "model/cart.php";
    include_once "model/user.php";
    include_once "model/donhang.php";
    include_once "model/giamgia.php";
    include_once "model/comment.php";
    include_once "model/global.php";
    include_once "model/design.php";
    include_once "model/soluongtonkho.php";
    include_once "model/news.php";
 

   
   include_once "view/header.php";
   if(isset($_GET['pg'])&&($_GET['pg']!="")){
      $pg=$_GET['pg'];
      switch ($pg) {
         case 'product':
            if(isset($_GET['tatca']) && $_GET['tatca']){
               unset($_SESSION['filterprice']);
               unset($_SESSION['filtercolor']);
               unset($_SESSION['filtergioitinh']);
               unset($_SESSION['filtercatalog']);
            }
            $catalog=getcatalog();
            if(!isset($_SESSION['filtercatalog'])){
               $_SESSION['filtercatalog']=0;
            }
            if(isset($_GET['ind']) && $_GET['ind']){
               $_SESSION['filtercatalog']=$_GET['ind'];
            }
            if($_SESSION['filtercatalog']){
               $catalog_pick=getcatalogdetail($_SESSION['filtercatalog']);
            }
            $_SESSION['product']=getproduct_catalog($_SESSION['filtercatalog']);
            if(isset($_GET['color']) && $_GET['color']){
               $_SESSION['filtercolor']=$_GET['color'];
               $j=0;
               foreach ($_SESSION['product'] as $item) {
                  $listcolor=getlistcolor($item['id']);
                  $kt=0;
                  foreach ($listcolor as $item1) {
                     if($item1['id']==$_SESSION['filtercolor']){
                        $kt=1;
                        break;
                     }
                  }
                  if($kt==0){
                     unset($_SESSION['product'][$j]);
                  }
                  $j++;
               }
            }else{
               if(isset($_SESSION['filtercolor'])){
                  $j=0;
                  foreach ($_SESSION['product'] as $item) {
                     $listcolor=getlistcolor($item['id']);
                     $kt=0;
                     foreach ($listcolor as $item1) {
                        if($item1['id']==$_SESSION['filtercolor']){
                           $kt=1;
                           break;
                        }
                     }
                     if($kt==0){
                        unset($_SESSION['product'][$j]);
                     }
                     $j++;
                  }
               }
            }
            $_SESSION['producttemp']=[];
            if(isset($_POST['btn_search'])){
               $_SESSION['product']=searchproduct($_POST['search']);
            }
            if(!isset($_SESSION['filterprice'])){
               $_SESSION['filterprice']='';
            }
            if(!isset($_SESSION['filtergioitinh'])){
               $_SESSION['filtergioitinh']='';
            }
            if(isset($_GET['price']) || $_SESSION['filterprice']){
               if(isset($_GET['price'])){
                  if($_GET['price']<0){
                     for($j=0;$j<strlen($_SESSION['filterprice']);$j++){
                        if($_SESSION['filterprice'][$j]==-1*$_GET['price']){
                           $dung='đúng';
                           $_SESSION['filterprice']=str_replace($_SESSION['filterprice'][$j],'',$_SESSION['filterprice']);
                        }
                     }
                  }else{
                     $_SESSION['filterprice'].=$_GET['price'];
                  }
               }
               
               
               for($i=0;$i<strlen($_SESSION['filterprice']);$i++){
                  switch ($_SESSION['filterprice'][$i]) {
                     case '1':
                        $j=0;
                        $productprice1=$_SESSION['product'];
                        foreach ($productprice1 as $item) {
                           if($item['price']>=300000){
                              unset($productprice1[$j]);
                           
                           }
                           $j++;
                        }
                        $_SESSION['producttemp']=$_SESSION['producttemp']+$productprice1;
                        break;
                     case '2':
                        $j=0;
                        $productprice2=$_SESSION['product'];
                        foreach ($productprice2 as $item) {
                           if($item['price']<300000 || $item['price']>400000){
                              unset($productprice2[$j]);
                           }
                           $j++;
                        }
                        $_SESSION['producttemp']=$_SESSION['producttemp']+$productprice2;
                        break;
                     case '3':
                        $j=0;
                        $productprice3=$_SESSION['product'];
                        foreach ($productprice3 as $item) {
                           if($item['price']<400000 || $item['price']>500000){
                              unset($productprice3[$j]);
                           }
                           $j++;
                        }
                        $_SESSION['producttemp']=$_SESSION['producttemp']+$productprice3;
                        break;
                     case '4':
                        $j=0;
                        $productprice4=$_SESSION['product'];
                        foreach ($productprice4 as $item) {
                           if($item['price']<=500000){
                              unset($productprice4[$j]);
                           }
                           $j++;
                        }
                        $_SESSION['producttemp']=$_SESSION['producttemp']+$productprice4;
                        break;
                     
                     // default:
                     //    # code...
                     //    break;
                  }
               }
            }
            
            if(isset($_GET['gioitinh']) || $_SESSION['filtergioitinh']){
               if(isset($_GET['gioitinh'])){
                  if($_GET['gioitinh']<0){
                     for($j=0;$j<strlen($_SESSION['filtergioitinh']);$j++){
                        if($_SESSION['filtergioitinh'][$j]==-1*$_GET['gioitinh']){
                           $_SESSION['filtergioitinh']=str_replace($_SESSION['filtergioitinh'][$j],'',$_SESSION['filtergioitinh']);
                        }
                     }
                  }else{
                     $_SESSION['filtergioitinh'].=$_GET['gioitinh'];
                  }
               }
               
               for($i=0;$i<strlen($_SESSION['filtergioitinh']);$i++){
                  switch ($_SESSION['filtergioitinh'][$i]) {
                     case '1':
                        $j=0;
                        $productgioitinh1=$_SESSION['product'];
                        foreach ($productgioitinh1 as $item) {
                           if($item['gioitinh']!=1){
                              unset($productgioitinh1[$j]);
                           
                           }
                           $j++;
                        }
                        $_SESSION['producttemp']=$_SESSION['producttemp']+$productgioitinh1;
                        break;
                     case '2':
                        $j=0;
                        $productgioitinh2=$_SESSION['product'];
                        foreach ($productgioitinh2 as $item) {
                           if($item['gioitinh']!=2){
                              unset($productgioitinh2[$j]);
                           }
                           $j++;
                        }
                        $_SESSION['producttemp']=$_SESSION['producttemp']+$productgioitinh2;
                        break;
                     case '3':
                        $j=0;
                        $productgioitinh3=$_SESSION['product'];
                        foreach ($productgioitinh3 as $item) {
                           if($item['gioitinh']!=0){
                              unset($productgioitinh3[$j]);
                           }
                           $j++;
                        }
                        $_SESSION['producttemp']=$_SESSION['producttemp']+$productgioitinh3;
                        break;
                     
                     // default:
                     //    # code...
                     //    break;
                  }
               }
            }
            $filter=0;
            if($_SESSION['filterprice'] || $_SESSION['filtergioitinh']){
               $filter=1;
            }
            if($filter==1){
               unset($_SESSION['product']);
               $_SESSION['product']=$_SESSION['producttemp'];
               unset($_SESSION['producttemp']);
            }else{
               unset($_SESSION['producttemp']);
            }

            
        
        
        
            if(isset($_GET['sort']) && $_GET['sort']){
               $_SESSION['sort']=$_GET['sort'];
               switch ($_SESSION['sort']) {
                  case '1':
                     break;
                  case '2':
                     function compareNames($product1, $product2) {
                        return strcmp($product1["name"], $product2["name"]);
                     }
                     
                     // Sắp xếp mảng theo thuộc tính tên
                     usort($_SESSION['product'], 'compareNames');
                     
                     break;
                  case '3':
                     function compareByNameDesc($a, $b) {
                        return strcmp($b['name'], $a['name']);
                     }
                     // Sắp xếp mảng sử dụng hàm so sánh
                     usort($_SESSION['product'], 'compareByNameDesc');
                     break;
                  case '4':
                     function compareByPriceAsc($a, $b) {
                        return $a['price'] - $b['price'];
                     }
                    
                    // Sắp xếp mảng sử dụng hàm so sánh
                    usort($_SESSION['product'], 'compareByPriceAsc');
                     
                     break;
                  case '5':
                     function compareByPriceDesc($a, $b) {
                        return $b['price'] - $a['price'];
                    }
                    
                    // Sắp xếp mảng sử dụng hàm so sánh
                    usort($_SESSION['product'], 'compareByPriceDesc');
                     break;
                  
                  // default:
                  //    # code...
                  //    break;
               }
            }
            $_SESSION['subpage']=1;
            if(isset($_GET['subpage']) && $_GET['subpage']){
               $_SESSION['subpage']=$_GET['subpage'];
               
            }
            $listcolor=getlistcolor(1);
            include_once "view/product.php";
            break;

         case 'news':
            $new_home=getnew_home();
            $new_news= getnew_home_new();
            include_once "view/news.php";
            break;
         case 'design':
            if(isset($_POST['onlyaddcart'])){
               if(isset($_SESSION['product_checkout']) && !isset($_SESSION['giohang'])){
                  $_SESSION['giohang']=[];
                  $_SESSION['giohang']=$_SESSION['product_checkout'];
                  unset($_SESSION['product_checkout']);
               }else{
                  if(isset($_SESSION['product_checkout']) && isset($_SESSION['giohang'])){
                     $_SESSION['giohang']=array_merge($_SESSION['product_checkout'], $_SESSION['giohang']);
                     unset($_SESSION['product_checkout']);
                  }
               }
               $product_design_user=getproductdesignuser($_POST['id_design']);
               $sp=["id"=>1,"img"=>$product_design_user['img_front'] ,"name"=>'Áo thun tự thiết kế' ,"price"=>300000 ,"color"=>getcolor($product_design_user['id_color']),"size"=>getsize($product_design_user['id_size']),"soluong"=>1,"product_design"=>1,"id_product_design"=>$product_design_user['id']];
               $_SESSION['giohang'][]=$sp;
               add_cart($_SESSION['iduser'], 1, 1, 1, 300000,300000,$product_design_user['img_front'],$product_design_user['id_color'],$product_design_user['id_size'],1,$_POST['id_design']);
            }
            if(isset($_POST['design_upload'])){
               $img=$_FILES['img_design']['name'];
               if($img!=''){
                 $target_file = PATH_IMG . basename($img);
                 move_uploaded_file($_FILES['img_design']["tmp_name"], $target_file);
               }
               add_img_design($img, $_SESSION['iduser']);
            }
            if(isset($_GET['id_color']) && $_GET['id_color']){
               $_SESSION['id_color_design']=$_GET['id_color'];
            }
            if(isset($_GET['id_size']) && $_GET['id_size']){
               $_SESSION['id_size_design']=$_GET['id_size'];
            }
            if(isset($_POST['save_btn']) && isset($_SESSION['iduser']) && isset($_SESSION['role']) && isset($_SESSION['img_front']) &&  $_SESSION['role']==0){
               add_design($_SESSION['id_color_design'], $_SESSION['id_size_design'], $_SESSION['img_front'], $_SESSION['img_back'],200000,'Áo thun tự thiết kế', $_SESSION['iduser']);
               unset($_SESSION['id_color_design']);
               unset($_SESSION['id_size_design']);
               unset($_SESSION['img_front']);
               unset($_SESSION['img_back']);
            }
            if(isset($_POST['addcart_btn_con']) && isset($_SESSION['iduser']) && isset($_SESSION['img_front']) && isset($_SESSION['role']) &&  $_SESSION['role']==0){
               add_design($_SESSION['id_color_design'], $_SESSION['id_size_design'], $_SESSION['img_front'], $_SESSION['img_back'],300000,'Áo thun tự thiết kế', $_SESSION['iduser']);
               $sp=["id"=>1,"img"=>$_SESSION['img_front'] ,"name"=>'Áo thun tự thiết kế' ,"price"=>300000 ,"color"=>getcolor($_SESSION['id_color_design']),"size"=>getsize($_SESSION['id_size_design']),"soluong"=>1,"product_design"=>1,"id_product_design"=>getnewdesign()['id']];
               add_cart($_SESSION['iduser'], 1, 1, $sp['soluong'], $sp['price'],$sp['soluong']*$sp['price'],$sp['img'],$_SESSION['id_color_design'],$_SESSION['id_size_design'],1,getnewdesign()['id']);
               $_SESSION['giohang'][]=$sp;
               unset($_SESSION['id_color_design']);
               unset($_SESSION['id_size_design']);
               unset($_SESSION['img_front']);
               unset($_SESSION['img_back']);
            }
            if(isset($_POST['addcart_btn_cart']) && isset($_SESSION['iduser']) && isset($_SESSION['img_front']) && isset($_SESSION['role']) &&  $_SESSION['role']==0){
               add_design($_SESSION['id_color_design'], $_SESSION['id_size_design'], $_SESSION['img_front'], $_SESSION['img_back'],300000,'Áo thun tự thiết kế', $_SESSION['iduser']);
               $sp=["id"=>1,"img"=>$_SESSION['img_front'] ,"name"=>'Áo thun tự thiết kế' ,"price"=>300000 ,"color"=>getcolor($_SESSION['id_color_design']),"size"=>getsize($_SESSION['id_size_design']),"soluong"=>1,"product_design"=>1,"id_product_design"=>getnewdesign()['id']];
               add_cart($_SESSION['iduser'], 1, 1, $sp['soluong'], $sp['price'],$sp['soluong']*$sp['price'],$sp['img'],$_SESSION['id_color_design'],$_SESSION['id_size_design'],1,getnewdesign()['id']);
               $_SESSION['giohang'][]=$sp;
               unset($_SESSION['id_color_design']);
               unset($_SESSION['id_size_design']);
               unset($_SESSION['img_front']);
               unset($_SESSION['img_back']);
               header('location: index.php?pg=cart');
            }
            if(isset($_SESSION['iduser']) && isset($_SESSION['role']) && $_SESSION['role']==0){
               $product_design=getproductdesign($_SESSION['iduser']);
            }
            if(isset($_SESSION['iduser'])){
               $img_design_user=getimgdesignuser($_SESSION['iduser']);
            }
            $img_design=getimgdesign();
            $list_color=getlistcolor(1);
            $imgproduct=getlistimgcolor(1);
            $list_size=getlistsize();
            if(!isset($_SESSION['id_color_design'])){
               $_SESSION['id_color_design']=$list_color[0]['id'];
            }
            if(!isset($_SESSION['id_size_design'])){
               $_SESSION['id_size_design']=$list_size[0]['id'];
            }
            include_once "view/design.php";
            break;
         case 'detail':
            if(isset($_GET['id']) && ($_GET['id']>0)){
               $idsp=$_GET['id'];
               $detail=getproductdetail($idsp);
               extract($detail);
               $idcatalog=getidcatalog($idsp);
               $idsp=intval($idsp);
               $splienquan=getrelatedproduct($idsp,$idcatalog);
               $list_color=getlistcolor($id);
               $imgproduct=getlistimgcolor($id);
               $list_size=getlistsize();
               $idcatalog=getidcatalog($idsp);
               $idsp=intval($idsp);
               $splienquan=getrelatedproduct($idsp,$idcatalog);
               $listcomment=get_comment_product($idsp,1000);
               $listsoluongtonkho=getsoluongtonkho($idsp);
               tangluotview($idsp, $detail['view']+1);
            }else{
               header('location: index.php');
            }  
            include_once "view/detail.php";   
            break;
         case 'cart':  
            if(isset($_SESSION['product_checkout']) && !isset($_SESSION['giohang'])){
               $_SESSION['giohang']=[];
               $_SESSION['giohang']=$_SESSION['product_checkout'];
               unset($_SESSION['product_checkout']);
            }else{
               if(isset($_SESSION['product_checkout']) && isset($_SESSION['giohang'])){
                  unset($_SESSION['giohang']);
                  $_SESSION['giohang']=[];
                  $_SESSION['giohang']=$_SESSION['product_checkout'];
                  unset($_SESSION['product_checkout']);
               }
            }
            if(!isset($_SESSION['giohang'])){
               $_SESSION['giohang']=[];
            }   
            if(isset($_POST['soluongmoi'])){
               $soluong=$_POST['soluongmoi'];
               $ind=$_POST['ind'];
               if($soluong==0)
                  array_splice($_SESSION['giohang'],$ind,1);
               else
                  $_SESSION['giohang'][$ind]['soluong']=$soluong;
               header('location: index.php?pg=cart');
            }
            if(isset($_GET['delcart']) && ($_GET['delcart']==true)){
               unset($_SESSION['giohang']);
               header('location: index.php?pg=cart');
            }
            if(isset($_GET['id']) && ($_GET['id']>=0)){
               array_splice($_SESSION['giohang'],$_GET['id'],1);
               header('location: index.php?pg=cart');
            }
            include_once "view/cart.php";
            break;
         case 'addtocart':
            if(isset($_SESSION['product_checkout']) && !isset($_SESSION['giohang'])){
               $_SESSION['giohang']=[];
               $_SESSION['giohang']=$_SESSION['product_checkout'];
               unset($_SESSION['product_checkout']);
            }else{
               if(isset($_SESSION['product_checkout']) && isset($_SESSION['giohang']) && count($_SESSION['product_checkout'])>0){
                  unset($_SESSION['giohang']);
                  $_SESSION['giohang']=[];
                  $_SESSION['giohang']=$_SESSION['product_checkout'];
                  unset($_SESSION['product_checkout']);
               }else{
                  if(isset($_SESSION['product_checkout']) && isset($_SESSION['giohang']) && count($_SESSION['product_checkout'])==0){
                     unset($_SESSION['giohang']);
                     unset($_SESSION['product_checkout']);
                  }
               }
            }
            if(!isset($_SESSION['giohang'])){
               $_SESSION['giohang']=[];
            }
            if(isset($_POST['addtocart'])){
               $id=$_POST['id'];
               $color=$_POST['color'];
               $size=$_POST['size'];
               $img=$_POST['img'];
               $name=$_POST['name'];
               $price=$_POST['price'];
               $soluong=$_POST['soluong'];
               $sp=["id"=>$id,"img"=>$img ,"name"=>$name ,"price"=>$price ,"color"=>$color,"size"=>$size,"soluong"=>$soluong, "product_design"=>0,"id_product_design"=>1];
               $i=0;
               $kt=true;
               foreach ($_SESSION['giohang'] as $item) {
                  if($sp['id']==$item['id'] && $sp['img']==$item['img'] && $sp['name']==$item['name'] && $sp['price']==$item['price'] && $sp['color']==$item['color'] && $sp['size']==$item['size']){
                     $_SESSION['giohang'][$i]['soluong']+=$sp['soluong'];
                     $kt=false;
                     break;
                  }
                  $i++;
               }
               if($kt==true)
               $_SESSION['giohang'][]=$sp;
               header('location: index.php?pg=cart');
            }
            break;
         case 'checkout':
            if(!isset($_SESSION['name'])){
               $_SESSION['namenhan']='';
               $_SESSION['emailnhan']='';
               $_SESSION['sdtnhan']='';
               $_SESSION['diachinhan']='';
               $_SESSION['name']='';
               $_SESSION['email']='';
               $_SESSION['sdt']='';
               $_SESSION['diachi']='';
            }
            if(isset($_POST['btndetailcheckout'])){
               $id=$_POST['id_checkout'];
               $soluong=$_POST['soluong_checkout'];
               if(!isset($_SESSION['giohang'])){
                  $_SESSION['giohang']=[];
               }
               $_SESSION['product_checkout']=[];
               $_SESSION['product_checkout']=$_SESSION['giohang'];
               unset($_SESSION['giohang']);
               $spdetail=getproductdetail($id);
               
               $sp=["id"=>$id,"img"=> getlistimgcolor($id)[0]['main_img'],"name"=>$spdetail['name'] ,"price"=>$spdetail['price'] ,"color"=>getcolor(getlistimgcolor($id)[0]['id_color']),"size"=>getlistsize()[0]['ma_size'],"soluong"=>$soluong,"product_design"=>0,"id_product_design"=>1];
               $_SESSION['giohang'][]=$sp;
            }
            if(isset($_GET['id']) && $_GET['id']){
               if(!isset($_SESSION['giohang'])){
                  $_SESSION['giohang']=[];
               }
               $id=$_GET['id'];
               $_SESSION['product_checkout']=[];
               $_SESSION['product_checkout']=$_SESSION['giohang'];
               unset($_SESSION['giohang']);
               $spdetail=getproductdetail($id);
               
               $sp=["id"=>$id,"img"=> getlistimgcolor($id)[0]['main_img'],"name"=>$spdetail['name'] ,"price"=>$spdetail['price'] ,"color"=>getcolor(getlistimgcolor($id)[0]['id_color']),"size"=>getlistsize()[0]['ma_size'],"soluong"=>1,"product_design"=>0,"id_product_design"=>1];
               $_SESSION['giohang'][]=$sp;
            }
            if(!isset($_SESSION['giamgia'])){
               $_SESSION['giamgia']=0;
            }
            $errvoucher='';
            $errname='';
            $erremail='';
            $errsdt='';
            $errdiachi='';
            $errnamenhan='';
            $erremailnhan='';
            $errsdtnhan='';
            $errdiachinhan='';
            if(!isset($_SESSION['magiamgia'])){
               $_SESSION['magiamgia']='';
            }
            if(isset($_POST['btngiamgia'])){
               $_SESSION['magiamgia']=$_POST['magiamgia'];
               $_SESSION['btngiamgia']=1;
               
               $_SESSION['name']=$_POST['tendat'];
               $_SESSION['email']=$_POST['emaildat'];
               $_SESSION['sdt']=$_POST['sdtdat'];
               $_SESSION['diachi']=$_POST['diachidat'];
               $_SESSION['phuongthuc']=$_POST['phuongthuc'];
                  $_SESSION['namenhan']=$_POST['tennhan'];
                  $_SESSION['emailnhan']=$_POST['emailnhan'];
                  $_SESSION['sdtnhan']=$_POST['sdtnhan'];
                  $_SESSION['diachinhan']=$_POST['diachinhan'];
               if(isset($_POST['tocdo']) && $_POST['tocdo']){
                  $_SESSION['giaohangnhanh']=1;
               }else{
                  $_SESSION['giaohangnhanh']=0;
               }
               if($_POST['magiamgia']==''){
                  $errvoucher="*Bạn chưa nhập mã giảm giá";
               }else{
                  if(!is_array(getvoucher($_POST['magiamgia']))){
                     $errvoucher="*Mã giảm giá này không tồn tại";
                  }else{
                     if(isset($_SESSION['iduser']) && is_array(getdadung_voucher(getvoucher($_POST['magiamgia'])['id'], $_SESSION['iduser']))){
                        $errvoucher="*Mã giảm giá này chỉ được sử dụng 1 lần";
                     }else{
                        if(getvoucher($_POST['magiamgia'])['ngaybatdau']>date('Y-m-d')){
                           $errvoucher="*Mã giảm giá này sẽ bắt đầu vào ngày ".getvoucher($_POST['magiamgia'])['ngaybatdau'];
                        }else{
                           if(getvoucher($_POST['magiamgia'])['ngayketthuc']<date('Y-m-d')){
                              $errvoucher="*Mã giảm giá này đã kết thúc vào ngày ".getvoucher($_POST['magiamgia'])['ngayketthuc'];
                           }else{
                              if(isset($_SESSION['giohang']) && count($_SESSION['giohang'])>0){
                                 $tongtien=0;
                                 foreach ($_SESSION['giohang'] as $item) {
                                    extract($item);
                                    $tongtien+=$soluong*$price;
                                 }
                              }
                              if($tongtien<getvoucher($_POST['magiamgia'])['dieukien']){
                                 $errvoucher="*Mã giảm giá chỉ áp dụng với đơn hàng có giá trị trên ".getvoucher($_POST['magiamgia'])['dieukien'];
                              }
                           }
                        }
                     }
                  }
               }
               if(is_array(getvoucher($_POST['magiamgia']))){
                  if(isset($_SESSION['iduser']) && is_array(getdadung_voucher(getvoucher($_POST['magiamgia'])['id'], $_SESSION['iduser']))){
                    
                  }else{
                     if($errvoucher==''){
                        $_SESSION['giamgia']=getvoucher($_POST['magiamgia'])['giamgia'];
                        $_SESSION['id_voucher']=getvoucher($_POST['magiamgia'])['id'];
                     }
                  }
               }
            }else{
               if(!isset($_SESSION['id_voucher'])){
                  $_SESSION['id_voucher']=1;
               }
               
            }
            
            if(isset($_SESSION['loginuser']) && $_SESSION['loginuser']==0 && isset($_SESSION['role']) && $_SESSION['role']==0){
               if(isset($_SESSION['iduser'])){
                  $user=getuser($_SESSION['iduser']);
               }
               if(isset($_POST['thanhtoan'])){
                  if(isset($_SESSION['giohang']) && isset($_SESSION['iduser']) && count($_SESSION['giohang'])>0){
                     $tongtien=0;
                     foreach ($_SESSION['giohang'] as $item) {
                        extract($item);
                        $tongtien+=$soluong*$price;
                     }
                  }
                  $tendat=$_POST['tendat'];
                  $_SESSION['name']=$_POST['tendat'];
                  $emaildat=$_POST['emaildat'];
                  $_SESSION['email']=$_POST['emaildat'];
                  $sdtdat=$_POST['sdtdat'];
                  $_SESSION['sdt']=$_POST['sdtdat'];
                  $diachidat=$_POST['diachidat'];
                  $_SESSION['diachi']=$_POST['diachidat'];
                  if($tendat==''){
                     $errname='*Bạn chưa nhập tên người đặt hàng';
                  }
                  if($emaildat==''){
                     $erremail="*Bạn chưa nhập email người đặt hàng";
                  }else{
                     if (!filter_var($emaildat, FILTER_VALIDATE_EMAIL)){
                        $erremail="*Địa chỉ email không hợp lệ";
                     }
                  }
                  
                 
            
                 
                  if($sdtdat==''){
                     $errsdt="*Bạn chưa nhập số điện thoại người đặt hàng";
                  }else{
                     if (isValidPhoneNumber($sdtdat)) {

                    } else {
                        $errsdt= "*Số điện thoại không hợp lệ";
                    }
                  }
                  if($diachidat==''){
                     $errdiachi="*Bạn chưa nhập địa chỉ người đặt hàng";
                  }
                  $phuongthuc=$_POST['phuongthuc'];
                  $_SESSION['phuongthuc']=$_POST['phuongthuc'];
                  if(isset($_POST['tocdo']) && $_POST['tocdo']){
                     $_SESSION['giaohangnhanh']=1;
                  }else{
                     $_SESSION['giaohangnhanh']=0;
                  }
                  $date = date('Y-m-d');
                  $_SESSION['ngaylap']=$date;
                  if(isset($_POST['tocdo']) && $_POST['tocdo']){
                     $giaohangnhanh=1;
                  }else{
                     $giaohangnhanh=0;
                  }
                  if(isset($_SESSION['giamgia']) && $_SESSION['giamgia']>0){
                  
                     add_dadung_voucher($_SESSION['id_voucher'],$_SESSION['iduser']);
                  }else{
                     $_SESSION['id_voucher']=1;
                  }
                  if((isset($_POST['emailnhan']) && $_POST['emailnhan']!='') || $_SESSION['namenhan']!=''  || $_SESSION['emailnhan']!=''  || $_SESSION['sdtnhan']!=''  || $_SESSION['diachinhan']!='' || (isset($_POST['tennhan']) && $_POST['tennhan']!='') || (isset($_POST['sdtnhan']) && $_POST['sdtnhan']!='') || (isset($_POST['diachinhan']) && $_POST['diachinhan']!='')){
                     $tennhan=$_POST['tennhan'];
                     $emailnhan=$_POST['emailnhan'];
                     $sdtnhan=$_POST['sdtnhan'];
                     $diachinhan=$_POST['diachinhan'];
                     $_SESSION['namenhan']=$_POST['tennhan'];
                     $_SESSION['emailnhan']=$_POST['emailnhan'];
                     $_SESSION['sdtnhan']=$_POST['sdtnhan'];
                     $_SESSION['diachinhan']=$_POST['diachinhan'];
                     if($tennhan==''){
                        $errnamenhan='*Bạn chưa nhập tên người nhận hàng';
                     }
                     if($emailnhan==''){
                        $erremailnhan="*Bạn chưa nhập email người nhận hàng";
                     }else{
                        if (!filter_var($emailnhan, FILTER_VALIDATE_EMAIL)){
                           $erremailnhan="*Địa chỉ email không hợp lệ";
                        }
                     }
                     
                    
               
                    
                     if($sdtnhan==''){
                        $errsdtnhan="*Bạn chưa nhập số điện thoại người đặt hàng";
                     }else{
                        if (isValidPhoneNumber($sdtnhan)) {
   
                       } else {
                           $errsdtnhan= "*Số điện thoại không hợp lệ";
                       }
                     }
                     if($diachinhan==''){
                        $errdiachinhan="*Bạn chưa nhập địa chỉ người nhận hàng";
                     }
                     
                     if($errnamenhan=='' && $erremailnhan=='' && $errdiachinhan=='' && $errsdtnhan==''){
                        creatdonhang(getidusercu($_SESSION['username'],$_SESSION['password']), createma_donhang(),$date,'Chưa thanh toán',($tongtien*(100-$_SESSION['giamgia'])/100),$tendat,$tennhan,$emaildat,$emailnhan,$sdtdat,$sdtnhan,$diachidat,$diachinhan,$phuongthuc,$giaohangnhanh,$_SESSION['id_voucher']);
                     }
                  }else{
                     if($errname=='' && $erremail=='' && $errdiachi=='' && $errsdt==''){
                        
                        creatdonhang(getidusercu($_SESSION['username'],$_SESSION['password']), createma_donhang(),$date,'Chưa thanh toán',($tongtien*(100-$_SESSION['giamgia'])/100),$tendat,'',$emaildat,'',$sdtdat,'',$diachidat,'',$phuongthuc,$giaohangnhanh,$_SESSION['id_voucher']);
                     }
                  }
                  if($errname=='' && $erremail=='' && $errdiachi=='' && $errsdt=='' && $errnamenhan=='' && $erremailnhan=='' && $errdiachinhan=='' && $errsdtnhan==''){
                     if(isset($_SESSION['iduser']) && $_SESSION['iduser']){
                        $cart=getcartuser($_SESSION['iduser']);
                        foreach ($cart as $item) {
                           extract($item);
                           del_cart($id);
                     }
                     }
                     $idusercu=getidusercu($_SESSION['username'],$_SESSION['password']);
                     $user=getuser($idusercu);
                     if(isset($_SESSION['giohang']) && isset($_SESSION['iduser']) && count($_SESSION['giohang'])>0){
                        $tongtien=0;
                        $_SESSION['id_cart']=[];
                        foreach ($_SESSION['giohang'] as $item) {
                           extract($item);
                           $tongtien+=$soluong*$price;
                           $id=intval($id);
                           if($product_design==0){
                              add_cart($_SESSION['iduser'], 1, $id, $soluong, $price,$soluong*$price,$img,getidsize($size),getidcolor($color),0,1);
                           }else{
                              add_cart($_SESSION['iduser'], 1, 1, $soluong, $price,$soluong*$price,$img,getidsize($size),getidcolor($color),1,$id_product_design);
                           }
                           array_push($_SESSION['id_cart'],getidcartmoi());
                        }
                     }
                     if(isset($_SESSION['giamgia']) && $_SESSION['giamgia']>0){
                        unset($_SESSION['id_voucher']);
                     }
                     $iddonhang=getiddonhang();
                     if(isset($_SESSION['id_cart']) && isset($_SESSION['iduser']) && count($_SESSION['id_cart'])>0){
                        foreach ($_SESSION['id_cart'] as $item) {
                           update_cart_ma_donhang($item,$iddonhang);
                           extract(getcartthanhtoan($item));
                           if($product_design==0){
                              $soluongkho=getsoluongtonkhothat($id_product,$id_color,$id_size);
                              update_soluongtonkho($id_product,$id_color,$id_size,$soluongkho-$soluong);
                           }
                           
                        }
                        
                     }
                     $_SESSION['donhang']=getdonhangtoid($iddonhang);
                     $_SESSION['mail']=1;
                  }
                  
                  // unset($_SESSION['giohang']);
                  // header('location: index.php?pg=account');
               }
               

            }else{
               if(isset($_POST['thanhtoan']) && isset($_SESSION['giohang']) && count($_SESSION['giohang'])>0){          
                  $tongtien=0;
                  if(isset($_SESSION['giohang'])){
                     foreach ($_SESSION['giohang'] as $item) {
                        extract($item);
                        $tongtien+=$soluong*$price;
                     }
                  }
                  $tendat=$_POST['tendat'];
                  $_SESSION['name']=$_POST['tendat'];
                  $emaildat=$_POST['emaildat'];
                  $_SESSION['email']=$_POST['emaildat'];
                  
                  $sdtdat=$_POST['sdtdat'];
                  $_SESSION['sdt']=$_POST['sdtdat'];
                  $diachidat=$_POST['diachidat'];
                  $_SESSION['diachi']=$_POST['diachidat'];
                  $phuongthuc=$_POST['phuongthuc'];
                  $date = date('Y-m-d');
                  $_SESSION['ngaylap']=$date;
                  if(isset($_POST['tocdo']) && $_POST['tocdo']){
                     $giaohangnhanh=1;
                  }else{
                     $giaohangnhanh=0;
                  }
                  $_SESSION['phuongthuc']=$_POST['phuongthuc'];
                  if(isset($_POST['tocdo']) && $_POST['tocdo']){
                     $_SESSION['giaohangnhanh']=1;
                  }else{
                     $_SESSION['giaohangnhanh']=0;
                  }
                  if($tendat==''){
                     $errname='*Bạn chưa nhập tên người đặt hàng';
                  }
                  if($emaildat==''){
                     $erremail="*Bạn chưa nhập email người đặt hàng";
                  }else{
                     if (!filter_var($emaildat, FILTER_VALIDATE_EMAIL)){
                        $erremail="*Địa chỉ email không hợp lệ";
                     }else{
                        $kt=0;
                        $tableuser=getusertable();
                        
                        foreach ($tableuser as $item) {
                           if($item['email']==$_SESSION['email']){
                              $kt=1;
                              break;
                           }
                        }
                        if($kt==1){
                           $erremail='*Email đã tồn tại';
                        }
                     }
                  }
                  
                  if($sdtdat==''){
                     $errsdt="*Bạn chưa nhập số điện thoại người đặt hàng";
                  }else{
                     if (isValidPhoneNumber($sdtdat)) {

                    } else {
                        $errsdt= "*Số điện thoại không hợp lệ";
                    }
                  }
                  if($diachidat==''){
                     $errdiachi="*Bạn chưa nhập địa chỉ người đặt hàng";
                  }
                  
                  if((isset($_POST['emailnhan']) && $_POST['emailnhan']!='') || $_SESSION['namenhan']!=''  || $_SESSION['emailnhan']!=''  || $_SESSION['sdtnhan']!=''  || $_SESSION['diachinhan']!='' || (isset($_POST['tennhan']) && $_POST['tennhan']!='') || (isset($_POST['sdtnhan']) && $_POST['sdtnhan']!='') || (isset($_POST['diachinhan']) && $_POST['diachinhan']!='')){
                     $tennhan=$_POST['tennhan'];
                     $emailnhan=$_POST['emailnhan'];
                     $sdtnhan=$_POST['sdtnhan'];
                     $diachinhan=$_POST['diachinhan'];
                     $_SESSION['namenhan']=$_POST['tennhan'];
                     $_SESSION['emailnhan']=$_POST['emailnhan'];
                     $_SESSION['sdtnhan']=$_POST['sdtnhan'];
                     $_SESSION['diachinhan']=$_POST['diachinhan'];
                     if($tennhan==''){
                        $errnamenhan='*Bạn chưa nhập tên người nhận hàng';
                     }
                     if($emailnhan==''){
                        $erremailnhan="*Bạn chưa nhập email người nhận hàng";
                     }else{
                        if (!filter_var($emailnhan, FILTER_VALIDATE_EMAIL)){
                           $erremailnhan="*Địa chỉ email không hợp lệ";
                        }
                     }
                     
                    
               
                    
                     if($sdtnhan==''){
                        $errsdtnhan="*Bạn chưa nhập số điện thoại người đặt hàng";
                     }else{
                        if (isValidPhoneNumber($sdtnhan)) {
   
                       } else {
                           $errsdtnhan= "*Số điện thoại không hợp lệ";
                       }
                     }
                     if($diachinhan==''){
                        $errdiachinhan="*Bạn chưa nhập địa chỉ người nhận hàng";
                     }
                     
                     if($errnamenhan=='' && $erremailnhan=='' && $errdiachinhan=='' && $errsdtnhan==''){
                        $_SESSION['username']=creatusername($emaildat);
                        $_SESSION['password']=creatpass();
                        creatuser($_SESSION['username'],$_SESSION['password'], $tendat,$emaildat,$sdtdat,0,'',$diachidat,0,'',1);
                        $_SESSION['iduser']=getidusercu($_SESSION['username'],$_SESSION['password']);
                        $_SESSION['loginuser']=0;
                        $_SESSION['role']=getrole($_SESSION['username'],$_SESSION['password']);
                        $tongtien=0;
                        foreach ($_SESSION['giohang'] as $item) {
                           extract($item);
                           $tongtien+=$soluong*$price;
                        }
                     
                        if(isset($_SESSION['giamgia']) && $_SESSION['giamgia']>0){
                           add_dadung_voucher($_SESSION['id_voucher'],$_SESSION['iduser']);
                        }else{
                           $_SESSION['id_voucher']=1;
                        }
                        creatdonhang(getidusercu($_SESSION['username'],$_SESSION['password']), createma_donhang(),$date,'Chưa thanh toán',($tongtien*(100-$_SESSION['giamgia'])/100),$tendat,$tennhan,$emaildat,$emailnhan,$sdtdat,$sdtnhan,$diachidat,$diachinhan,$phuongthuc,$giaohangnhanh,$_SESSION['id_voucher']);
                     }
                  }else{
                     if($errname=='' && $erremail=='' && $errdiachi=='' && $errsdt==''){
                        $_SESSION['username']=creatusername($emaildat);
                        $_SESSION['password']=creatpass();
                        creatuser($_SESSION['username'],$_SESSION['password'], $tendat,$emaildat,$sdtdat,0,'',$diachidat,0,'',1);
                        $_SESSION['iduser']=getidusercu($_SESSION['username'],$_SESSION['password']);
                        $_SESSION['loginuser']=0;
                        $_SESSION['role']=getrole($_SESSION['username'],$_SESSION['password']);
                        $tongtien=0;
                        foreach ($_SESSION['giohang'] as $item) {
                           extract($item);
                           $tongtien+=$soluong*$price;
                        }
                     
                        if(isset($_SESSION['giamgia']) && $_SESSION['giamgia']>0){
                           add_dadung_voucher($_SESSION['id_voucher'],$_SESSION['iduser']);
                        }else{
                           $_SESSION['id_voucher']=1;
                        }
                        creatdonhang(getidusercu($_SESSION['username'],$_SESSION['password']), createma_donhang(),$date,'Chưa thanh toán',($tongtien*(100-$_SESSION['giamgia'])/100),$tendat,'',$emaildat,'',$sdtdat,'',$diachidat,'',$phuongthuc,$giaohangnhanh,$_SESSION['id_voucher']);
                     }
                  }
                  
                  
                  if(($errnamenhan=='' && $erremailnhan=='' && $errdiachinhan=='' && $errsdtnhan=='' && $errname=='' && $erremail=='' && $errdiachi=='' && $errsdt=='')){
                  
                     $iddonhang=getiddonhang();
                     $tongtien=0;
                     foreach ($_SESSION['giohang'] as $item) {
                        extract($item);
                        $tongtien+=$soluong*$price;
                        $id=intval($id);
                        if($product_design==0){
                           add_cart($_SESSION['iduser'], $iddonhang, $id, $soluong, $price,$soluong*$price,$img,getidsize($size),getidcolor($color),0,1);
                           $id_color=getidcolor($color);
                           $id_size=getidsize($size);
                           $soluongkho=getsoluongtonkhothat($id,$id_color,$id_size);
                           update_soluongtonkho($id,$id_color,$id_size,$soluongkho-$soluong);
                        }else{
                           add_cart($_SESSION['iduser'], $iddonhang, 1, $soluong, $price,$soluong*$price,$img,getidsize($size),getidcolor($color),1,$id_product_design);
                        }
                     }
                     if(isset($_SESSION['giamgia']) && $_SESSION['giamgia']>0){
                        unset($_SESSION['id_voucher']);
                     }
                     
                     $_SESSION['mail']=1;
                     
                  // unset($_SESSION['giohang']);
                  // header('location: index.php?pg=account');
                  }
            
               }

            }
            include_once "view/checkout.php";
            break;
         case 'login':
            if(!isset($_SESSION['usernamelogin']) || !isset($_SESSION['passwordlogin'])){
               $_SESSION['usernamelogin']='';
               $_SESSION['passwordlogin']='';
            }
            $errpassword='';
            $errusername='';
            if(isset($_POST['login'])){
               $_SESSION['usernamelogin']=$_POST['username'];
               $_SESSION['passwordlogin']=$_POST['password'];
               if($_POST['username']==''){
                  $errusername='*Bạn chưa nhập tên đăng nhập';
               }else{
                  $kt=0;
                  $tableuser=getusertable();
                  foreach ($tableuser as $item) {
                     if($item['user']==$_POST['username']){
                        $kt=1;
                        break;
                     }
                  }
                  if($kt==0){
                     $errusername='*Tên đăng nhập không tồn tại';
                  }
               }
               if($_POST['password']==''){
                  $errpassword='*Bạn chưa nhập mật khẩu';
               }else{
                  if(strlen($_POST['password'])<6){
                     $errpassword='*Mật khẩu phải có ít nhất 6 ký tự';
                  }else{
                     if(is_array(getlogin($_SESSION['usernamelogin'],$_SESSION['passwordlogin'])) && getrole($_SESSION['usernamelogin'],$_SESSION['passwordlogin'])==0){
   
                     }else{
                        $errpassword='*Mật khẩu không đúng';
                     }
                  }
               }
               
               $username=$_POST['username'];
               $password=$_POST['password'];
               if(is_array(getlogin($username,$password)) && getrole($username,$password)==0){
                  unset($_SESSION['usernamelogin']);
                  unset($_SESSION['passwordlogin']);
                  $_SESSION['username']=$username;
                  $_SESSION['password']=$password;
                  $_SESSION['iduser']=getlogin($username,$password)['id'];
                  $_SESSION['loginuser']=0;
                  $_SESSION['role']=0;
                  $cart=getcartuser($_SESSION['iduser']);
                  foreach ($cart as $item) {
                     extract($item);
                     if($product_design==0){
                        $name=getproductdetail($id_product)['name'];
                        $color=getcolor($id_color);
                        $size=getsize($id_size);
                        $sp=["id"=>$id_product,"img"=>$img ,"name"=>$name ,"price"=>$price ,"color"=>$color,"size"=>$size,"soluong"=>$soluong,"product_design"=>$product_design,"id_product_design"=>$id_product_design];
                     }else{
                        $name=getproductdesigndetail($id_product_design)['name'];
                        $color=getcolor($id_color);
                        $size=getsize($id_size);
                        $sp=["id"=>$id_product,"img"=>$img ,"name"=>$name ,"price"=>$price ,"color"=>$color,"size"=>$size,"soluong"=>$soluong,"product_design"=>$product_design,"id_product_design"=>$id_product_design];

                     }
                     $_SESSION['giohang'][]=$sp;
                  }
                  unset($_SESSION['id_voucher']);
                     unset($_SESSION['giamgia']);
                  header('location: index.php?pg=account');
               }else{
                  
                  if(getrole($username,$password)==1){
                     $_SESSION['role']=1;
                     $_SESSION['loginuser']=0;
                     header('location: view/admin/index.php');
                  }else{
                     $_SESSION['loginuser']=-1;
                  }
                  
               }
            }
            include_once "view/login.php";
            break;
         case 'register':
            if(!isset($_SESSION['usernamesignup']) || !isset($_SESSION['passwordsignup'])){
               $_SESSION['usernamesignup']='';
               $_SESSION['passwordsignup']='';
               $_SESSION['emailsignup']='';
               $_SESSION['repasswordsignup']='';
            }
            $errpassword='';
            $errusername='';
            $erremail='';
            $errrepassword='';
            if(isset($_POST['btn_register'])){
               $_SESSION['usernamesignup']=$_POST['user'];
               $_SESSION['passwordsignup']=$_POST['pass'];
               $_SESSION['emailsignup']=$_POST['email'];
               $_SESSION['repasswordsignup']=$_POST['repass'];
               if($_POST['user']==''){
                  $errusername='*Bạn chưa nhập tên đăng nhập';
               }else{
                  $kt=0;
                  $tableuser=getusertable();
                  foreach ($tableuser as $item) {
                     if($item['user']==$_POST['user']){
                        $kt=1;
                        break;
                     }
                  }
                  if($kt==1){
                     $errusername='*Tên đăng nhập đã tồn tại';
                  }
               }
               if($_POST['pass']==''){
                  $errpassword='*Bạn chưa nhập mật khẩu';
               }else{
                  if(strlen($_POST['pass'])<6){
                     $errpassword='*Mật khẩu phải có ít nhất 6 ký tự';
                  }
               }
               if($_POST['repass']==''){
                  $errrepassword='*Bạn chưa nhập lại mật khẩu';
               }else{
                  if($_POST['repass'] != $_POST['pass']){
                     $errrepassword='*Mật khẩu không khớp';
                  }
               }
               if($_POST['email']==''){
                  $erremail="*Bạn chưa nhập email";
               }else{
                  if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
                     $erremail="*Địa chỉ email không hợp lệ";
                  }
               }
               $user=$_POST['user'];
               $email=$_POST['email'];
               $pass=$_POST['pass'];
               $repass=$_POST['repass'];
               if($erremail=='' && $errpassword=='' && $errusername=='' && $errrepassword==''){
                  unset($_SESSION['usernamesignup']);
                  unset($_SESSION['passwordsignup']);
                  unset($_SESSION['emailsignup']);
                  unset($_SESSION['repasswordsignup']);
                  creatuser($user,$pass, '',$email,'','','','',0,'',1);
                  header('location: index.php?pg=login');
               }
            }
            include_once "view/register.php";
            break;
         case 'forgetpass':
            $_SESSION['errcode']='';
            $_SESSION['errpassnew']='';
            $_SESSION['errrepassnew']='';
            if(!isset($_SESSION['usertable'])){
               $_SESSION['usertable']=getusertable();
            }
            if(!isset($_SESSION['code'])){
               $_SESSION['code']='';
            }
            if(!isset($_SESSION['emailxn'])){
               $_SESSION['emailxn']='';
            }
            if(!isset($_SESSION['erremailxn'])){
               $_SESSION['erremailxn']='';
            }
            if(!isset($_SESSION['passnew'])){
               $_SESSION['passnew']='';
            }
            if(!isset($_SESSION['repassnew'])){
               $_SESSION['repassnew']='';
            }
            if(!isset($_SESSION['codedung'])){
               $_SESSION['codedung']=$_SESSION['code'];
               $_SESSION['code']='';
            }

            if(isset($_POST['nhapcode'])){
               $_SESSION['code']=$_POST['codexn'];
               if($_SESSION['code']==''){
                  $_SESSION['errcode']='*Bạn chưa nhập mã xác nhận email';
               }else{
                  if($_SESSION['code']!=$_SESSION['codedung']){
                     $_SESSION['errcode']='*Mã xác nhận email không đúng';
                  }else{
                     unset($_SESSION['code']);
                     unset($_SESSION['codedung']);
                     $_SESSION['xacnhanemail']=1;
                  }
               }
            }
            if(isset($_POST['nhappass'])){
               $_SESSION['passnew']=$_POST['pass'];
               if($_SESSION['passnew']==''){
                  $_SESSION['errpassnew']='*Bạn chưa nhập mặt khẩu mới';
               }else{
                  if(strlen($_SESSION['passnew'])<6){
                     $_SESSION['errpassnew']='*Mật khẩu phải có ít nhất 6 ký tự';
                  }
               }
               $_SESSION['repassnew']=$_POST['repass'];
               if($_SESSION['repassnew']==''){
                  $_SESSION['errrepassnew']='*Bạn chưa nhập lại mặt khẩu';
               }else{
                  if(strlen($_SESSION['repassnew'])<6){
                     $_SESSION['errrepassnew']='*Mật khẩu phải có ít nhất 6 ký tự';
                  }else{
                     if($_SESSION['repassnew']!=$_SESSION['passnew']){
                        $_SESSION['errrepassnew']='*Mật khẩu không khớp';
                     }else{
                        changepassword($_SESSION['emailxn'], $_SESSION['passnew']);
                        unset($_SESSION['xacnhanemail']);
                     }
                  }
               }
            }
            if($_SESSION['errcode']=='' && $_SESSION['errpassnew']=='' && $_SESSION['errrepassnew']=='' && isset($_SESSION['repassnew']) && $_SESSION['repassnew']){
               unset($_SESSION['passnew']);
               unset($_SESSION['emailxn']);
               unset($_SESSION['repassnew']);
               header('location: index.php?pg=login');
            }
            include_once "view/forgetpass.php";
            break;
         case 'comment':
            $_SESSION['err_comment']=0;
            if(isset($_POST['send'])){
               $id_product=$_POST['id_product'];

               if(isset($_SESSION['loginuser']) && isset($_SESSION['role']) && $_SESSION['role']==0){
                  if(is_array(getdonhang($_SESSION['iduser'])) && count(getdonhang($_SESSION['iduser']))>0){
                     $rate=$_POST['rate'];
                     $comment=$_POST['comment'];                
                     add_comment($id_product, $_SESSION['iduser'], $comment, $rate);
                     $_SESSION['err_comment']=0;
                  }else{
                     $_SESSION['err_comment']=2;
                  }             
               }else{
                  $_SESSION['err_comment']=1;
               }
               header('location: index.php?pg=detail&id='.$id_product);
            }
            break;
         case 'about':
            include_once "view/about.php";
            break;
         case 'contact':
            include_once "view/contact.php";
            break;
         case 'news':
            include_once "view/news.php";
            break;
         case 'account':
            $erruser='';
            $erremail='';

            if(isset($_SESSION['loginuser']) && isset($_SESSION['role']) && $_SESSION['loginuser']==0 && $_SESSION['role']==0){
               if(isset($_POST['update_account'])){
                  $name=$_POST['name'];
                  $user=$_POST['user'];
                  $email=$_POST['email'];
                  $pass=$_POST['pass'];
                  $sdt=$_POST['sdt'];
                  $ngaysinh=$_POST['ngaysinh'];
                  $diachi=$_POST['diachi'];
                  $img=$_FILES['img']['name'];
                  $tableuser=getusertable();
                  if($user==''){
                     $erruser="*Tên đăng nhập không được để trống";
                  }else{
                     $kt=0;
                     foreach ($tableuser as $item) {
                        if($item['user']==$user && $user!=$_SESSION['username']){
                           $kt=1;
                           break;
                        }
                     }
                     if($kt==1){
                        $erruser="*Tên đăng nhập này đã tồn tại";
                     }
                  }
                  if($email==''){
                     $erremail="*Email không được để trống";
                  }else{
                     if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
                        $erremail="*Email không hợp lệ";
                     }else{
                        $kt=0;
                        foreach ($tableuser as $item) {
                           if($item['email']==$email && $email!=getlogin($_SESSION['username'], $_SESSION['password'])['email']){
                              $kt=1;
                              break;
                           }
                        }
                        if($kt==1){
                           $erremail="*Email này đã tồn tại";
                        }
                     }
                  }
                  
                  
                  if($erremail=='' && $erruser==''){
                     if($img!=''){
                        $target_file = PATH_IMG . basename($img);
                        move_uploaded_file($_FILES['img']["tmp_name"], $target_file);
                        if($_POST['hinhcu']!=''){
                           $hinhcu=PATH_IMG.$_POST['hinhcu'];
                           delimghost($hinhcu);
                        }
                        update_user($_SESSION['iduser'],$user,$pass, $name,$email,$sdt,0,$ngaysinh,$diachi,0,$img,1);
                     }else{
                        update_user($_SESSION['iduser'],$user,$pass, $name,$email,$sdt,0,$ngaysinh,$diachi,0,$_POST['hinhcu'],1);
   
                     }
                  }
                  
               }
               if(isset($_POST['del_account'])){
                  deluser($_SESSION['iduser']);
                  if($_POST['hinhcu']!=''){
                     $hinhcu=PATH_IMG.$_POST['hinhcu'];
                     delimghost($hinhcu);
                  }
               }
               if(isset($_GET['id']) && $_GET['id']){
                  deldonhang($_GET['id']);
               }
               $idusercu=getidusercu($_SESSION['username'],$_SESSION['password']);
               $donhang=getdonhang($idusercu);
               $user=getuser($_SESSION['iduser']);
               $listdonhang=getdonhang($_SESSION['iduser']);
               extract($user);
               
               include_once "view/account.php";
            }else{
               include_once "view/login.php";
            }
            
            break;
         
         case 'logoutuser':

            
            $cart=getcartuser($_SESSION['iduser']);
            foreach ($cart as $item) {
               extract($item);
               if($product_design==0){
                  $soluongkho=getsoluongtonkhothat($id_product,$id_color,$id_size);
                  update_soluongtonkho($id_product,$id_color,$id_size,$soluongkho+$soluong);
               }
               
               del_cart($id);
            }
            if(isset($_SESSION['giohang']) && isset($_SESSION['iduser']) && count($_SESSION['giohang'])>0){
               foreach ($_SESSION['giohang'] as $item) {
                  extract($item);
                  $id=intval($id);
                  if($product_design==0){
                     add_cart($_SESSION['iduser'], 1, $id, $soluong, $price,$soluong*$price,$img,getidsize($size),getidcolor($color),0,1);
                     $id_color=getidcolor($color);
                     $id_size=getidsize($size);
                     $soluongkho=getsoluongtonkhothat($id,$id_color,$id_size);
                     update_soluongtonkho($id,$id_color,$id_size,$soluongkho-$soluong);
                  }else{
                     add_cart($_SESSION['iduser'], 1, 1, $soluong, $price,$soluong*$price,$img,getidsize($size),getidcolor($color),1,$id_product_design);
                  }
               }
            }
            unset($_SESSION['btngiamgia']);
            unset($_SESSION['name']);
            unset($_SESSION['email']);
            unset($_SESSION['sdt']);
            unset($_SESSION['diachi']);
            unset($_SESSION['namenhan']);
            unset($_SESSION['emailnhan']);
            unset($_SESSION['sdtnhan']);
            unset($_SESSION['diachinhan']);
            unset($_SESSION['phuongthuc']);
            unset($_SESSION['giaohangnhanh']);
            
            unset($_SESSION['giohang']);
            if(isset($_SESSION['loginuser'])){
               unset($_SESSION['loginuser']);
               unset($_SESSION['role']);
               unset($_SESSION['iduser']);
            }
            if(isset($_SESSION['giamgia']) && $_SESSION['giamgia']){
               unset($_SESSION['id_voucher']);
               unset($_SESSION['giamgia']);
            }
            header('location: index.php');
            break;
         default:
            $new_home=getnew_home();
            $product_noibat=getproduct_noibat(4);
            $product_hot=getproduct_hot(2);
            $product_topview=getproduct_topview(3);
            $product_trend=getproduct_trend(3);
            $product_bestsell=getproduct_bestsell(3);
            $catalog_home=getcatalog_home();
            include_once "view/home.php";
            break;
      }
   }else{
         $new_home=getnew_home();
        $product_noibat=getproduct_noibat(4);
        $product_hot=getproduct_hot(2);
        $product_topview=getproduct_topview(3);
        $product_trend=getproduct_trend(3);
        $product_bestsell=getproduct_bestsell(3);
        $catalog_home=getcatalog_home();
        include_once "view/home.php";
      
   }

    include_once "view/footer.php";
?>