<?php 

/* Ton code commence ici :) */


$file=file('http://www.ecb.europa.eu/stats/eurofxref/eurofxref-daily.xml');
foreach($file as $line){
    $line=explode("'", $line);
    // if(count($line)===5) echo $line[1].'='.$line[3].'<br />';
    
    if (count($line)===5) {
        $numberToConvert=$_GET['number'];
        $amountconvert = getAmountInDollars($numberToConvert,$line[3]);
        echo '<pre>'.$numberToConvert.' € = '.$amountconvert.' '.$line[1].'   Taux = '.$line[3].'</pre>';

    }
    
    
}

echo "<pre>un \t un</pre>";

// $numberToConvert=$_GET['number'];
// $amountconvert = getAmountInDollars($numberToConvert,$taux);





    function getAmountInDollars($numberToConvert,$taux) {

        $amountconvert=$numberToConvert*$taux;
        
        return $amountconvert;

    };

// nom de la fonction : isPrime()   
// prend le nombre à tester en paramètre
// retourne vrai si premier, faux sinon
// un nombre premier est un nombre divisible uniquement par lui-même et 1
// un nombre premier est obligatoirement impair (sauf 2)
// 1 n'est pas un nombre premier
// pour tester voici une liste de nombres premiers : 2, 3, 5, 59, 89, 97, 193

function isPrime($number) {
    //boucle de 2 au nombre à tester
    for ($i = 2; $i < $number; $i++) {
        //test du qutotien de la division
        if ($number % $i == 0) {
            return FALSE;
        }
    }
 
    //Aucun diviseur trouvé, c'est un nombre permier
    return TRUE;
}
 
// boucle de 0 à 99
echo '<br>Nombre premier de 0 à 200: ';
for ($i = 2; $i < 200; $i++) {
    if (isPrime($i)) {
        echo $i.' ';
    }
}