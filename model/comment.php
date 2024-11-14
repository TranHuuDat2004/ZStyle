<?php

function add_comment($id_product, $id_user, $noidung, $rate){
    $sql = "INSERT INTO comment(id_product, id_user, thoigian, noidung, rate) VALUES (?,?,curdate(),?,?)";
    pdo_execute($sql, $id_product, $id_user, $noidung, $rate);
}

function update_comment($id, $id_product, $id_user, $thoigian, $noidung, $rate){
    $sql = "UPDATE comment SET id_product=?,id_user=?,thoigian=?,noidung=?, rate=? WHERE id=?";
    pdo_execute($sql, $id_product, $id_user, $thoigian, $noidung, $rate, $id);
}

function delcomment($id){
    $sql = "DELETE FROM comment WHERE id=?";
    if(is_array($id)){
        foreach ($id as $ma) {
            pdo_execute($sql, $ma);
        }
    }
    else{
        pdo_execute($sql, $id);
    }
}
function getcomment($limit=100){
    $sql="SELECT * FROM comment ORDER BY id DESC limit ".$limit;
    return pdo_query($sql);
 }
 function getcommentdetail($id){
    $sql="SELECT * FROM comment WHERE id=?";
    return pdo_query_one($sql, $id);

 }
function get_comment_product($id_product,$limit){
    $sql = "SELECT * FROM comment where id_product=? ORDER BY id DESC limit ".$limit;
    return pdo_query($sql, $id_product);
}

// function binh_luan_select_all(){
//     $sql = "SELECT * FROM binh_luan bl ORDER BY ngay_bl DESC";
//     return pdo_query($sql);
// }

// function binh_luan_select_by_id($ma_bl){
//     $sql = "SELECT * FROM binh_luan WHERE ma_bl=?";
//     return pdo_query_one($sql, $ma_bl);
// }

// function binh_luan_exist($ma_bl){
//     $sql = "SELECT count(*) FROM binh_luan WHERE ma_bl=?";
//     return pdo_query_value($sql, $ma_bl) > 0;
// }
// //-------------------------------//
// function binh_luan_select_by_hang_hoa($ma_hh){
//     $sql = "SELECT b.*, h.ten_hh FROM binh_luan b JOIN hang_hoa h ON h.ma_hh=b.ma_hh WHERE b.ma_hh=? ORDER BY ngay_bl DESC";
//     return pdo_query($sql, $ma_hh);
// }
?>