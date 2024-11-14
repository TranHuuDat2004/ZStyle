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
    $mail->Username   = 'myhong11a32004@gmail.com';   //SMTP write your email
    $mail->Password   = 'zhuv uzbw gnrd ziop';      //SMTP password
    $mail->SMTPSecure = 'ssl';            //Enable implicit SSL encryption
    $mail->Port       = 465;                                    
 
    //Recipients
    $mail->setFrom('myhong11a32004@gmail.com', 'ZStyle' );  // Sender Email and name
    $mail->addAddress($_POST["emaildat"], $_POST["tendat"]);     //Add a recipient email   // reply to sender email
 
    //Content
    $mail->isHTML(true);               //Set email format to HTML
    $mail->Subject = 'Cảm ơn bạn đã mua hàng cùng chúng tôi!';  // email subject headings
    $mail->AddEmbeddedImage('view/layout/assets/images/logo-form.png', 'logo', 'logo-form.png');
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
            <td class="td-trong"></td>
            <td class="td-trong"></td>
            <td class="td-trong"></td>
            <td class="td-trong"></td>
            <td class="td-trong"></td>
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
            <td>Tổng tiền</td>
            <td>'.number_format($tongtien,0,'.',',').'</td>
        </tr>';
        unset($_SESSION['giamgia']);
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
                /* margin-bottom: 20px; */
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
                border: 1px solid #dddddd;
                text-align: center;
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

            .code{
                width: 80px;
                margin: 0 auto;
                padding: 5px;
                border: 1px solid #000;
                /* border: #46694F; */
                border-color: #46694F;
                text-align: center;
            }
            h2{
                text-align: center;
            }
    
        </style>
    </head>
    <body>
        
        <div class="container">
            <img src="cid:logo" alt="ZStyle Logo" style="display: block; width: 150px; margin: 0 auto;">
            <br>
            
            <h2>Chào mừng bạn trở lại!</h2>
            <img src="upload/otp1.png" alt="">
            <p class="text">Hãy sử dụng mã xác minh bên dưới để đăng nhập</p>
            <div class="code">
                456385
            </div>
    
            Trân trọng, <strong>Zstyle</strong>
            <hr>

            <div class="icon">
                <i class="fa-brands fa-facebook"></i>
                <i class="fa-brands fa-instagram"></i>
                <i class="fa-brands fa-google"></i>
                <i class="fa-brands fa-shopify"></i>
            </div>

            ZStyle Shop <br>
            Địa chỉ: Tầng 12, tòa T, Công viên phần mềm Quang Trung <br>
            Email: ZStylevn@gmail.com <br>
            Hotline: 19006789 <br>
        </div>
    </body>
    </html>';
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
