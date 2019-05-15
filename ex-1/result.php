<?php


 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title></title>
  </head>
  <body>
<table>
  <tr>
    <th>Favorite movies</th>
    <th>Favorite shows</th>
    <th>Favorite country</th>
    <th>Worst movie seen</th>
  </tr>
  <tr>
    <td><?php echo $_POST["movie1"]?></td>
    <td><?php echo $_POST["show1"]?></td>
    <td><?php echo $_POST["country"]?></td>
    <td><?php echo $_POST["worst"]?></td>
  </tr>
  <tr>
    <td><?php echo $_POST["movie2"]?></td>
    <td><?php echo $_POST["show2"]?></td>
  </tr>
  <tr>
    <td><?php echo $_POST["movie3"]?></td>
    <td><?php echo $_POST["show3"]?></td>
  </tr>
  <tr>
    <td><?php echo $_POST["movie4"]?></td>
    <td><?php echo $_POST["show4"]?></td>
  </tr>
  <tr>
    <td><?php echo $_POST["movie5"]?></td>
    <td><?php echo $_POST["show5"]?></td>
  </tr>
</table>
  </body>
</html>
