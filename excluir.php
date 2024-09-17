<?php
include('config/conexao.php');

if(isset($_GET['idDelete'])){
    $id= $_GET['idDelete'];

    // Agora, delete o registro do banco de dados
    $delete = "DELETE FROM tb_animais WHERE id_animais=:id";
    try {
        $result = $conect->prepare($delete);
        $result->bindValue(':id', $id, PDO::PARAM_INT);
        $result->execute();

        $contar = $result->rowCount();
        if ($contar > 0) {
            header("Location: ../home.php");
        } else {
            header("Location: ../home.php");
        }
    } catch (PDOException $e) {
        echo "<strong>ERRO DE DELETE: </strong>" . $e->getMessage();
    }
    } else {
        // Redireciona se o registro não for encontrado
        header("Location: ../home.php");
    }       
