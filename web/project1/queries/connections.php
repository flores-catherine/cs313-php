<?php

function get_db() {
    

    try {
        // default Heroku Postgres configuration URL
        $url = getenv('DATABASE_URL');
        // $url = 'postgres://postgres:password@localhost:5432/postgres';
//        var_dump($url);
//        exit;
        $options = parse_url($url);

        $host = $options['host'];
        $port = $options['port'];
        $user = $options['user'];
        $pass = $options['pass'];
        $name = ltrim($options['path'], '/');

        $dsn = "pgsql:host={$host};port={$port};dbname={$name}";

        $db = new PDO($dsn, $user, $pass);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $db;
    }
    catch (PDOException $ex) {
        // If this were in production, you would not want to echo
        // the details of the exception.
        echo "Error connecting to DB. Details: $ex";
        die();
    }
}