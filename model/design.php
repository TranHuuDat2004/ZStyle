<?php
    function getimgdesign($limit=1000){
        $sql="SELECT * FROM img_design where id_user=1 ORDER BY id DESC limit ".$limit;
        return pdo_query($sql);
     }
     function getimgdesignuser($id_user){
      $sql="SELECT * FROM img_design where id_user=? ORDER BY id DESC";
      return pdo_query($sql, $id_user);
   }
     function add_design($id_color,$id_size,$img_front,$img_back,$price,$name,$id_user){
        $sql = "INSERT INTO design (id_color,id_size,img_front,img_back,price,name,id_user)
        VALUES (?, ?, ?, ?, ?, ?, ?)";
        pdo_execute($sql, $id_color,$id_size,$img_front,$img_back,$price,$name,$id_user);     
    }

    function add_img_design($img, $id_user){
      $sql = "INSERT INTO img_design (img, id_user)
      VALUES (?, ?)";
      pdo_execute($sql, $img, $id_user);     
  }
    function getproductdesign($id_user){
        $sql="SELECT * FROM design where id_user=? ORDER BY id DESC";
        return pdo_query($sql, $id_user);
     }
     function getnewdesign(){
        $sql="SELECT * FROM design ORDER BY id DESC limit 1";
        return pdo_query_one($sql);
     }
     function getproductdesignuser($id){
      $sql="SELECT * FROM design where id=?";
      return pdo_query_one($sql,$id);
   }
    



  
  function getdesign(){
      $sql = "SELECT * FROM design order by id desc";
      return pdo_query($sql);
   }
  function get_img_design(){
      $sql = "SELECT * FROM img_design order by id ";
      return pdo_query($sql);
   }
  
?>