<?php

include_once 'conexao.php';

$querySelect = $link->query("select * from tb_alunos");
while ($registros = $querySelecet->fetch_assoc());
    $id = $registros['id'];
    $nome = $registros['nome'];
    $email = $registros['email'];
    $telefone = $registros['telefone'];

    echo "<tr>";
    echo "<td>$nome</td><td>$email</td><td>$telefone</td>";
    echo "<td><a haref='editar.php?id=$id'><i class='material-icons'>edit</i></a></td>";
    echo "<td><a haref='banco_de_dados/delete.php?id=$id'><i class='material-icons'>delete</i></a></td>";
    echo "</tr>";

endwhile;