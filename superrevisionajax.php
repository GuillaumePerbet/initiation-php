<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Super Révisions Ajax</title>
</head>
<body>
    <?php include_once("navbar.php"); ?>
    
    <main>
        <section>
            <header>
                <h1>Super Révisions</h1>
            </header>

            <!-- ask questions -->
            <form id="questions" style="display: none">
                <label for="answer1"></label>
                <input type="number" name="answer1" id="anwer1">

                <label for="answer2"></label>
                <input type="number" name="answer2" id="anwer2">

                <label for="answer3"></label>
                <input type="number" name="answer3" id="anwer3">

                <label for="answer4"></label>
                <input type="number" name="answer4" id="anwer4">

                <label for="answer5"></label>
                <input type="number" name="answer5" id="anwer5">

                <input type="submit" value="Valider">
            </form>

            <!-- print score-->
            <p id="score" style="display: none"></p>

            <!-- launch -->
            <form id="launch">
                <input type="submit" value="C'est parti !">
            </form>

        </section>
    </main>

    <script src="script.js"></script>
</body>
</html>