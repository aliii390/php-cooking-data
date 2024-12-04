<?php 


// exo1
$string = file_get_contents("dictionnaire.txt", FILE_USE_INCLUDE_PATH);
$dico = explode("\n", $string);
// echo count($dico);
// fin de l'exo


//exo2
$count = 0;

foreach($dico as $value){  //foreach pour parcourir le dictionnaire
    $value = trim($value);
    //il manque un if pour trouver les mots qui on 15 caract comment faire ?
    if(strlen($value) === 16){ 
       $count += 1;
    }

}

// echo "il ya $count mots qui font 15 caractere";
// fin de l'exo


//exo 3
$compteur = 0;
foreach($dico as $lettre){
    $lettre = trim($lettre);
    if(str_contains($lettre, "w") || str_contains($lettre, "W") ){
        $compteur += 1;
    }
}

// echo "il ya $compteur w  ";

//fin de l'exo



// exo4 

$compteur3 = 0;

foreach($dico as $lettreQ){
    $lettreQ = trim($lettreQ);
    if(substr($lettreQ, -1) == "q" || substr($lettreQ, -1) == "Q" ){
        $compteur3 += 1;
    }
}
echo "il ya $compteur3 q  ";


// fin de l'exo







?>