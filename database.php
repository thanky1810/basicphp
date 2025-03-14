<?php
// Bật hiển thị lỗi để dễ dàng debug


// Thông tin kết nối cơ sở dữ liệu
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "businessdb";


try{
    $conn = mysqli_connect($servername, $username, $password, $dbname);
}
catch(mysqli_sql_exception){
    echo "could not connect";
}
if($conn){
    echo "connect successful";
}



// Đóng kết nối (nếu cần)
// $conn->close();
?>