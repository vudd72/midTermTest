<?php 
 include ("db.php");

  if(isset($_GET['STT'])){
      $id = $_GET['STT'];

  $query = "DELETE FROM 'danhba' WHERE 'STT'='$id'";

  $result =mysqli_query($con,$query);

  if($result == TRUE){
      echo "Record deleted";
  } else{
      echo "Error";
  }

}
?>