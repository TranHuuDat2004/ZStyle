<?php
   function sale($item){
      if($item['priceold']>0){
         return '<span class="product-price-old">'.number_format($item['priceold'],0,'',',').'đ</span>';
      }else{
         return '';
      }
   }

   function showproduct($product){
         extract($product);
         $img=getimg_product_main($id)['main_img'];
            $linkdetail='index.php?pg=detail&id='.$id;
            $strproduct='';
            $strproduct='<div class="product-item">
                              <div class="product-images">
                              <a href="'.$linkdetail.'">
                                 '.check_img($img).'
                              </a>
                              <div class="icons">
                                 <a href="'.$linkdetail.'" class="views">Xem chi tiết</a>
                                 <a href="index.php?pg=checkout&id='.$id.'" class="add">Mua ngay</a>
                              </div>
                              </div>
                              <div class="product-title">'.$name.'</div>
                              <div class="product-price">
                              '.number_format($product['price'],0,'',',').'đ
                                 '.sale($product).'
                              </div>
                           </div>';
                  
                  // <form action="index.php?pg=addcart" method="post">
                  //       <input type="hidden" name="id" value="'.$id.'">
                  //       <input class="input_color" type="hidden" name="color" value="red">
                  //       <input type="hidden" name="name" value="'.$name.'">
                  //       <input type="hidden" name="img" value="'.$img2.'">
                  //       <input type="hidden" name="soluong" value="1">
                  //       <input type="hidden" name="price" value="'.$price.'">
                  //       <input type="hidden" name="priceold" value="'.$priceold.'">
                  //       <input type="hidden" name="rate" value="'.$rate.'">
                  //       <button type="submit" name="addtocart">Giỏ hàng</button>
                  //    </form>
            return $strproduct;
   }
   

   function check_img($img){
      if(is_array($img)){
         $html_img='';
         foreach ($img as $item) {
            $hinh=PATH_IMG.$item;
            if(is_file($hinh)){
               $html_img.= '<img src="'.$hinh.'">';
            }else{
               $html_img.= '';
            }
         }
         return $html_img;
      }else{
         $hinh=PATH_IMG.$img;
         if(is_file($hinh)){
            return '<img src="'.$hinh.'">';
         }else{
            return '';
         }
      }
   }

   function check_img_admin($img){
      if(is_array($img)){
         $html_img='';
         foreach ($img as $item) {
            $hinh=PATH_IMG_ADMIN.$item;
            if(is_file($hinh)){
               $html_img.= '<img src="'.$hinh.'">';
            }else{
               $html_img.= '';
            }
         }
         return $html_img;
      }else{
         $hinh=PATH_IMG_ADMIN.$img;
         if(is_file($hinh)){
            return '<img src="'.$hinh.'">';
         }else{
            return '';
         }
      }
   }


   function check_link_img($img){
      if(is_array($img)){
         $img=[];
         foreach ($img as $item) {
            $item = str_replace(array("\n", "\r", " "), "", $item);
            $hinh=PATH_IMG.$item;
            if(is_file($hinh)){
               $img[]=$hinh;
            }else{
               $img[]= '';
            }
         }
         return $img;
      }else{
         $img = str_replace(array("\n", "\r", " "), "", $img);
         $hinh=PATH_IMG.$img;
         if(is_file($hinh)){
            return $hinh;
         }else{
            return '';
         }
      }
   }

   function showproduct_box($product){
         extract($product);
         $img=getimg_product_main($id);
            $linkdetail='index.php?pg=detail&id='.$id;
            $strproduct='';
            $strproduct='<div class="deal-item">
            <div class="deal-list">
              <div class="deal-item__image">
                <a href="'.$linkdetail.'">
                  '.check_img($img['main_img']).'
                </a>
                <div class="deal-items">
                  '.check_img($img).'
                </div>
              </div>
              <div class="deal-content">
                <div class="deal-title">Áo Thun Regular Bear Cool</div>
                <div class="deal-price">'.number_format($product['price'],0,'',',').'đ
                '.sale($product).'
                </div>
                <div class="deal-bestseller">Hot</div>
                <div class="deal-auth">
                  <a href="'.$linkdetail.'" class="deal-view">Xem chi tiết</a>
                  
                  <a href="index.php?pg=checkout&id='.$id.'" class="add"><button class="deal-btn">Mua ngay</button></a>
                </div>
              </div>
            </div>
          </div>';
            return $strproduct;
   }

   function showproduct_box_mobile($product, $limit){
      $i=0;
      foreach ($product as $item) {
         $i++;
         extract($item);
         $img=getimg_product_main($id);
            $linkdetail='index.php?pg=detail&id='.$id;
            $strproduct='';
            $strproduct='<div class="deal-item-mobile">
            <div class="deal-list">
              <div class="deal-item__image">
                <a href="'.$linkdetail.'">
                  '.check_img($img['main_img']).'
                </a>
              </div>
              <div class="deal-items">
                  '.check_img($img).'
              </div>
              <div class="deal-content">
                <div class="deal-title">'.$name.'</div>
                <div class="deal-price">'.number_format($item['price'],0,'',',').'đ
                '.sale($item).'
                </div>
                <div class="deal-bestseller">Hot</div>
                <div class="deal-auth">
                  <a href="'.$linkdetail.'" class="deal-view">Xem chi tiết</a>
                  <a href="index.php?pg=checkout&id='.$id.'" class="add"><button class="deal-btn">Mua ngay</button></a>

                </div>
              </div>
            </div>
          </div>';
            echo $strproduct;
            if($i==$limit){
               break;
            }
     }
   }

   function showproduct_column($product, $trangthai){
      $i=0;
      $strproduct='';
      foreach ($product as $item) {
         $i++;
         extract($item);
         $img=getimg_product_main($id)['main_img'];
         $img = str_replace(array("\n", "\r", " "), "", $img);
         $hinh=PATH_IMG.$img;
         if(is_file($hinh)){
            $img2= '<img class="top-img" src="'.$hinh.'">';
         }else{
            $img2= '';
         }
            $linkdetail='index.php?pg=detail&id='.$id;
            if($i==1){
               $strproduct.='<div class="top-item">
                              <h2 class="top-item-title">'.$trangthai.'</h2>
                              <div class="product-item top-flex">
                              <div class="product-images">
                              <a href="'.$linkdetail.'">
                                 '.$img2.'
                              </a>
                              </div>
                              <div class="top-body">
                              <div class="product-title">'.$name.'</div>
                              <div class="product-price">'.number_format($item['price'],0,'',',').'đ
                              '.sale($item).'
                              </div>
                              <div class="top-btn">
                              <a href="index.php?pg=checkout&id='.$id.'" class="add"><button class="deal-btn">Mua ngay</button></a>

                              </div>
                              </div>
                           </div>
                           </div>';
            }else{
               $strproduct.='<div class="top-item">
                              <div class="product-item top-flex">
                              <div class="product-images">
                              <a href="'.$linkdetail.'">
                                 '.$img2.'
                              </a>
                              </div>
                              <div class="top-body">
                              <div class="product-title">'.$name.'</div>
                              <div class="product-price">'.number_format($item['price'],0,'',',').'đ
                              '.sale($item).'
                              </div>
                              <div class="top-btn">
                              <a href="index.php?pg=checkout&id='.$id.'" class="add"><button class="deal-btn">Mua ngay</button></a>

                              </div>
                              </div>
                           </div>
                           </div>';
            }
     }
     echo $strproduct;
   }



   function getproduct($limit=1000){
      $sql="SELECT * FROM product ORDER BY id DESC limit ".$limit;
      return pdo_query($sql);
   }
   function getproduct_hot($limit){
   $sql = "SELECT * FROM product where hot = 1 order by id desc limit ".$limit;
   return pdo_query($sql);
   }
   function getimg_product_main($id_product){
      $sql = "SELECT * FROM img_product_color where id_product = ? limit 1";
      return pdo_query_one($sql, $id_product);
  }
   function getproduct_noibat($limit){
      $sql = "SELECT * FROM product where noibat = 1 order by id desc limit ".$limit;
      return pdo_query($sql);
  }
  function getproduct_bestsell($limit){
   $sql = "SELECT * FROM product where bestsell = 1 order by id desc limit ".$limit;
   return pdo_query($sql);
}
function getproduct_trend($limit){
   $sql = "SELECT * FROM product where trend = 1 order by id desc limit ".$limit;
   return pdo_query($sql);
}
function getproduct_topview($limit){
   $sql = "SELECT * FROM product order by view desc limit ".$limit;
   return pdo_query($sql);
}


function getidcatalog($idproduct){
   $sql = "SELECT * FROM product WHERE id=?";
   return pdo_query_one($sql, $idproduct)['idcatalog'];
}
   


   function update_product($id,$ma_sanpham,$name,$price,$priceold,$hot,$noibat,$gioitinh,$idcatalog,$chitiet,$bestsell,$trend,$view){
      $sql = "UPDATE product SET ma_sanpham=?,name=?,price=?,priceold=?,hot=?,noibat=?, gioitinh=?, idcatalog=?, chitiet=?, bestsell=?, trend=?, view=? WHERE id=?";
      pdo_execute($sql, $ma_sanpham,$name,$price,$priceold,$hot,$noibat,$gioitinh,$idcatalog,$chitiet,$bestsell,$trend,$view,$id);
   }
   function tangluotview($id, $view){
      $sql = "UPDATE product SET view=? WHERE id=?";
      pdo_execute($sql,$view,$id);
   }
  function add_product($ma_sanpham,$name,$price,$priceold,$hot,$noibat,$gioitinh,$idcatalog,$chitiet,$bestsell,$trend,$view){
      $sql = "INSERT INTO product (ma_sanpham,name,price,priceold,hot,noibat,gioitinh,idcatalog,chitiet,bestsell,trend,view)
      VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
      pdo_execute($sql, $ma_sanpham,$name,$price,$priceold,$hot,$noibat,$gioitinh,$idcatalog,$chitiet,$bestsell,$trend,$view);     
  }
  function delproduct($id){
       $sql = "DELETE FROM product WHERE  id=?";
       if(is_array($id)){
           foreach ($id as $ma) {
               pdo_execute($sql, $ma);
           }
       }
       else{
           pdo_execute($sql, $id);
       }
   }
  function delimghost($hinh){
     if(file_exists($hinh)){
        unlink($hinh);
     }
  }

   //-----------------Search--------------------------
   function searchproduct($keyword){
          $sql = "SELECT hh.* FROM product hh "
                  . " JOIN catalog lo ON lo.id=hh.idcatalog "
                  . " WHERE hh.name LIKE ? OR lo.name LIKE ?";
          return pdo_query($sql, '%'.$keyword.'%', '%'.$keyword.'%');
      }

      //------------------Thống kê-------------------

      function thongke_product_catalog(){
         $sql = "SELECT catalog.name,
         count(products.id) AS soluong,
         MIN(products.price) AS min_price,
         MAX(products.price) AS max_price,
         AVG(products.price) AS avg_price
         FROM product JOIN catalog ON products.idcatalog = catalog.id
         group by catalog.name";
         return pdo_query($sql);
     }

     function thongke_product_doanhthu(){
      $sql = "SELECT products.name,
      SUM(cart.soluong) AS soluongban,
      cart.price_product_color,
      cart.thanhtien
      FROM
            products
      JOIN
            cart
      ON
            products.id = cart.id_product
      where cart.id_donhang<>0
      GROUP BY cart.id_product";
      return pdo_query($sql);
  }
  function thongke_product_binhluan(){
   $sql = "SELECT products.name,
   count(comment.id) AS sobinhluan,
   max(comment.thoigian) as moinhat,
   min(comment.thoigian) as cunhat
   FROM
         products
   JOIN
         comment
   ON
         products.id = comment.id_product
   GROUP BY comment.id_product";
   return pdo_query($sql);
}

?>