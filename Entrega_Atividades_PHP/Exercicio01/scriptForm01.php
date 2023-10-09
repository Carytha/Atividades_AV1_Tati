<?php 
    if(!empty($_POST)){
        $nome  = $_POST['nome'];
        $senha = $_POST['senha']; 
        echo "Nome: ".$nome."<br>"."Senha:".$senha."<br>";
    }else{
        header('location:form01.html');
    }

    echo "<h1>Fim do script!!!</h1>"
?>