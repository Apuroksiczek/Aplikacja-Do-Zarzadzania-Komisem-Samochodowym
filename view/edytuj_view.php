<div class="prostokat"></div>

<div class="add-car-container">
    <center><span>Edytuj dane auta:</span></center>
    <br>
    <div class="content">
        
    <form action="index.php?action=edytuj&id=<?php echo $row['id_pojazdu'];?>" method="post" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>Nazwa modelu</td>
                    <td><input type="text" name="model" id="" value="<?php echo $row['nazwa_modelu'] ?>"></td>
                </tr>

                <tr>
                    <td>Nazwa marki</td>
                    <td><input type="text" name="marka" id="" value="<?php echo $row['nazwa_marki']?>"></td>
                    <!-- <td><button class="more-information">?</button></td> -->
                    <!-- <td>
                        
                        <select name="marka" id="">
                        <?php
                            //foreach($nazwyMarek as $opcja)
                              //  echo '<option value='.$opcja['nazwa_marki'].'>'.$opcja['nazwa_marki'].'</option>';
                        ?>
                    </select>
                </td> -->
                </tr>

                <tr>
                    <td>rok produkcji</td>
                    <td><input type="number" name="rok" id="" value="<?php echo $row['rok_prod'];?>"></td>
                </tr>

                <tr>
                    <td>przebieg</td>
                    <td><input type="number" name="przebieg" id=""value="<?php echo $row['przebieg'];?>"></td>
                </tr>

                <tr>
                    <td>pojemnosc silnika</td>
                    <td><input type="number" name="pojemnosc" id=""value="<?php echo $row['poj_silnika'];?>"></td>
                </tr>

                <tr>
                    <td>moc silnika</td>
                    <td><input type="number" name="moc" id=""value="<?php echo $row['km'];?>"></td>
                </tr>

                <tr>
                    <td>rodzaj paliwa</td>
                    <td>
                    <select name="paliwo" id="">
                    <option value="diesel">diesel</option>
                    <option value="benzyna" <?php if($row['paliwo'] === 'benzyna') echo 'selected';?> > benzyna</option>
                    </select>
                    </td>
                </tr>

                <tr>
                    <td>rodzaj pojazdu</td>
                    <td>
                    <select name="rodzaj_pojazdu" id="">
                    <option value="2" <?php if($row['rodzaj_poj'] === 2) echo 'selected';?>>Sportowe</option>
                    <option value="1" <?php if($row['rodzaj_poj'] === 1) echo 'selected';?> > Osobowe</option>
                    <option value="3" <?php if($row['rodzaj_poj'] === 3) echo 'selected';?>>VAN/SUV</option>

                    </select>
                    </td>
                </tr>

                <tr>
                    <td>Skrzynia: </td>
                    <td>
                    <select name="skrzynia" id="">
                    <option value="0">manualna</option>
                    <option value="1">automatyczna</option>
                    </select>
                    </td>
                </tr>

                <tr>
                    <td>nr rejestracji</td>
                    <td><input type="text" name="nr_rej" id="" value="<?php echo $row['nr_rejestracji'];?>"></td>
                </tr>
    
                <tr>
                    <td>data rejestracji</td>
                    <td><input type="date" name="data_rej" id="" value = "<?php echo $row['data_rejestracji'];?>"></td>
                </tr>

                <tr>
                    <td>czy powypadkowy</td>
                    <td>
                    <select name="wypadek" id="">
                    <option value="0">nie</option>
                    <option value="1">tak</option>
                    </select>
                    </td>
                </tr>

                <tr>
                    <td>data przyjecia</td>
                    <td><input type="date" name="data_przyj" id="" value = "<?php echo $row['data_przyjecia'];?>"></td>
                </tr>

                <tr>
                    <td>cena kupna</td>
                    <td><input type="number" name="cena_k" id="" value="<?php echo $row['cena_kupna'];?>"></td>
                </tr>

                <tr>
                    <td>cena ogloszenie</td>
                    <td><input type="number" name="cena_o" id="" value="<?php echo $row['cena_ogloszenie'];?>"></td>
                </tr>

                <tr>
                    <td>zdjecie</td>
                    <td>		<input type="file" name="imgUpload"  title="">
</td>
                </tr>

            </table>
            <br>
            <center><input class="guzik" type="submit" name="submit" value="Zmień"></center>
        </form>   

     
    </div>
</div>