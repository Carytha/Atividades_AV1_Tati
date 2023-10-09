<?php 
    if (!empty($_GET)){
        $num01 = $_GET['num01'];;
        echo "20% de ".$num01." é ".$num01*0.2."<br>";
        echo "80% de ".$num01." é ".$num01*0.8."<br>";
        echo "200% de ".$num01." é ".$num01*2;
    }else{
        header('location:form01.html');
    }
       
    echo "<h1>Fim do script!!!</h1>"



?>