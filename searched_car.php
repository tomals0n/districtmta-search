<?php

@include 'connect.php';

session_start();

if(!isset($_SESSION['id'])){
   header('location:car_finder.php');
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
   <title>Pojazd: <?php echo $_SESSION['marka']?>(<?php echo $_SESSION['id']?>)</title>


   <link rel="stylesheet" href="style.css">

</head>
<body>
   
<div class="container">

   <div class="content">
      <img src='logo_christmas.png' class='image_searched'/>
      <h1>INFORMACJE O POJEŹDZIE: <span><?php echo $_SESSION['marka']?>(<?php echo $_SESSION['id']?>)</span>   
      <h3>WŁAŚCICIEL: <?php echo $_SESSION['wlasciciel'] ?></h3>
      <h3>UID WŁAŚCICIELA: <?php echo $_SESSION['uid'] ?></h3>
      <h3>OSTATNI KIEROWCA: <?php echo $_SESSION['last'] ?></h3>
      <h3>REJESTRACJA: <?php echo $_SESSION['rejka'] ?></h3>
      <h3>PRZEBIEG: <?php echo $_SESSION['przebieg'] ?>km</h3>
      <h3>NAPĘD: <?php echo $_SESSION['naped'] ?></h3>
      <h3>ID TUNINGÓW: <?php echo $_SESSION['tuning'] ?></h3>
      <h3>US1: <?php echo $_SESSION['us1'] ?></h3>
      <h3>TURBOSPRĘŻARKA: <?php echo $_SESSION['turbo'] ?></h3>
      <h3>PRZYCIEMNIANE SZYBY: <?php echo $_SESSION['szyby'] ?></h3>
      <h3>DODATKOWY KLUCZYK: <?php echo $_SESSION['kluczyk'] ?></h3>
      <h3>CB RADIO: <?php echo $_SESSION['cbradio'] ?></h3>
      <h3>KOLOR PODSTAWOWY(RGB): <?php echo $_SESSION['kolor1'] ?></h3>
      <h3>KOLOR LAMP(RGB): <?php echo $_SESSION['kolor_lampy'] ?></h3>
      <a href='car_finder.php' class='btn'>WRÓĆ</a>
   </div>


</div>
<p class = 'abtme'>Created by <a href='https://github.com/tomals0n' class ='aboutme'>tomals0n</a> for districtMTA | 2022</p>
</body>
</html>