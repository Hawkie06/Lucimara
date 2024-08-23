<?php
class Database{
    private $driver;
    private $host;
    private $dbname;
    private $username;

    private $con;

    function__construct()
    {
        $this->driver = "mysql";
        $this->host = "localhost";
        $this->dbname = "testeaulas"; //nome do banco de dados
        $this->username = "root";
    }
    
    function getConexao(){
        try{
            $this->con=new PDO(
                "$this->driver: host=$this; dbname$this->dbname",
                $this->username
            );
           $this->con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMOD_WARNING);

           return $this->con;

        }catch(Excepttion $e) {
                 echo $e->getMessage();
        }
    }
}
?>