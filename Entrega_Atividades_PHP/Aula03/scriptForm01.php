<?php 
    if(!empty($_POST)){
        $nome  = $_POST['nome'];
        $idade = $_POST['idade']; 
        echo $nome."<br>".$idade."<br>";
        if($idade>=18){
            echo "<h2>Maior de idade!</h2>";
        }else{
            echo "<h2>Menor de idade</h2>";
        }
    }else{
        header('location:form1.html');
    }


    echo "<h1>Fim do script!!!</h1>"
?>