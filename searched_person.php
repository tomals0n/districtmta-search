<?php

@include '../../conf/connect.php'; // safe db connection

session_start();

if(!isset($_SESSION['nick'])){
   header('location:uid_find.php');
}

?>

<!--
Site made by: tomals0n
https://github.com/tomals0n
tomals0n#2479
Please do not change author.
-->

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Gracz: <?php echo $_SESSION['nick']?></title>


   <link rel="stylesheet" href="style.css?version=61">

</head>
<body>
   
<div class="container">

   <div class="content">
      <img src='logo_christmas.png'/>
      <h1>INFORMACJE O GRACZU: <span><?php echo $_SESSION['nick']?></span>   
      <h3>NICK: <?php echo $_SESSION['nick'] ?></h3>
      <h3>UID: <?php echo $_SESSION['uid'] ?></h3>
      <h3>POZIOM: <?php echo $_SESSION['poziom'] ?></h3>
      <h3>PRAWO JAZDY(KAT.A): <?php echo $_SESSION['prawko_A'] ?></h3>
      <h3>PRAWO JAZDY(KAT.B): <?php echo $_SESSION['prawko'] ?></h3>
      <h3>PRAWO JAZDY(KAT.C): <?php echo $_SESSION['prawko_C'] ?></h3>
      <h3>LICENCJA WODNA: <?php echo $_SESSION['licka_wodna'] ?></h3>
      <h3>LICENCJA NA SAMOLOT: <?php echo $_SESSION['licka_samolot'] ?></h3>
      <h3>LICENCJA NA HELIKOPTER: <?php echo $_SESSION['licka_heli'] ?></h3>
      <h3>ILOŚĆ ZABÓJSTW: <?php echo $_SESSION['kills'] ?></h3>
      <h3>ILOŚĆ ZGONÓW: <?php echo $_SESSION['deaths'] ?></h3>
      <a href='user_logout.php' class='btn'>WRÓĆ</a>
   </div>

</div>

</body>
</html>
