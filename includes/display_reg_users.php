<?php
include("../includes/header.php");
include("../includes/functions.php");
include("../includes/db_conn.php");

?>
<div class="cpntainer">
<table class="table table-bordered table-striped table-hover">
  <thead class="table-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">User Name</th>
      <th scope="col">Password</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $fetch_data = "SELECT * FROM ereg_users";
    $run_fetch_data= mysqli_query($conn,$fetch_data);
    if(mysqli_num_rows($run_fetch_data)>0){
        mysqli

    }
    else{
        echo "No Record Found";
    }
    ?>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
  </tbody>
</table>
</div>

<?php
include("../includes/footer.php");
?>