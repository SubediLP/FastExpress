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
                                <li class="list-inline-item">Order -> Action</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- STATISTIC-->
<div class="table-responsive table--no-card m-b-30">
    <table class="table table-borderless table-striped table-earning">
        <thead>
            <tr>
                <th>order ID</th>
                <th>Status</th>
                <th>address</th>
                <th>Branch</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php include 'database/db_connection.php';

            $sql = "SELECT * FROM add_item ORDER BY ID DESC";
            $result = $conn->query($sql);

            while ($row = $result->fetch_assoc()) {
                $ids = $row["ID"];

            ?>

                <tr class="tr-shadow">
                    <td><?php echo $row['ID'] ?></td>
                    <td>
                        <span class="block-email"><?php echo $row['P_Status'] ?></span>
                    </td>
                    <td class="desc"><?php echo $row['R_Address'] ?></td>
                    <td class="desc"><?php echo $row['Branch'] ?></td>
                    <td>
                        <div class="table-data-feature">
                            <button class="item" data-toggle="modal" data-target="#viewModal<?php echo $row['ID'] ?>">
                                            <i class="fas fa-arrows-alt"></i></button>

                            <button class="item" data-toggle="modal" data-target="#editModal<?php echo $row['ID'] ?>">
                                <i class="zmdi zmdi-edit"></i></button>

                            <a href="database/order/delete_deliver_order.php?del=<?php echo $ids ?>">
                                <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                    <i class="zmdi zmdi-delete"></i>
                                </button>
                            </a>

                            <a href="database/order/delete_deliver_order.php?deliver=<?php echo $ids ?>">
                                <button class="item" data-toggle="tooltip" data-placement="top" title="Delivered">
                                    <i class="fas fa-check"></i>
                                </button>
                            </a>

                            <button class="item" data-toggle="modal" data-target="#send_modal<?php echo $row['ID'] ?>" data-placement="top" title="Send">
                                <i class="zmdi zmdi-mail-send"></i>
                            </button>

                        </div>
                    </td>
                </tr>
                <tr class="spacer"></tr>

            <?php
                include 'admin_model/edit_order_model.php';
                include 'admin_model/view_order_model.php';
                include 'admin_model/send_item_model.php';
            }
            ?>

        </tbody>
    </table>
</div>
</div>
<!-- END STATISTIC-->
<!-- END BREADCRUMB-->

<?php
include 'include/footer.php';
?>