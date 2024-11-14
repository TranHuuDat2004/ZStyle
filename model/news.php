<?php
     function getnew_home(){
        $sql="SELECT * FROM tintuc ORDER BY id";
        return pdo_query($sql);
     }

     function getdetail($id){
      $sql="SELECT * FROM tintuc WHERE id=?";
      return pdo_query_one($sql, $id);
   }

     function get_detail_news($limit=100000){
      $sql="SELECT * FROM tintuc ORDER BY id DESC limit ".$limit;
      return pdo_query($sql);
   }
     function getnew_home_new(){
        $sql="SELECT * FROM tintuc ORDER BY id DESC limit 1";
        return pdo_query($sql);
     }

     function get_idtintuc($id){
        $sql="SELECT * FROM tintuc WHERE id=?";
        return pdo_query_one($sql, $id);
     }
     function create_tintuc($id, $title, $img, $noidung, $thoigian){
      $sql="INSERT INTO tintuc(id, title, img, noidung,thoigian) VALUES (?,?,?,?,?)";      
      pdo_execute($sql,$id, $title, $img, $noidung, $thoigian);
   }
  
  function update_tintuc($id, $title, $img, $noidung, $thoigian){
      $sql = "UPDATE tintuc SET title=?,img=?,noidung=?,thoigian=? WHERE id=?";
      pdo_execute($sql, $title, $img, $noidung, $thoigian, $id);
    }
  
  function del_tintuc($id){
      $sql = "DELETE FROM tintuc WHERE  id=?";
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