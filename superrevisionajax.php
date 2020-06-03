<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once("template/head.html"); ?>
    <title>Super Révisions Ajax</title>
</head>
<body>
    <?php include_once("template/navbar.html"); ?>
    
    <main class="container">
        <section>
            <header>
                <h1>Super Révisions</h1>
            </header>

            <!-- ask questions -->
            <form id="questions" style="display: none">
                <label for="answer1" id="label1"></label>
                <input type="number" name="answer1" id="answer1">
                <input type="hidden" id="number1-1" name="number1-1" value="">
                <input type="hidden" id="number1-2" name="number1-2" value="">

                <label for="answer2" id="label2"></label>
                <input type="number" name="answer2" id="answer2">
                <input type="hidden" id="number2-1" name="number2-1" value="">
                <input type="hidden" id="number2-2" name="number2-2" value="">

                <label for="answer3" id="label3"></label>
                <input type="number" name="answer3" id="answer3">
                <input type="hidden" id="number3-1" name="number3-1" value="">
                <input type="hidden" id="number3-2" name="number3-2" value="">

                <label for="answer4" id="label4"></label>
                <input type="number" name="answer4" id="answer4">
                <input type="hidden" id="number4-1" name="number4-1" value="">
                <input type="hidden" id="number4-2" name="number4-2" value="">

                <label for="answer5" id="label5"></label>
                <input type="number" name="answer5" id="answer5">
                <input type="hidden" id="number5-1" name="number5-1" value="">
                <input type="hidden" id="number5-2" name="number5-2" value="">

                <input id="questionsSubmit" type="submit" value="Valider">
            </form>

            <!-- print score-->
            <p id="score" style="display: none"></p>

            <!-- launch -->
            <form id="launch">
                <input type="submit" value="Questions !">
            </form>

        </section>
    </main>

    <script src="js/script.js"></script>
</body>
</html>