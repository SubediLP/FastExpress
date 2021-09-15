<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Fast Express</title>

    <!-- Fontfaces CSS-->
    <link href="../css/font-face.css" rel="stylesheet" media="all">
    <link href="../vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="../vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="../vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="../vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="../vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="../vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="../vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="../vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="../vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="../vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="../vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="../css/theme.css" rel="stylesheet" media="all">

    <!-- table scroll style -->
    <style>
        .my-custom-scrollbar {
            position: relative;
            height: 250px;
            overflow: auto;
        }

        .table-wrapper-scroll-y {
            display: block;
        }
    </style>
    <style>
        .chat h2 {
            color: white;
        }

        .chat label {
            color: white;
        }

        .chat span {
            color: #673ab7;
            font-weight: bold;
        }

        .chatcontainer {
            margin-top: 3%;
            width: 60%;
            background-color: #26262b9e;
            padding-right: 10%;
            padding-left: 10%;
            margin-left: 280px;

        }

        .chat .btn-primary {
            background-color: #673AB7;
        }

        .display-chat {
            height: 300px;
            background-color: #d69de0;
            margin-bottom: 4%;
            overflow: auto;
            padding: 15px;
        }

        .message {
            background-color: #c616e469;
            color: white;
            border-radius: 5px;
            padding: 5px;
            margin-bottom: 3%;
        }
    </style>

</head>

<body class="animsition">

    <div class="page-wrapper">
        <!-- HEADER DESKTOP-->
        <header class="header-desktop3 d-none d-lg-block">
            <div class="section__content section__content--p35">
                <div class="header3-wrap">
                    <div class="header__logo">
                        <a href="#">
                            <img src="../images/icon/logo_icon.png" alt="Fast Express" />
                        </a>
                    </div>
                    <div class="header__navbar">
                        <ul class="list-unstyled">
                            <li>
                                <a href="#dashboard">
                                    <i class="fas fa-shopping-basket"></i>
                                    <span class="bot-line"></span>Dashboard</a>
                            </li>
                            <li>
                                <a href="#order">
                                    <i class="fas fa-trophy"></i>
                                    <span class="bot-line"></span>Order</a>
                            </li>
                            <li>
                                <a href="#staff">
                                    <i class="fas fa-male"></i>
                                    <span class="bot-line"></span>Staff</a>
                            </li>
                            <li>
                                <a href="#chats">
                                    <i class="fas fa-trophy"></i>
                                    <span class="bot-line"></span>Chats</a>
                            </li>
                        </ul>
                    </div>
                    <div class="header__tool">
                        <div class="account-wrap">
                            <div class="account-item account-item--style2 clearfix js-item-menu">
                                <div class="content">
                                    <a class="js-acc-btn" href="#"><?php echo $user; ?> Branch</a>
                                </div>
                                <div class="account-dropdown js-dropdown">
                                    <div class="info clearfix">
                                        <div class="content">
                                            <h5 class="name">
                                                <a href="#"><?php echo $user ?> Branch</a>
                                            </h5>
                                            <span class="email"><?php echo $mail ?></span>
                                        </div>
                                    </div>
                                    <div class="account-dropdown__footer">
                                        <a href="../logout.php">
                                            <i class="zmdi zmdi-power"></i>Logout</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- PAGE CONTENT-->
        <div class="page-content--bgf7">
            <!-- STATISTIC-->
            <hr>
            <div class="spacer"></div>
            <div class="card-header">
                <strong class="card-title">
                    <center>Dashboard</center>
                </strong>
            </div>
            <section id="dashboard" class="statistic statistic2">
                <div class="container">
                    <div class="row">
                        <?php include '../database/db_connection.php';

                        $dbtname = "branch_" . $user;
                        $sql = "SELECT * FROM $dbtname";
                        $result = $conn->query($sql);
                        $row = mysqli_num_rows($result);
                        echo '
                        <div class="col-md-6 col-lg-3">
                            <div class="statistic__item statistic__item--green">
                                <h2 class="number">' . $row . '</h2>
                                <span class="desc">Total Items</span>
                                <div class="icon">
                                    <i class="zmdi zmdi-account-o"></i>
                                </div>
                            </div>
                        </div>
                        ' ?>

                        <?php include '../database/db_connection.php';

                        $dbtname = "branch_" . $user;
                        $sql = "SELECT * FROM add_item WHERE Branch='$dbtname' and P_Status='Delivered'";
                        $result = $conn->query($sql);
                        $row = mysqli_num_rows($result);
                        echo '
                        <div class="col-md-6 col-lg-3">
                            <div class="statistic__item statistic__item--blue">
                                <h2 class="number">' . $row . '</h2>
                                <span class="desc">Delivered Items</span>
                                <div class="icon">
                                    <i class="zmdi zmdi-calendar-note"></i>
                                </div>
                            </div>
                        </div>
                        ' ?>
                        <?php include '../database/db_connection.php';

                        $dbtname = "branch_" . $user;
                        $sql = "SELECT * FROM acctable WHERE branch_name='$user' ORDER BY ID DESC";
                        $result = $conn->query($sql);
                        $row = mysqli_num_rows($result);
                        echo '
                        <div class="col-md-6 col-lg-3">
                            <div class="statistic__item statistic__item--blue">
                                <h2 class="number">' . $row . '</h2>
                                <span class="desc">Staff</span>
                                <div class="icon">
                                    <i class="zmdi zmdi-man"></i>
                                </div>
                            </div>
                        </div>
                        ' ?>
                        <?php include '../database/db_connection.php';

                        $dbtname = "branch_" . $user;
                        $sql = "SELECT * FROM chat";
                        $result = $conn->query($sql);
                        $row = mysqli_num_rows($result);
                        echo '
                        <div class="col-md-6 col-lg-3">
                            <div class="statistic__item statistic__item--blue">
                                <h2 class="number">' . $row . '</h2>
                                <span class="desc">Chats</span>
                                <div class="icon">
                                    <i class="zmdi zmdi-man"></i>
                                </div>
                            </div>
                        </div>
                        ' ?>
                    </div>
                </div>
            </section>
            <!-- END STATISTIC-->
            <hr>
            <div class="spacer"></div>
            <div class="card-header">
                <strong class="card-title">
                    <center>Order Table</center>
                </strong>
            </div>
            <div id='order' class="table-responsive table-responsive-data2">
                <input class="form-control" id="myInput" type="text" placeholder="Search Items..">
                <table class="table table-data2">
                    <thead>
                        <tr>
                            <th>Order ID</th>
                            <th>branch status</th>

                            <th>Order status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody id="myTable" class="overflow-auto">
                        <?php include '../database/db_connection.php';

                        $dbtname = "branch_" . $user;

                        $sql = "SELECT * FROM $dbtname ORDER BY ID DESC";
                        $result = $conn->query($sql);

                        while ($row1 = $result->fetch_assoc()) {
                            $ids =  $row1['order_id'];
                            $ID = $row1['order_id'];

                        ?>
                            <tr class="tr-shadow">
                                <?php
                                include '../database/db_connection.php';
                                $sql1 = "SELECT * FROM add_item WHERE ID ='$ids'";
                                $result1 = $conn->query($sql1);
                                while ($row = $result1->fetch_assoc()) {
                                ?>
                                    <td><?php echo $row1['order_id'] ?></td>
                                    <td><?php echo $row1['order_status'] ?></td>
                                    <td>
                                        <span class="block-email"><?php echo $row['P_Status'] ?></span>
                                    </td>
                                    <td>
                                        <div class="table-data-feature">
                                            <button class="item" data-toggle="modal" data-target="#viewModal<?php echo $row['ID'] ?>">
                                                <i class="fas fa-arrows-alt"></i></button>
                                            <button class="item" data-toggle="modal" data-target="#send_modal<?php echo $row['ID'] ?>" data-placement="top" title="Send">
                                                <i class="zmdi zmdi-mail-send"></i>
                                            </button>
                                            <a href="../database/order/deliver_order.php?deliver=<?php echo $ids ?>">
                                                <button class="item" data-toggle="tooltip" data-placement="top" title="Delivered">
                                                    <i class="fas fa-check"></i>
                                                </button>
                                            </a>
                                        </div>
                                    </td>
                            </tr>
                            <tr class="spacer"></tr>
                    <?php
                                    include '../admin_model/view_order_model.php';
                                    include 'sendordermodel.php';
                                }
                            }
                    ?>
                    </tbody>
                </table>
            </div>

            <div class="card-header">
                <strong class="card-title">
                    <center>Staff Table</center>
                </strong>
            </div>
            <!-- Stadd -->
            <div class="row">
                <div class="col-lg-6">
                    <!-- USER DATA-->
                    <div class="user-data m-b-30">
                        <h3 class="title-3 m-b-30">
                            <i class="zmdi zmdi-account-calendar"></i>Create Staff
                        </h3>
                        <form action="../database/branch/create_staff.php" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="branch" value="<?php echo $user; ?>">
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="name" class="control-label mb-1">Name</label>
                                        <input id="name" name="name" type="text" class="form-control" placeholder="Full Name">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <label for="address" class="control-label mb-1">Address</label>
                                    <div class="input-group">
                                        <input id="address" name="address" type="text" class="form-control" placeholder="Enter Address">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="contact" class="control-label mb-1">Contact</label>
                                        <input id="contact" name="contact" type="text" class="form-control" placeholder="Phone Number">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <label for="Email" class="control-label mb-1">Email</label>
                                    <div class="input-group">
                                        <input id="Email" name="email" type="email" class="form-control" placeholder="Email">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="pass" class="control-label mb-1">Password</label>
                                        <input id="pass" name="password" type="password" class="form-control" placeholder="Password">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <label for="Image" class="control-label mb-1">Image</label>
                                    <div class="input-group">
                                        <input id="Image" name="image" type="file" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div>
                                <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                    <span id="payment-button-amount">Create</span>
                                </button>
                            </div>
                        </form>
                    </div>

                </div>

                <div class="col-lg-6">
                    <div class="top-campaign">
                        <h3 class="title-3 m-b-30">Staffs</h3>
                        <div class="table-wrapper-scroll-y my-custom-scrollbar">

                            <table class="table table-bordered table-striped mb-0">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Image</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Contact</th>
                                        <th scope="col">Address</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Password</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php include '../database/db_connection.php';

                                    $sql = "SELECT * FROM acctable WHERE branch_name='$user' ORDER BY ID DESC";
                                    $result = $conn->query($sql);

                                    while ($row = $result->fetch_assoc()) {
                                        $ids = $row["ID"];

                                    ?>
                                        <tr>
                                            <td class="bg-warning"><?php echo $row['ID'] ?></td>
                                            <td class="bg-warning">
                                                <img src="../database/accounts/images/<?php echo $row['Images'] ?>" class="rounded-circle" width="50" height="50">
                                            </td>
                                            <td class="bg-warning"><?php echo $row['Names'] ?></td>
                                            <td class="bg-warning"><?php echo $row['Phone'] ?></td>
                                            <td class="bg-warning"><?php echo $row['Addresss'] ?></td>
                                            <td class="bg-warning"><?php echo $row['Email'] ?></td>
                                            <td class="bg-warning"><?php echo $row['Passwords'] ?></td>
                                            <td class="bg-warning">
                                                <a href="../database/accounts/delete_staff.php?del=<?php echo $ids ?>">
                                                    <button class="btn btn-success" data-toggle="tooltip" data-placement="top" title="Delete">
                                                        <i class="zmdi zmdi-delete"></i>
                                                    </button>
                                                </a>
                                            </td>
                                        </tr>

                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>

                        </div>
                    </div>
                    <!--  END Staff-->
                </div>
            </div>
            <!-- Chats -->
            <div class="spacer"></div>
            <div class="card-header">
                <strong class="card-title">
                    <center>Chats</center>
                </strong>
            </div>
            <div id="chats">
                <?php
                include "../chat_system/config.php";

                $sql = "SELECT * FROM `chat` ORDER BY ID DESC";

                $query = mysqli_query($conn, $sql);
                ?>
                <div class="chatcontainer">
                    <center>
                        <h2>Welcome <span style="color:#dd7ff3;"><?php echo $_SESSION['uName']; ?> !</span></h2>
                        <label>Join the chat</label>
                    </center></br>
                    <div class="display-chat">
                        <?php
                        if (mysqli_num_rows($query) > 0) {
                            while ($row = mysqli_fetch_assoc($query)) {
                        ?>
                                <div class="message">
                                    <p>
                                        <span><?php echo $row['name']; ?> :</span>
                                        <?php echo $row['message']; ?>
                                    </p>
                                </div>
                            <?php
                            }
                        } else {
                            ?>
                            <div class="message">
                                <p>
                                    No previous chat available.
                                </p>
                            </div>
                        <?php
                        }
                        ?>

                    </div>
                    <form class="form-horizontal" method="post" action="chat_system.php">
                        <input type="hidden" name="name" value="<?php echo $user ?>">
                        <div class="form-group">
                            <div class="col-sm-10">
                                <textarea name="msg" class="form-control" placeholder="Type your message here..."></textarea>
                            </div>

                            <div class="col-sm-2">
                                <button type="submit" class="btn btn-primary">Send</button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
            <!-- End CHats -->
            <!-- END STATISTIC-->

            <!-- END BREADCRUMB-->
            <section>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- <div class="copyright">
                    <p>Copyright © 2021. All rights reserved. Website Developed by <a href="http://laxmiprakashsubedi.com.np/">LP_Subedi</a>.</p>
                </div> -->
                            <div class="copyright">
                                <p>Copyright © 2021. All rights reserved. Website Developed by <a href="#">The Squad</a>.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="../vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="../vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="../vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="../vendor/slick/slick.min.js">
    </script>
    <script src="../vendor/wow/wow.min.js"></script>
    <script src="../vendor/animsition/animsition.min.js"></script>
    <script src="../vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="../vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="../vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="../vendor/circle-progress/circle-progress.min.js"></script>
    <script src="../vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="../vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="../vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="../js/main.js"></script>
    <script>
        $(document).ready(function() {
            $("#myInput").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#myTable tr").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script>
</body>

</html>
<!-- end document-->