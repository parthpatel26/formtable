<?php


$conn = mysqli_connect("localhost","root","","db_master" );
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
else{
  $first_name = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $username = $_POST['username'];
  $email = $_POST['emailAddress'];
  $city = $_POST['city'];

  $sql = "INSERT INTO `myTable` ( `firstname`, `lastname`, `username`, `email`, `city`) VALUES ('$first_name', '$lastname', '$username', '$email', '$city')";
  $result = mysqli_query($conn, $sql);
  
  if ( $result) {      

    
    echo "Data Added Successfully";
    } else {
    echo "Cant Submit The Data";
  }
}
  mysqli_close($conn);
  ?>