<!DOCTYPE html>
<html lang="en-us">
<head>
    <meta charset="utf-8">
    <title>Checkout</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Purchase checkout for cat city products">
</head>    
<body>
    <?php include 'modules/header.php';?>
    <form action="index.php/?action=checkout" method="post">
        <label for="name">Full Name:</label><br>
        <input type ="text" name="name" required><br>
        <label for="address">Address :</label><br>
        <input type = "text" name="address" required><br>
        <label for="zip">Zip Code</label><br>
        <input type="text" name="zip" required><br>
        <a href="index.php" ><button type="button">Keep Browsing</button> </a>
        <input type='submit' value="checkout">
        <input type='hidden' name='action' value="checkout">
    </form>
    <?php include 'modules/footer.php';?>
</body>    
</html>