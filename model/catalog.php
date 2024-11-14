<?php
   function getcatalog(){
      $sql="SELECT * FROM catalog ORDER BY stt";
      return pdo_query($sql);
   }
   function getcatalog_home(){
      $sql="SELECT * FROM catalog where sethome=1 ORDER BY stt";
      return pdo_query($sql);
   }
    function countproduct($idn=0){
     $sql="SELECT * FROM product WHERE 1";
     if($idn>0){
        $sql.=" AND idcatalog=?";
     }
     $sql.=" ORDER BY id DESC";
     if($idn>0){
         return count(pdo_query($sql,$idn));
     }else{
         return count(pdo_query($sql));
     }
    }
    function getproduct_catalog($idn=0){
        $sql="SELECT * FROM product WHERE 1";
        if($idn>0){
           $sql.=" AND idcatalog=?";
        }
        $sql.=" ORDER BY id DESC";
        if($idn>0){
         return pdo_query($sql, $idn);
        }else{
         return pdo_query($sql);
        }
     }
     
   function getcatalogdetail($id){
      $sql="SELECT * FROM catalog WHERE id=?";
      return pdo_query_one($sql, $id);

   }
   // ---------------Catalog----------------
function add_catalog($name, $stt,  $home){
   $sql = "INSERT INTO catalog(name, stt, sethome) VALUES(?,?,?)";
   pdo_execute($sql, $name, $stt, $home);
}
/**
* Cập nhật tên loại
* @param int $ma_loai là mã loại cần cập nhật
* @param String $ten_loai là tên loại mới
* @throws PDOException lỗi cập nhật
*/
function update_catalog($id, $name, $stt, $home){
   $sql = "UPDATE catalog SET name=?, stt=?, sethome=? WHERE id=?";
   pdo_execute($sql, $name, $stt, $home,$id);
}
/**
* Xóa một hoặc nhiều loại
* @param mix $ma_loai là mã loại hoặc mảng mã loại
* @throws PDOException lỗi xóa
*/
function delcatalog($id){
   $sql = "DELETE FROM catalog WHERE id=?";
   if(is_array($id)){
       foreach ($id as $ma) {
           pdo_execute($sql, $ma);
       }
   }
   else{
       pdo_execute($sql, $id);
   }
}
// --------------Search----------------
   function searchcatalog($kw=''){
      $sql="SELECT * FROM catalog WHERE name LIKE ?";
      return pdo_query($sql,'%'.$kw.'%');
     }
?>
