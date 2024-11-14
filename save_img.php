<?php
session_start();
ob_start();

function generateRandomNumber() {
    $randomNumber = '';
    for ($i = 0; $i < 8; $i++) {
        // Sinh một số ngẫu nhiên từ 0 đến 9 và thêm vào dãy số
        $randomNumber .= rand(0, 9);
    }
    return $randomNumber;
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['imageData'])) {
        $imageData = $_POST['imageData'];
        
        // Chuyển đổi dữ liệu hình ảnh từ base64 và lưu vào tệp
        
        
        
            $name_img='AT_DESIGN_'.generateRandomNumber().'.png';
            if(!isset($_SESSION['mat'])){
                $_SESSION['mat']=1;
            }
            if($_SESSION['mat']==1){
                $_SESSION['img_front']=$name_img;
                $_SESSION['mat']=2;
            }else{
                if($_SESSION['mat']==2){
                    $_SESSION['img_back']=$name_img;
                    unset($_SESSION['mat']);
                }
            }
            

            $outputFile = 'upload/'.$name_img;
            $imageData = str_replace('data:image/png;base64,', '', $imageData);
            $imageData = str_replace(' ', '+', $imageData);
            $imageData = base64_decode($imageData);
            file_put_contents($outputFile, $imageData);
    } else {
        
    }
} else {
    
}
?>
