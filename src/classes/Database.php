<?php 

class Database
{
    private $host = DB_HOST;
    private $password = DB_PASS;
    private $username = DB_USERNAME;
    private $dbname = DB_NAME;

    private $dbHandler;
    private $error;

    protected function connect(){
        $conn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbname;
        $options = array(
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        );
        try{
            $this->dbHandler = new PDO($conn, $this->username, $this->password, $options);
        }catch(PDOException $e){
            $this->error = $e->getMessage();
            echo $this->error;
        }
        return $this->dbHandler;
    }
}