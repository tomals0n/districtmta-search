<?php
if(isset($_POST['submit'])){
    session_start();

    require_once '../../conf/connect.php';
    $polaczenie = @new mysqli($host, $user, $password, $db_name);

    if($polaczenie->connect_errno!=0)
    {
        echo 'Error: '.$polaczenie->connect_errno.'Opis: '.$polaczenie->connect_error;
    }
    else
    {
        $id = mysqli_real_escape_string($polaczenie, $_POST['name']);
        $sql = "SELECT * FROM dt_pojazdy WHERE id='$id'";

        if($rezultat = @$polaczenie->query($sql))
        {
            $ilu_users = $rezultat->num_rows;
            if($ilu_users==1)
            {  
               $wiersz = $rezultat->fetch_assoc();
               $_SESSION['id'] = $wiersz['id'];
               $_SESSION['id_model'] = $wiersz['model'];
               $_SESSION['marka'] = $wiersz['marka'];
               $_SESSION['uid'] = $wiersz['uid'];
               $_SESSION['wlasciciel'] = $wiersz['login'];
               $_SESSION['rejka'] = $wiersz['rejestracja'];
               $_SESSION['last'] = $wiersz['ostatni_kierowca'];
               $_SESSION['naped'] = $wiersz['naped'];
               $_SESSION['us1'] = $wiersz['us1'];
               $_SESSION['cbradio'] = $wiersz['cbradio'];
               $_SESSION['przebieg'] = $wiersz['przebieg'];
               $_SESSION['kolor1'] = $wiersz['kolor_podstawowy'];
               $_SESSION['kolor_lampy'] = $wiersz['kolor_lampek'];
               $_SESSION['kluczyk'] = $wiersz['dodatkowy_kluczyk'];
               $_SESSION['turbo'] = $wiersz['nitro'];
               $_SESSION['szyby'] = $wiersz['przyciemnione_szyby'];
               $_SESSION['tuning'] = $wiersz['tuning'];
               if($_SESSION['us1']==1){
                  $_SESSION['us1'] = 'TAK';
               } else {
                  $_SESSION['us1'] = 'NIE';
               }
               if($_SESSION['kluczyk']==1){
                  $_SESSION['kluczyk'] = 'TAK';
               } else {
                  $_SESSION['kluczyk'] = 'NIE';
               }
               if($_SESSION['turbo']==1){
                  $_SESSION['turbo'] = 'TAK';
               } else {
                  $_SESSION['turbo'] = 'NIE';
               }
               if($_SESSION['szyby']==25){
                  $_SESSION['szyby'] = '25%';
               } elseif($_SESSION['szyby']==50) {
                  $_SESSION['szyby'] = '50%';
               } elseif($_SESSION['szyby']==75) {
                  $_SESSION['szyby'] = '75%';
               } elseif($_SESSION['szyby']==100) {
                  $_SESSION['szyby'] = '100%';
               } else {
                  $_SESSION['szyby'] = 'BRAK';
               }
                if($_SESSOIN['cbradio']==1){
                  $_SESSION['cbradio'] = 'TAK';
               } else {
                  $_SESSION['cbradio'] = 'NIE';
               }
               if($_SESSION['rejka']=='') {
                  $_SESSION['rejka'] = 'LS '.$id;
               } else {
                  $_SESSION['rejka'] = $wiersz['rejestracja'];
               }
               if($_SESSION['tuning']==''){
                  $_SESSION['tuning'] = 'BRAK';
               } else {
                  $_SESSION['tuning'] = $_wiersz['tuning'];
               }
               $rezultat->close();
               header('location:searched_car.php');

            } else{
               $error[] = 'Nie znaleziono podanego ID pojazdu w bazie danych!';
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


   <link rel="stylesheet" href="style.css?version=62">

</head>
<body>

<div class="form-container">

   <form action="" method="post">
      <img src='logo_christmas.png'/>
      <h3>WYSZUKIWARKA POJAZDÓW</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="number" name="name" required placeholder="Wprowadź ID pojazdu. . .">
      <input type="submit" name="submit" value="WYSZUKAJ POJAZD" class="form-btn">
      <a href='uid_find.php' class='btn'>BAZA GRACZY</a>
   </form>
   <p class = 'abtme'>Created by <a href='https://github.com/tomals0n' class ='aboutme'>tomals0n</a> for districtMTA | 2022</p>
   <!-- nie zmieniać twórcy! -->
</div>

</body>
</html>

