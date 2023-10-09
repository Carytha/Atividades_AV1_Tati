<?php 
    if(!empty($_GET)){
        $num01 = $_GET['num01'];
        echo "Número informado: ".$num01."<br>";
        
        $triplo = $num01 * 3;
        echo "Triplo do número é: ".$triplo."<br>";

        $metade = $num01 / 2;
        echo "Metade do número é: ".$metade."<br>";
    }else{
        header('location:form01.html');
    }

    echo "<h1>Fim do script!!!</h1>"
?>