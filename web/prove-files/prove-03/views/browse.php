<!DOCTYPE html>
<html lang="en-us">
<head>
    <meta charset="utf-8">
    <title>Items for Sale</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Cat Sculptures, Cat Statues, Cat Figurines">
</head>    
<body>
    <?php include 'modules/header.php';?>
    <h1>Cat Sculptures, Cat Statues, Cat Figurines</h1>
        
        <?php
        if (isset($message)) {
            echo $message;
        }
        foreach ($product_array as $product) {
            $prodDesc = "<h2>$product[name]</h2>";
            $prodDesc .= "<img src='$product[image]' alt='$product[alt]'>";
            $prodDesc .= "<p>$product[description]</p>";
            $prodDesc .= "<p>$product[price]</p>";
            $prodDesc .= "<a href ='index.php?action=add&name=$product[name]'>Add to cart</a>";
            echo $prodDesc;
        }
        ?>
    <?php include 'modules/footer.php';?>
</body>    
</html>