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
    <?php
    $answers = ["It is certain.", "It is decidedly so.", "Without a doubt.", "Yes - definitely.", "You may rely on it.", "As I see it, yes.", "Most likely.", "Outlook good.", "Yes.", "Signs point to yes.", "Reply hazy, try again.", "Ask again later.", "Better not tell you now.", "Cannot predict now.", "Concentrate and ask again.", "Don't count on it.", "My reply is no.", "My sources say no.", "Outlook not so good.", "Very doubtful.", "Possibly."];
    $rand_num = rand(0, 20);
    echo "<p>$answers[$rand_num]</p>"
    ?>

    <?php
$drinks = ["espresso" => 2, "americano" => 2.5, "latte" => 2.8, "cappucino" => 2.9, "double espresso" => 2.2];
$pastries = ["brownie", "biscuit", "carrot cake", "cheese cake", "sponge cake", "muffin"];
?>

<h1>Welcome to the Repetitive Cafe</h1>

<h3>Drinks!</h3>
<ul>
<?php
foreach($drinks as $drink => $drink_price):
?>
<li><?="$drink .... $drink_price"?></li>
<?php endforeach; ?>
</ul>
<h3>Pastries! ($2 each)</h3>
<ul>
<?php
for($i=0; $i < count($pastries); $i++):
?>
<li><?="$pastries[$i]"?></li>
<?php endfor; ?>
</ul>

</body>
</html>