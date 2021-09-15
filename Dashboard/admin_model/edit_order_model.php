<div class="modal fade" id="editModal<?php echo $row['ID'] ?>" tabindex="-1" role="dialog" aria-labelledby="viewModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="mediumModalLabel">Edit Order</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="database/order/update_order.php" method="POST">
                    <!-- 2 column grid layout with text inputs  -->
                    <div class="row mb-4">
                    <input type="hidden" value="<?php echo $row['ID'] ?>" name="id">
                        <div class="col">
                            <div class="form-outline">
                                <label class="form-label" for="form6Example1">Sender Name</label>
                                <input type="text" name="sname" value="<?php echo $row['S_Name'] ?>" class="form-control" />
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-outline">
                                <label class="form-label" for="form6Example2">Sender Address</label>
                                <input type="text" name="saddress" value="<?php echo $row['S_Address'] ?>" class="form-control" />
                            </div>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col">
                            <div class="form-outline">
                                <label class="form-label" for="form6Example1">Sender Contact</label>
                                <input type="text" name="sphone" value="<?php echo $row['S_Phone'] ?>" class="form-control" />
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-outline">
                                <label class="form-label" for="form6Example1">Sending Date</label>
                                <input type="date" name="sdate" value="<?php echo $row['Dates'] ?>" required class="form-control" />
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row mb-4">
                        <div class="col">
                            <div class="form-outline">
                                <label class="form-label" for="form6Example1">Receiver Name</label>
                                <input type="text" name="rname" value="<?php echo $row['R_Name'] ?>" class="form-control" />
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-outline">
                                <label class="form-label" for="form6Example2">Receiver Address</label>
                                <input type="text" name="raddress" value="<?php echo $row['R_Address'] ?>" required class="form-control" />
                            </div>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col">
                            <div class="form-outline">
                                <label class="form-label" for="form6Example1">Receiver Contact</label>
                                <input type="text" name="rcontact" value="<?php echo $row['R_Phone'] ?>" class="form-control" />
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-outline">
                                <label class="form-label" for="form6Example1">About Item</label>
                                <input type="text" name="aboutitem" value="<?php echo $row['about'] ?>" placeholder="Optional" class="form-control" />
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row mb-4">
                        <div class="col">
                            <div class="form-outline">
                                <label class="form-label" for="form6Example1">Receiverd Payment</label>
                                <input type="text" name="receivedpay" value="<?php echo $row['paid_payment'] ?>" placeholder="RS"  class="form-control" />
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-outline">
                                <label class="form-label" for="form6Example2">Remaining Payment</label>
                                <input type="text" name="remainingpay" placeholder="RS" value="<?php echo $row['rem_payment'] ?>"class="form-control" />
                            </div>
                        </div>
                    </div>
                    <center><input type="submit" name="upload" class="btn btn-primary"></center>
                    </p>
                </form>
            </div>
        </div>
        <!-- END DATA TABLE -->

        <!-- END BREADCRUMB-->
        <section>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="copyright">
                            <p>Copyright © 2021. All rights reserved. Website Developed by <a href="http://laxmiprakashsubedi.com.np/">LP_Subedi</a>.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END PAGE CONTAINER-->
    </div>

</div>