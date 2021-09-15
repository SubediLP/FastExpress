<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link rel="stylesheet" href="style1.css">
    <title>Fast Express || Traking</title>
</head>

<body>


    <div class="container search_container">
        <div class="row height d-flex justify-content-center align-items-center">
            <div class="col-md-8">
                <div class="search"> <i class="fa fa-search"></i>
                    <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
                        <input type="text" name="ordID" class="form-control" placeholder="Track Your Order.....">
                        <button class="btn btn-primary">Track</button>
                        <form>
                </div>
                <br><br>
                <center>
                    <a href="index.html" class="buttonmy">Back To Home Page</a>
                </center>
            </div>
        </div>
    </div>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        include 'Dashboard/database/db_connection.php';
        $orderid = $_POST['ordID'];
        $sql = "SELECT * FROM add_item WHERE ID= '$orderid'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        if ($orderid == $row['ID']) {
    ?>
            <style>
                .search_container {
                    display: none;
                }
            </style>
            <div class="container px-1 px-md-4 py-5 mx-auto">
                <div class="card">
                    <div class="row d-flex justify-content-between px-3 top">
                        <div class="d-flex">
                            <h5>ORDER ID : <span class="text-primary font-weight-bold"><?php echo $row['ID'] ?></span></h5>
                        </div>
                        <div class="d-flex flex-column text-sm-right">
                            <p class="mb-0">For More Details</p>
                            <p><span class="font-weight-bold">9800000000</span></p>
                        </div>
                    </div> <!-- Add class 'active' to progress -->
                    <div class="row d-flex justify-content-center">
                        <div class="col-12">
                            <ul id="progressbar" class="text-center">
                                <li class="active step0"></li>
                                <?php
                                if ($row['Branch'] != '') {
                                    echo '
                                <li class="active step0"></li>
                                ';
                                }
                                ?>
                                <?php
                                if ($row['Staff'] != '') {
                                    echo '
                                <li class="active step0"></li>
                                ';
                                }
                                ?>
                                <?php
                                if ($row['P_Status'] == 'Delivered') {
                                    echo '
                                <li class="active step0"></li>
                                ';
                                }
                                ?>
                            </ul>
                        </div>
                    </div>
                    <div class="row justify-content-between top">
                        <div class="row d-flex icon-content"> <img class="icon" src="https://static.thenounproject.com/png/1851310-200.png">
                            <div class="d-flex flex-column">
                                <p class="font-weight-bold">Order<br>Processed</p>
                            </div>
                        </div>
                        <div class="row d-flex icon-content"> <img class="icon" src="https://cdn.iconscout.com/icon/premium/png-256-thumb/delivery-1772430-1508326.png">
                            <div class="d-flex flex-column">
                                <p class="font-weight-bold">Order<br>Shipped</p>
                            </div>
                        </div>
                        <div class="row d-flex icon-content"> <img class="icon" src="https://w7.pngwing.com/pngs/139/672/png-transparent-delivery-computer-icons-courier-business-buying-and-selling-text-logo-cargo.png">
                            <div class="d-flex flex-column">
                                <p class="font-weight-bold">Order<br>En Route</p>
                            </div>
                        </div>
                        <div class="row d-flex icon-content"> <img class="icon" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSTqK4kXZjvBrmUc2Bp00rFi7Ds_eIk73T3UA&usqp=CAU">
                            <div class="d-flex flex-column">
                                <p class="font-weight-bold">Order<br>Arrived</p>
                            </div>
                        </div>
                    </div>
                    <a href="index.html" class="buttonmy">Back To Home Page</a>
                </div>
            </div>
            <script>
                window.setTimeout(function() {
                    window.location = "trackorder.php";
                }, 15000);
             </script>            
    <?php
        } else {
            echo '
        <style>
        .search_container{
            display: none;
        }
    </style>
        <div class="container px-1 px-md-4 py-5 mx-auto">
        <div class="card">
        <div class="row d-flex justify-content-center">
            <h3 class="text-center">Invalied Order ID</h3>
        </div>
        </div>
        </div>
        <script>
        window.setTimeout(function() {
            window.location = "trackorder.php";
        }, 5000);
        </script>
        ';
        }
    }
    ?>
</body>

</html>