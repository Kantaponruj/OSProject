<?php
// require "php/connect.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Your Car</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!--===============================================================================================-->
</head>

<body>

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-pic js-tilt" data-tilt>
                    <img src="images/car_info.png" alt="IMG">
                </div>

                <form class="login100-form validate-form" method="post" action="php/save.php">
                    <span class="login100-form-title">
                        Your Car
                    </span>
                    <div>
                        <p>Brand</p>
                        <div class="wrap-input100 validate-input" data-validate="Please fill in the blank">
                            <input class="input100" type="text" name="brand" id="brand" placeholder="Brand">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-car" aria-hidden="true"></i>
                            </span>
                        </div>
                    </div>
                    <div>
                        <p>Models</p>
                        <div class="wrap-input100 validate-input" data-validate="Please fill in the blank">
                            <input class="input100" type="text" name="model" id="model" placeholder="Model of car">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-gears" aria-hidden="true"></i>
                            </span>
                        </div>
                    </div>
                    <div>
                        <p>Amount</p>
                        <div class="wrap-input100 validate-input" data-validate="Please fill in the blank">
                            <input class="input100" type="text" name="number" id="number" placeholder="Amount of car">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-bars" aria-hidden="true"></i>
                            </span>
                        </div>
                    </div>
                    <div>
                        <p>Price</p>
                        <div class="wrap-input100 validate-input" data-validate="Please fill in the blank">
                            <input class="input100" type="text" name="price" id="price" placeholder="Price">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-money" aria-hidden="true"></i>
                            </span>
                        </div>
                    </div>

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn">
                            Add
                        </button>
                    </div>
                    <br><br>
                    <p>Click <a id="main" href="php/showinfo.php">here</a> to see all cars</p>
                    

                </form>
            </div>
        </div>
    </div>




    <!--===============================================================================================-->
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/tilt/tilt.jquery.min.js"></script>
    <script>
        $('.js-tilt').tilt({
            scale: 1.1
        })
    </script>
    
    <!--===============================================================================================-->
    <script src="js/main.js"></script>

</body>

</html>