<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <main>
        <modal class="audio-modal">
            <p class="modal-sound-btn">sound<span class="modal-sound-on">on</span>/<span class="modal-sound-off">off</span></p>
        </modal>
        <div class="hero">
            <h1>the spring of truth</h1>
            <p>this is the spring of eternal truth and wisdom</p>
            <p>hello stranger</p>
            <p>tell me your name?</p>
            <form method="post">
            <input class="input-name" type="text" name="name" placeholder="tell me your name">
            <input class="btn input-btn" type="submit" value="tell">
            <p>i greet you, <?=$_POST["name"];?>, to the Spring of Truth </p>
            <p>you may ask me a question...</p>
            <p>what is bothering you, <?=$_POST["name"];?>?</p>
            <input class="input-name" type="text" name="question" placeholder="write your question">
            <input class="btn input-btn" type="submit" value="ask">
            </form>
            <?php
            if ($_POST["question"]) {
                echo "<p>got a question</p>";
            }
            ?>
        </div>
        <audio class="audio" loop>
            <source src="spring-forest-birds-sounds.mp3" type="audio/mp3">
          Your browser does not support the audio element.
          </audio>
    </main>
      <button class="btn sound-btn">sound<span class="sound-on">on</span>/<span class="sound-off">off</span></button>
    <script src="main.js"></script>
</body>
</html>