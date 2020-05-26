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
                    <?php 
require "connect.php";

$id = $_GET['id'];

$sql = "SELECT * FROM car_information";

$result = mysqli_query($conn, $sql);

if($result) { 
?>
                    <tbody>
                        <?php 
                            while ($show = mysqli_fetch_array($result, MYSQLI_ASSOC)) { 
                                // echo $show['id'];
                                if($id == $show['id']) {  
                        ?>
                        <tr>
                            <form method="post" action="saveedit.php?id=<?php echo $show['id'] ?>">
                                <th scope="row"><?php echo $show['id'] ?></th>
                                <!-- <td><input type="text" class="form-control" placeholder="Brand" id="newbrand"
                                        name="newbrand"></td>
                                <td><input type="text" class="form-control" placeholder="Model" id="newmodel"
                                        name="newmodel"></td>
                                <td><input type="text" class="form-control" placeholder="Number" id="newnumber"
                                        name="newnumber"></td>
                                <td><input type="text" class="form-control" placeholder="Price" id="newprice"
                                        name="newprice"></td> -->
                                <td><input type="text" class="form-control" placeholder="Brand" id="brand"
                                        name="brand" value="<?php echo $show['brand'] ?>"></td>
                                <td><input type="text" class="form-control" placeholder="Model" id="model"
                                        name="model" value="<?php echo $show['model'] ?>"></td>
                                <td><input type="text" class="form-control" placeholder="Number" id="number"
                                        name="number" value="<?php echo $show['number'] ?>"></td>
                                <td><input type="text" class="form-control" placeholder="Price" id="price"
                                        name="price" value="<?php echo $show['price'] ?>"></td>
                                <td><button class="btn btn-success">
                                        Save
                                    </button></td>
                                <!-- <td><a id="save" href="saveedit.php?id=<?php echo $show['id'] ?>">Save</a>
                                </td> -->
                            </form>
                            <td><a id="cancle" class="btn btn-danger" href="showinfo.php">Cancle</a></td>
                            <!-- <td><form action="edit.php">
                                <input type="button" class="btn btn-info" value="Edit"></input>
                            </form></td>
                            <td><form action="delete.php">
                                <input type="button" class="btn btn-danger" value="Delete"></input>
                            </form></td> -->

                        </tr>
                        <?php
                                }else{
                        ?>
                    <tbody>
                        <tr>

                            <th scope="row"><?php echo $show['id'] ?></th>
                            <td><?php echo $show['brand'] ?></td>
                            <td><?php echo $show['model'] ?></td>
                            <td><?php echo $show['number'] ?></td>
                            <td><?php echo $show['price'] ?></td>
                            <td><a id="edit" href="edit.php?id=<?php echo $show['id'] ?>">Edit</a>
                            </td>
                            <td><a id="delete" href="delete.php?id=<?php echo $show['id'] ?>"
                                    style="color=#F23005">Delete</a></td>
                            <!-- <td><form action="edit.php">
                                <input type="button" class="btn btn-info" value="Edit"></input>
                            </form></td>
                            <td><form action="delete.php">
                                <input type="button" class="btn btn-danger" value="Delete"></input>
                            </form></td> -->
                        </tr>
                    <tbody>
                        <?php
                                } 
                            }
                            mysqli_free_result($result);
                        ?>
                    </tbody>
                    <?php
    // echo "<script>
    // alert('Edit successful');
    // location.href='showinfo.php';
    // </script>";
}else { 
    echo "Failed to show information";
    }
// echo "Fail to edit";
?>
                </table>
            </div>
        </div>
    </div>

</body>

</html>