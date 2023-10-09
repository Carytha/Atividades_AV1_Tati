<?php
    if(!empty($_GET)){
        $produto  = $_GET['produto'];
        $valor = $_GET['valor']; 
        echo "Produto: ".$produto."<br>"."Valor: ".$valor."<br>";
        if($valor>=200){
            echo "<h2>Produto de alto custo</h2>";
        }else{
            echo "<h2>Produto de baixo custo<h2>";
        }
    }else{
        header('location:form2.html');
    }

?>