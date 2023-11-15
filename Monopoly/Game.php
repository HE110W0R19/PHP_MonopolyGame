<?php

use Classes\Dices;
require_once "Classes/Dices.php";

$dicesObj = new Dices();
$dicesObj->ThrowDices();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css/styles.css">
    <?php $dicesObj->EchoHeader();?>
    <title>Document</title>
</head>
<body>
<div style="position: absolute; left: 0; top: 0"><?php echo $dicesObj->getDicesValues()?></div>
<div class="MonopolyField">
    <img src="/Images/MonopolyField.png" alt="">
</div>
<?php $dicesObj->EchoDicesImages();?>
</body>
<footer>
    <div>
        <code>Project making by Unezhev A.I.</code>
    </div>
</footer>
<script src="JS/ThrowDicesLogic.js"></script>
</html>
