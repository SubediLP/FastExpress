<?php
session_start();

if (!isset($_SESSION['uName'])) {
    echo 'you are not log in';
    header('Location: ../index.html');
}
?>
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
    <title>Fast Express Dashboard</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">
    <link href="vendor/vector-map/jqvmap.min.css" rel="stylesheet" media="all">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar2">
            <div class="logo">
                <a href="#">
                    <img src="images/icon/logo_icon.png" alt="Fast Express" />
                </a>
            </div>
            <div class="menu-sidebar2__content js-scrollbar1">
                <div style="background-image: url('https://cdn.mos.cms.futurecdn.net/yUwf7uYzgR9NyACrqToWVW-1200-80.jpg');" class="account2">
                    <div class="image img-cir img-120">
                        <?php include 'database/db_connection.php';
                        $pic_mail = $_SESSION["uEmail"];
                        $sql = "SELECT * FROM acctable WHERE Email='$pic_mail' ";
                        $result = $conn->query($sql);
                        $row = $result->fetch_assoc();
                        echo '
                        <img src="database/accounts/images/' . $row["Images"] . ' "> 
                        '
                        ?>
                    </div>
                    <h4 class="name"><?php echo $_SESSION["uName"]; ?></h4>
                </div>
                <nav class="navbar-sidebar2">
                    <ul class="list-unstyled navbar__list">
                        <li>
                            <a href="admin_dashboard.php">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        <li>
                            <a href="admin_accounts.php">
                                <i class="fas fa-group"></i>Accounts</a>
                        </li>
                        <li>
                            <a href="main_order.php">
                                <i class="fas fa-suitcase"></i>Create Order</a>
                        </li>
                        <li>
                            <a href="order_action.php">
                                <i class="fas fa-check-square"></i>Manage Order</a>
                        </li>
                        <li>
                            <a href="branch.php">
                                <i class="fas fa-group"></i>Branch</a>
                        </li>
                        <li>
                            <a href="total_payment.php">
                                <i class="far fa-check-circle"></i>Payment</a>
                        </li>
                        <li>
                            <a href="chat.php">
                                <i class="fas fa-comment"></i>Chats</a>
                        </li>
                        <li>
                            <a href="logout.php">
                            <i class="zmdi zmdi-power"></i>Log Out</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container2">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop2">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap2">
                            <div class="logo d-block d-lg-none">
                            </div>
                            <div class="header-button2">

                                &nbsp;&nbsp;&nbsp;
                                <div class="account-wrap">
                                    <div class="account-item account-item--style2 clearfix js-item-menu">
                                        <div class="image">
                                            <?php include 'database/db_connection.php';
                                            $pic_mail = $_SESSION["uEmail"];
                                            $sql = "SELECT * FROM acctable WHERE Email='$pic_mail' ";
                                            $result = $conn->query($sql);
                                            $row = $result->fetch_assoc();
                                            echo '
                        <img src="database/accounts/images/' . $row["Images"] . '"> 
                        '
                                            ?>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <?php include 'database/db_connection.php';
                                                        $pic_mail = $_SESSION["uEmail"];
                                                        $sql = "SELECT * FROM acctable WHERE Email='$pic_mail' ";
                                                        $result = $conn->query($sql);
                                                        $row = $result->fetch_assoc();
                                                        echo '
                        <img src="database/accounts/images/' . $row["Images"] . '"> 
                        '
                                                        ?> </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#"><?php echo $_SESSION["uName"]; ?></a>
                                                    </h5>
                                                    <span class="email"><?php echo $_SESSION["uEmail"]; ?></span>
                                                </div>
                                            </div>

                                            <div class="account-dropdown__footer">
                                                <a href="logout.php">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--End Profile-->
                            </div>
                        </div>
                    </div>
                </div>
            </header>