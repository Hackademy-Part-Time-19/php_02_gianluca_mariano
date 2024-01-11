
<?php 

//Esercizio 1

$users = [['name' => 'Davide', 'surname' => 'Cariola', 'gender' => 'M'],['name' => 'Giorgia', 'surname' => 'Bianchi', 'gender' => 'F'],['name' => 'Optimus', 'surname' => 'Prime', 'gender' => 'NB']];


foreach($users as $utente) {
    
    if($utente['gender'] == 'M') {
        
        echo("Buongiorno Sig. " . $utente['name'] . " " . $utente['surname'] . "\n");

    } elseif($utente['gender'] == 'F') {
        
        echo("Buongiorno Sig.ra " . $utente['name'] . " " . $utente['surname'] . "\n");
        
    } elseif($utente['gender'] == 'NB') {

        echo("Buongiorno " . $utente['name'] . " " . $utente['surname'] . "\n");
        
    } 
    
}

//Esercizio 2

$number = [2,123,64,40,67,32,45,99,1,4,88];

foreach($number as $numero_meditato) {

    if ($numero_meditato % 2 == 0) {

        echo $numero_meditato . ", ";

    }

}

//Esercizio 3

echo "\n";

for ($i = 0; $i < 100; $i++) {

    if ($i !== 0 && $i % 3 == 0 && $i % 5 == 0){

        echo "HACKADEMY, ";

    } else if ($i !== 0 && $i % 5 == 0) {

        echo "JAVASCRIPT, ";


    } else if ($i !== 0 && $i % 3 == 0) {

        echo "PHP, ";

    } else {

        echo $i . ", ";

    }


}