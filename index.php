<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>




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


$name = "Than Van Ky";

$name = strtolower($name);
$name1 = strtoupper($name);
// $name  = trim($name); // it used to delete space before and after content
$name2 = str_replace("K","k", $name);
$count = strlen($name);
$check = strpos($name, 'n', 5);

$fullname = explode(" ", $name); // implode contrary to explore


foreach ($fullname as $name){
    echo $name . "<br>";
}

echo "{$name} & {$name1} & {$name2}" ;
echo "{$count}  {$check}";












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