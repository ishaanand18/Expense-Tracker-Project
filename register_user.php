<?php
include("./includes/header.php");
include("./includes/functions.php");



if(isset($_REQUEST['register'])){
  include("./includes/db_conn.php");

  // getting values from html form
  $user_name = $_REQUEST['user_name'];
  $user_pass = $_REQUEST['user_pass'];

  // inseerting data into database

  $sql = "INSERT INTO ereg_users (user_name, user_pass)
  VALUES ('$user_name', '$user_pass')";

  if (mysqli_query($conn, $sql)) {
    echo myalert("success","New recored created successfully.");
  } else {
    echo myalert("danger","Error while entering the new record.");
  }

  mysqli_close($conn);

}
?>



<div class="container">
<div class="card my-card">
  <div class="card-header bg-primary text-white">
    Register User
  </div>
  <div class="card-body">
     <div class="row">
        <div class="col-12">
            <form method="POST" >
            <div class="mb-3">
            <label for="" class="form-label">User Name</label>
            <input type="text" class="form-control" name="user_name">
            </div>
            <div class="mb-3">
            <label for="" class="form-label">User Password</label>
            <input type="password" class="form-control" name="user_pass">
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary" name="register" >Register</button>
            </div>
            </form>

        </div>

  </div>
</div>
</div>










<?php
include("./includes/footer.php");
?>