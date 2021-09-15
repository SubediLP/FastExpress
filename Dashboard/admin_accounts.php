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
                                <li class="list-inline-item">Accounts</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- DATA TABLE -->
<h3 class="title-5 m-b-35">data table</h3>
<div class="table-data__tool">
    <div class="table-data__tool-left">
        <button class="au-btn-filter">
            <i class="zmdi zmdi-filter-list"></i>filters
            <input type="text" id="myInput" class="form-control" placeholder="Type Here...">
        </button>
    </div>
    <div class="table-data__tool-right">
        <button class="au-btn au-btn-icon au-btn--green au-btn--small" data-toggle="modal" data-target="#mediumModal">
            <i class="zmdi zmdi-plus"></i>add item</button>
        <div class="rs-select2--dark rs-select2--sm rs-select2--dark2">
            <select class="js-select2" name="type">
                <option selected="selected">Export</option>
                <option value="">Option 1</option>
                <option value="">Option 2</option>
            </select>
            <div class="dropDownSelect2"></div>
        </div>
    </div>
</div>
<div class="table-responsive table--no-card m-b-30">
    <table class="table table-borderless table-striped table-earning">
        <thead>
            <tr>
                <th>SN</th>
                <th>avatar</th>
                <th>name</th>
                <th>email</th>
                <th>password</th>
                <th>DOB</th>
                <th>address</th>
                <th>Gender</th>
                <th>position</th>
                <th>contact</th>
                <th>action</th>
            </tr>
        </thead>
        <tbody id="myTable">
            <?php include 'database/db_connection.php';

            $sql = "SELECT * FROM acctable ORDER BY ID DESC";
            $result = $conn->query($sql);

            while ($row = $result->fetch_assoc()) {
                $ids = $row["ID"];

            ?>
                <tr class="tr-shadow">
                    <td><span><?php echo $row['ID'] ?></span></td>
                    <td>
                        <img src="database/accounts/images/<?php echo $row['Images'] ?>" class="rounded-circle" width="50" height="50">
                    </td>
                    <td><?php echo $row['Names'] ?></td>
                    <td>
                        <span><?php echo $row['Email'] ?></span>
                    </td>
                    <td >
                        <span><?php echo $row['Passwords'] ?></span>
                        <!-- <input style="border: none;" type="password" class="form-control pwd" value=""> -->
                    </td>
                    <td><span><?php echo $row['Dob'] ?></span></td>
                    <td><?php echo $row['Addresss'] ?></td>
                    <td><?php echo $row['Gender'] ?></td>
                    <td>
                        <span class="status--process"><?php echo $row['Positions'] ?></span>
                    </td>
                    <td><?php echo $row['Phone'] ?></td>
                    <td>
                        <div class="table-data-feature">
                            
                            <button class="item" data-toggle="modal" type="button" data-target="#update_modal<?php echo $row['ID'] ?>">
                                <i class="zmdi zmdi-edit"></i>
                            </button>
                            <a href="database/accounts/delete_account.php?del=<?php echo $ids ?>">
                                <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                    <i class="zmdi zmdi-delete"></i>
                                </button>
                            </a>
                            <button class="item" data-toggle="tooltip" data-placement="top" title="More">
                                <i class="zmdi zmdi-more"></i>
                            </button>
                        </div>
                    </td>
                </tr>
                <tr class="spacer"></tr>
                
            <?php
                include 'admin_model/update_user_model.php';
            }
            ?>
        </tbody>
    </table>
</div>

<!-- Add module-->
<div class="modal fade" id="mediumModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="mediumModalLabel">Create Account</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>
                <form action="database/accounts/create_acc.php" method="POST" enctype="multipart/form-data">
                    <!-- 2 column grid layout with text inputs for the first and last names -->
                    <div class="row mb-4">
                        <div class="col">
                            <div class="form-outline">
                                <label class="form-label" for="form6Example1">Name</label>
                                <input type="text" name="name" id="form6Example1" class="form-control" />
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-outline">
                                <label class="form-label" for="form6Example2">Address</label>
                                <input type="text" name="address" id="form6Example2" class="form-control" />
                            </div>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col">
                            <div class="form-outline">
                                <label class="form-label" for="form6Example1">Date of Birth</label>
                                <input type="date" name="dob" id="form6Example1" class="form-control" />
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-outline">
                                <label class="form-label" for="form6Example2">Gender</label> <br>
                                <select id="inputState" name="gender" class="form-control">
                                    <option selected>Select Gender</option>
                                    <option>Male</option>
                                    <option>Female</option>
                                    <option>Other</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col">
                            <div class="form-outline">
                                <label class="form-label" for="form6Example1">Phone</label>
                                <input type="text" name="phone_no" id="form6Example1" class="form-control" />
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-outline">
                                <label class="form-label" for="form6Example2">Position</label>
                                <select id="inputState" name="positions" class="form-control">
                                    <option selected>Select Position</option>
                                    <option>Admin</option>
                                    <option>Manager</option>
                                    <option>Staff</option>
                                    <option>Other</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col">
                            <div class="form-outline">
                                <label class="form-label" for="form6Example1">Email</label>
                                <input type="email" name="email" id="form6Example1" class="form-control" />
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-outline">
                                <label class="form-label" for="form6Example2">Password</label>
                                <input type="password" name="password" id="form6Example2" class="form-control" />
                            </div>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col">
                            <div class="form-outline">
                                <label class="form-label" for="form6Example1">Image</label>
                                <input name="image" type="file" class="form-control-file">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-outline">
                                <label class="form-label" for="form6Example2">Other</label>
                                <input name="file" type="file" class="form-control-file">
                            </div>
                        </div>
                    </div>
                    <center><input type="submit" name="upload" class="btn btn-primary"></center>
                    </p>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- END DATA TABLE -->
<script>
$(document).ready(function(){
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