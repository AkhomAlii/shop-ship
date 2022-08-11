 <?php
session_start();
include "db.php";
include "sidenav.php";
include "topheader.php";
if(isset($_POST['btn_save']))
{
$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$email=$_POST['email'];
$user_password=$_POST['password'];
$mobile=$_POST['mobile'];
$address1=$_POST['address1'];

// mysqli_query($con,"BEGIN;")or die ("Query 1 is inncorrect........");
mysqli_query($con,"BEGIN;");
mysqli_query($con,"INSERT INTO `user_info` ( `first_name`, `last_name`, `email`, `user_pass`, `mobile`, `address1`) VALUES ('$first_name','$last_name','$email','$user_password','$mobile','$address1');");
mysqli_query($con,"INSERT INTO `cart` ( `cart_name`, `user_id`,`total`) VALUES ('first cart',LAST_INSERT_ID(),'0');");
mysqli_query($con,"COMMIT;");
// 			or die ("Query 1 is inncorrect........");
// mysqli_query($con,"insert into carts(cart_name,user_id) values ('first cart',LAST_INSERT_ID());")
//       			or die ("Query 1 is inncorrect........");
// mysqli_query($con,"COMMIT;")or die ("Query 1 is inncorrect........");

// header("location: manage_users.php");
mysqli_close($con);
}


?>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <!-- your content here -->
          <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Add Users</h4>
                  <p class="card-category">Complete User profile</p>
                </div>
                <div class="card-body">
                  <form action="" method="post" name="form" enctype="multipart/form-data">
                    <div class="row">

                      <div class="col-md-3">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">First Name</label>
                          <input type="text" id="first_name" name="first_name" class="form-control" required>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">Last Name</label>
                          <input type="text" name="last_name" id="last_name"  class="form-control" required>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">Email</label>
                          <input type="email" name="email" id="email" class="form-control" required>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">Password</label>
                          <input type="password" id="password" name="password" class="form-control" required>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">phone number</label>
                          <input type="text" id="mobile" name="mobile" class="form-control" required>
                        </div>
                      </div>
                    </div>


                      <div class="col-md-4">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">Address</label>
                          <input type="text" name="address1" id="address1" class="form-control" required>
                        </div>
                      </div>

                    </div>

                    <button type="submit" name="btn_save" id="btn_save" class="btn btn-primary pull-right">ADD USER</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
        </div>
      </div>
      <?php
include "footer.php";
?>
