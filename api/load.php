<?php


$conn = mysqli_connect("localhost","root","","db_master" );
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
  
  $sql = "SELECT * FROM `myTable` ORDER BY `myTable`.`id` ASC";
  $result = mysqli_query($conn, $sql);
  $srNo = 0;
  
  if (mysqli_num_rows($result) > 0) {
      while($row = mysqli_fetch_assoc($result)) {
      $srNo++;
      echo "<tr><td>".$srNo."</td>"."<td>".$row["id"]."</td>". "<td>".$row["firstname"]." ". $row["lastname"]."</td>". "<td>".$row["username"]."</td>". "<td>".$row["email"]."</td>". "<td>".$row["city"]."</td><td><button class='btn btn-danger del' data-id={$row['id']}>"."DELETE"."</button></td></tr>";
    }
  } else {
    echo "No data found";
  }
  
  mysqli_close($conn);
  ?>