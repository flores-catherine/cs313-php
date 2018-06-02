<?php
session_start();

require_once 'queries/queries.php';
require_once 'queries/connections.php';
require_once 'functions.php';

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL){
    $action = filter_input(INPUT_GET, 'action');}

$movies = getMovies();

switch ($action) {
    case 'login':
        include "views/login.php";
        break;
    case 'Login':
        // Filter and store the data
        $clientEmail = filter_input(INPUT_POST, 'clientEmail', FILTER_SANITIZE_EMAIL);
        $clientPassword = filter_input(INPUT_POST, 'clientPassword', FILTER_SANITIZE_STRING);
        $clientEmail = checkEmail($clientEmail);
        
        // Check for missing data
        if( empty($clientEmail) || empty($clientPassword)){
            $message = '<p>Please fill in all empty form fields.</p>';
            include 'views/login.php';
            exit; 
        }
        
        // A valid password exists, proceed with the login process
        // Query the client data based on the email address
        $clientData = getClient($clientEmail);
        // Compare the password just submitted against
        // the hashed password for the matching client
        $hashCheck = password_verify($clientPassword, $clientData['userpassword']);
        // If the hashes don't match create an error
        // and return to the login view
        if (!$hashCheck) {
          $message = '<p class="notice">Please check your password and try again.</p>';
          include 'views/login.php';
          exit;
        }
        // A valid user exists, log them in
        $_SESSION['loggedin'] = TRUE;
               
        // Remove the password from the array
        // the array_pop function removes the last
        // element from an array
        array_pop($clientData);
        
        // Store the array into the session
        $_SESSION['clientData'] = $clientData;
        
        setcookie('firstname', '', (-3600), '/');
        
        $message = "<p class='success'> Hey there! You're logged in.</p>";
        
        include "views/user.php";
        break;
    case 'logout':
        $_SESSION['loggedin'] = FALSE;
        session_destroy();
        header('location: index.php');
        break;
    case 'register':
        include "views/register.php";
        break;
    case 'registration':
        // Filter and store the data
        $clientFirstname = filter_input(INPUT_POST, 'clientFirstname', FILTER_SANITIZE_STRING);
        $clientLastname = filter_input(INPUT_POST, 'clientLastname', FILTER_SANITIZE_STRING);
        $clientEmail = filter_input(INPUT_POST, 'clientEmail', FILTER_SANITIZE_EMAIL);
        $clientPassword = filter_input(INPUT_POST, 'clientPassword', FILTER_SANITIZE_STRING);      
        $clientEmail = checkEmail($clientEmail);
        

        //call function to test for existing email.
        $existingEmail = uniqueClient($clientEmail);
        
        //check for existing email address
        if($existingEmail){
            $message = '<p class="notice">That email address already exists. Do you want to login instead?</p>';
            include 'views/login.php';
            exit;
        }
        
        
        // Check for missing data
        if(empty($clientFirstname) || empty($clientLastname) || empty($clientEmail) || empty($clientPassword)){
            $message = '<p class="notice">Please provide information for all empty form fields.</p>';
            include 'views/register.php';
            exit; 
        }
        
        // Hash the checked password
        $hashedPassword = password_hash($clientPassword, PASSWORD_DEFAULT);
        
        // Send the data to the model
        $regOutcome = regClient($clientFirstname, $clientLastname, $clientEmail, $hashedPassword);
        
        // Check and report the result
        if($regOutcome === 1){
            
            $message = "<p>Thanks for registering $clientFirstname. Please use your email and password to login.</p>";
            include 'views/login.php';
            exit;
        } else {
            $message = "<p>Sorry $clientFirstname, but the registration failed. Please try again.</p>";
            include 'views/register.php';
            exit;
        }
        break;
    case 'account':
        $userID = $_SESSION['clientData']['userid'];
        $userQuotes = getUserQuotes($userID);
        
//        var_dump ($userQuotes);
//        exit;
        
//        if(count($userQuotes)){
//            $buildUserQuotes = buildUserQuotes($userQuotes);
//        }else {
//            $buildUserQuotes = "<p>You have not submitted any quotes.</p>";
//        }
        
//        array_keys($buildUserQuotes);
//        exit;
        
        include "views/user.php";
        break;
    case 'newQuote':
        include "views/contribute.php";
        break;
    case 'add':
        $newquote = filter_input(INPUT_POST, 'quoteText', FILTER_SANITIZE_STRING);
        $movieID = $categoryId = filter_input(INPUT_POST, 'movieID', FILTER_SANITIZE_NUMBER_INT);

        if(empty($newquote) || empty($movieID)){
            $message="<p class='error'>Please enter all information in. </p>";
            include 'views/contribute.php';
            exit;
        }
        $userID = $_SESSION['clientData']['userid'];
        
        $quoteResult = newQuote($newquote, $movieID, $userID);

        if ($quoteResult===1){
            $message="<p class='error'>Quote was successfully entered </p>";
            include 'views/user.php';
            exit;
        } else {
            $message = "<p class='error'> Quote was not successfully submitted. Please Try again. </p>";
            include 'views/contribute.php';
            exit;
        }
        break;
    case 'explore':
        include "views/explore.php";
        break;
    case 'getMovies':
        $movieID = filter_input(INPUT_POST, 'movieID', FILTER_SANITIZE_NUMBER_INT);
        $getQuotes = getQuotes($movieID);
        $movieQuote = '<h2>Quotes</h2>';
        $movieQuote .= '<ul>';
        foreach ($getQuotes as $quote) {
            $movieQuote .= "<li>'$quote[quote]'</li>";   
        }
        $movieQuote .= "</ul>"; 
        include "views/explore.php";
        break;
    default:
        include "views/home.php";
        break;
}