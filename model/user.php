<?php




    function getlogin($user,$pass){
        $sql="SELECT * FROM users WHERE user=? AND pass=?";
        $kq= pdo_query_one($sql, $user, $pass);
        if(is_array($kq) && $kq['kichhoat']==1){
            return $kq;
        }else
            return -1;
            
     }

     function getrole($user,$pass){
      $sql="SELECT * FROM users WHERE user=? AND pass=?";
      $kq= pdo_query_one($sql, $user, $pass);
      if(is_array($kq) && $kq['kichhoat']==1){
          return $kq['role'];
      }else
          return -1;
          
   }

     function getidusercu($user,$pass){
      $sql="SELECT * FROM users WHERE user=? AND pass=?";
      $kq= pdo_query_one($sql, $user, $pass);
      if(is_array($kq)){
          extract($kq);
          return $id;
      }else
          return -1;
          
      }






//-----------------Đơn hàng------------------
function creatpass() {
   $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()-_=+[]{};:,.<>/?`~';
   $password = '';
   for ($i = 0; $i < 8; $i++) {
     $password .= $characters[mt_rand(0, strlen($characters) - 1)];
   }
   return $password;
 }
 function creatusername($name) {
   $username='user_';
   $characters = '0123456789';
   for ($i = 0; $i < 6; $i++) {
     $username .= $characters[mt_rand(0, strlen($characters) - 1)];
   }
   return $username;
 }
 function creatuser($user,$pass, $name,$email,$sdt,$gioitinh,$ngaysinh,$diachi,$role,$img,$kichhoat){
   $sql = "INSERT INTO users (user,pass, name,email,sdt,gioitinh,ngaysinh,diachi,role,img,kichhoat)
   VALUES (?,?,?,?,?,?,?,?,?,?,?)";      
   pdo_execute($sql, $user,$pass, $name,$email,$sdt,$gioitinh,$ngaysinh,$diachi,$role,$img,$kichhoat);
}

function update_user($id,$user,$pass, $name,$email,$sdt,$gioitinh,$ngaysinh,$diachi,$role,$img,$kichhoat){
  $sql = "UPDATE users SET user=?,pass=?,name=?,email=?,sdt=?,gioitinh=?, ngaysinh=?, diachi=?, role=?, img=?, kichhoat=? WHERE id=?";
  pdo_execute($sql, $user,$pass, $name,$email,$sdt,$gioitinh,$ngaysinh,$diachi,$role,$img,$kichhoat,$id);
}
function changepassword($email, $password){
  $sql = "UPDATE users SET pass=? WHERE email=?";
  pdo_execute($sql, $password, $email);
}
function deluser($id){
   $sql = "DELETE FROM users WHERE  id=?";
   if(is_array($id)){
       foreach ($id as $ma) {
           pdo_execute($sql, $ma);
       }
   }
   else{
       pdo_execute($sql, $id);
   }
}

function getuser($id){
   $sql="SELECT * FROM users WHERE id=?";
   return pdo_query_one($sql, $id);
}
function getusertoemail($email){
  $sql="SELECT * FROM users WHERE email=?";
  return pdo_query_one($sql, $email);
}
function getusertable($limit=100000){
   $sql="SELECT * FROM users ORDER BY id DESC limit ".$limit;
   return pdo_query($sql);
}
function isValidPhoneNumber($phoneNumber) {
  // Loại bỏ các ký tự không phải số từ chuỗi
  $phoneNumber = preg_replace('/[^0-9]/', '', $phoneNumber);

  // Kiểm tra xem chuỗi còn lại có 10 hoặc 11 chữ số không
  if (strlen($phoneNumber) === 10 || strlen($phoneNumber) === 11) {
      // Kiểm tra xem nếu là 11 chữ số, thì chữ số đầu tiên phải là 0
      if (strlen($phoneNumber) === 11 && $phoneNumber[0] !== '0') {
          return false;
      }

      // Số điện thoại hợp lệ
      return true;
  }

  // Số điện thoại không hợp lệ
  return false;
}

function searchuser($kw=''){
  $sql="SELECT * FROM users WHERE  name LIKE ? or email LIKE ? or user LIKE ?";
  return pdo_query($sql,'%'.$kw.'%', '%'.$kw.'%', '%'.$kw.'%');
 }
?>