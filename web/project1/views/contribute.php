<?php 
    $allMovies = getAllMovies();
    $fullMovieList = '<select name="movieID" required>';
    $fullMovieList .= "<option selected disabled value=''>Movie</option>";
    foreach ($allMovies as $movie) {
        $fullMovieList .= "<option value='$movie[movieid]'>$movie[movietitle]</option>";
    }
    $fullMovieList .= '</select>';
?>
<!DOCTYPE html>
<html lang="en-us">
<head>
    <meta charset="utf-8">
    <title>Contribute | Arnold One Liners</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Add quotes to the Arnold One Liner Database">
    <link href="arnold.css" rel="stylesheet">
    <script src=""></script>
</head>
 
<body>
    <?php
    include 'modules/header.php';
    ?>

    <main class="main-quote">
        <?php
            if (isset($message)) {
             echo $message;
            }
        ?>
        <div id="login-form">
            <h1 id='registration'>Enter a One Liner</h1>
            <p>All fields are required </p>

            <?php
            if (isset($message)) {
             echo $message;
            }
?>
            <form method="post" action="index.php">
                <textarea name="quoteText"  placeholder="Enter Quote" required> <?php if(isset($movieQuote)){echo "value='$movieQuote'";} ?></textarea>
                <?php echo $fullMovieList; ?>
                <input type="submit" name="submit" class="formInput" id="submitBtn" value ="Submit">
                <!-- Add the action name - value pair -->
                <input type="hidden" name="action" value="add">
            </form>
        </div>
    </main>
</body>
</html>