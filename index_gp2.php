<?php
    $etudiants = array();
    $f = fopen("BD2.csv", "r");
    while($ligne = fgetcsv($f)){
        array_push($etudiants, $ligne);
    }
    fclose($f);
?>

<html>
  <head>
    <title>Etudiants</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
    <link href="bootstrap/css/bootstrap-responsive.css" rel="stylesheet" media="screen">
  </head>
  <body>
    <div class="container">
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span2">
            <!--Sidebar content-->
            </div>
            <div class="span10">
            <!--Body content-->
            <h1>Listing des étudiants de YM2</h1>
            <table class="table table-hover">
                <tr>
                    <td>photo</td>
                    <td>nom</td>
                    <td>prenom</td>
                    <td>poids</td>
                    <td>taille</td>
                    <td>moyenne</td>
                    <td>voir</td>
                </tr>

                <?php for($i=1; $i<count($etudiants)-1; $i++){ // en python: for i in range(1, len(etudiants)): ?> 
                    <tr>
                        <td><?php echo "<img src=".substr($etudiants[$i][7], 1, -1)." width=\"70\" height=\"70\" >" ?></td>
                        <td><?php echo $etudiants[$i][0] ?></td>
                        <td><?php echo $etudiants[$i][1] ?></td>
                        <td><?php echo $etudiants[$i][3] ?></td>
                        <td><?php echo $etudiants[$i][4] ?></td>
                        <td><?php echo $etudiants[$i][6] ?></td>
                        <td><a href="profil.php?e=<?php echo $i ?>&c=<?php echo $etudiants[$i][8] ?>">aller au profil</a></td>
                    </tr>
                <?php } ?>

            </table>
            </div>
        </div>
        </div>
    </div>
    <!--
    <script src="https://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    -->
  </body>
</html>