<table class="styled-table">
    <thead>
    <tr>
        <td>Imie</td> <td>Nazwisko</td> <td>data urodzenia</td> <td>pesel</td> <td>nip</td> <td>Miasto</td> <td>Kod Pocztowy</td>
        <td>ulica</td> <td>nr_domu</td> <td>nr_lokalu</td> <td>telefon</td> <td>e-mail</td> <td>rodzaj dokumentu</td> <td>nr dokumentu</td>
        <td>Kupine pojazdy</td> <td>Edytuj dane</td>
    </tr>
    </thead>
    <tbody>
    <?php
        foreach($stmt as $row){
           echo "
           <tr>
           <td>".$row['imie']."</td> <td>".$row['nazwisko']."</td> <td>".$row['data_ur']."</td> <td>".$row['pesel']."</td> <td>".$row['nip']."</td> <td>".$row['miasto']."</td> <td>".$row['kod_pocztowy']."</td>
           <td>".$row['ulica']."</td> <td>".$row['nr_domu']."</td> <td>".$row['nr_lokalu']."</td> <td>".$row['telefon']."</td> <td>".$row['mail']."</td> <td>".$row['nazwa_dokumentu']."</td> <td>".$row['nr_dokumentu']."</td>
           <td>"; echo '<a href="?action=kupione_pojazdy&id='.$row['id_klienta'].'">Zobacz</a>'; echo "</td> <td>"; echo '<a href="?action=edytuj_klienta&id='.$row['id_klienta'].'">Edytuj</a>'; echo "</td>

           </tr>
           ";
        }
    ?>
    </tbody>

</table>