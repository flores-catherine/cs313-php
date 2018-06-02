<header>
    <a href=index.php><img src="images/logo.png"></a>
    <nav>
        <a href="index.php?action=explore">Explore</a>
    </nav>
    <div>
        <ul>
            <?php
                if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == TRUE){
                    $userfirst = $_SESSION['clientData']['firstname'];
                    $button = "<li> Hello $userfirst!</li>";
                    $button .= "<li> <a href='index.php?action=account'>Account</a></li>";
                    $button .= '<li id="sign-up"><a href="index.php?action=logout">logout</a></li>';
                } else {
                    $button = "<li><a href='index.php?action=login'>Log in to contribute!</a></li>";
                    $button .= "<li id='sign-up'><a href='index.php?action=register'>Sign Up</a></li>";           
                }
                echo $button;
            ?>
        </ul>
    </div>
</header>