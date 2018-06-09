<?php
    $userID = $_SESSION['clientData']['userid'];
    $userQuotes = getUserQuotes($userID);

    if(count($userQuotes)){
        $buildUserQuotes = buildUserQuotes($userQuotes);
    }else {
        $buildUserQuotes = "<p>You have not submitted any quotes.</p>";
    }
?>
<!DOCTYPE html>
<html lang="en-us">
<head>
    <title>User Account | Arnold One Liners</title>
    <meta name="description" content="Homepage for the Arnold One Liner Database">
    <?php
        include 'modules/head.php';
    ?>
</head>
 
<body class='container'>
    <?php
    include 'modules/header.php';
    ?>

    <main class="main-user">
        <div class="container">
            <div class="row">
                
                <h1>Your Submitted Quotes</h1>
                <?php
                    if (isset($message)) {
                     echo $message;
                    }
                ?>
                <h2> <a href="index.php?action=newQuote">Click to Enter New Quotes</a></h2>
                <div class="col-sm-8">
                    <?php
                        if (isset($buildUserQuotes)) {
                        echo $buildUserQuotes;
                        }
                    ?>
                </div>
                <div class="col-sm-4">
                    <img src="images/arnold-small.png">
                </div>
            </div>
        </div>
    </main>
</body>
</html>