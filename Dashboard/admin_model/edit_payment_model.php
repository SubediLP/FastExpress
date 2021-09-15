<div class="modal fade" id="editpaymentModal<?php echo $row['ID'] ?>" tabindex="-1" role="dialog" aria-labelledby="viewModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="mediumModalLabel">Update Payment</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="database/order/update_payment.php" method="POST">
                <input type="hidden" value="<?php echo $row['ID'] ?>" name="id">
                    <div class="row mb-4">
                        <div class="col">
                            <div class="form-outline">
                                <label class="form-label" for="form6Example1">Receiverd Payment</label>
                                <input type="text" name="receivedpay" value="<?php echo $row['paid_payment'] ?>" placeholder="RS" class="form-control" />
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-outline">
                                <label class="form-label" for="form6Example2">Remaining Payment</label>
                                <input type="text" name="remainingpay" placeholder="RS" value="<?php echo $row['rem_payment'] ?>" class="form-control" />
                            </div>
                        </div>
                    </div>
                    <center><input type="submit" name="upload" class="btn btn-primary"></center>
                    </p>
                </form>
            </div>
        </div>
        <!-- END DATA TABLE -->
    </div>
</div>