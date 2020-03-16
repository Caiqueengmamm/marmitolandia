<?php

if(isset($_POST['Id'])){ $Id=filter_input(INPUT_POST,'Id',FILTER_SANITIZE_SPECIAL_CHARS); 
}
elseif(isset($_GET['Id'])){ $Id=filter_input(INPUT_GET,'Id',FILTER_SANITIZE_SPECIAL_CHARS); 
}
else{ $Id=0; }



if(isset($_POST['nome'])){ $nome=filter_input(INPUT_POST,'nome',FILTER_SANITIZE_SPECIAL_CHARS); 
}
elseif(isset($_GET['nome'])){ $nome=filter_input(INPUT_GET,'nome',FILTER_SANITIZE_SPECIAL_CHARS); 
}
else{ $nome=""; }


if(isset($_POST['descricao'])){ $descricao=filter_input(INPUT_POST,'descricao',FILTER_SANITIZE_SPECIAL_CHARS); 
}
elseif(isset($_GET['descricao'])){ $descricao=filter_input(INPUT_GET,'descricao',FILTER_SANITIZE_SPECIAL_CHARS); 
}
else{ $descricao=""; }





if(isset($_POST['preco'])){ $preco=filter_input(INPUT_POST,'preco',FILTER_SANITIZE_SPECIAL_CHARS); 
}
elseif(isset($_GET['preco'])){ $preco=filter_input(INPUT_GET,'preco',FILTER_SANITIZE_SPECIAL_CHARS); 
}
else{ $preco=""; }


if(isset($_POST['ingrediente'])){ $ingrediente=filter_input(INPUT_POST,'ingrediente',FILTER_SANITIZE_SPECIAL_CHARS); 
}
elseif(isset($_GET['ingrediente'])){ $ingrediente=filter_input(INPUT_GET,'ingrediente',FILTER_SANITIZE_SPECIAL_CHARS); 
}
else{ $ingrediente=""; }


if(isset($_POST['quantidade'])){ $quantidade=filter_input(INPUT_POST,'quantidade',FILTER_SANITIZE_SPECIAL_CHARS); 
}
elseif(isset($_GET['quantidade'])){ $quantidade=filter_input(INPUT_GET,'quantidade',FILTER_SANITIZE_SPECIAL_CHARS); 
}
else{ $quantidade=""; }
?>