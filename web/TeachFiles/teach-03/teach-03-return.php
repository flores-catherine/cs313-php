<!DOCTYPE html>
<html lang="en-us">
<head>
    <meta charset="utf-8">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
</head>
<body>
    <h1>User Info</h1>
    <ul>
    <?php if (isset($fullName)) {
        echo '<li>Full Name: '.$fullName.'</li>';
    }
    if (isset($email)) {
        echo '<li>Email Address: '.$email.'</li>';
    }    
    if (isset($major)) {
        echo '<li>Chosen Major: '.$major.'</li>';
    } 
    if (isset($comments)) {
        echo '<li>Comments: '.$comments.'</li>';
    }
    ?>
    </ul>
    <h2>Continents Visited</h2>
    <ul>
        <?php 
            if (isset($continent1)) {
                echo '<li>'.$continent1.'</li>';
            }
            if (isset($continent2)) {
                echo '<li>'.$continent2.'</li>';
            }
            if (isset($continent3)) {
                echo '<li>'.$continent3.'</li>';
            }
            if (isset($continent4)) {
                echo '<li>'.$continent4.'</li>';
            }
            if (isset($continent5)) {
                echo '<li>'.$continent5.'</li>';
            }
            if (isset($continent6)) {
                echo '<li>'.$continent6.'</li>';
            }
            if (isset($continent7)) {
                echo '<li>'.$continent7.'</li>';
            }
        ?>
    </ul>
</body>