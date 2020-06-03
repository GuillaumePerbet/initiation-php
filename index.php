<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once("template/head.html"); ?>
    <title>Table de la multiplication par 3</title>
</head>
<body>
    <?php include_once("template/navbar.html"); ?>

    <main>
        <section class="container">
            <header>
                <h1>La table de multiplication du 3</h1>
            </header>
        
            <section class="table">
                <header>
                    <h2>Table du 3</h2>
                </header>
                
                <?php
                // compute and print results
                for ($i=1; $i<=10; $i++){
                    $result=3*$i;
                    ?>
                    <p>3 x <?=$i?> = <?=$result?></p>
                <?php
                }
                ?>
            </section>
        </section>
    </main>
</body>
</html>