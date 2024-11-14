<style>

</style>
<?php
 
 session_start();
 ob_start();
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
 
//required files
require 'PHPMailer-master/PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/PHPMailer-master/src/SMTP.php';
 
//Create an instance; passing `true` enables exceptions
if (isset($_POST["sendmail"]) && isset($_SESSION['giohang'])) {
    
 
    $mail = new PHPMailer(true);
 
    //Server settings
    $mail->isSMTP();                              //Send using SMTP
    $mail->CharSet  = "utf-8";
    $mail->Host       = 'smtp.gmail.com';       //Set the SMTP server to send through
    $mail->SMTPAuth   = true;             //Enable SMTP authentication
    $mail->Username   = 'zstyleshopvn@gmail.com';   //SMTP write your email
    $mail->Password   = 'sxdl zwmw frep mzwh';      //SMTP password
    $mail->SMTPSecure = 'ssl';            //Enable implicit SSL encryption
    $mail->Port       = 465;                                    
 
    //Recipients
    $mail->setFrom('zstyleshopvn@gmail.com', 'ZStyle' );  // Sender Email and name
    $mail->addAddress($_POST["emaildat"], $_POST["tendat"]);     //Add a recipient email   // reply to sender email
 
    //Content
    $mail->isHTML(true);               //Set email format to HTML
    $mail->Subject = 'Cảm ơn bạn đã mua hàng cùng chúng tôi!';  // email subject headings
    $mail->AddEmbeddedImage('view/layout/assets/images/logo-form.png', 'logo', 'logo-form.png');
    $mail->AddEmbeddedImage('upload/form-thanks.jpg', 'img', 'form-thanks.jpg');
    $i=0;
    $tongtien=0;
    $html_donhang='';
    foreach ($_SESSION['giohang'] as $item) {
        $i++;
        extract($item);
        $html_donhang.='<tr>
        <td>'.$i.'</td>
        <td>'.$name.'</td>
        <td>'.$size.'</td>
        <td>'.$color.'</td>
        <td>'.number_format($price,0,'.',',').'</td>
        <td>'.$soluong.'</td>
        <td>'.number_format($price*$soluong,0,'.',',').'</td>
    </tr>';
        $tongtien+=$price*$soluong;
    }
    if(isset($_SESSION['giamgia']) && $_SESSION['giamgia']>0){
        $giamgia=$_SESSION['giamgia'];
        $html_donhang.='<tr>
        <td class="td-trong"></td>
        <td class="td-trong"></td>
        <td class="td-trong"></td>
        <td class="td-trong"></td>
        <td class="td-trong"></td>
        <td>Giảm giá</td>
        <td>'.number_format(($tongtien*$giamgia/100),0,'.',',').'</td>
    </tr>';
        $html_donhang.='<tr>
            <td class="td-trong" colspan="5"></td>
            <td>Tổng tiền</td>
            <td>'.number_format(($tongtien-$tongtien*$giamgia/100),0,'.',',').'</td>
        </tr>';
        unset($_SESSION['giamgia']);
    }else{
        $html_donhang.='<tr>
            <td class="td-trong"></td>
            <td class="td-trong"></td>
            <td class="td-trong"></td>
            <td class="td-trong"></td>
            <td class="td-trong"></td>
            <td><strong>Tổng tiền</strong></td>
            <td>'.number_format($tongtien,0,'.',',').'</td>
        </tr>';
        unset($_SESSION['giamgia']);
    }

    $account='';
    if(isset($_SESSION['username']) && $_SESSION['username'] && isset($_SESSION['password']) && $_SESSION['password']){
        $account='<tbody>
                    <td colspan="2" style="text-align:left"><strong>Username</strong> </td>
                    <td colspan="6" style="text-align:left">'.$_SESSION['username'].'</td>
                </tbody>
                <tbody>
                    <td colspan="2" style="text-align:left"><strong>Password</strong> </td>
                    <td colspan="6" style="text-align:left"> '.$_SESSION['password'].'</td>
                </tbody>';
    }


    unset($_SESSION['id_voucher']);
    unset($_SESSION['giamgia']);
    unset($_SESSION['btngiamgia']);
    unset($_SESSION['magiamgia']);
    unset($_SESSION['giohang']);

    // $noidung = file_get_contents("form_thank.php");
    $text= '<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <style>
            .title{
                text-align: center;
                color:  #46694F;
            }
    
            .thank{
                text-align: center;
            }
            table {
                border-collapse: collapse;
                width: 100%;
                margin: 20px 0;
            }
    
            th{
                background-color: #46694F;
                color: #fff;
                text-align: center;
            }
            tr{
                text-align: center;
            }
            thead{
                text-align: center;
            }
            
            
    
            th, td {
                border: 1px solid #dddddd;
                text-align:center;
                padding: 8px;
            }
            tbody>td{
                text-align: left;

            }
            
        </style>
    </head>
    <body>
        <div class="container-form">
        <img src="cid:logo" alt="ZStyle Logo" style="display: block; width: 150px; margin: 0 auto;">
        <hr>
        <h2 class="title">THÔNG TIN ĐƠN HÀNG</h2> 
        <p class="thank">Cảm ơn bạn đã ghé thăm cửa hàng của chúng tôi và đặt hàng tại đây!</p>
    
                <table>
                    <thead>
                        <tr >
                            <th  colspan="8"><p style="font-size: 16px;text-align: center"><strong>Mã đơn hàng:</strong> '.$_SESSION['donhang']['ma_donhang'].' </th>
                        </tr> 
                        
                    </thead>
                    
                    <tbody>
                        <td colspan="2" style="text-align:left"><strong>Ngày lập</strong></td>
                        <td colspan="6" style="text-align:left">'.$_SESSION['ngaylap'].'</td>
                      
                    </tbody>
                    <tbody>
                        <td colspan="2" style="text-align:left"><strong>Họ tên</strong></td>
                        <td colspan="6" style="text-align:left">'.$_SESSION['name'].'</td>
                      
                    </tbody>
                    <tbody>
                        <td colspan="2" style="text-align:left"><strong>Email</strong></td>
                        <td colspan="6" style="text-align:left">'.$_SESSION['email'].'</td>
                    </tbody>
                    <tbody>
                        <td colspan="2" style="text-align:left"><strong>Số điện thoại</strong></td>
                        <td colspan="6" style="text-align:left">'.$_SESSION['sdt'].'</td>
                    </tbody>
                    <tbody>
                        <td colspan="2" style="text-align:left"><strong>Địa chỉ</strong></td>
                        <td colspan="6" style="text-align:left">'.$_SESSION['diachi'].'</td>
                    </tbody>
                    '.$account.'

                    
                    
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Tên sản phẩm</th>
                            <th>Size</th>
                            <th>Màu sắc</th>
                            <th>Giá</th>
                            <th>Số lượng</th>
                            <th>Thành tiền</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                      '.$html_donhang.'
                    </tbody>
        
                    
                </table>
                Chúng tôi mong sớm được gặp lại bạn.
            <br>
    
            Trân trọng, <strong>Zstyle</strong>
            <hr>

            <div class="icon">
                <i class="fa-brands fa-facebook"></i>
                <i class="fa-brands fa-instagram"></i>
                <i class="fa-brands fa-google"></i>
                <i class="fa-brands fa-shopify"></i>
            </div>

            ZStyle Shop <br>
            Website: https://zstyle.online/ <br>
            Địa chỉ: Tầng 12, tòa T, Công viên phần mềm Quang Trung <br>
            Email: zstyleshopvn@gmail.com <br>
            Hotline: 19006789 <br>
            </div>
    </body>
    </html>';
    unset($_SESSION['donhang']);
    unset($_SESSION['name']);
    unset($_SESSION['sdt']);
    unset($_SESSION['diachi']);
    unset($_SESSION['email']);
    $mail->Body=$text;//email message
    
    // Success sent message alert
    $mail->send();
    echo
    " 
    <script> 
     document.location.href = 'index.php?pg=account';
    </script>
    ";
} 
function creatcode() {
    $code='';
    $characters = '0123456789';
    for ($i = 0; $i < 4; $i++) {
      $code .= $characters[mt_rand(0, strlen($characters) - 1)];
    }
    return $code;
  }
  function pdo_get_connection(){
    $dburl = "mysql:host=localhost;dbname=zstyle;charset=utf8";
    $username = 'root';
    $password = '';
    $conn = new PDO($dburl, $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $conn;
 }
 function pdo_query($sql){
    $sql_args = array_slice(func_get_args(), 1);
    try{
        $conn = pdo_get_connection();
        $stmt = $conn->prepare($sql);
        $stmt->execute($sql_args);
        $rows = $stmt->fetchAll();
        return $rows;
    }
    catch(PDOException $e){
        throw $e;
    }
    finally{
        unset($conn);
    }
 }
 function pdo_query_one($sql){
    $sql_args = array_slice(func_get_args(), 1);
    try{
        $conn = pdo_get_connection();
        $stmt = $conn->prepare($sql);
        $stmt->execute($sql_args);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        return $row;
    }
    catch(PDOException $e){
        throw $e;
    }
    finally{
        unset($conn);
    }
 }
 function getusertoemail($email){
    $sql="SELECT * FROM users WHERE email=?";
    return pdo_query_one($sql, $email);
  }

if (isset($_POST["guima"])) {
    $_SESSION['erremailxn']='';
    $_SESSION['emailxn']=$_POST["emailxn"];
    if($_POST['emailxn']==''){
        $_SESSION['erremailxn']='*Bạn chưa nhập email';
    }else{
        if(!filter_var($_POST['emailxn'], FILTER_VALIDATE_EMAIL)){
            $_SESSION['erremailxn']="*Địa chỉ email không hợp lệ";
        }else{
            $kt=0;
            foreach ($_SESSION['usertable'] as $item) {
                if($item['email']==$_POST['emailxn']){
                    $kt=1;
                    break;
                }
            }
            if($kt==0){
                $_SESSION['erremailxn']='*Địa chỉ email không tồn tại';
            }
        }     
    }
    if($_SESSION['erremailxn']!=''){
        echo
            " 
            <script> 
            document.location.href = 'index.php?pg=forgetpass';
            </script>
            ";
    }else{
        $mail = new PHPMailer(true);
 
        //Server settings
        $mail->isSMTP();                              //Send using SMTP
        $mail->CharSet  = "utf-8";
        $mail->Host       = 'smtp.gmail.com';       //Set the SMTP server to send through
        $mail->SMTPAuth   = true;             //Enable SMTP authentication
        $mail->Username   = 'myhong11a32004@gmail.com';   //SMTP write your email
        $mail->Password   = 'zhuv uzbw gnrd ziop';      //SMTP password
        $mail->SMTPSecure = 'ssl';            //Enable implicit SSL encryption
        $mail->Port       = 465;                                    
     
        //Recipients
        $mail->setFrom('zstyleshopvn@gmail.com', 'ZStyle' );  // Sender Email and name
        $mail->addAddress($_POST["emailxn"]);     //Add a recipient email   // reply to sender email
        $_SESSION['emailxn']=$_POST["emailxn"];
        $_SESSION['username']=getusertoemail($_SESSION['emailxn'])['user'];
    
        //Content
        $mail->isHTML(true);               //Set email format to HTML
        $mail->Subject = 'Chúng tôi đã khôi phục thành công tài khoản cho bạn!';  // email subject headings
        $mail->AddEmbeddedImage('view/layout/assets/images/logo-form.png', 'logo', 'logo-form.png');
        
    
        $_SESSION['code']=creatcode();
        // $noidung = file_get_contents("form_thank.php");
        $text= '<html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <script src="https://kit.fontawesome.com/945522403a.js" crossorigin="anonymous"></script>
            <style>
                body {
                    font-family: Arial, sans-serif;
                }
        
                .container {
                    max-width: 600px;
                    margin: 0 auto;
                }
        
                .container>img{
                    display: block;
                    margin: 0 auto;
                    color: black;
                    width: 100px;
                }
        
                p {
    
                    text-align: center;
                }
        
                table {
                    width: 100%;
                    border-collapse: collapse;
                    margin: 20px 0;
                }
    
                th{
                    background-color: #46694F;
                    color: #fff;
                }
                
        
                th, td {
                    border: 1px solid #46694F;
                    text-align: left;
                    padding: 8px;
                }
                .title{
                    text-align:center;
                    font-size:18px;
                    color: #46694F; 
                }
                .td-trong{
                    border:none;
                }
    
                .icon{
                    margin: 10px 0;
                    text-align: center;
                }
    
                .icon>i{
                    padding: 3px;
                    color: #46694F;
                }
    
                #code{
                    width: 80px;
                    margin: 0 auto;
                    padding: 10px 20px;
                    border: 3px solid #dddddd;
                    border-radius: 5px;
                    text-align: center;
                    font-weight: bold;
                    font-size: 28px;
                    color: #46694f;
    
                }
                h2{
                    text-align: center;
                    color: #46694f;
                }
                td{
                    width:50%;
                }
        
            </style>
        </head>
        <body>
            
            <div class="container">
                <img src="cid:logo" alt="ZStyle Logo" style="display: block; width: 150px; margin: 0 auto;">
                <br>
                <hr>
                
                <h2>Chào mừng bạn trở lại!</h2>
                <p class="text">Hãy sử dụng mã xác minh bên dưới để xác nhận tài khoản có thông tin</p>
                <table>
                    <tbody>
                        <tr>
                        <td><strong>Email</strong> </td>
                        <td>'.$_SESSION['emailxn'].'</td>
                        </tr>
                        <tr>
                        <td><strong>Tên đăng nhập</strong></td>
                        <td>'.$_SESSION['username'].'</td>
                        </tr>
                    </tbody>
                    
                </table>
                
                <div id="code">
                    '.$_SESSION['code'].'
                </div>
        
                Trân trọng, <strong>Zstyle</strong>
                <hr>
    
                ZStyle Shop <br>
                Website: https://zstyle.online/ <br>
                Địa chỉ: Tầng 12, tòa T, Công viên phần mềm Quang Trung <br>
                Email: zstyleshopvn@gmail.com <br>
                Hotline: 19006789 <br>
            </div>
        </body>
        </html>';
        $_SESSION['codedung']=$_SESSION['code'];
        unset($_SESSION['code']);
        $mail->Body=$text;//email message
        
        // Success sent message alert
        $mail->send();
        echo
        " 
        <script> 
         document.location.href = 'index.php?pg=forgetpass';
        </script>
        ";

    }
    
 
    
} 
