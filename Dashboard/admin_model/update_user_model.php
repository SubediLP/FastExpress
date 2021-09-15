 <!--Edit / update Module-->
 <div class="modal fade" id="update_modal<?php echo $row['ID'] ?>" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
     <div class="modal-dialog modal-sm" role="document">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="smallmodalLabel">Update Data</h5>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>
             <div class="modal-body">
                 <p>
                 <div class="card">
                     <div class="card-body card-block">
                         <form action="database/accounts/update_account.php" method="POST" enctype="multipart/form-data">
                             <input type="hidden" value="<?php echo $row['ID'] ?>" name="sid">
                             <div class="form-group">
                                 <div class="input-group">
                                     <input type="text" value="<?php echo $row['Names'] ?>" name="name" placeholder="Name" class="form-control">
                                     <div class="input-group-addon">
                                         <i class="fa fa-user"></i>
                                     </div>
                                 </div>
                             </div>
                             <div class="form-group">
                                 <div class="input-group">
                                     <input type="email" value="<?php echo $row['Email'] ?>" name="email" placeholder="Email" class="form-control">
                                     <div class="input-group-addon">
                                         <i class="fa fa-envelope"></i>
                                     </div>
                                 </div>
                             </div>
                             <div class="form-group">
                                 <div class="input-group">
                                     <input type="password" value="<?php echo $row['Passwords'] ?>" name="password" placeholder="Password" class="form-control">
                                     <div class="input-group-addon">
                                         <i class="fa fa-asterisk"></i>
                                     </div>
                                 </div>
                             </div>
                             <div class="form-group">
                                 <div class="input-group">
                                     <input type="text" value="<?php echo $row['Addresss'] ?>" name="address" placeholder="Address" class="form-control">
                                     <div class="input-group-addon">
                                         <i class="fa fa-home"></i>
                                     </div>
                                 </div>
                             </div>
                             <div class="form-group">
                                 <div class="input-group">
                                     <input type="text" value="<?php echo $row['Gender'] ?>" name="gender" placeholder="Gender" class="form-control">
                                     <div class="input-group-addon">
                                         <i class="fa fa-male"></i>
                                     </div>
                                 </div>
                             </div>
                             <div class="form-group">
                                 <div class="input-group">
                                     <input type="text" value="<?php echo $row['Phone'] ?>" name="phone_no" placeholder="Contact" class="form-control">
                                     <div class="input-group-addon">
                                         <i class="fa fa-phone"></i>
                                     </div>
                                 </div>
                             </div>
                             <div class="form-group">
                                 <div class="input-group">
                                     <input type="date" value="<?php echo $row['Dob'] ?>" name="dob" placeholder="Date of Birth" class="form-control">
                                     <div class="input-group-addon">
                                         <i class="fa fa-calendar-o"></i>
                                     </div>
                                 </div>
                             </div>
                             <div class="form-group">
                                 <div class="input-group">
                                     <input type="text" value="<?php echo $row['Positions'] ?>" name="positions" placeholder="Position" class="form-control">
                                     <div class="input-group-addon">
                                         <i class="fa fa-random"></i>
                                     </div>
                                 </div>
                             </div>
                             <div class="form-group">
                                 <div class="input-group">
                                     <input name="image" type="file" value="<?php echo $row['Images'] ?>" class="form-control-file">
                                     <div class="input-group-addon">
                                         <i class="fa fa-image"></i>
                                     </div>
                                 </div>
                             </div>
                             <div class="form-actions form-group">
                                 <button type="submit" name="upload" class="btn btn-secondary btn-sm">Submit</button>
                             </div>
                         </form>
                     </div>
                 </div>
                 </p>
             </div>
         </div>
     </div>
 </div>