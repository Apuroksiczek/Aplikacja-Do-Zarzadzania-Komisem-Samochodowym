<center> <div class="tekst-srodek">Pojazdy: <?php echo $imie['imie']." ".$imie['nazwisko']; ?> </div></center>

<div class="car-list-container">

  

    <?php
    
        foreach($stmt as $row){
           echo '
          <div class="card">
            <div class="obrazek">
            <img src="images/'.$row['zdjecie'].'" alt="">
            </div>
          <div class="informacje">
              <h3>'.$row['nazwa_marki'].' '.$row['nazwa_modelu'].'</h3>
              <p>'.$row['nazwa_modelu'].' '.$row['poj_silnika'].' ('.$row['km'].'KM) </p>
              <p>'.$row['rok_prod'].' • '.$row['przebieg'].'km • '.$row['poj_silnika'].'cm3 • '.$row['paliwo'].'</p>
          </div>
          <span class="cena"> '.$row['kwota'].' PLN</span>
          <center> <a href="?action=car_view&id='.$row['id_pojazdu'].'">Zobacz więcej</a> </center>
          </div>
       ';
        }
    ?> 
    
</div>