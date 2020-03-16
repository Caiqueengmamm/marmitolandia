<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "marmitolandia";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if (!$conn){

    die("Não ha conexão".mysqli_connect_error());
}

$nome = $_POST["usuario"];
$senha = $_POST["password"];
$query = mysqli_query($conn,"SELECT * FROM Login WHERE Usuario = '".$nome."' and  Password = '".$senha."'");
$nr = mysqli_num_rows($query);

if($nr == 1){  
    header("Location: controle.php");
}
else if ($nr == 0){
    echo "Sem Acesso";
}

?>