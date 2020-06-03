<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Super révisions</title>
</head>
<body>
    <?php include_once("navbar.html"); ?>
    
    <main>
        <section>
            <header>
                <h1>Super Révisions</h1>
            </header>

            <?php
            // set state and score
            if (isset($_POST["state"])){
                $state = $_POST["state"]+1;
                $score = $_POST["score"];
                // check answer
                if($_POST["answer"]==$_POST["result"]){
                    ?>
                    <p>Bonne réponse !</p>
                    <?php
                    $score++;
                }else{
                    ?>
                    <p>Mauvaise réponse !</p>
                <?php
                }
            }else{
                $state=0;
                $score=0;
            }
            ?>
            <p>Votre score : <?=$score?>/<?=$state?></p>

            <?php
            //revision end
            if ($state == 5){
                ?>
                <p>Terminé</p>
                
                <form action="" method="post">
                    <input type="submit" value="RECOMMENCER">
                </form>
                <?php
            }else{
                // choose random numbers and compute result
                $random1=random_int(1,10);
                $random2=random_int(1,10);
                $result=$random1*$random2;
                ?>
                <!-- ask question -->
                <form action="" method="post">
                    <label for="answer">Question <?=$state+1?> : résoudre <?=$random1?> x <?=$random2?> = </label>
                    <input type="text" name="answer" id="anwer">
                    <input type="hidden" name="result" id="result" value=<?=$result?>>
                    <input type="hidden" name="state" id="state" value=<?=$state?>>
                    <input type="hidden" name="score" id="score" value=<?=$score?>>
                    <input type="submit" value="VALIDER">
                </form>
            <?php
            }
            ?>
        </section>
    </main>
</body>
</html>