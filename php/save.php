<?php
require "connect.php" ;
$brand = $_POST['brand'];
$model = $_POST['model'];
$number = $_POST['number'];
$price = $_POST['price'];

// echo "<br>$brand";
// echo "<br>$model";
// echo "<br>$number";
// echo "<br>$price";

$sql = "INSERT INTO car_information (id,brand,model,number,price) VALUES ('','$brand','$model','$number','$price')";

$result = mysqli_query($conn, $sql);

if($result) {
    echo "<script>
    alert('Save successful');
    location.href='../index2.php';
    </script>";
}else{
    echo "Failed to save".mysqli_error($conn); 
} 

?>