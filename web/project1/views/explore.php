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
    <title>Explore | Arnold One Liners</title>
    <meta name="description" content="Explore the Arnold quote database">
    <?php
        include 'modules/head.php';
    ?>
</head>
 
<body class='container regular-body'>
    <?php
    include 'modules/header.php';
    ?>
    <main class="main-explore">

        <div class="container">
            <div class="row">
                <h1>Explore Classic Arnold One-Liners</h1>  
            </div>
            <div class="row">
                <div class="col-sm-8">
                    <img src="images/conan-small.jpg">
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <form method="post" action="index.php">
                            <h2>Search Quotes by title</h2>
                            <div class="form-group">
                                <label>Movie</label><br>
                                <?php echo $movieList; ?>
                                <input type="submit" name="submit" value="Search">
                            </div>
                            <input type="hidden" name="action" value="getMovies">
                        </form>
                    </div>
                    
                    <div class="col-sm-4">
                        <form method="post" action="index.php">
                            <h2>Search Quotes by Keyword</h2>
                            <label>Keyword</label><br>
                            <input type="text" name="keyword">
                            <input type="submit" name="submit" value="Search">
                            <input type="hidden" name="action" value="Keyword">
                        </form>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <?php
                        if (isset($movieQuote)) {
                         echo $movieQuote;
                        }
                    ?>
                </div>
            </div>
        </div>
    </main>
</body>
</html>
