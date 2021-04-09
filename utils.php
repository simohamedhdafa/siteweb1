<?php

function get_columns_cvs($f){
    /**
     * retourner les noms de colonnes d'un csv sous forme d'un tableau de strings
     */
    $p = fopen($f, "r");
    $tab = fgetcsv($p);
    fclose($p);
    return $tab;
}

function select_from_csv($columns, $bd){
    /**
     * retourne un tableau des champs $columns depuis le csv $bd.csv
     * entrées:
     *  $columns : tableau de colonnes
     *  $bd : nom du fichier 
     * sorties:
     *  tableau des enregistrements : tableau
     */
    $results = array();
    $nos_columns = get_columns_cvs($bd);
    $metacsv = current(fgetcsv(fopen($bd, "r")));
    while($l = fgetcsv($f)){

    }
    return $results;
}