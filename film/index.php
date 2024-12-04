<?php 

$string = file_get_contents("../films.json", FILE_USE_INCLUDE_PATH);
$brut = json_decode($string, true);
$top = $brut["feed"]["entry"]; # liste de films

// var_dump($top);


foreach($top as $key => $film){
    // $film = trim($film);
    echo ($key + 1) . " ". trim($film['im:name']['label']) ;

    echo "<br>";
    if($key >= 9){
        break;
    }
}



foreach ($top as $key => $films){

    // $films = trim($films['im:name']['label']);

    if ($films["im:name"]['label'] === "Gravity" ){
        echo " Gravity est $key ème au classement" ;
    };
};



?>




<!-- trouver la fonction qui me permettra d'avoir le top 10 -->