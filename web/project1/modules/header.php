<header>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <a href=index.php><img src="images/logo.png"></a>
                </div>
                <div class="col-sm-6">
                    <div class="row">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="index.php" class="vert-cent">Home</a></li>
                            <li><a href="index.php?action=explore" class="vert-cent">Explore</a></li>
                            <?php
                                if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == TRUE){
                                    $button = "<li> <a href='index.php?action=account' class='vert-cent'>Account</a></li>";
                                    $button .= '<li class="btn btn-danger navbar-btn"><a href="index.php?action=logout">Logout</a></li>';
                                } else {
                                    $button = "<li><a href='index.php?action=login' class='vert-cent'>Log in to contribute!</a></li>";
                                    $button .= "<li class='btn btn-danger navbar-btn'><a href='index.php?action=register'>Sign Up</a></li>";           
                                }
                                echo $button;
                            ?>
                        </ul>
                    </div>
                    <div class="row">
                        <?php
                            if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == TRUE){
                                $userfirst = $_SESSION['clientData']['firstname'];
                                $userfirst = "<p class='text-center'>Hello $userfirst!</p>";
                                echo $userfirst;
                            }
                        ?>
                    </div>
                </div>
            </div>
            <div class="row">
                
            </div>
        </div>
    </nav>
</header>