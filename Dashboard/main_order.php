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
                                <li class="list-inline-item">Order</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- STATISTIC-->

<form action="database/order/create_order.php" method="POST">
    <!-- 2 column grid layout with text inputs  -->
    <div class="row mb-4">
        <div class="col">
            <div class="form-outline">
                <label class="form-label" for="form6Example1">Sender Name</label>
                <input type="text" name="sname" class="form-control" />
            </div>
        </div>
        <div class="col">
            <div class="form-outline">
                <label class="form-label" for="form6Example2">Sender Address</label>
                <input type="text" name="saddress" class="form-control" />
            </div>
        </div>
    </div>
    <div class="row mb-4">
        <div class="col">
            <div class="form-outline">
                <label class="form-label" for="form6Example1">Sender Contact</label>
                <input type="text" name="sphone" class="form-control" />
            </div>
        </div>
        <div class="col">
            <div class="form-outline">
                <label class="form-label" for="form6Example1">Sending Date</label>
                <input type="date" name="sdate" required class="form-control" />
            </div>
        </div>
    </div>
    <hr>
    <div class="row mb-4">
        <div class="col">
            <div class="form-outline">
                <label class="form-label" for="form6Example1">Receiver Name</label>
                <input type="text" name="rname" class="form-control" />
            </div>
        </div>
        <div class="col">
            <div class="form-outline">
                <label class="form-label" for="form6Example2">Receiver Address</label>
                <input type="text" name="raddress" required class="form-control" />
            </div>
        </div>
    </div>
    <div class="row mb-4">
        <div class="col">
            <div class="form-outline">
                <label class="form-label" for="form6Example1">Receiver Contact</label>
                <input type="text" name="rcontact" class="form-control" />
            </div>
        </div>
        <div class="col">
            <div class="form-outline">
                <label class="form-label" for="form6Example1">About Item</label>
                <input type="text" name="aboutitem" placeholder="Optional" class="form-control" />
            </div>
        </div>
    </div>
    <hr>
    <div class="row mb-4">
        <div class="col">
            <div class="form-outline">
                <label class="form-label" for="form6Example1">Receiverd Payment</label>
                <input type="text" name="receivedpay" placeholder="RS" value="0" class="form-control" />
            </div>
        </div>
        <div class="col">
            <div class="form-outline">
                <label class="form-label" for="form6Example2">Remaining Payment</label>
                <input type="text" name="remainingpay" placeholder="RS" value="0" class="form-control" />
            </div>
        </div>
    </div>
    <center><input type="submit" name="upload" class="btn btn-primary"></center>
    </p>
</form>

<!-- END STATISTIC-->
<?php
include 'include/footer.php';
?>