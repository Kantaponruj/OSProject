<?php
require "connect.php";

$id = $_GET['id'];

$newbrand = $_POST['brand'];
$newmodel = $_POST['model'];
$number = $_POST['number'];
$price = $_POST['price'];


$sql = "UPDATE car_information SET brand='$newbrand',model='$newmodel',number='$number',price='$price' WHERE id='$id' ";

$result = mysqli_query($conn, $sql);

if($result) {
    // echo "$id<br>";
    // echo "$newbrand<br>";
    // echo "$newmodel<br>";
    // echo "$number<br>";
    // echo "$price<br>";
    echo "<script>
    alert('Save successful');
    location.href='showinfo.php';
    </script>";
}else{
    echo "Failed to save".mysqli_error($conn);
}

mysqli_close($conn);

?>