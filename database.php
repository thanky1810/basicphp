<?php
// Bật hiển thị lỗi để dễ dàng debug


// Thông tin kết nối cơ sở dữ liệu
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "businessdb";


$conn = mysqli_connect($servername, $username, $password, $dbname);

if($conn){
    echo "connect successful";
}
else{
    echo "could not connect";
}


// Đóng kết nối (nếu cần)
// $conn->close();
?>