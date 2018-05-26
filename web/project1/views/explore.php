<?php 
    $movieList = '<select name="movieID" required>';
    $movieList .= "<option selected disabled value=''>Select one</option>";
    foreach ($movies as $movie) {
        $movieList .= "<option value='$movie[movieid]'>$movie[movietitle]</option>";
    }
    $movieList .= '</select>';
?>
<!DOCTYPE html>
<html lang="en-us">
<head>
    <meta charset="utf-8">
    <title>Explore | Arnold One Liners</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Explore the Arnold quote database">
    <link href="arnold.css" rel="stylesheet">
    <script src=""></script>
</head>
 
<body>
    <?php
    include 'modules/header.php';
    ?>
    <main class="main-explore">
        <h1>Explore Classic Arnold One-Liners</h1>
        <div class="flex-main">
        <img src="images/conan-small.jpg">
        <form method="post" action="index.php">
            <h2>Query Quotes by title</h2>
            <label>Movie</label><br>
            <?php echo $movieList; ?>
            <input type="submit" name="submit" value="submit">
            <input type="hidden" name="action" value="getMovies">
        </form>
    </div>
        <?php if(isset($movieQuote)){ echo $movieQuote; } ?>
    </main>
</body>
</html>
