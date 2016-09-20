<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>PHP Quiz Maker</title>
    <link rel="stylesheet" href="css/style.css" media="screen" title="no title">
</head>

<body>
    <header>
        <div class="container">
            <h1>PHP Quize Maker</h1>
        </div>
    </header>

    <main>
        <div class="container">
            <div class="current">Question 1 of 5</div>
            <p class="question"> What is PHP stant for? </p>


            <form method="post" action="process.php">
                <ul class="choices">
                    <li><input name="choice" type="radio" value="1" />PHP: Hypertext Preprocessor</li>
                    <li><input name="choice" type="radio" value="1" />Private Home Page</li>
                    <li><input name="choice" type="radio" value="1" />Personal Home Page</li>
                    <li><input name="choice" type="radio" value="1" />Personal Hypertext Preprocessor</li>
                </ul>
                <input type="submit" value="Submit" />
            </form>
        </div>
    </main>

    <footer>
        <div class="container">Copywrite &copy; 2016, PHP Quizzer </div>
    </footer>

</body>

</html>
