<?php

$action = filter_input(INPUT_POST, 'action');

switch ($action) {
    case 'submit':
        $fullName = filter_input(INPUT_POST, 'fullName', FILTER_SANITIZE_STRING);
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
        $major = filter_input(INPUT_POST, 'major', FILTER_SANITIZE_STRING);
        $comments = filter_input(INPUT_POST, 'comments', FILTER_SANITIZE_STRING);
        $continent1 = filter_input(INPUT_POST, 'continent1', FILTER_SANITIZE_STRING);
        $continent2 = filter_input(INPUT_POST, 'continent2', FILTER_SANITIZE_STRING);
        $continent3 = filter_input(INPUT_POST, 'continent3', FILTER_SANITIZE_STRING);
        $continent4 = filter_input(INPUT_POST, 'continent4', FILTER_SANITIZE_STRING);
        $continent5 = filter_input(INPUT_POST, 'continent5', FILTER_SANITIZE_STRING);
        $continent6 = filter_input(INPUT_POST, 'continent6', FILTER_SANITIZE_STRING);
        $continent7 = filter_input(INPUT_POST, 'continent7', FILTER_SANITIZE_STRING);

        if(empty($fullName) || empty($email) || empty($major) || empty($comments)) {
            $message = "<p> Please fill in all fields. </p>";
            include 'teach-03.php';
            exit;
        }else {
            include 'teach-03-return.php';
            exit;
        }
        
    default:

        include 'teach-03.php';
        exit;
        
}