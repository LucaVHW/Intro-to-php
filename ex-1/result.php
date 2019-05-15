<?php
if ( isset( $_GET['submit'] ) ) {
  $movie1 = $_GET['movie1'];
  $movie2 = $_GET['movie2'];
  $movie3 = $_GET['movie3'];
  $movie4 = $_GET['movie4'];
  $movie5 = $_GET['movie5'];
};

if ( isset( $_POST['submit'] ) ) {
$movie1 = $_POST['movie1'];
$movie2 = $_POST['movie2'];
$movie3 = $_POST['movie3'];
$movie4 = $_POST['movie4'];
$movie5 = $_POST['movie5'];
};

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
    <td><?php $movie1 ?></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td></td>
  </tr>
</table>
  </body>
</html>
