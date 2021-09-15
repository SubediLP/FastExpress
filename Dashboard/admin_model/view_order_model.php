<div class="modal fade" id="viewModal<?php echo $row['ID'] ?>" tabindex="-1" role="dialog" aria-labelledby="viewModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="mediumModalLabel">View Order</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="#" method="POST">
                    <!-- 2 column grid layout with text inputs  -->
                    <div class="row mb-4">
                        <div class="col">
                            <div class="form-outline">
                                <label class="form-label" for="form6Example1">Sender Name</label>
                                <input type="text" name="sname" value="<?php echo $row['S_Name'] ?>" disabled class="form-control" />
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-outline">
                                <label class="form-label" for="form6Example2">Sender Address</label>
                                <input type="text" name="saddress" value="<?php echo $row['S_Address'] ?>" disabled class="form-control" />
                            </div>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col">
                            <div class="form-outline">
                                <label class="form-label" for="form6Example1">Sender Contact</label>
                                <input type="text" name="sphone" value="<?php echo $row['S_Phone'] ?>" disabled class="form-control" />
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-outline">
                                <label class="form-label" for="form6Example1">Sending Date</label>
                                <input type="date" name="sdate" value="<?php echo $row['Dates'] ?>" disabled required class="form-control" />
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row mb-4">
                        <div class="col">
                            <div class="form-outline">
                                <label class="form-label" for="form6Example1">Receiver Name</label>
                                <input type="text" name="rname" value="<?php echo $row['R_Name'] ?>" disabled class="form-control" />
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-outline">
                                <label class="form-label" for="form6Example2">Receiver Address</label>
                                <input type="text" name="raddress" value="<?php echo $row['R_Address'] ?>" disabled required class="form-control" />
                            </div>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col">
                            <div class="form-outline">
                                <label class="form-label" for="form6Example1">Receiver Contact</label>
                                <input type="text" name="rcontact" value="<?php echo $row['R_Phone'] ?>" disabled class="form-control" />
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-outline">
                                <label class="form-label" for="form6Example1">About Item</label>
                                <input type="text" name="aboutitem" value="<?php echo $row['about'] ?>" disabled placeholder="Optional" class="form-control" />
                            </div>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col">
                            <div class="form-outline">
                                <label class="form-label" for="form6Example1">Branch</label>
                                <input type="text" name="rcontact" value="<?php echo $row['Branch'] ?>" disabled class="form-control" />
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-outline">
                                <label class="form-label" for="form6Example1">Staff</label>
                                <input type="text" name="aboutitem" value="<?php echo $row['Staff'] ?>" disabled placeholder="Optional" class="form-control" />
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row mb-4">
                        <div class="col">
                            <div class="form-outline">
                                <label class="form-label" for="form6Example1">Receiverd Payment</label>
                                <input type="text" name="receivedpay" value="<?php echo $row['paid_payment'] ?>" disabled placeholder="RS" class="form-control" />
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-outline">
                                <label class="form-label" for="form6Example2">Remaining Payment</label>
                                <input type="text" name="remainingpay" placeholder="RS" value="<?php echo $row['rem_payment'] ?>" disabled class="form-control" />
                            </div>
                        </div>
                    </div>
                    </p>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- END DATA TABLE -->