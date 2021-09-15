<?php
include 'include/header.php';
?>

<!-- BREADCRUMB-->
<section class="au-breadcrumb m-t-75">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="au-breadcrumb-content">
                        <div class="au-breadcrumb-left">
                            <span class="au-breadcrumb-span">You are here:</span>
                            <ul class="list-unstyled list-inline au-breadcrumb__list">
                                <li class="list-inline-item active">
                                    <a href="#">Home</a>
                                </li>
                                <li class="list-inline-item seprate">
                                    <span>/</span>
                                </li>
                                <li class="list-inline-item">Dashboard</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- STATISTIC-->
<section class="statistic statistic2">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-3">
                <div class="statistic__item statistic__item--green">
                    <?php include 'database/db_connection.php';

                    $sql = "SELECT * FROM acctable WHERE Positions='Admin'";
                    $result = $conn->query($sql);
                    $row = mysqli_num_rows($result);
                    echo ' 
                                <h2 class="number">' . $row . '</h2> ' ?>
                    <span class="desc">Admin</span>
                    <div class="icon">
                        <i class="zmdi zmdi-account-o"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="statistic__item statistic__item--orange">
                    <?php include 'database/db_connection.php';

                    $sql = "SELECT * FROM chat";
                    $result = $conn->query($sql);
                    $row = mysqli_num_rows($result);
                    echo '
                                <h2 class="number">' . $row . '</h2> ' ?>
                    <span class="desc">Chat</span>
                    <div class="icon">
                        <i class="zmdi zmdi-shopping-cart"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="statistic__item statistic__item--blue">
                    <?php include 'database/db_connection.php';

                    $sql = "SELECT * FROM acctable WHERE Positions='Staff'";
                    $result = $conn->query($sql);
                    $row = mysqli_num_rows($result);
                    echo '
                                <h2 class="number">' . $row . '</h2> ' ?>
                    <span class="desc">Staff</span>
                    <div class="icon">
                        <i class="zmdi zmdi-calendar-note"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="statistic__item statistic__item--red">
                    <h2 class="number">1 </h2>
                    <span class="desc">Technician</span>
                    <div class="icon">
                        <i class="zmdi zmdi-money"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 col-lg-3">
                <div class="statistic__item statistic__item--blue">
                    <?php include 'database/db_connection.php';

                    $sql = "SELECT * FROM  add_item";
                    $result = $conn->query($sql);
                    $row = mysqli_num_rows($result);
                    echo '
                                <h2 class="number">' . $row . '</h2>' ?>
                    <span class="desc">Order</span>
                    <div class="icon">
                        <i class="zmdi zmdi-calendar-note"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="statistic__item statistic__item--red">

                    <?php include 'database/db_connection.php';
                    $sql = "SELECT * FROM  add_item WHERE P_Status='Delivered'";
                    $result = $conn->query($sql);
                    $row = mysqli_num_rows($result);
                    echo '
                                <h2 class="number">' . $row . '</h2> 
' ?>
                    <span class="desc">Delivered</span>
                    <div class="icon">
                        <i class="zmdi zmdi-money"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="statistic__item statistic__item--green">
                    <?php include 'database/db_connection.php';

                    $sql = "SELECT * FROM  add_item WHERE P_Status='Active'";
                    $result = $conn->query($sql);
                    $row = mysqli_num_rows($result);
                    echo '
                                <h2 class="number">' . $row . '</h2> ' ?>
                    <span class="desc">Pending</span>
                    <div class="icon">
                        <i class="zmdi zmdi-account-o"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="statistic__item statistic__item--orange">
                    <?php include 'database/db_connection.php';

                    $sql = "SELECT * FROM  add_item WHERE P_Status='Returned'";
                    $result = $conn->query($sql);
                    $row = mysqli_num_rows($result);
                    echo '
                                <h2 class="number">' . $row . '</h2> ' ?>
                    <span class="desc">Other</span>
                    <div class="icon">
                        <i class="zmdi zmdi-shopping-cart"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 col-lg-3">
                <div class="statistic__item statistic__item--orange">
                    <?php include 'database/db_connection.php';

                    $sql = "SELECT * FROM  add_item";
                    $result = $conn->query($sql);
                    $paid_amt = 0;
                    while ($row = $result->fetch_assoc()) {
                        $paid_amt = $paid_amt + $row['paid_payment'];
                    }
                    echo '
                                <h2 class="number">RS. ' . $paid_amt . '</h2> ' ?>
                    <span class="desc">Paid Amount / Items</span>
                    <div class="icon">
                        <i class="zmdi zmdi-shopping-cart"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="statistic__item statistic__item--blue">
                    <?php include 'database/db_connection.php';

                    $sql = "SELECT * FROM add_item";
                    $result = $conn->query($sql);
                    $rem_amt = 0;
                    while ($row = $result->fetch_assoc()) {
                        $rem_amt = $rem_amt + $row['rem_payment'];
                    }
                    echo '
                                <h2 class="number">RS. ' . $rem_amt . '</h2> ' ?>
                    <span class="desc">Remaining Amount / Item</span>
                    <div class="icon">
                        <i class="zmdi zmdi-calendar-note"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="statistic__item statistic__item--red">
                    <?php include 'database/db_connection.php';

                    $sql = "SELECT * FROM acctable WHERE Positions='branch'";
                    $result = $conn->query($sql);
                    $row = mysqli_num_rows($result);
                    echo '
            <h2 class="number">' . $row . '</h2> ' ?>
                    <span class="desc">Branch</span>
                    <div class="icon">
                        <i class="zmdi zmdi-money"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END STATISTIC-->
<?php
include 'include/footer.php';
?>