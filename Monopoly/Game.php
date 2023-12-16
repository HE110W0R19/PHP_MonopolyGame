<?php
require_once "Classes/Dices.php";
require_once "Classes/PageConstructors/FieldConstructor.php";

use Classes\Dices;
use Classes\PageConstructors\FieldConstructor;

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
    <?php FieldConstructor::EchoStyle();?>
    <title>Document</title>
</head>
<body>
<div style="position: absolute; left: 0; top: 0"><?php echo $dicesObj->getDicesValues()?></div>
<div class="MonopolyField">
    <img src="/Images/MonopolyField.png" alt="">
</div>
<?php FieldConstructor::EchoField();?>
<?php $dicesObj->EchoDicesImages();?>
</body>
<footer>
    <div>
        <code>Project making by Unezhev A.I.</code>
    </div>
    <script ></script>
    <script type="module" >
        import DiceThrower from "./JS/ThrowDicesLogic.js";
        DiceThrower.Initialize(770,670,500,300);
        DiceThrower.RepositionDice();
    </script>
    <script type="module" >
        import FieldResizer from "./JS/FieldResizer.js"
        FieldResizer.ResizeContainer(".MonopolyField > div", "<?php FieldConstructor::GetContainerLocator()?>");
    </script>
</footer>
<script src="JS/ThrowDicesLogic.js"></script>
</html>
