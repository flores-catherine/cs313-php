<!DOCTYPE html>
<html lang="en-us">
<head>
    <meta charset="utf-8">
    <title>User Account | Arnold One Liners</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Homepage for the Arnold One Liner Database">
    <link href="arnold.css" rel="stylesheet">
    <script src=""></script>
</head>
 
<body>
    <?php
    include 'modules/header.php';
    ?>

    <main class="main-user">
        <div>
            <h1>Your Submitted Quotes</h1>
            <?php
                if (isset($message)) {
                 echo $message;
                }
            ?>
            <h2> <a href="index.php?action=newQuote">Click to Enter New Quotes</a></h2>
            
            <?php
                if (isset($buildUserQuotes)) {
                echo $buildUserQuotes;
                }
            ?>
        </div>
    </main>
</body>
</html>