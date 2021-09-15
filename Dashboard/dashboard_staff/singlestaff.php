<?php include '../database/db_connection.php';
session_start();

if (!isset($_SESSION['uName'])) {
    echo 'you are not log in';
    header('Location: ../index.html');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> </title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!-- <link rel="stylesheet" href="stf_cmt_pupop.css"> -->
    <link rel="stylesheet" href="css/sstyles.css">
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
<nav class="navbar navbar-transparent navbar-color-on-scroll fixed-top navbar-expand-lg" color-on-scroll="100" id="sectionsNav">
    <div class="container">
        <div class="navbar-translate">
            <a class="navbar-brand" href="http://fastexpress.epizy.com" target="_blank">
                <b>Fast Express</b> </a>
            <hr>
        </div>
    </div>
    <div class="d-flex justify-content-between align-items-center py-4">
        <div style="align-items: right;">
            <a href="../logout.php" class="btn btn-success btn-sm">
                Log Out
            </a>
        </div>
    </div>
</nav>

<body style="background-image: url('https://cdn.vox-cdn.com/uploads/chorus_asset/file/19858709/md_lasers_for_zoom2.jpg');" class="profile-page sidebar-collapse">

    <div class="page-header header-filter" data-parallax="true" style="background-image:url('https://askcourierservice.com/wp-content/uploads/2019/12/h1-slide2-background-img.jpg');"></div>
    <div class="main main-raised" style="background-image:url('https://media.istockphoto.com/photos/abstract-blurred-soft-white-silver-beautiful-of-electronic-lamp-light-picture-id1142008977?k=6&m=1142008977&s=612x612&w=0&h=gXNmtVV7H9DWPFvpmo8DUo_dtviKkcRVHEe8l7nZ2yI=');">
        <div class="profile-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 ml-auto mr-auto">
                        <div class="profile">
                            <div class="avatar">
                                <?php include '../database/db_connection.php';
                                $idss = $_SESSION['staff_id'];
                                $sql = "SELECT * FROM acctable WHERE ID='$idss'";
                                $result = $conn->query($sql);
                                $row = $result->fetch_assoc();
                                echo '
                                <img src="../database/accounts/images/' . $row["Images"] . '" alt="Circle Image" class="img-raised rounded-circle img-fluid">
                            </div>
                            <div class="name">
                                <h3 class="title">' . $row["Names"] . '</h3>
                                <h6> Phone:' . $row["Phone"] . '<br>
                                    Email: ' . $row["Email"] . '<br>
                                    Address:' . $row["Addresss"] . '
                                </h6>

                            </div>
                            ' ?>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 ml-auto mr-auto">
                            <div class="profile-tabs">
                                <ul class="nav nav-pills nav-pills-icons justify-content-center" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link " href="#work" role="tab" data-toggle="tab">
                                            <i class="material-icons">palette</i> Work
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#chat" role="tab" data-toggle="tab">
                                            <i class="material-icons">chat</i> Chat
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="tab-content tab-space">
                        <div class="tab-pane work" id="work">
                            <input class="form-control" id="myInput" type="text" placeholder="Search..">
                            <table id="display" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Sender Name</th>
                                        <th>Receiver Name</th>
                                        <th>Receiver Address</th>
                                        <th>Receiver Contact</th>
                                        <th>Paid Amount</th>
                                        <th>Unpaid Amount</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody id="myTable" class="searchable">
                                    <?php include '../database/db_connection.php';
                                    $branch = "branch_" . $_SESSION['branch'];
                                    $name = $_SESSION['uName'];
                                    $sql = "SELECT * FROM add_item WHERE Branch='$branch' and Staff='$name' ORDER BY ID DESC";
                                    $result = $conn->query($sql);

                                    while ($row = $result->fetch_assoc()) {
                                        $ids = $row['ID'];
                                        echo "<tr>
                            <td>" . $row["ID"] . "</td>
                            <td>" . $row["S_Name"] . "</td>
                            <td>" . $row["R_Name"] . "</td>
                            <td>" . $row["R_Address"] . "</td>
                            <td>" . $row["R_Phone"] . "</td>
                            <td>" . $row["paid_payment"] . "</td>
                            <td>" . $row["rem_payment"] . "</td>
                            <td>" . $row["P_Status"] . "</td>
                            <td>
                            <a href='dbs/deliver_product.php?deliver=" . $ids . "'>
                                                <button style='background-color:red;' class='item' data-toggle='tooltip' data-placement='top' title='Delivered'>
                                                    D
                                                </button>
                                            </a>                            
                            </td></tr>";
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>

                        <div class="tab-pane active show" id="chat">
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
                                    <form class="form-horizontal" method="post" action="chatsystem.php">
                                        <input type="hidden" name="name" value="<?php echo $_SESSION['uName'] ?>">
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

                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
    <!-- END BREADCRUMB-->
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <!-- <div class="copyright">
                    <p>Copyright © 2021. All rights reserved. Website Developed by <a href="http://laxmiprakashsubedi.com.np/">LP_Subedi</a>.</p>
                </div> -->
                    <center>
                        <div class="copyright" style="color: blue;">
                            <p>Copyright © 2021. All rights reserved. Website Developed by <a href="#">The Squad</a>.</p>
                        </div>
                    </center>
                </div>
            </div>
        </div>
    </section>
    <!-- END PAGE CONTAINER-->
    <!-- <script src="cmtpopup.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <script src="js/sscript.js"></script>
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