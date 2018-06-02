<!DOCTYPE html>
<html lang="en-us">
<head>
    <meta charset="utf-8">
    <title>Sign up | Arnold One Liners</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Sign up for an account with the Arnold One-Liner Database">
    <link href="arnold.css" rel="stylesheet">
    <script src=""></script>
</head>
 
<body>
    <?php
    include 'modules/header.php';
    ?>

    <main class="main-login">
       <div id="login-form">
            <h1 id='registration'>Register For a New Account</h1>
            <p>All fields are required </p>

            <?php
            if (isset($message)) {
             echo $message;
            }
?>
            <form method="post" action="index.php">
                <input name="clientFirstname"  type="text" placeholder="First Name" <?php if(isset($clientFirstname)){echo "value='$clientFirstname'";} ?> required>
                <input name="clientLastname" type="text" placeholder="Last Name" <?php if(isset($clientLastname)){echo "value='$clientLastname'";} ?> required>
                <input name="clientEmail"  type="email" class="formInput" placeholder="email address" <?php if(isset($clientEmail)){echo "value='$clientEmail'";} ?> required>
                <input name="clientPassword" type="password" class="formInput" placeholder="password" required>
                <input type="submit" name="submit" class="formInput" id="submitBtn" value ="Register">
                <!-- Add the action name - value pair -->
                <input type="hidden" name="action" value="registration">
            </form>
        </div>
    </main>
</body>
</html>