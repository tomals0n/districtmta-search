<?php
if(isset($_POST['submit'])){
    session_start();

    require_once '../../conf/connect.php'; // ŚCIEŻKA DO PLIKU CONNECT.PHP
    $polaczenie = @new mysqli($host, $user, $password, $db_name);

    if($polaczenie->connect_errno!=0)
    {
        echo 'Error: '.$polaczenie->connect_errno.'Opis: '.$polaczenie->connect_error;
    }
    else
    {
        $nick = mysqli_real_escape_string($con, $_POST['name']);
        $sql = "SELECT * FROM dt_konta WHERE login='$nick'";

        if($rezultat = @$polaczenie->query($sql))
        {
            $ilu_users = $rezultat->num_rows;
            if($ilu_users>0)
            {
                $wiersz = $rezultat->fetch_assoc();
                $_SESSION['uid'] = $wiersz['uid'];
                $_SESSION['prawko'] = $wiersz['pjB_praktyka_II'];
                $_SESSION['nick'] = $wiersz['login'];
                $_SESSION['prawko_A'] = $wiersz['pjA_praktyka_II'];
                $_SESSION['prawko_C'] = $wiersz['pjC_praktyka_II'];
                $_SESSION['poziom'] = $wiersz['poziom'];
                $_SESSION['kills'] = $wiersz['licznik_killow'];
                $_SESSION['deaths'] = $wiersz['licznik_zgonow'];
                $_SESSION['licka_wodna'] = $wiersz['licencja_wodna'];
                $_SESSION['licka_heli'] = $wiersz['licencja_helikoptery'];
                $_SESSION['licka_samolot'] = $wiersz['licencja_samoloty'];
                if($_SESSION['prawko']==1){
                  $_SESSION['prawko'] = 'TAK';
                } else {
                  $_SESSION['prawko'] = 'NIE';
                }
                if($_SESSION['prawko_A']==1){
                  $_SESSION['prawko_A'] = 'TAK';
                } else {
                  $_SESSION['prawko_A'] = 'NIE';
                }
                if($_SESSION['prawko_C']==1){
                  $_SESSION['prawko_C'] = 'TAK';
                } else {
                  $_SESSION['prawko_C'] = 'NIE';
                }
                if($_SESSION['licka_wodna']==1){
                  $_SESSION['licka_wodna'] = 'TAK';
                } else {
                  $_SESSION['licka_wodna'] = 'NIE';
                }
                if($_SESSION['licka_heli']==1){
                  $_SESSION['licka_heli'] = 'TAK';
                } else {
                  $_SESSION['licka_heli'] = 'NIE';
                }
                if($_SESSION['licka_samolot']==1){
                  $_SESSION['licka_samolot'] = 'TAK';
                } else {
                  $_SESSION['licka_samolot'] = 'NIE';
                }
                $rezultat->close();
                header('location:searched_person.php');


            } else{
               $error[] = 'Nie znaleziono podanego nicku w bazie danych!';
            }
        }

    }
   };
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
   <title>Panel - districtMTA</title>


   <link rel="stylesheet" href="style.css?version=61">

</head>
<body>
<div class="form-container">

   <form action="" method="post">
      <img src='logo_christmas.png'/>
      <h3>WYSZUKIWARKA GRACZY</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="text" name="name" required placeholder="Wprowadź nick gracza. . .">
      <input type="submit" name="submit" value="WYSZUKAJ GRACZA" class="form-btn">
      <a href='car_finder.php' class='btn'>BAZA POJAZDÓW</a>
   </form>
   <p class = 'abtme'>Created by <a href='https://github.com/tomals0n'>tomals0n</a> for districtMTA | 2022</p>
</div>

</body>
</html>