<?php
  include('../config.php');
  
      // file_put_contents($filename, $text, FILE_APPEND);
      $link = mysqli_connect("localhost", "root", "", "phrases");

    

      if(isset($_GET['delete-id'])){
        $db_query = "DELETE FROM `phrases` WHERE `ID`= " . $_GET['delete-id'];
        $delete_result = $link->query($db_query);
}

      $result = $link->query('SELECT * FROM phrases');




?>
<!DOCTYPE html>
<html>
  <head>
    <title>Add phrase</title>
    <meta charset="UTF-8"></meta>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <style type="text/css">
      .container div {
        margin-top: 20px;
      }
    </style>
  </head>
  <body>
          <div class="jumbotron jumbotron-fluid">
          <div class="container">
            <h1 class="display-3">DELETE</h1>
           
            <?php
            while ($row = mysqli_fetch_row($result)) {
              # code...
              echo "<tr>";
              echo "<td>" . $row;[0] . "</td>";
              echo "<td>" . $row;[1] . "</td>";
              echo "<td>" . $row;[2] . "</td>";
              echo "<td><a href='?delete-id=" . row[0] . "'>delete</a></td>";
              echo "</tr>";
            }
              



             ?> 

          </div>






        </div>
        <?php include('../footer.php'); ?>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>    </body>


  </body>
</html>