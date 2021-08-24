<?php 
 include ("db.php");
 include("auth_session.php");
 $query = "SELECT * FROM danhba";
 $result = mysqli_query($con,$query);
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Admin page</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <div class="container">
          <h2>Info</h2>
      <table class="table">
          <head>
              <tr>
                  <th>STT</th>
                  <th>Hoten</th>
                  <th>ChucVu</th>
                  <th>DTCoQuan</th>
                  <th>Email</th>
                  <th>DTDD</th>
              </tr>
          </head>
          <tbody>
              <?php 
                  if($result->num_rows>0){
                      while($row = $result->fetch_assoc()){
              ?> 
              
                        <tr>
                            <td><?php echo $row['STT']; ?></td>
                            <td><?php echo $row['Hoten']; ?></td>
                            <td><?php echo $row['ChucVu']; ?></td>
                            <td><?php echo $row['DTCoQuan']; ?></td>
                            <td><?php echo $row['Email']; ?></td>
                            <td><?php echo $row['DTDD']; ?></td>
                            <td><a class="btn btn-info" href="update.php?id=<?php echo $row['STT']; ?>">
                            Edit</a>&nbsp;<a class="btn btn-danger" href="delete.php?id=<?php echo $row['STT']; ?>">
                            Delete</a></td>
                        </tr>
                        <?php  }
                  }
                  ?>        
          </tbody>
      </table>    
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>