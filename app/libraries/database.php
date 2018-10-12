<?php
/*
* PDO Database class
* Connect to database
* Create prepared statements
* Bind values
*/

class Database{
    private $host = DB_HOST;
    private $user = DB_USER;
    private $pass = DB_PASS;
    private $dbname = DB_NAME;
    
    private $dbh;
}
