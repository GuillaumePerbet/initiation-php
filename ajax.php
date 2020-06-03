<?php
if (isset($_POST["number1-1"])){
    // questions form handling
    $score = 0;
    for ( $i=1 ; $i<=5 ; $i++ ){
        if ($_POST["answer".$i] == $_POST["number".$i."-1"] * $_POST["number".$i."-2"]){
            $score++;
        }
    }
    echo "Votre score est de ".$score." / 5";
}else{
    // launch form handling
    $number1 = random_int(1,10);
    $number2 = random_int(1,10);
    $question = 'Résoudre '.$number1.' x '.$number2.' = ';
    echo json_encode(array("number1"=>$number1 , "number2"=>$number2 , "question"=>$question,));
}