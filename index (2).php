<?php 
    $etudiants = array();
    $f = fopen("BD2.csv", "r");
    while($l = fgetcsv($f)){
        array_push($etudiants, $l);
    }
    fclose($f); // liberer les ressources : fermeture du fichier
?>

<!DOCTYPE html>
<html>
  <head>
    <title>student listing</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
    <link href="bootstrap/css/bootstrap-responsive.css" rel="stylesheet" media="screen">
  </head>
  <body>
    <div class="container-fluid">
    <div class="row-fluid">
        <div class="span2">
        <!--Sidebar content-->
        <h3>sidebar</h3>
        </div>
        <div class="span10">
        <!--Body content-->
        <h1>Listing des étudiants de YM2 groupe 2</h1>
        <table class="table table-striped">
            <tr>
                <td><?php echo strtoupper("photo") ?></td>
                <td>NOM COMPLET</td>
                <td>POIDS</td>
                <td>TAILLE</td>
                <td>aller au profil</td>
            </tr>
            <?php for($i=1; $i<count($etudiants)-1; $i++){ // for i in range(1, len(etudiants)):?>
                <tr>
                    <td><?php echo "<img src=".substr($etudiants[$i][7], 1, -1)." width=\"50\" height=\"50\">" ?></td>
                    <td><?php echo $etudiants[$i][0]." ".$etudiants[$i][1] ?></td>
                    <td><?php echo $etudiants[$i][3] ?></td> 
                    <td><?php echo $etudiants[$i][4] ?></td>
                    <!--<td><a href= <?php //echo "profil.php?n=\"".str_replace(' ', '_', $etudiants[$i][0])."\"&p=\"".trim($etudiants[$i][1])."\"" ?>>voir</a></td>-->
                    <td><a href= <?php echo "profil.php?id=".$i."&sexe=".trim(trim($etudiants[$i][8]), ';')."" ?>>voir</a></td>
                </tr>
            <?php } ?>
        </table>
        </div>
    </div>
    </div>
    <!--
    <script src="https://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    -->
  </body>
</html>