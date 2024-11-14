<?php
    function add_cart($id_user, $id_donhang, $id_product, $soluong, $price,$thanhtien,$img,$id_size,$id_color,$product_design,$id_product_design){
        $sql = "INSERT INTO cart(id_user, id_donhang, id_product, soluong, price,thanhtien,img,id_size,id_color,product_design,id_product_design) VALUES (?, ?, ?, ?,?, ?, ?, ?, ?, ?, ?)";
        pdo_execute($sql, $id_user, $id_donhang, $id_product, $soluong, $price,$thanhtien,$img,$id_size,$id_color,$product_design,$id_product_design);
    }
    
    function update_cart($id,$id_user, $id_donhang, $id_product, $soluong, $price,$thanhtien,$img,$id_size,$id_color,$product_design,$id_product_design){
        $sql = "UPDATE cart SET id_user=?,id_donhang=?,id_product=?,soluong=?, price=?, thanhtien=?, img=?, id_size=?, id_color=?,product_design=?,id_product_design=? WHERE id=?";
        pdo_execute($sql,$id_user, $id_donhang, $id_product, $soluong, $price,$thanhtien,$img,$id_size,$id_color,$product_design,$id_product_design, $id);
    }
    
    
    function update_cart_ma_donhang($id, $id_donhang){
        $sql = "UPDATE cart SET id_donhang=? WHERE id=?";
        pdo_execute($sql,$id_donhang,$id);
    }
    function del_cart($id){
        $sql = "DELETE FROM cart  WHERE id=?";
        if(is_array($id)){
            foreach ($id as $ma) {
                pdo_execute($sql, $ma);
            }
        }
        else{
            pdo_execute($sql, $id);
        }
    }

    function getcolor($id_color){
        $sql="SELECT * FROM color where id=?";
        return pdo_query_one($sql, $id_color)['color'];
    }

    function getsize($id_size){
        $sql="SELECT * FROM size where id=?";
        return pdo_query_one($sql, $id_size)['ma_size'];
    }

    function getidcolor($color){
        $sql="SELECT * FROM color where color=?";
        return pdo_query_one($sql, $color)['id'];
    }

    function getidsize($size){
        $sql="SELECT * FROM size where ma_size=?";
        return pdo_query_one($sql, $size)['id'];
    }

    function getcartuser($id_user){
        $sql = "SELECT * FROM cart WHERE id_user=? and id_donhang=1";
        return pdo_query($sql, $id_user);
     }
     function getcartthanhtoan($id_cart){
        $sql = "SELECT * FROM cart WHERE id=?";
        return pdo_query_one($sql, $id_cart);
     }
     function getidcartmoi(){//////mới
        $sql="SELECT * FROM cart ORDER BY id DESC LIMIT 1";
        $kq=pdo_query_one($sql);
        extract($kq);
        return $id;
     }
     function getcarttable($limit = 100000){
        $sql = "SELECT * FROM cart ORDER BY id DESC limit " . $limit;
        return pdo_query($sql);
    }
    function searchcart($kw=''){
        $sql="SELECT * FROM cart WHERE  id_user LIKE ? or id_color LIKE ? or id_size LIKE ?";
        return pdo_query($sql,'%'.$kw.'%', '%'.$kw.'%', '%'.$kw.'%');
       }
?>