<?php
$number1 = random_int(1,10);
$number2 = random_int(1,10);
$question = '"Résoudre '.$number1.' x '.$number2.' = "';
echo '{ "number1" : '.$number1.' , "number2" : '.$number2.' , "question" : '.$question.'}';