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
                                    <a href="#">Admin</a>
                                </li>
                                <li class="list-inline-item seprate">
                                    <span>/</span>
                                </li>
                                <li class="list-inline-item">Payment -> Total</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Breadcomes -->

<div>
    <div class="tab-pane fade show active" id="pills-total" role="tabpanel" aria-labelledby="pills-home-tab">
        <!-- DATA TABLE -->
        <div class="table-data__tool">
            <div class="table-data__tool-left">
                <button class="au-btn-filter">
                    <i class="zmdi zmdi-filter-list"></i>Search
                    <input type="text" id="myInput" class="form-control" placeholder="Type Here...">
                </button>
            </div>
        </div>
        <div class="table-data__tool-right">
            <span style="margin-left: 100px;"> <b>Total Paid Amount : RS
                    <?php include 'database/db_connection.php';

                    $sql = "SELECT * FROM  add_item";
                    $result = $conn->query($sql);
                    $paid_amt = 0;
                    while ($row = $result->fetch_assoc()) {
                        $paid_amt = $paid_amt + $row['paid_payment'];
                    }
                    ?>
                    <?php echo $paid_amt ?> </b></span>

            <span style="margin-left: 500px;"> <b>Total Unpaid Amount :
                    <?php include 'database/db_connection.php';

                    $sql = "SELECT * FROM  add_item";
                    $result = $conn->query($sql);
                    $unpaid_amt = 0;
                    while ($row = $result->fetch_assoc()) {
                        $unpaid_amt = $unpaid_amt + $row['rem_payment'];
                    }
                    ?>
                    RS <?php echo $unpaid_amt ?> </b></span>

        </div>
        <div class="table-responsive table--no-card m-b-30">
            <table class="table table-borderless table-striped table-earning">
                <thead>
                    <tr>
                        <th scope="col">Order ID</th>
                        <th scope="col">Paid Amount</th>
                        <th scope="col">Remaining Amount</th>
                        <th scope="col">View</th>
                        <th scope="col">Edit</th>
                    </tr>
                </thead>
                <tbody id="myTable">
                    <?php include 'database/db_connection.php';
                    $sql = "SELECT * FROM add_item ORDER BY ID DESC";
                    $result = $conn->query($sql);
                    while ($row = $result->fetch_assoc()) {
                        $ids = $row["ID"];
                    ?>
                        <tr">
                            <td class="bg-light"><?php echo $row['ID'] ?></td>
                            <td class="bg-light"><?php echo $row['paid_payment'] ?></td>
                            <?php 
                            if($row['rem_payment'] != 0){
                            ?>
                                <td class="bg-warning"><?php echo $row['rem_payment'] ?></td>
                            <?php 
                            }else{
                            ?>
                                <td class="bg-light"><?php echo $row['rem_payment'] ?></td>
                            <?php 
                            }
                            ?>
                            <td class="bg-danger"><button class="item btn btn-success" data-toggle="modal" data-target="#viewModal<?php echo $row['ID'] ?>">
                                    <i class="zmdi zmdi-eye"></i></button></td>
                            <td class="bg-info"><button class="item btn btn-success" data-toggle="modal" data-target="#editpaymentModal<?php echo $row['ID'] ?>">
                                    <i class="zmdi zmdi-edit"></i></button></td>
                            </tr>
                        <?php
                        include 'admin_model/view_order_model.php';
                        include 'admin_model/edit_payment_model.php';
                    }
                        ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
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
<?php
include 'include/footer.php';
?>