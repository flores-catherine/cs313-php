<!DOCTYPE html>
<html lang="en-us">
<head>
    <meta charset="utf-8">
    <title>Login | Arnold One Liners</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Login to your Arnold One Liner Database account">
    <link href="arnold.css" rel="stylesheet">
    <script src=""></script>
</head>
 
<body>
    <?php
    include 'modules/header.php';
    ?>

    <main class="main-login">
       <div id="login-form">
            <h1>Sign In</h1>
            <?php
            if (isset($message)) {
             echo $message;
            }
            ?>
            <form action="index.php" method="post">
                <input name="clientEmail"  type="email" placeholder="email address" <?php if(isset($clientEmail)){echo "value='$clientEmail'";} ?> required>
                <input name="clientPassword" type="password"  placeholder="password" required>
                <input type="submit" name="submit" class="formInput" id="submitBtn" value ="login">
                <!-- Add the action name - value pair -->
                <input type="hidden" name="action" value="Login">
            </form>
            <a href='index.php?action=register'><p id='accountSignup'> No account? Sign up here.</p></a>
        </div>
    </main>
</body>
</html>