<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>activité 9</title>
</head>
<body>
        <h2>Activité 9 Jeux de cartes</h2>
         <?php
        echo "<h3>Créationde 52 cartes et affichage du tableau</h3>";

        $tabNum = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13);
        $tabSuite = array("Carreau", "Trèfle", "Coeur", "Pique");
        for ($k=0; $k < 4 ; $k++) 
        { 
            for ($i=0; $i < 13 ; $i++) 
            { 
            $j = $i+$k*13;
            $tabCarte[$j]= $tabNum[$i] . "-" . $tabSuite[$k];
           
            }
        }

        echo "<table>";
        for ($i=0; $i < 4 ; $i++) 
        { 
            $j=13*$i;
        echo "<tr>";
        echo "<td>$tabCarte[$j]</td><td>{$tabCarte[$j+1]}</td><td>{$tabCarte[$j+2]}</td><td>{$tabCarte[$j+3]}</td><td>{$tabCarte[$j+4]}</td><td>{$tabCarte[$j+5]}</td><td>{$tabCarte[$j+6]}</td><td>{$tabCarte[$j+7]}</td><td>{$tabCarte[$j+8]}</td><td>{$tabCarte[$j+9]}</td><td>{$tabCarte[$j+10]}</td><td>{$tabCarte[$j+11]}</td><td>{$tabCarte[$j+12]}</td>";
        echo "</tr>";
        }
        echo "</table>";

        echo "<h3>Création de deux paquets</h3>";

        $paquet1 = array_slice($tabCarte, 0, 26);
        $paquet2 = array_slice($tabCarte, 26, 26);

       

        echo "<h4>paquet1</h4>";
        echo "<table>";
        for ($i=0; $i < 2 ; $i++) 
        { 
            $j=13*$i;
        echo "<tr>";
        echo "<td>$paquet1[$j]</td><td>{$paquet1[$j+1]}</td><td>{$paquet1[$j+2]}</td><td>{$paquet1[$j+3]}</td><td>{$paquet1[$j+4]}</td><td>{$paquet1[$j+5]}</td><td>{$paquet1[$j+6]}</td><td>{$paquet1[$j+7]}</td><td>{$paquet1[$j+8]}</td><td>{$paquet1[$j+9]}</td><td>{$paquet1[$j+10]}</td><td>{$paquet1[$j+11]}</td><td>{$paquet1[$j+12]}</td>";
        echo "</tr>";
        }
        echo "</table>";


        

       
      echo "<h4>Paquet2</h4>";

      echo "<table>";

        for ($i=0; $i < 2 ; $i++) 
        { 
            $j=13*$i;
        echo "<tr>";
        echo "<td>$paquet2[$j]</td><td>{$paquet2[$j+1]}</td><td>{$paquet2[$j+2]}</td><td>{$paquet2[$j+3]}</td><td>{$paquet2[$j+4]}</td><td>{$paquet2[$j+5]}</td><td>{$paquet2[$j+6]}</td><td>{$paquet2[$j+7]}</td><td>{$paquet2[$j+8]}</td><td>{$paquet2[$j+9]}</td><td>{$paquet2[$j+10]}</td><td>{$paquet2[$j+11]}</td><td>{$paquet2[$j+12]}</td>";
        echo "</tr>";
        }
        echo "</table>";

       
        echo"<h3>Brassage des cartes et affichage </h3>";
        for ($p=0; $p < 26; $p++) { 
   
            $paquetBrasse[] = $paquet1[$p];
            $paquetBrasse[] = $paquet2[$p]; 
        }
        
       

        echo "<table>";
        for ($i=0; $i < 4 ; $i++) 
        { 
            $j=13*$i;
            echo "<tr>";
           
            echo "<td>$paquetBrasse[$j]</td><td>{$paquetBrasse[$j+1]}</td><td>{$paquetBrasse[$j+2]}</td><td>{$paquetBrasse[$j+3]}</td><td>{$paquetBrasse[$j+4]}</td><td>{$paquetBrasse[$j+5]}</td><td>{$paquetBrasse[$j+6]}</td><td>{$paquetBrasse[$j+7]}</td><td>{$paquetBrasse[$j+8]}</td><td>{$paquetBrasse[$j+9]}</td><td>{$paquetBrasse[$j+10]}</td><td>{$paquetBrasse[$j+11]}</td><td>{$paquetBrasse[$j+12]}</td>";
            echo "</tr>";
        }
        echo "</table>";
?>

</body>
</html>
