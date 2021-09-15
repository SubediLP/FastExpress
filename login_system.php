<?php
session_start();
include 'Dashboard/database/db_connection.php';

$uname = $_POST["username"];
$pass = $_POST["userpassword"];
$upass = md5($pass);
// $upass = $_POST["userpassword"];
$position = $_POST["position"];

if ($position == "Admin") {

    $sql = "SELECT * FROM acctable WHERE Positions = 'Admin'";

    $result = $conn->query($sql);

    while ($row = $result->fetch_assoc()) {
        if ($row == TRUE) {
            if ($row["Email"] == "$uname" && $row["Passwords"] == "$upass") {
                $_SESSION['uName'] = $row["Names"];
                $_SESSION['uEmail'] = $row["Email"];
                $_SESSION['uPos'] = $row["Positions"];

                header('location:Dashboard/admin_dashboard.php');
            } else {
                echo "<h1><center>Invalied</center></h1>";
            }
        }
    }
}else if ($position == "Branch") {

    $sql = "SELECT * FROM acctable WHERE Positions = 'branch'";

    $result = $conn->query($sql);

    while ($row = $result->fetch_assoc()) {
        if ($row == TRUE) {
            if ($row["Email"] == "$uname" && $row["Passwords"] == "$upass") {
                $_SESSION['uName'] = $row["Names"];
                $_SESSION['uEmail'] = $row["Email"];
                $_SESSION['branch_id'] = $row["ID"];

                header('location:Dashboard/branchs/singlebranch_login.php');
            } else {
                echo "<h1><center>Invalied</center></h1>";
            }
        }
    }
}else if ($position == "Staff") {
    $sql = "SELECT * FROM acctable WHERE Positions = 'Staff'";

    $result = $conn->query($sql);

    while ($row = $result->fetch_assoc()) {
        if ($row == TRUE) {
            if ($row["Email"] == "$uname" && $row["Passwords"] == "$upass") {
                $_SESSION['uName'] = $row["Names"];
                $_SESSION['uEmail'] = $row["Email"];
                $_SESSION['staff_id'] = $row["ID"];
                $_SESSION['branch'] = $row["branch_name"];
                header('location:Dashboard/dashboard_staff/singlestaff.php');
            }
        } else {
            echo "<h1><center>Invalied</center></h1>";
        }
    }
} else if ($position == "Choose Position...") {
    echo "<h1><center>Choose your Position</center></h1>";
    echo "<center><img src='https://thumbs.dreamstime.com/b/grunge-green-invalid-word-oval-rubber-seal-stamp-white-background-grunge-green-invalid-word-oval-rubber-seal-stamp-white-187761994.jpg'></center>";
} else if ($position == "Other") {
    echo "<h1><center>Sorry Sir/Madem, You can't Login.</center></h1>";
    echo "<img src='https://ih1.redbubble.net/image.496490193.6817/st,small,845x845-pad,1000x1000,f8f8f8.u7.jpg'>";
} else {
    echo "<img src='https://thumbs.dreamstime.com/b/grunge-green-invalid-word-oval-rubber-seal-stamp-white-background-grunge-green-invalid-word-oval-rubber-seal-stamp-white-187761994.jpg'>";
}

?>