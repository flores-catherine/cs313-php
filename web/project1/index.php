<?php
session_start();

require_once 'queries/queries.php';
require_once 'queries/connections.php';

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL){
    $action = filter_input(INPUT_GET, 'action');}

$movies = getMovies();

switch ($action) {
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