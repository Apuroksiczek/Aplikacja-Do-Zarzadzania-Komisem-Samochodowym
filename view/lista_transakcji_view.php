<div class="transakcje-container">

    <?php 
    foreach($stmt as $row)


   echo ' <div class="card">
        <div class="left">
            <img src="images/'.$row['zdjecie'].'" alt="" >
        </div>
        

        <div class="right">
           
        
            <div class="gora">
            '.$row['nazwa_marki'].' ♦ '.$row['nazwa_modelu'].' ♦ '.$row['poj_silnika'].'cm3 ♦ '.$row['km'].'km ♦ '.$row['rok_prod'].' ♦ '.$row['przebieg'].'km ♦ '.$row['paliwo'].' ♦ '.$row['cena_ogloszenie'].' PLN
            </div>

            <div class="podzialka"></div>

            <div class="dol">
            '.$row['imie'].' '.$row['nazwisko'].' ♦ '.$row['data_transakcji'].' ♦ Nr Faktury: '.$row['nr_faktury'].' ♦ '.$row['kwota'].'PLN ♦ 
                stan transakcji sprzedane ♦ płatność: '.$row['nazwa_platnosci'].'
            </div>

        </div>

        <div class="guziki">
           <center> ZOBACZ: </center>
        <p><a href="?action=car_view&id='.$row['id_pojazdu'].'">POJAZD</a></p>
        <a href="?action=klient_show">KLIENT</a>
        </div>
        
        
    </div>';

    ?>

    
    
</div>