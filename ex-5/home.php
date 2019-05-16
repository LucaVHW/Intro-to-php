<?php

  require("security.php");
  include("functions.php");

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title></title>
  </head>
  <body>

    <div class="panel">
      <input class="but" type="submit" name="generate" value="Generate">
    </div>
    <div class="panel">
      <input class="but" type="submit" name="revert" value="Revert">
    </div>
    <div class="panel">
      <form action="" method="post">
        <input type="text" name="nick" value=""><br><br>
        <input class="but" type="submit" name="submit" value="Submit">
      </form>
    </div>

  </body>
</html>
