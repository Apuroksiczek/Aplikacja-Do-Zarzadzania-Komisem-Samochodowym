<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="style.css">
    <title>Komis Samochodowy</title>
</head>

<body>


    <div class="navbar">
        <center>
        <ul>
            <li><a href="?action=home">Home</a></li>
            <li><a href="?action=car_list">Lista Samochodow</a></li>
            <!-- <li><a href="?action=about_us">O nas</a></li> -->
            <li><a href="?action=contact">Kontakt</a></li>
            <?php if(isset($_SESSION['admin'])) : ?>
            <li><a href="?action=add_car">Dodaj Samochód</a></li>
            <li><a href="?action=lista_transakcji">Transakcje</a></li>
            <li><a href="?action=klient_show">Lista Klientow</a></li>
            <li><a href="?action=logout">Wyloguj</a></li>
            <?php else: ?>
            <li><a href="?action=login">Zaloguj</a></li>

            <?php endif;?>

        </ul>
        </center>
    </div>
            

    <?php
 
        require_once("view/$page"."_view.php");
    ?>
<footer class="footer">
  <a href="?action=home">Home</a>
  <a href="?action=contact">Kontakt</a>
  <a href="?action=contact">Lokalizacja</a>
  <a href="?action=car_list">Lista Samochodów</a>
  <a href="?action=contact">Telefon: 123-456-789</a>
  <p class="copyright-text">&copy; wszelkie prawa zastrzeżone</p>
</footer>

</body>
</html>