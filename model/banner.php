<?php


function getbrand($limit=200){
   $sql="SELECT * FROM brand ORDER BY id DESC limit ".$limit;
   return pdo_query($sql);
}
    function getproduct_brand($idn=0){
        $sql="SELECT * FROM brand WHERE 1";
        if($idn>0){
           $sql.=" AND idcatalog=".$idn;
        }
        $sql.=" ORDER BY id DESC";
        return pdo_query($sql);
     }
   function getbranddetail($id){
      $sql = "SELECT * FROM brand WHERE id=?";
      return pdo_query_one($sql, $id);
   }
   function searchbrand($kw=''){
    $sql="SELECT * FROM brand WHERE 1";
    if($kw!=''){
       $sql.=" AND name LIKE '%".$kw."%'";
    }
    $sql.=" ORDER BY name";
    return pdo_query($sql);
   }
   //--------------Brand--------------------
function update_brand($id,$name,$logo){
   if($logo!=''){
      $sql = "UPDATE brand SET name=?, logo=? WHERE id=?";
      pdo_execute($sql, $name, $logo, $id);
   }else{
      $sql = "UPDATE brand SET name=? WHERE id=?";
      pdo_execute($sql, $name, $id);
   }
}
function add_brand($name,$logo){
   if($logo!=''){
      $sql = "INSERT INTO brand (name, logo)
      VALUES (?, ?)";    
      pdo_execute($sql, $name, $logo);  
   }else{
      $sql = "INSERT INTO brand (name)
      VALUES (?)";
      pdo_execute($sql, $name);        
   }
}
function delbrand($id){
   $sql = "DELETE FROM brand WHERE id=?";
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