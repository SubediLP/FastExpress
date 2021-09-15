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
                                <li class="list-inline-item">Branch</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- STATISTIC-->

<div class="card">
    <div class="card-body">
        <div class="default-tab">
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active" data-toggle="tab" href="#nav-branchs" role="tab" aria-controls="nav-home" aria-selected="true">Branchs</a>
                    <a class="nav-item nav-link" data-toggle="tab" href="#nav-add" role="tab" aria-controls="nav-profile" aria-selected="false">Add New Branch</a>
                    <a class="nav-item nav-link" data-toggle="tab" href="#nav-open-branch" role="tab" aria-controls="nav-contact" aria-selected="false">Open Branch</a>
                </div>
            </nav>
            <div class="tab-content pl-3 pt-2" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-branchs" role="tabpanel" aria-labelledby="nav-home-tab">
                    <p>
                    <div class="table-responsive m-b-40">
                        <table class="table table-borderless table-data3">
                            <thead>
                                <tr>
                                    <th>Branch Name</th>
                                    <th>Address</th>
                                    <th>Email</th>
                                    <th>Password</th>
                                    <th>Manager</th>
                                    <th>Contact</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php include 'database/db_connection.php';
                                $sql = "SELECT * FROM acctable WHERE Positions = 'branch' ORDER BY ID DESC";
                                $result = $conn->query($sql);

                                while ($row = $result->fetch_assoc()) {
                                    $ids = $row["ID"];

                                ?>
                                    <tr>
                                        <td><?php echo $row['Names'] ?></td>
                                        <td><?php echo $row['Addresss'] ?></td>
                                        <td><?php echo $row['Email'] ?></td>
                                        <td class="process"><?php echo $row['Passwords'] ?></td>
                                        <td><?php echo $row['Branch_Manager'] ?></td>
                                        <td><?php echo $row['Phone'] ?></td>
                                        <td>
                                            <a href='database/branch/delete_branch.php?del=<?php echo $ids ?>'>
                                                <button type='button' class='btn btn-success'><i class='fa fa-trash'></i></button>
                                            </a>

                                            <button class="item btn btn-success" data-toggle="modal" data-target="#updateModal<?php echo $row['ID'] ?>">
                                            <i class="fas fa-edit"></i></button>

                                            <a href='branchs/singlebranch_admin.php?view=<?php echo $ids ?>' target='_blank''>
                                                                <button type=' button' class='btn btn-success'><i class='fa fa-eye'></i></button>
                                            </a>
                                        </td>
                                    </tr>
                                    
                                <?php
                                    include 'admin_model/update_branch_model.php';
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>

                    </p>
                </div>

                <div class="tab-pane fade" id="nav-add" role="tabpanel" aria-labelledby="nav-profile-tab">
                    <p>
                    <div class="card">
                        <div class="card-header">Create New Branch</div>
                        <div class="card-body card-block">
                            <form action="database/branch/create_branch.php" method="post">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">Branch Name</div>
                                        <input type="text" name="branchname" class="form-control">
                                        <div class="input-group-addon">
                                            <i class="fa fa-user"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">Email</div>
                                        <input type="email" name="email" class="form-control">
                                        <div class="input-group-addon">
                                            <i class="fa fa-envelope"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">Password</div>
                                        <input type="password" name="password" class="form-control">
                                        <div class="input-group-addon">
                                            <i class="fa fa-asterisk"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">Address</div>
                                        <input type="text" name="address" class="form-control">
                                        <div class="input-group-addon">
                                            <i class="fa fa-home"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">Manager</div>
                                        <input type="text" name="manager" class="form-control">
                                        <div class="input-group-addon">
                                            <i class="fa fa-group"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">Contact</div>
                                        <input type="text" name="contact" class="form-control">
                                        <div class="input-group-addon">
                                            <i class="fa fa-phone"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-actions form-group">
                                    <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    </p>
                </div>

                <div class="tab-pane fade" id="nav-open-branch" role="tabpanel" aria-labelledby="nav-contact-tab">
                    <p>
                    <div class="au-card au-card--bg-blue au-card-top-countries m-b-30">
                        <div class="au-card-inner">
                            <div class="table-responsive">
                                <table class="table table-top-countries">
                                    <tbody>
                                        <?php include 'database/db_connection.php';
                                        $sql = "SELECT * FROM acctable WHERE Positions = 'branch' ORDER BY ID DESC";
                                        $result = $conn->query($sql);

                                        while ($row = $result->fetch_assoc()) {
                                            $ids = $row["ID"];

                                        ?>
                                            <tr>
                                                <td><?php echo $row['Names'] ?></td>
                                                <td class="text-right">
                                                    <a href='branchs/singlebranch_admin.php?view=<?php echo $ids ?>' target='_blank''>
                                                                <button type=' button' class='btn btn-success'><i class='fa fa-eye'></i></button>
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
                    </div>
                </div>
                </p>
            </div>
        </div>

    </div>
</div>

<!-- END STATISTIC-->
<?php
include 'include/footer.php';
?>