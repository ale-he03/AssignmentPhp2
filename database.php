<?php

class database{
  private $servername = "localhost";
  private $username   = "root";
  private $password   = "";
  private $database   = "my_php";
  public  $con;


  // Database Connection
  public function __construct()
  {
    $this->con = new mysqli($this->servername, $this->username,$this->password,$this->database);
    if(mysqli_connect_error()) {
      die("Failed to connect to MySQL: " . mysqli_connect_error());
    }
  }

  // Insert customer data into customer table
  public function insertData($fname, $lname, $email, $phoneNum, $password, $interest)
  {
    $query="INSERT INTO costumers2(fname, lname, email, phone_num, interest, cpassword) VALUES ('$fname','$lname', '$email', '$phoneNum', '$interest', '$password')";
    $sql = $this->con->query($query);
    if ($sql==true) {
      header("Location:view.php?msg1=insert");
    }else{
      echo "Registration failed try again!";
    }
  }

  // Fetch customer records for show listing
  public function displayData()
  {
    $query = "SELECT * FROM costumers2";
    $result = $this->con->query($query);
    if ($result->num_rows > 0) {
      $data = array();
      while ($row = $result->fetch_assoc()) {
        $data[] = $row;
      }
      return $data;
    }else{
      echo "No found records";
    }
  }

  // Fetch single data for edit from customer table
  public function displayRecordById($id)
  {
    $query = "SELECT * FROM costumers2 WHERE id = '$id'";
    $result = $this->con->query($query);
    if ($result->num_rows > 0) {
      $row = $result->fetch_assoc();
      return $row;
    }
  }

  // Update customer data into customer table
  public function updateRecord($ufname, $ulname, $uemail, $uphone_num, $upassword, $id)
  {
      $query = "UPDATE costumers2 SET fname = '$ufname', lname = '$ulname', email = '$uemail', phone_num = '$uphone_num', cpassword = '$upassword' WHERE id = '$id'";
      $sql = $this->con->query($query);
      if ($sql==true) {
        header("Location:view.php?msg2=update");
      }else{
        echo "Registration updated failed try again!";
      }
    
  }

  // Delete customer data from customer table
  public function deleteRecord($id)
  {
    $query = "DELETE FROM costumers2 WHERE id = '$id'";
    $sql = $this->con->query($query);
    if ($sql==true) {
      header("Location:view.php?msg3=delete");
    }else{
      echo "Record does not delete try again";
    }
  }
  
  //log in
  public function login($logemail, $logpassword)
  { 
    $query = "SELECT * FROM costumers2 WHERE email = '$logemail' AND cpassword = '$logpassword'";
    $sql = $this->con->query($query);

     if ($sql && $sql->num_rows > 0) {
      header("Location:view.php?msg4=login");
    } else {
        echo "Ups!, The email or password is not correct";
    }
  }
}
$customersObj = new database();