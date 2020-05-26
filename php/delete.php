<?php
require "connect.php";

$id = $_GET['id'];

$sql = "DELETE FROM car_information where id='$id'";

$result = mysqli_query($conn, $sql);

if($result) {
    echo "
    <script>
    alert('Delete successful');
    location.href='showinfo.php';
    </script>";
}else{ 
    echo "Delete failed".mysql_error($conn);
}
mysqli_close($conn);
?>