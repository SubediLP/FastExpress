<div class="modal fade" id="updateModal<?php echo $row['ID'] ?>" tabindex="-1" role="dialog" aria-labelledby="viewModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="mediumModalLabel">Update Branch</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="database/branch/update_branch.php">
                <input type="hidden" value="<?php echo $row['ID'] ?>" name="id">
                Branch Name: <input type="text" name="name" value="<?php echo $row['Names'] ?>" class="form-control" /><br>
                Branch Address: <input type="text" name="address" value="<?php echo $row['Addresss'] ?>" class="form-control" /><br>
                Email: <input type="email" name="email" value="<?php echo $row['Email'] ?>" class="form-control" /><br>
                Passwords <input type="password" name="password" value="<?php echo $row['Passwords'] ?>" class="form-control" /><br>
                Branch Manager: <input type="text" name="manager" value="<?php echo $row['Branch_Manager'] ?>" class="form-control" /><br>
                Contact: <input type="text" name="contact" value="<?php echo $row['Phone'] ?>" class="form-control" /><br>
                <center><input type="submit" name="upload" class="btn btn-primary"></center>
                </form>
            </div>
        </div>
    </div>
</div>