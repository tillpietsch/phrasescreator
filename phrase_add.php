<?php
  include('config.php');
  if (isset($_GET['btn-save'])){
      $text = "I Say Yes to " . $_GET['phrase'] . "\n";
      // file_put_contents($filename, $text, FILE_APPEND);
      $link = mysqli_connect("localhost", "root", "", "phrases");
      $db_query = "INSERT INTO `phrases` (`ID`, `text`, `insertdate`) VALUES (NULL, '" . $text . "', NOW());";
      // echo $db_query; 
      $result = $link->query($db_query);
      
  }


if (isset($_GET['btn-save2'])){
      $text = "by" . $_GET['name'] . "\n";
      // file_put_contents($filename, $text, FILE_APPEND);
      $link = mysqli_connect("localhost", "root", "", "phrases");
      $db_query = "INSERT INTO `phrases` (`ID`, `text`, `insertdate`) VALUES (NULL, '" . $text . "', NOW());";
      // echo $db_query; 
      $result = $link->query($db_query);
      
  }



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
            <h1 class="display-3">I say YES! to ...</h1>
            <form method="get">
              <select name="phrase">
                <option value="ChickenNuggets">Chicken Nuggets</option>
                <option value="Ketchup">Ketchup</option>
                <option value="HdM">HdM</option>
                <option value="Schnittfeld">Schnittfeld</option>
              </select>
              <button type="submit" name="btn-save" value="1">Los geht's</button>
            </form>

          </div>


<div class="jumbotron jumbotron-fluid">
          <div class="container">
            <h1 class="display-3">by ...</h1>
            <form method="get">
             <input type="text" name="name">
              <button type="submit" name="btn-save2" value="2">Senden</button>
            </form>

          </div>



        </div>
        <?php include('footer.php'); ?>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>    </body>


  </body>
</html>