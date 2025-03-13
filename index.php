<?php
//   session_start();
//   if(isset($_POST['login'])){
//     if(!empty($_POST['userName']) && !empty($_POST["password"])){
//         $_SESSION['userName'] = $_POST['userName'];
//         $_SESSION['password'] = $_POST['password'];

//         header("Location: home.php");
//         exit();
//     } else {
//         $error = "Missing user name or password";
//     }
// }

// server

    // foreach($_SERVER as $key => $value){
    //     echo "{$key} = {$value} <br>";
    // }
    

    $password = "123456";
    $hash = password_hash($password, PASSWORD_DEFAULT);


    if(password_verify("123456", $hash)){
        echo "you are login";
    }
    else{
        echo "incorrect password";
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <form action= "" method="post">
        <input type="text" name="userName" placeholder="User Name: "><br> -->
        <!-- <input type="password" name="password" placeholder="password"><br> -->
        <!-- <input type="submit" name='login' value="login">
    </form> -->
    <!-- include function -->





    <!-- senitize and validate -->

    <!-- <form action="index.php" method="post">
        <input type="text" name="userName" placeholder="User Name:"> <br> 
        <input type="text" name="age" placeholder="Age: "> <br>
        <input type="text" name="email" placeholder="Email: "> <br>         
         <input type="submit" name="login" value="login">
    </form> -->


   <!-- <form action= "index.php" method="get">
        <input type="text" name="userName" placeholder="User Name"><br>
        <input type="password" name="password"placeholder="Password"><br>
        <input type="submit" value="Log in" name="submit">
   </form> -->

    <!-- <form action="index.php" method="post">
        <label for="">quantity</label><br>
        <input type="text" name="quantity">
        <input type="submit" value="total">
    </form> -->


    <!-- <form action="index.php" method="post">
        <input type="checkbox" name="payment[]" value="visa"> Visa
        <input type="checkbox" name="payment[]" value="mastercard"> MasterCard
        <input type="checkbox" name="payment[]" value="paypal"> PayPal <br>
        <button type="submit" name="submit">Thanh toán</button>
    </form> -->


</body>
</html>

<?php

// if(isset($_POST['login'])){
//     if(!empty($_POST['userName']) && !empty($_POST["password"])){
//         $_SESSION['userName'] = $_POST['userName'];
//         $_SESSION['password'] = $_POST['password'];

//         header("Location: home.php");
//         exit();
//     } else {
//         $error = "Missing user name or password";
//     }
// }

// cookie





// include function 
// include() = Copies the content of the file (php/html/text) and include it in your php file. sections of our website become reusable changes only need to be made in one place












// senitize and validate

// if(isset($_POST['login'])){
//     // $userName = $_POST['userName'];
//     // $userName = filter_input(INPUT_POST, "userName", FILTER_SANITIZE_SPECIAL_CHARS);
//     // echo "Hello {$userName}";

//     $age = filter_input(INPUT_POST, "age" , FILTER_VALIDATE_INT);

//     if(empty($age)){
//         echo "that number wasn't valid";
//     }
//     else{
//         echo "you are {$age} years old";
//     }

//     $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);

//     if(empty($email)){
//         echo "That email wasn't valid";
//     }
//     else{
//         echo "Your email is: {$email}";
//     }



// }


// <!-- function -->

// function is_even($number){
//     if($number % 2 ==0){
//         return true;
//     }
//     return false;
// }

// $number =  10;

// if(is_even($number)){
//     echo "{$number} is even";
// }
// else{
//     echo "{$number} isn't even";
// }


// string function


// $name = "Than Van Ky";

// $name = strtolower($name);
// $name1 = strtoupper($name);
// // $name  = trim($name); // it used to delete space before and after content
// $name2 = str_replace("K","k", $name);
// $count = strlen($name);
// $check = strpos($name, 'n', 5);

// $fullname = explode(" ", $name); // implode contrary to explore


// foreach ($fullname as $name){
//     echo $name . "<br>";
// }

// echo "{$name} & {$name1} & {$name2}" ;
// echo "{$count}  {$check}";











// if(isset($_POST["submit"])){
//     $payments = $_POST["payment"];
//     foreach($payments as $payment){
//         echo $payment . "<br>";
//     }
// }

//---------------isset() and empty()-----------------

// isset return true if a variable is declared and empty is contrary


//-------------------------Login--------------------
    // if($_GET["userName"] == "thanky" &&  $_GET["password"] == 123456)
    // {
    //     echo "corret";
    // }
    // else{
    //     echo "User Name or password isn't math ";
    // }

//--------------------calc---------

    // $item = "Chicken Pizza";
    // $price = 5.99;

    // $quantity = $_POST['quantity'];

    // $total = $price * $quantity;

    // echo "You have ordered {$quantity} x {$item} /s <br>";
    // echo "Your total is: \${$total}";


//------------------math function------------

?>