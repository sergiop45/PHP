<?php  

namespace app\Entity;
use \app\Db\Database;

class Vaga {

    //@var integer

    public $id;


    //@var string;

    public $titulo;

   // @var string;

    public $descricao;

   // @var string(s/n);

    public $ativo;

   // @var string;

    public $data;


    //Funcao que cadastra vaga

    public function cadastrar() {
        $this->data = date('Y-m-d H:i:s');

        //enviando dados para o banco
        $obDatabase = new Database('vagas');

        print '<pre>'; print_r($obDatabase); print '</pre>';

    }


};

?>