<?php
echo"Hoe veel activiteiten wil je toevoegen?". PHP_EOL;
$hoeveel = readline("");
$lijst = array();
if(is_numeric($hoeveel)){
    for($i = 1; $i <=$hoeveel; $i++){
        echo"Wat wil je toevoegen aan jouw bucket list?".PHP_EOL;
        array_push($lijst, readline(""));
    }
    echo "op jouw bucket list staat nu: ".PHP_EOL;
    echo implode("".PHP_EOL, $lijst);
}
else{
    echo "'".$hoeveel."'"."is geen getal, probeer opnieuw";
}
?>