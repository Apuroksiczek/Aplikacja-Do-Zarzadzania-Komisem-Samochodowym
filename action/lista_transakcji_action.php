<?php

$stmt = $conn->prepare('SELECT *
FROM (((((transakcje
INNER JOIN klienci ON klienci.id_klienta = transakcje.id_klienta)
INNER JOIN pojazdy ON pojazdy.id_pojazdu = transakcje.id_pojazdu)
INNER JOIN modele ON pojazdy.id_modelu = modele.id_modelu)
INNER JOIN marki ON modele.id_marki = marki.id_marki)
INNER JOIN rodzaj_platnosci ON rodzaj_platnosci.platnosc = transakcje.rodz_tran)
ORDER BY id_transakcji DESC;');


// $stmt = $conn->prepare('SELECT * 
// FROM ((transakcje
// INNER JOIN klienci ON transakcje.id_klienta = transakcje.id_klienta)
// INNER JOIN pojazdy ON transakcje.id_pojazdu = pojazdy.id_pojazdu) 
// ORDER BY id_transakcji DESC
// ');

$stmt->execute();

?>
