<?php 
require "connect.php";

$sql = "SELECT * FROM car_information";

$result = mysqli_query($conn, $sql);

if($result){
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Your Car</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="../images/icons/favicon.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../css/util.css">
    <link rel="stylesheet" type="text/css" href="../css/main.css">
    <!--===============================================================================================-->
</head>

<body>

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <h1 class="tableheader">
                    Your Car
                </h1>
                <table class="table table-hover">

                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Brand</th>
                            <th scope="col">Model</th>
                            <th scope="col">Amount</th>
                            <th scope="col">Price</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            while ($show = mysqli_fetch_array($result, MYSQLI_ASSOC)) { 
                        ?>
                        <tr>

                            <th scope="row"><?php echo $show['id'] ?></th>
                            <td><?php echo $show['brand'] ?></td>
                            <td><?php echo $show['model'] ?></td>
                            <td><?php echo $show['number'] ?></td>
                            <td><?php echo $show['price'] ?></td>
                            <td><a id="edit" href="edit.php?id=<?php echo $show['id'] ?>">Edit</a></td>
                            <td><a id="delete" href="delete.php?id=<?php echo $show['id'] ?>">Delete</a></td>
                            <!-- <td><form action="edit.php">
                                <input type="button" class="btn btn-info" value="Edit"></input>
                            </form></td>
                            <td><form action="delete.php">
                                <input type="button" class="btn btn-danger" value="Delete"></input>
                            </form></td> -->
                        </tr>

                        <?php 
                            }
                            mysqli_free_result($result);
                        ?>
                        <!-- <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td> -->
                        <!-- <td> -->

                        <!-- </td> -->
                        <!-- </tr> -->
                    </tbody>
                </table>
                <a class="btn btn-primary" id="back" href="../index2.php">Add more</a>
            </div>
        </div>
    </div>

</body>

</html>

<?php 

} else {
    echo "Failed to show information";
}
mysqli_close($conn);
?>