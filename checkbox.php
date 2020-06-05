<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once("template/head.html"); ?>
    <title>Séléction de tables de multiplication</title>
</head>
<body>
    <?php include_once("template/navbar.html"); ?>

    <main>
        <section class="container flex column center">
            <header>
                <h1>Sélection de tables de multiplication</h1>
            </header>
            
            <div class="elevation">
                <!-- select tables to print -->
                <form action="checkbox.php" method="post" class="flex column center">
                    <fieldset class="flex margin wrap">
                        <legend>Choix les tables à afficher : </legend>
                            <?php
                            for ($i=1; $i<=10; $i++){
                            ?>
                                <!-- form checkboxes -->
                                <label class="box"><?=$i?>
                                    <input type="checkbox" name=<?=$i?> id=<?=$i?> value=<?=$i?>/>
                                    <span class="checkmark"></span>
                                </label>
                            <?php
                            }
                            ?>
                    </fieldset>

                    <input type="submit" value="Afficher">
                </form>
            </div>
            
            <div class="flex wrap justify-center">
                <?php
                for ($i=1; $i<=10; $i++){
                    // check submitted numbers
                    if (isset($_POST[$i])){
                        ?>
                        <section class="table">
                            <header>
                                <h2>Table du <?=$i?></h2>
                            </header>
    
                           <ol>
                                <?php
                                // compute and print results
                                for ($j=1; $j<=10; $j++){
                                    $result=$i*$j;
                                ?>
                                    <li><?=$i?> x <?=$j?> = <?=$result?></li>
                                <?php
                                }
                                ?>
                           </ol>
                        </section>
                    <?php
                    }
                }
                ?>
            </div>
        </section>
    </main>
    
    <script src="js/burger.js"></script>
</body>
</html>