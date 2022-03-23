<?php

$id = $_GET['id'];

try {
    $stmt = $conn->prepare('SELECT id_pojazdu, km,paliwo,nazwa_marki, nazwa_modelu,
                     rok_prod, przebieg, poj_silnika, zdjecie, cena_ogloszenie, data_rejestracji,
                     nr_rejestracji, cena_kupna
    FROM ((pojazdy 
    INNER JOIN modele ON pojazdy.id_modelu = modele.id_modelu)
    INNER JOIN marki ON modele.id_marki = marki.id_marki)
    WHERE id_pojazdu = '.$id.'
    ');
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    $conn-> rollBack();
    echo $e->getMessage();
}

//do poprawy bo jesli klient istnieje to jest konflikt typow
if(isset($_POST['submit'])){

    $id_klienta = 0;
    $klienciStmt = $conn->prepare('SELECT id_klienta, pesel FROM klienci');
    $klienciStmt->execute();

    foreach($klienciStmt as $tbKlienci){
        if($tbKlienci['pesel'] == $_POST['pesel']){
            $id_klienta = $tbKlienci['id_klienta'];
            //echo 'istnieje';
            break;
        }
    }

    if(empty($id_klienta)){
       $klienciStmt = $conn->prepare(
            'INSERT INTO klienci
            (imie, nazwisko, data_ur, pesel, nip, kod_pocztowy, miasto, ulica, nr_domu, nr_lokalu, telefon, mail, rodzaj_dokumentu, nr_dokumentu)
            VALUES(:imie, :nazwisko, :data_ur, :pesel, :nip, :kod_pocztowy, :miasto, :ulica, :nr_domu, :nr_lokalu, :telefon, :mail, :rodzaj_dokumentu, :nr_dokumentu)
            ');    


        $klienciStmt->bindValue(':imie',$_POST['imie']);
        $klienciStmt->bindValue(':nazwisko',$_POST['nazwisko']);
        $klienciStmt->bindValue(':data_ur', $_POST['data_urodzenia']);
        $klienciStmt->bindValue(':pesel',$_POST['pesel']);
        $klienciStmt->bindValue(':nip',$_POST['nip']);
        $klienciStmt->bindValue(':kod_pocztowy',$_POST['kod']);
        $klienciStmt->bindValue(':miasto', $_POST['miasto']);
        $klienciStmt->bindValue(':ulica', $_POST['ulica']);
        $klienciStmt->bindValue(':nr_domu', $_POST['nr_domu']);
        $klienciStmt->bindValue(':nr_lokalu', $_POST['nr_lokalu']);
        $klienciStmt->bindValue(':telefon', $_POST['telefon']);
        $klienciStmt->bindValue(':mail', $_POST['mail']);
        $klienciStmt->bindValue(':rodzaj_dokumentu', $_POST['rodzaj_dokumentu'],PDO::PARAM_STR);
        $klienciStmt->bindValue(':nr_dokumentu', $_POST['nr_dokumentu']);
        $klienciStmt->bindValue(':data_ur', $_POST['data_urodzenia']);
        $klienciStmt->execute();

        $idStmt = $conn->prepare('SELECT id_klienta FROM klienci ORDER BY id_klienta DESC LIMIT 1');
        $idStmt->execute();

        $temp = $idStmt->fetch();
        $id_klienta = $temp['id_klienta'];

    }

        $sold = 0;
        $transakcjeStmt = $conn->prepare('INSERT INTO transakcje
            (id_klienta, id_pojazdu, rodz_tran, kwota, nr_faktury, data_transakcji, zaplacono)
            VALUES(:id_klienta, :id_pojazdu, :rodz_tran, :kwota, :nr_faktury, :data_transakcji, :zaplacono)
        ');
            
        var_dump($_POST);

        $transakcjeStmt->bindValue(':id_klienta', $id_klienta);
        $transakcjeStmt->bindValue(':id_pojazdu', $id);
        $transakcjeStmt->bindValue(':rodz_tran', $_POST['rodz_tran']);
        $transakcjeStmt->bindValue(':kwota', $_POST['cena_sp']);
        $transakcjeStmt->bindValue(':nr_faktury', $_POST['nr_faktury']);
        $transakcjeStmt->bindValue(':data_transakcji', $_POST['data_transakcji']);
        $transakcjeStmt->bindValue(':zaplacono', $sold);

        $transakcjeStmt->execute();

        $pojazdyStmt = $conn->prepare('UPDATE pojazdy SET data_wydania = "'.$_POST['data_transakcji'].'" ,sprzedane = 1 WHERE id_pojazdu = '.$id.'');
        $pojazdyStmt->execute();




        header("Location: ?action=lista_transakcji");


     


//}
}



?>