<div class="modal fade" id="send_modal<?php echo $row['ID'] ?>" tabindex="-1" role="dialog"
    aria-labelledby="smallmodalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="smallmodalLabel">Send Orders to Branch</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>
                <form action="../database/order/send_order_staff.php" method="POST">
                    <input type="hidden" name="sid" value="<?php echo $row['ID'] ?>" >
                    <select name="staffname" id="select" class="form-control">
                        <option>Please select</option>
                        <?php 
                             $sql1 = "SELECT * FROM acctable WHERE Positions = 'Staff' and  branch_name = '$user' ORDER BY ID DESC";
                             $result1 = $conn->query($sql1);

                             while ($row1 = $result1->fetch_assoc()) {
                        echo"
                        <option>".$row1['Names']."</option>
                        ";
                        }
                        ?>
                    </select><br>
                    <center> <input type="submit" class="btn btn-danger" > </center>
                </form>
                </p>
            </div>
        </div>
    </div>
</div>

<!-- view order model -->
