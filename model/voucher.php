<?php
     function get_voucher(){
        $sql="SELECT * FROM voucher ORDER BY id";
        return pdo_query($sql);
     }

     function get_detail_voucher($id){
        $sql="SELECT * FROM voucher WHERE id=?";
        return pdo_query_one($sql, $id);
   }

     function get_idvoucher($id){
        $sql="SELECT * FROM voucher WHERE id=?";
        return pdo_query_one($sql, $id);
     }
     function create_voucher($id, $ma_voucher, $giamgia, $ngaybatdau, $ngayketthuc, $dieukien){
      $sql="INSERT INTO voucher(ma_voucher, giamgia, ngaybatdau, ngayketthuc, dieukien, id) VALUES (?,?,?,?,?,?)";      
      pdo_execute($sql,$ma_voucher, $giamgia, $ngaybatdau, $ngayketthuc, $dieukien, $id);
   }
  
  function update_voucher($id,$ma_voucher, $giamgia, $ngaybatdau, $ngayketthuc, $dieukien){
      $sql = "UPDATE voucher SET ma_voucher=?,giamgia=?,ngaybatdau=?,ngayketthuc=?,dieukien=? WHERE id=?";
      pdo_execute($sql, $ma_voucher, $giamgia, $ngaybatdau, $ngayketthuc, $dieukien, $id);
    }
  
  function del_voucher($id){
      $sql = "DELETE FROM voucher WHERE  id=?";
      if(is_array($id)){
          foreach ($id as $ma) {
              pdo_execute($sql, $ma);
          }
      }
      else{
          pdo_execute($sql, $id);
      }
   }
  
     
?>