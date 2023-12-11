<?php

// Include database file
include 'database.php';


//Edit customer record
if(!empty($_GET['editId'])) {
  $editId = $_GET['editId'];
  $customer = $customersObj->displayRecordById($editId);
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>The unexpected Journal | Edit</title>
  <meta name="Author" content="Alejandra Hernandez">
  <meta name="Description" content="Assigment 2, Php">
  <link rel="shortcut icon" href="images/ojo.png" type="image/x-icon" />
  <meta name="robots" content="noindex, nofollow">
  <link rel="stylesheet" href="./css/style.css">
</head>
<body>
  <header>
    <h1>Edit Account</h1>
  </header>
  <section class="container">
    <div class="row">
      <div class="col-md-5 mx-auto">
        <div class="card">
          <div class="card-header bg-primary">
          <h4 class="text-white">Update Records</h4>
          </div>
          <div class="card-body bg-light">
            <form method="POST">
             
              <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" name="ufname" value="<?php echo $customer['fname']; ?>" required="">
              </div>
              <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" name="ulname" value="<?php echo $customer['lname']; ?>" required="">
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="uemail" value="<?php echo $customer['email']; ?>" required="">
              </div>
              <div class="form-group">
                <label for="phone_num">Phone Number</label>
                <input type="tel" class="form-control" name="uphoneNum" value="<?php echo $customer['phone_num']; ?>" required="">
              </div>
               <div class="form-group">
                <label for="password">Password</label>
                <input type="text" class="form-control" name="upassword" value="<?php echo $customer['password']; ?>" required="">
              </div>
              <div class="form-group">
                <input type="hidden" name="id" value="<?php echo $customer['id']; ?>">
                <input type="submit" name="update" class="btn btn-primary" style="float:right;" value="Update">
              </div>
            </form>
            <?php
            // Update Record in customer table
              if(!empty($_POST)) {
                $ufname = $_POST['ufname'];
                $ulname = $_POST['ulname'];
                $uemail = $_POST['uemail'];
                $uphoneNum = $_POST['uphoneNum'];
                $upassword = $_POST['upassword'];
                $id = $_POST['id'];
                $customersObj->updateRecord($ufname, $ulname, $uemail, $uphoneNum, $upassword, $id);
              }
            ?>
          </div>
        </div>
      </div>
    </div>
  </section>
   <footer>
        <p>*****************************************************</p>
        <nav>
            <!-- link to privacy policy page -->
            <a href="php/privacypol.php" title="read our private policy">Privacy Policy and Terms and Conditions</a>|
        </nav>
        <p><small>The unexpected Journal.</small></p>
        <p><small>©Unexpected Journal</small></p>
    </footer>
</body>
</html>