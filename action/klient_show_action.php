<?php

try {
        $stmt = $conn->prepare("SELECT * 
        FROM (klienci
        INNER JOIN dokument ON klienci.rodzaj_dokumentu = dokument.rodzaj_dokumentu)");
        //var_dump($stmt);
        $stmt->execute();
    } catch (PDOException $e) {
        $conn-> rollBack();
        echo $e->getMessage();
    }

?>