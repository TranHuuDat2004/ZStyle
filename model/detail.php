<?php

    function getlistcolor($idproduct){
        $sql="SELECT * FROM img_product_color WHERE id_product=?";
        $list_id_color=pdo_query($sql, $idproduct);
        $list_color=[];
        foreach ($list_id_color as $item) {
            extract($item);
            $sql = "SELECT * FROM color WHERE id=?";
            $list_color[]=pdo_query_one($sql, $id_color);
        }
        return $list_color;
    }
    function getlistsize(){
        $sql="SELECT * FROM size";
        return pdo_query($sql);
    }
    function getlistimgcolor($idproduct){
        $sql="SELECT * FROM img_product_color WHERE id_product=?";
        return pdo_query($sql, $idproduct);
    }

    function showimgdetail($img_product){
        $html_img='';
        $i=0;
        foreach ($img_product as $item) {
            $i++;
            extract($item);
            $img='<img class="detail-img" src="'.check_link_img($item['main_img']).'" alt="" />';
            $sub_img='<img class="detail-image__item" onclick="change_img(this)" src="'.check_link_img($item['main_img']).'" alt="" />';
            $sub_img.='<img class="detail-image__item"  onclick="change_img(this)" src="'.check_link_img($item['sub_img1']).'" alt="" />';
            $sub_img.='<img class="detail-image__item" onclick="change_img(this)" src="'.check_link_img($item['sub_img2']).'" alt="" />';
            $sub_img.='<img class="detail-image__item"  onclick="change_img(this)" src="'.check_link_img($item['sub_img3']).'" alt="" />';
    
            if($i==1){
                $html_img.='<div class="detail-image">
                '.$img.'
                <div style="display:none;">'.$item['main_img'].'</div>
                <div class="detail-image__list">
                  '.$sub_img.'
                </div>
              </div>';
            }else{
                $html_img.='<div class="detail-image" style="display: none;">
                '.$img.'
                <div style="display:none;">'.$item['main_img'].'</div>
                <div class="detail-image__list">
                  '.$sub_img.'
                </div>
              </div>';
            }
        }
        echo $html_img;
    }

    function showcomment($listcomment){
        $html_comment='';
        $j=0;
        foreach ($listcomment as $item) {
          extract($item);
          $j++;
          $user=getuser($id_user);
          if($j<=5){
          
            $html_comment.='<div class="comment-card mb-20">
            <div class="comment-avatar">';
            if($user['img']==''){
              $html_comment.=check_img('avatar.png');
            }else{
              $html_comment.=check_img($user['img']);
            }
    
            $html_comment.='</div>
            <div class="comment-info">
              <div class="comment-list">
                <div class="comment-name">'.$user['email'].'</div>
                <div class="comment-date">'.$thoigian.'</div>
              </div>
              <div class="comment-rating">';
              for($i=1;$i<=$rate;$i++){
                $html_comment.='<i style="color:#f8df00" class="fa fa-star star1"></i>';
            }
            for($i=$rate;$i<5;$i++){
                $html_comment.='<i style="color:black" class="fa fa-star star1"></i>';
            }
              $html_comment.='</div>
              
              <p class="comment-review">'.$noidung.'</p>
            </div>
          </div>';
          }else{
            break;
          }
          
        }
        echo $html_comment;
      }

    function getproductdetail($idproduct){
        $sql = "SELECT * FROM product WHERE id=?";
        return pdo_query_one($sql, $idproduct);
    }

    function getproductdesigndetail($idproduct){
        $sql = "SELECT * FROM design WHERE id=?";
        return pdo_query_one($sql, $idproduct);
    }
    
    function getidproductcolor($id_product, $color){
        $sql = "SELECT * FROM product_color WHERE id_product=? and color=?";
        return pdo_query_one($sql, $id_product, $color)['id'];
    }
    function getrelatedproduct($idproduct,$idcatalog){
        $sql="SELECT * FROM product WHERE idcatalog=".$idcatalog." AND id<>".$idproduct." ORDER BY id DESC LIMIT 4";
        return pdo_query($sql);
     }
     function getdetailproductcolor($idproduct, $color){
        $sql = "SELECT * FROM product_color WHERE id_product=? and color=?";
        return pdo_query_one($sql, $idproduct, $color);
     }
     function getpriceproductcolor($idproduct, $color){
        $sql = "SELECT * FROM product_color WHERE id_product=? and color=?";
        return pdo_query_one($sql, $idproduct, $color)['price'];
     }
     function getsoluongtonkho($id){
        $sql="SELECT * FROM soluongtonkho WHERE id_product=? ORDER BY id";
        return pdo_query($sql, $id);
     }
?>