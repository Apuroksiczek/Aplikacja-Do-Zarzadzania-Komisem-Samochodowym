

<?php

try {
    $stmt = $conn->prepare('SELECT * 
    FROM (((transakcje 
    INNER JOIN pojazdy ON pojazdy.id_pojazdu = transakcje.id_pojazdu)
    INNER JOIN modele ON pojazdy.id_modelu = modele.id_modelu)
    INNER JOIN marki ON modele.id_marki = marki.id_marki) 
    WHERE id_klienta = '.$_GET['id'].'');
    $stmt->execute();
} catch (PDOException $e) {
    $conn-> rollBack();
    echo $e->getMessage();
}

try{
    $dane = $conn->prepare('SELECT imie,nazwisko FROM klienci WHERE id_klienta = '.$_GET['id'].'');
    $dane->execute();
    $imie = $dane->fetch();
     //echo $row['imie']." ".$row['nazwisko']; 
}
 catch (PDOException $e) {
    $conn-> rollBack();
    echo $e->getMessage();
}

// try {
//     $stmt = $conn->prepare('SELECT id_pojazdu, km,paliwo,nazwa_marki, nazwa_modelu, rok_prod, przebieg, poj_silnika, zdjecie, cena_ogloszenie 
//     FROM ((pojazdy 
//     INNER JOIN modele ON pojazdy.id_modelu = modele.id_modelu)
//     INNER JOIN marki ON modele.id_marki = marki.id_marki) 
//     ORDER BY id_pojazdu DESC');
//     $stmt->execute();
// } catch (PDOException $e) {
//     $conn-> rollBack();
//     echo $e->getMessage();
// }
?>