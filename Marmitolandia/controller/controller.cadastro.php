<?php
include("../Includes/Variaveis.php");
include("../Class/ClassCrud.php");

$Crud=new ClassCrud();
$Crud->insertDB(
    "marmita",
    "?,?,?,?,?,?",
    "isss",
    array(
        $Id,
        $nome,
        $descricao,
        $preco,
        $ingrediente,
        $quantidade
    )
);

echo "Cadastro Realizado com Sucesso!";