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
    <title>Edit Quotes | Arnold One Liners</title>
    <meta name="description" content="Explore the Arnold quote database">
    <?php
        include 'modules/head.php';
    ?>
</head>
 
<body class='container'>
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
            <h1 id='registration'>Edit Your One Liner</h1>
            <p>All fields are required </p>

            <?php
            if (isset($message)) {
             echo $message;
            }
            ?>
            <form method="post" action="index.php">
                <textarea name="quoteText"  placeholder="Enter Quote" required> <?php if(isset($movieQuote)){echo $movieQuote;} ?></textarea>
                <?php echo $fullMovieList; ?>
                <input type="submit" name="submit" class="formInput" id="submitBtn" value ="Submit">
                <!-- Add the action name - value pair -->
                <input type="hidden" name="quoteid" value="<?php echo $quoteID?>">
                <input type="hidden" name="action" value="update">
            </form>
        </div>
    </main>
</body>
</html>