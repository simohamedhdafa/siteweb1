<?php
    // 26/03/2021
    // système de pagination 
    // impression (generation pdf)
?>

<?PHP
    // gerer le fichier de données:
    $etudiants = array();
    $f = fopen("elevesYm2.csv", "r");
    while($ligne = fgetcsv($f)){
        array_push($etudiants, array($ligne[0], $ligne[1]));
    }
?>

<?php
// préparation des variables pour mise en place de la pagination.
    $parPage = 2; // choix
    $nbrPage = ceil((count($etudiants)-1)/$parPage); // règle

    $fisrtPage = 1;
    $lastPage = $nbrPage;

    $currentPage = isset($_GET['page']) ? $_GET['page'] : $fisrtPage;

    $A = $parPage * ($currentPage - 1) + 1;
    $B = $parPage * $currentPage;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">

    <title>Document</title>
</head>
<body>
    <div class="container">

    
        <?php for($etudiant=$A; $etudiant<=$B; $etudiant++) { ?>
        <?php 
            if($etudiant>(count($etudiants)-1)){
                break;
            }
        ?>

        <?php 
            $val = array();
            do{
                $val = array(random_int(150, 850), random_int(150, 850), random_int(150, 850), random_int(150, 850));
                $repetition = false;

                if(count(array_unique($val))!=4){
                    $repetition = true;
                }
            }while($repetition);
        ?>

        <div class="row">
        <div class="span9">
        <div class="row">
            <div class="span3">
                <h2>Enoncé</h2>      
                <h3><?php echo $etudiants[$etudiant][0]." ".$etudiants[$etudiant][1] ?></h3>
                <table class="table table-striped table-bordered table-condensed">
                    <tr><td>Bin</td><td>Oct</td><td>Dec</td><td>Hex</td></tr>
                    <tr><td><?php echo decbin($val[0]) ?></td><td></td><td></td><td></td></tr>
                    <tr><td></td><td><?php echo decoct($val[1]) ?></td><td></td><td></td></tr>
                    <tr><td></td><td></td><td><?php echo $val[2] ?></td><td></td></tr>
                    <tr><td></td><td></td><td></td><td><?php echo dechex($val[3]) ?></td></tr>
                </table>
            </div>

            <div class="span3">
                <h2>Corrigé</h2>
                <h3><?php echo $etudiants[$etudiant][0]." ".$etudiants[$etudiant][1] ?></h3> 
                <table class="table table-striped table-bordered table-condensed">
                    <tr><td>Bin</td><td>Oct</td><td>Dec</td><td>Hex</td></tr>
                    <?php for($i=0; $i<=3; $i++){ ?>
                        <tr><td><?php echo decbin($val[$i]) ?></td><td><?php echo decoct($val[$i]) ?></td><td><?php echo $val[$i] ?></td><td><?php echo dechex($val[$i]) ?></td></tr>
                    <?php } ?>
                </table>
            </div>
        </div>
        </div>
        </div>
        <?php } ?>
            
            
  

    <div class="pagination">
        <ul>
            <!--<li><a href="#">Prev</a></li>
            <li><a href="#">1</a></li>-->
            <li><?php if($currentPage>$fisrtPage){ ?><a href=<?php echo $_SERVER['PHP_SELF'].'?page='.($currentPage-1) ?>>precedente</a><?php } ?></li>
            <li><a href="#"><?php echo $currentPage ?></a></li>
            <li><?php if($currentPage<$lastPage){ ?><a href=<?php echo $_SERVER['PHP_SELF'].'?page='.($currentPage+1) ?>>suivante</a><?php } ?></li>
            <!--<li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li><a href="#">Next</a></li>-->
        </ul>
    </div>

    </div>        
</body>
</html>