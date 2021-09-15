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
                <form action="database/order/send_order.php" method="POST">
                    <input type="hidden" name="sid" value="<?php echo $row['ID'] ?>" >
                    <select name="branchname" id="select" class="form-control">
                        <option>Please select</option>
                        <?php 
                             $sql2 = "SELECT * FROM acctable WHERE Positions = 'branch' ORDER BY ID DESC";
                             $result2 = $conn->query($sql2);

                             while ($row2 = $result2->fetch_assoc()) {
                        ?>
                        <option>branch_<?php echo $row2["Names"] ?></option>
                        <?php
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