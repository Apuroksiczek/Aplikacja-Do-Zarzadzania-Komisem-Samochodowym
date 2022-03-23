$pojazdyStmt = $conn->prepare("INSERT INTO pojazdy 
        (id_modelu, rok_prod) VALUES (:id_modelu, :rok_prod) ");
        $pojazdyStmt->bindValue(':id_modelu',$id_modelu,PDO::PARAM_INT);
        $pojazdyStmt->bindValue(':rok_prod',$rok,PDO::PARAM_INT);
        $pojazdyStmt->execute();

<!--  -->

$pojazdyStmt = $conn->prepare("SELECT id_modelu FROM modele WHERE nazwa_modelu = '$nazwa'");
        $pojazdyStmt->execute();
        echo 'dupa';

        //var_dump($pojazdyStmt->rowCount());
        if($pojazdyStmt->rowCount() > 0){
            $id_modelu = $pojazdyStmt->fetch();
        }else{
            var_dump($marka);
           $pojazdyStmt = $conn->prepare("SELECT id_marki FROM marki WHERE nazwa_marki = '$marka'");
           $pojazdyStmt->execute();

           var_dump($pojazdyStmt->fetch());
           if($pojazdyStmt->rowCount() > 0){
               
                $id_marki = $pojazdyStmt->fetch();
                echo 'jest taka marka';
           }
           else{
                echo 'nie ma takiej marki';
                $markiStmt = $conn->prepare("INSERT INTO marki (nazwa_marki) VALUES(:nazwa)");
                $markiStmt->bindValue(':nazwa',$marka,PDO::PARAM_STR);
                $markiStmt->execute();

                $pojazdyStmt = $conn->prepare("SELECT id_marki FROM marki WHERE nazwa_marki = '$marka'");
                $id_marki = $pojazdyStmt->fetch();

           }
            $pojazdyStmt = $conn->prepare("INSERT INTO modele (nazwa_modelu, id_marki) VALUES(:nazwa, :idMarki)");
            $pojazdyStmt->bindValue(':nazwa',$nazwa,PDO::PARAM_STR);
            $pojazdyStmt->bindValue(':idMarki',$id_marki,PDO::PARAM_INT);
            $pojazdyStmt->execute();

            $pojazdyStmt = $conn->prepare("SELECT id_modelu FROM modele WHERE nazwa_modelu = '$nazwa'");
            $pojazdyStmt->execute();
            $id_modelu = $pojazdyStmt->fetch();
            echo 'dupa';

            // dodawanie pojazd

        }
        echo 'dupa';
        $conn->beginTransaction();
        $pojazdyStmt = $conn->prepare("INSERT INTO pojazdy 
             (id_modelu, rok_prod)
             VALUES (:id_modelu, :rok_pord)
             ");
        $pojazdyStmt->bindValue(':id_modelu',$id_modelu,PDO::PARAM_INT);
             $pojazdyStmt->bindValue(':rok_prod',$rok,PDO::PARAM_INT);
             $pojazdyStmt->execute();
             $pojazdyStmt->commit();


        // $pojazdyStmt = $conn->prepare("INSERT INTO pojazdy 
        //     (id_modelu, rok_prod, przebieg, km, paliwo, poj_silnika, powypadkowy, zdjecie, cena_kupna, cena_ogloszenie, data_rejestracji,
        //     nr_rejestracji)
        //     VALUES (:id_modelu, :rok_pord, :przebieg, :km, :paliwo, :poj_silnika, :powypadkowy, :zdjecie, :cena_kupna, :cena_ogloszenie, 
        //     :data_rejesracji, :nr_rejestracji)
        //     ");

        //     $pojazdyStmt->bindValue(':id_modelu',$id_modelu,PDO::PARAM_INT);
        //     $pojazdyStmt->bindValue(':rok_prod',$rok,PDO::PARAM_INT);
        //     $pojazdyStmt->bindValue(':przebieg',$przebieg,PDO::PARAM_INT);
        //     $pojazdyStmt->bindValue(':paliwo',$paliwo,PDO::PARAM_STR);
        //     $pojazdyStmt->bindValue(':poj_silnika',$pojemnosc,PDO::PARAM_INT);
        //     $pojazdyStmt->bindValue(':powypadkowy',$id_marki,PDO::PARAM_INT);
        //     $pojazdyStmt->bindValue(':zdjecie',$fileName,PDO::PARAM_STR);
        //     $pojazdyStmt->bindValue(':cena_kupna',$cena_k,PDO::PARAM_INT);
        //     $pojazdyStmt->bindValue(':cena_ogloszenie',$cena_o,PDO::PARAM_INT);
        //     $pojazdyStmt->bindValue(':nr_rejestracji',$nr_rej,PDO::PARAM_STR);

        //     $pojazdyStmt->execute();

        

       // var_dump($id_modelu);


       <!-- 

       try {
      //  $conn->beginTransaction();
      $modeleStmt = $conn->prepare("SELECT id_modelu FROM modele WHERE nazwa_modelu = '$nazwa'");
      $modeleStmt->execute();

      //var_dump($modeleStmt->rowCount());
      if($modeleStmt->rowCount() > 0){
          $id_modelu = $modeleStmt->fetch();
          var_dump($id_modelu);
      }else{
          var_dump($marka);
         $modeleStmt = $conn->prepare("SELECT id_marki FROM marki WHERE nazwa_marki = '$marka'");
         $modeleStmt->execute();

       

         var_dump($modeleStmt->fetch());
         if($modeleStmt->rowCount() > 0){
             
              $id_marki = $modeleStmt->fetch();
              echo '1'.$id_marki;
              echo 'dupa <br>';
              var_dump($id_marki);
              echo $id_marki[0];
              echo 'jest taka marka';
         }
         else{
              echo 'nie ma takiej marki';
              $markiStmt = $conn->prepare("INSERT INTO marki (nazwa_marki) VALUES(:nazwa)");
              $markiStmt->bindValue(':nazwa',$marka,PDO::PARAM_STR);
              $markiStmt->execute();

          

              $modeleStmt = $conn->prepare("SELECT id_marki FROM marki ORDER BY DESC LIMIT 1");
              $id_marki = $modeleStmt->fetch();
              echo 'xxd';
              echo 'text2text'.$id_marki;
              echo 'dupa <br>';
              var_dump($id_marki);
              //echo $id_marki[0];
              

         }
         echo 'text3text'.$id_marki;
          $modeleStmt = $conn->prepare("INSERT INTO modele (nazwa_modelu, id_marki) VALUES(:nazwa, :idMarki)");
          $modeleStmt->bindValue(':nazwa',$nazwa,PDO::PARAM_STR);
          $modeleStmt->bindValue(':idMarki',$id_marki,PDO::PARAM_INT);
          $modeleStmt->execute();

          $modeleStmt = $conn->prepare("SELECT id_modelu FROM modele WHERE nazwa_modelu = '$nazwa'");
          $modeleStmt->execute();
          $id_modelu = $modeleStmt->fetch();
          echo 'dupa';

          // dodawanie pojazd

      }
     
    //    $pojazdyStmt = $conn->prepare("INSERT INTO pojazdy 
    //        (id_modelu, rok_prod, przebieg, km, paliwo, poj_silnika, powypadkowy, zdjecie, cena_kupna, cena_ogloszenie,
    //        nr_rejestracji)
    //        VALUES (:id_modelu, :rok_prod, :przebieg, :km, :paliwo, :poj_silnika, :powypadkowy, :zdjecie, :cena_kupna, :cena_ogloszenie, 
    //         :nr_rejestracji)
    //        ");

    //     $pojazdyStmt->bindValue(':id_modelu',$id_modelu[0],PDO::PARAM_INT);
    //     $pojazdyStmt->bindValue(':rok_prod',$rok,PDO::PARAM_INT);
    //     $pojazdyStmt->bindValue(':przebieg',$przebieg,PDO::PARAM_INT);
    //     $pojazdyStmt->bindValue(':paliwo',$paliwo,PDO::PARAM_STR);
    //     $pojazdyStmt->bindValue(':km',$moc,PDO::PARAM_INT);
    //     $pojazdyStmt->bindValue(':poj_silnika',$pojemnosc,PDO::PARAM_INT);
    //     $pojazdyStmt->bindValue(':powypadkowy',$wypadek,PDO::PARAM_INT);
    //     $pojazdyStmt->bindValue(':zdjecie',$fileName,PDO::PARAM_STR);
    //     $pojazdyStmt->bindValue(':cena_kupna',$cena_k,PDO::PARAM_INT);
    //     $pojazdyStmt->bindValue(':cena_ogloszenie',$cena_o,PDO::PARAM_INT);
    //     $pojazdyStmt->bindValue(':nr_rejestracji',$nr_rej,PDO::PARAM_STR);

    //     $pojazdyStmt->execute();    

      

     // var_dump($id_modelu);
       // $pojazdyStmt->commit();

    } catch (PDOException $e) {
        $conn->rollBack();
        echo $e->getMessage();
    }
        -->