<?php 

namespace app\Db;
use \PDO;
use \PDOException;

class Database {

    const HOST = 'localhost';

    const NAME = 'CRUD_vagas';

    const USER = 'root';

    const PASS = '123456';

    //nome da tabela a ser manipulada
    private $table;

    //instancia de conexao
    //@var PDO;
    private $connection;

    public function __construct($table = null) {
        $this->table = $table;
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

    public function execute($query, $params = []) {
        try {
            //code...
            $statement = $this->connection->prepare($query);
            $statement->execute($params);
            return $statement;
        } catch(PDOException $e){
            die('ERROR: '.$e->getMessage());
        }
    }

    //metodo para inserir dados no banco
    public function insert($values) {
        //dados da query
        $fields = array_keys($values);
        $binds = array_pad([], count($fields), '?');


        //$query = 'INSERT INTO '.$this->$table.' ('.implode(',',$fields).') VALUES ('.implode(',',$binds).') ';
        $query = 'INSERT INTO '.$this->table.' ('.implode(',',$fields).') VALUES ('.implode(',',$binds).')';
        $this->execute($query, array_values($values));

        //retorna o id inserido
        return $this->connection->lastInsertId();

    }

}



?>