<?php
    function creatdonhang($iduser,$ma_donhang,$ngaylap,$trangthai,$tongtien,$tendat,$tennhan,$emaildat,$emailnhan,$sdtdat,$sdtnhan,$diachidat,$diachinhan,$ptthanhtoan,$giaohangnhanh,$id_voucher){
        $sql = "INSERT INTO donhang (iduser,ma_donhang,ngaylap,trangthai,tongtien,tendat,tennhan,emaildat,emailnhan,sdtdat,sdtnhan,diachidat,diachinhan,ptthanhtoan,giaohangnhanh,id_voucher)
        VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";      
        pdo_execute($sql,$iduser,$ma_donhang,$ngaylap,$trangthai,$tongtien,$tendat,$tennhan,$emaildat,$emailnhan,$sdtdat,$sdtnhan,$diachidat,$diachinhan,$ptthanhtoan, $giaohangnhanh, $id_voucher);
     }
     function createma_donhang() {
      $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
      $ma_donhang = 'ZS_';
      for ($i = 0; $i < 8; $i++) {
        $ma_donhang .= $characters[mt_rand(0, strlen($characters) - 1)];
      }
      return $ma_donhang;
    }
    function deldonhang($id){
      $sql = "DELETE FROM donhang  WHERE id=?";
      $sql1 = "DELETE FROM cart  WHERE id_donhang=?";
      pdo_execute($sql1, $id);
      if(is_array($id)){
          foreach ($id as $ma) {
              pdo_execute($sql, $ma);
          }
      }
      else{
          pdo_execute($sql, $id);
      }
  }
     function getiduser(){//////mới
        $sql="SELECT id FROM users ORDER BY id DESC LIMIT 1";
        $kq=pdo_query_one($sql);
        extract($kq);
        return $id;
     }
     function getiddonhang(){//////mới
        $sql="SELECT * FROM donhang ORDER BY id DESC LIMIT 1";
        $kq=pdo_query_one($sql);
        extract($kq);
        return $id;
     }
     function getdonhangtoid($id){//////mới
      $sql="SELECT * FROM donhang where id=?";
      $kq=pdo_query_one($sql, $id);
      return $kq;
   }
     function getdonhang($id){
        $sql="SELECT * FROM donhang WHERE iduser=? ORDER BY id DESC";
        return pdo_query($sql, $id);
     }

     function getdonhangtable($limit=10000000){
      $sql="SELECT * FROM donhang ORDER BY id DESC limit ".$limit;
      return pdo_query($sql);
   }
     function getdonhangct($id){
      $sql="SELECT * FROM cart WHERE id_donhang=?";
      return pdo_query($sql,$id);
   }
   function searchdonhang($kw=''){
      $sql="SELECT * FROM donhang WHERE  iduser LIKE ? or tendat LIKE ? or ma_donhang LIKE ? or diachidat LIKE ? or trangthai LIKE ?";
      return pdo_query($sql,'%'.$kw.'%', '%'.$kw.'%', '%'.$kw.'%', '%'.$kw.'%', '%'.$kw.'%');
     }
?>