<?php  

$id_usuario = $_GET['id'];

$sql = "DELETE FROM usuarios WHERE id=".$id_usuario.";";

$conn-> query($sql);

print "<script>location.href='?page=listar';</script>";

?>