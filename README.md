# Search users and cars in database

## Did it for multi theft auto server, now I'm publishing it to you.

## What you need to do:
```php
<?php      
    $host = "";  
    $user = "";  
    $password = '';  
    $db_name = "";  
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  
?>  
```
Go to connect.php and write there database host, username, password and database name.

```php
$sql = "SELECT * FROM dt_konta WHERE login='$nick'";
````
Change here your table name.

```php
$wiersz = $rezultat->fetch_assoc();
$_SESSION['name_of_session'] = $wiersz['name_of_column']
```
Change names of sessions and columns.

### Search person:
<img src='https://i.imgur.com/DIzYFP3.png'/>

### Search car:

<img src='https://i.imgur.com/lJ51uSF.png'/>

### Searched user:

<img src='https://i.imgur.com/K5uNBAt.png'/>

### Searched car:

<img src='https://i.imgur.com/KfPHyga.png'/>
