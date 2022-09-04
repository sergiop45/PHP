<?php 

echo "LISTAGEM DE USUARIOS";

$sql = "SELECT * FROM usuarios;";

$res = $conn -> query($sql);

$qtd = $res->num_rows;
echo "<br><br>  ";
if($qtd > 0 ) {
    echo "<table class='table table-hover table-striped table-bordered'>";
    echo "<tr>";
    echo "<th>Id</th>";
    echo "<th>Nome</th>";
    echo "<th>Email</th>";
    echo "<th>Data de Nascimento</th>";
    echo "<th>Ações</th>";
    echo "</tr>";
    while($row = $res -> fetch_object()){

        echo "<tr>";
        echo "<td>".$row->id."</td>";
        echo "<td>".$row->nome."</td>";
        echo "<td>".$row->email."</td>";
        echo "<td>".$row->data_nasc."</td>";
        echo "<td>
            <button class='btn btn-success'
            onClick=\"location.href='?page=editar&id=".$row->id."'\"
            >Editar</button>
            <button class='btn btn-danger' 
            onClick=\"location.href='?page=deletar&id=".$row->id."'\"
            >Deletar</button>
        </td>";
        echo "</tr>";

    }
    
    echo "</table>";

} else {
    print "<p class='alert alert-danger'>Não foram encontrados usuarios!</p>";
}

?>