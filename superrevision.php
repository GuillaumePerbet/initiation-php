<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once("template/head.html"); ?>
    <title>Super révisions</title>
</head>
<body>
    <?php include_once("template/navbar.html"); ?>
    
    <main>
        <section class="container flex column center">
            <header>
                <h1>Super Révisions</h1>
            </header>

            <div class="elevation flex column center">
                <?php
                // set state and score
                if (isset($_POST["state"])){
                    $answer = $_POST["answer"];
                    $state = $_POST["state"]+1;
                    $score = $_POST["score"];
                    $number1 = $_POST["number1"];
                    $number2 = $_POST["number2"];
                    $result = $number1 * $number2;
                    // check answer
                    if($answer == $result){
                        ?>
                        <p class="correct">
                            <?=$number1?> x <?=$number2?> = <span><?=$answer?></span>
                        </p>
                        <?php
                        $score++;
                    }else{
                        ?>
                        <p class="incorrect">
                            <?=$number1?> x <?=$number2?> = <span><?=$answer?></span><br/>
                            <?=$number1?> x <?=$number2?> = <span><?=$result?></span>
                        </p>
                    <?php
                    }
                }else{
                    $state=0;
                    $score=0;
                }
                ?>
                <p class="score">Votre score : <?=$score?>/<?=$state?></p>
    
                <?php
                //revision end
                if ($state == 5){
                    ?>
                                    
                    <form action="" method="post">
                        <input type="submit" value="Recommencer">
                    </form>
                    <?php
                }else{
                    // choose random numbers and compute result
                    $random1=random_int(1,10);
                    $random2=random_int(1,10);
                    ?>
                    <!-- ask question -->
                    <form action="" method="post" class="flex column center">
                        <div class="margin">
                            <label for="answer">Question <?=$state+1?> : résoudre <?=$random1?> x <?=$random2?> = </label>
                            <input type="number" name="answer" id="anwer">
                        </div>
                        <input type="hidden" name="number1" id="number1" value=<?=$random1?>>
                        <input type="hidden" name="number2" id="number2" value=<?=$random2?>>
                        <input type="hidden" name="state" id="state" value=<?=$state?>>
                        <input type="hidden" name="score" id="score" value=<?=$score?>>
                        <input type="submit" value="Valider">
                    </form>
                <?php
                }
                ?>
            </div>
        </section>
    </main>
</body>
</html>