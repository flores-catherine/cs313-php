<?php

//validate email
function checkEmail($clientEmail) {
    $valEmail = filter_var($clientEmail, FILTER_VALIDATE_EMAIL);
    return $valEmail;
}

function buildUserQuotes($userQuotes) {
    $quotes = '<table border="1">';
    $quotes .= '<thead>';
    $quotes .= '<tr><th>Quote</th><th>Movie</th><th>Release Date</th><th></th></tr>';
    $quotes .= '</thead>';
    $quotes .= '<tbody>';
    foreach ($userQuotes as $quote) {
        $quotes .= "<tr><td>$quote[quote]</td>";
        $quotes .= "<td>$quote[movietitle]</td>";
        $quotes .= "<td>$quote[releaseyear]</td>";
        $quotes .= "<td><a href='index.php?action=edit&id=$quote[quoteid]' title='Click to modify'>Edit</a></td></tr>";
    }
    $quotes .= '</tbody></table>';
    return $quotes;
}