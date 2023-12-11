<<?php
  // Include database file
  include 'database.php';
  // Delete record from table
  if(!empty($_GET['deleteId'])) {
    $deleteId = $_GET['deleteId'];
    $customersObj->deleteRecord($deleteId);
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>The unexpected Journal | View</title>
    <meta name="Author" content="Alejandra Hernandez">
    <meta name="Description" content="Assigment 2, Php">
    <link rel="shortcut icon" href="images/ojo.png" type="image/x-icon" />
    <meta name="robots" content="noindex, nofollow">
    <link rel="stylesheet" href="css/Style.css" />
  </head>
  <body>
  <header>
    <h1>View</h1>
  </header>
  <main class="container">
    <?php
      if (isset($_GET['msg1']) == "insert") {
      echo "<div class='alert alert-success alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert'>×</button>
              Your Registration added successfully
            </div>";
      }
      if (isset($_GET['msg2']) == "update") {
        echo "<div class='alert alert-success alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert'>×</button>
              Your Registration updated successfully
            </div>";
      }
      if (isset($_GET['msg3']) == "delete") {
       echo "<div class='alert alert-success alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert'>×</button>
              Record deleted successfully
            </div>";
      }
      if (isset($_GET['msg4']) == "login") {
       echo "<div class='alert alert-success alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert'>×</button>
              Log In successfully
            </div>";
      }
    ?>

      <h2>View Records
      <!-- <a href="add.php" style="float:right;"><button class="btn btn-success"><i class="fas fa-plus"></i></button></a> -->
      <a href="add.php" style="float:right;"><button class="btn btn-success">Add</button></a>
      </h2>
      <table class="table table-hover table-dark table-striped">
        <thead>
        <tr>
          <th>ID</th>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Email</th>
          <th>Phone Number</th>
          <th>Interest</th>
          <th>Password</th>
          <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <?php
       // 
       
        $customers2 = $customersObj->displayData();
        if ($customers2!=null){
        foreach ($customers2 as $customer) {
        //  
          ?>
          <tr>
            <td><?php echo $customer['id'] ?></td>
            <td><?php echo $customer['fname'] ?></td>
            <td><?php echo $customer['lname'] ?></td>
            <td><?php echo $customer['email'] ?></td>
            <td><?php echo $customer['phone_num'] ?></td>
            <td><?php echo $customer['interest'] ?></td>
            <td><?php echo $customer['cpassword'] ?></td>
             <td>
              <button class="btn btn-danger"><a href="edit.php?editId=<?php echo $customer['id'] ?>">Edit</a></button>
              <button class="btn btn-danger"><a href="view.php?deleteId=<?php echo $customer['id'] ?>" onclick="return confirm('Are you sure?'); return false;">
                Delete
                </a></button>
            </td>
          </tr>
        <?php } }?>
        </tbody>
      </table>

</main>
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