<?php 

namespace app\Db;
use \PDO;
use \PDOException;

class Database {

    const HOST = 'localhost';

    const NAME = 'CRUD_vagas';

    const USER = 'root2';

    const PASS = '123456';

    //nome da tabela a ser manipulada
    private $table;

    //instancia de conexao
    //@var PDO;
    private $connection;

    public function __construct($table = null) {
        $this->$table = $table;
        $this->setConnection();

    }

    public function setConnection(){

        try {
            $this->connection = new PDO('mysql:host='.self::HOST.';dbname='.self::NAME, self::USER,self::PASS);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } 
        catch(PDOException $e){
            die('ERROR: '.$e->getMessage());
        }

    }

}



?>