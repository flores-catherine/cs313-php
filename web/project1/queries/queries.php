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