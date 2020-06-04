<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once("template/head.html"); ?>
    <title>Révisions</title>
</head>
<body>
    <?php include_once("template/navbar.html"); ?>
    
    <main>
        <section class="container flex column center">
            <header>
                <h1>Révisions</h1>
            </header>

            <?php
            // check submitted number
            if (isset($_POST["number"])){
                $number = $_POST["number"];
                // choose random number and compute result
                $random=random_int(1,10);
                $result=$number*$random;
                ?>
                <!-- ask question -->
                <form action="" method="post" class="flex column center">
                    <div>
                        <label for="answer">Résoudre <?=$number?> x <?=$random?> = </label>
                        <input type="number" name="answer" id="anwer">
                    </div>
                    <input type="hidden" name="result" id="result" value=<?=$result?>>
                    <input type="submit" value="Valider">
                </form>
            <?php
            }else{
                // check submitted answer
                if (isset($_POST["result"])){
                    if ($_POST["answer"]==$_POST["result"]){
                    ?>
                        <p>Bonne réponse!</p>
                    <?php
                    }else{
                    ?>
                        <p>Mauvaise Réponse!</p>
                    <?php
                    }
                }
                ?>
                <!-- select table to practice -->
                <form action="" method="post" class="flex column center">
                    <div class="flex center">
                        <label for="number">Choisir la table à réviser :</label>
                        <select name="number" id="number">
                            <?php
                            for ($i=1; $i<=10; $i++){
                            ?>
                                <!-- form options -->
                                <option value=<?= $i?>><?= $i?></option>
                            <?php
                            }
                            ?>
                        </select>

                        <div class="select-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="none" d="M0 0h24v24H0V0z"/><path d="M7 10l5 5 5-5H7z"/></svg>
                        </div>
                    </div>
                    <input type="submit" value="Choisir">
                </form>
            <?php
            }
            ?>
        </section>
    </main>
</body>
</html>