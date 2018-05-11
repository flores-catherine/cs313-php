<?php


?>
<!DOCTYPE html>
<html lang="en-us">
<head>
    <meta charset="utf-8">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
</head>    
<body>
    <?php if (isset($message)) {
        echo $message;
    }
    ?>
    <form method="post" action="index.php">
        Full name: <br>
        <input name="fullName"  type="text" placeholder="Full Name" required><br>
        Email Address: <br>
        <input name="email"  type="email" class="formInput" placeholder="email address"  required><br>
        Major <br>
        <input name="major" type="radio" value="Computer Science">Computer Science<br>
        <input name="major" type="radio" value="Web Design and Development">Web Design and Development<br>
        <input name="major" type="radio" value="Computer Information Technology">Computer Information Technology<br>
        <input name="major" type="radio" value="Computer Engineering">Computer Engineering<br>
        Comments <br>
        <textarea name="comments" placeholder="comments"></textarea><br>
        Continents Visited: <br>
        <input type="checkbox" name="continent1" value="North America"> North America<br>
        <input type="checkbox" name="continent2" value="South America" > South America<br>
        <input type="checkbox" name="continent3" value="Europe"> Europe<br>
        <input type="checkbox" name="continent4" value="Asia" > Asia<br>
        <input type="checkbox" name="continent5" value="Australia" > Australia<br>
        <input type="checkbox" name="continent6" value="Africa"> Africa<br>
        <input type="checkbox" name="continents7" value="Antarctica" > Antarctica<br>
        <input type="submit" name="submit" value ="Submit">
        <input type="hidden" name="action" value="submit">
        
        
    </form>
</body>    
</html>