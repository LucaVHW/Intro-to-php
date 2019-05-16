<?php

if(isset($_POST['submit'])){
  $a = strrev(strtoupper(strrev($_POST['nick'])));
  $b = "--";
  $c = "x";
  $rand = substr(md5(microtime()),rand(0,26),2);
  $d = "[";
  $f = "]";

  echo $b.$d.$rand.$f.$c.$a.$b;
}



 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <form action="" method="post">
      <h3>Cool nickname generator</h3>
      <input type="text" name="nick" value="">
      <input type="submit" name="submit" value="Submit">
    </form>

  </body>
</html>
