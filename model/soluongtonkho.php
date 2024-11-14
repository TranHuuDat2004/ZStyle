<?php
    function update_soluongtonkho($id_product,$id_color,$id_size,$soluong){
        $sql = "UPDATE soluongtonkho SET soluong=? WHERE id_product=? and id_color=? and id_size=?";
        pdo_execute($sql,$soluong, $id_product, $id_color, $id_size);
    }
    function getsoluongtonkhothat($id_product,$id_color,$id_size){
        $sql="SELECT * FROM soluongtonkho where id_product=? and id_color=? and id_size=?";
        return pdo_query_one($sql, $id_product,$id_color,$id_size)['soluong'];
    }
?>