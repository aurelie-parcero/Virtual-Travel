<?php
$i = 0;
$tourdebouclewhile=0;
do{
    echo '<p>C\'est quand que tu mets des paillettes dans mon code Kevin?</p>';
    $i++;
} while($i < 10);



while($tourdebouclewhile<50){

echo '<p>Les calculs sont pas bons Kevin!</p>';
$tourdebouclewhile++;
}

for($a = 1; $a < 10; $a++){

    echo '<p>J\'veux des moulures au plafond!!!</p>';
}


//tableau à deux dimensions
$vegetaux = array (
        "fruits" => array( "a" => "ananas", "b" => "banane", "c" => "cerise", "d" => "datte"),
        "légumes" => array("a" => "artichaut", "b" => "blette", "c" => "carotte", "d" => "doudou"),
        "numero" => array(1,2,3,4,5,6)
);

//tableau à une dimension
$age = array("Sonia" => "32", "Linda" => "33", "Hyejin" => "29", "Muzaffer" => "27", "Matthias" => "18", "Valentin" => "24");

echo '<pre>';
echo 'Voici un tableau à une dimension:';
print_r($age);

echo'Voici un tableau à deux dimensions:';
print_r($vegetaux);
echo '</pre>';



function solution($N) {
    $binaire = array();
    while ($N > 0) {
        $modulo = $N%2;
        $N = ($N-$modulo)/2;
        array_unshift($binaire, $modulo);
        //echo $N;
    }

    //$N = transformNumber($N);
    print_r($binaire);
}

solution(12);