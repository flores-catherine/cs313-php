<?php

function getMovies(){
    $db = get_db();
    $sql = 'SELECT DISTINCT movies.movieTitle, movies.movieID FROM movies INNER JOIN quotes ON movies.movieID=quotes.movieID ORDER BY movieTitle ASC';
    $stmt = $db->prepare($sql);
    $stmt->execute();
    $movieTitles = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $stmt->closeCursor();
    return $movieTitles;    
}

function getQuotes($movieID){
    $db = get_db();
    $sql = 'SELECT quote FROM quotes WHERE movieid = :movieid';
    $stmt = $db->prepare($sql);
    $stmt->bindValue(':movieid', $movieID, PDO::PARAM_INT);
    $stmt->execute();
    $movieQuotes = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $stmt->closeCursor();
    return $movieQuotes;    
}

function getAllMovies() {
    $db = get_db();
    $sql = 'SELECT movieTitle, movieid FROM movies ORDER BY movieTitle ASC';
    $stmt = $db->prepare($sql);
    $stmt->execute();
    $allMovieTitles = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $stmt->closeCursor();
    return $allMovieTitles;
}

function newQuote($quoteText, $movieID, $userID){
    $db = get_db();
    // The SQL statement
    $sql = 'INSERT INTO quotes (quote, movieid, userid) VALUES (:quote, :movieid, :userID)';
    $stmt = $db->prepare($sql);
    // The next lines replace the placeholders in the SQL
    // statement with the actual values in the variables
    // and tells the database the type of data it is
    $stmt->bindValue(':quote', $quoteText, PDO::PARAM_STR);
    $stmt->bindValue(':movieid', $movieID, PDO::PARAM_INT);
    $stmt->bindValue(':userID', $userID, PDO::PARAM_INT);
    // Insert the data
    $stmt->execute();
    // Ask how many rows changed as a result of our insert
    $rowsChanged = $stmt->rowCount();
    // Close the database interaction
    $stmt->closeCursor();
    // Return the indication of success (rows changed)
    return $rowsChanged;
}

//client management queries
function regClient($firstname, $lastname, $userEmail, $userPassword){

    $db = get_db();
    // The SQL statement
    $sql = 'INSERT INTO users (firstname, lastname, useremail, userpassword) VALUES (:firstname, :lastname, :userEmail, :userPassword)';
    $stmt = $db->prepare($sql);
    $stmt->bindValue(':firstname', $firstname, PDO::PARAM_STR);
    $stmt->bindValue(':lastname', $lastname, PDO::PARAM_STR);
    $stmt->bindValue(':userEmail', $userEmail, PDO::PARAM_STR);
    $stmt->bindValue(':userPassword', $userPassword, PDO::PARAM_STR);
    // Insert the data
    $stmt->execute();
    // Ask how many rows changed as a result of our insert
    $rowsChanged = $stmt->rowCount();
    // Close the database interaction
    $stmt->closeCursor();
    // Return the indication of success (rows changed)
    return $rowsChanged;
}

function uniqueClient($clientEmail){
     $db = get_db();
     $sql = 'SELECT useremail FROM users WHERE userEmail = :email';
     $stmt = $db->prepare($sql);
     $stmt->bindValue(':email', $clientEmail, PDO::PARAM_STR);
     $stmt->execute();
     $matchEmail = $stmt->fetch(PDO::FETCH_NUM);
     $stmt->closeCursor();
     if (empty ($matchEmail)){
         return 0;
     } else {
        return 1;
     }
}

function getClient($clientEmail){
  $db = get_db();
  $sql = 'SELECT userid, firstname, lastname, userEmail, userPassword FROM users WHERE userEmail = :email';
  $stmt = $db->prepare($sql);
  $stmt->bindValue(':email', $clientEmail, PDO::PARAM_STR);
  $stmt->execute();
  $clientData = $stmt->fetch(PDO::FETCH_ASSOC);
  $stmt->closeCursor();
  return $clientData;
}

function getUserQuotes($userID){
  $db = get_db();
  $sql = 'SELECT quotes.quote, movies.movietitle, movies.releaseyear FROM quotes INNER JOIN movies ON quotes.movieid=movies.movieid WHERE userid = :userid';
  $stmt = $db->prepare($sql);
  $stmt->bindValue(':userid', $userID, PDO::PARAM_STR);
  $stmt->execute();
  $userquotes = $stmt->fetch(PDO::FETCH_ASSOC);
  $stmt->closeCursor();
  return $userquotes;
}