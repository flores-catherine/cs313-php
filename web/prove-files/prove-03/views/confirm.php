<!DOCTYPE html>
<html lang="en-us">
<head>
    <meta charset="utf-8">
    <title>Checkout</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Purchase Confirmation">
</head>    
<body>
    <?php include 'modules/header.php';?>
    <h1>Confirmation</h1>
    <div class="panel panel-default">
        <div class="panel-heading"><h2>Thank You For Your Purchase<?php if (isset($name)){echo ", ".$name;}?></h2></div>
        <div class="panel-body">Your package will be sent to <?php if (isset($address)){echo " ".$address;}?><?php if (isset($zip)){echo ", ".$zip;}?></div>
    </div>
    <?php include 'modules/footer.php';?>
</body>    
</html>