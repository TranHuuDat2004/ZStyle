<?php
    if(isset($_POST['soluong'])&&($_POST['soluong']>0)){
        $soluong=$_POST['soluong'];
        $kq="Đã cập nhật: ".$_POST['soluong']*50;
        
    }else{
        $kq='Ủa? Gì vậy?';
    }
    
    echo $kq;
?>