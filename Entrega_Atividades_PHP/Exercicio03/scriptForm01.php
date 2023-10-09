<?php 
    if(!empty($_GET)){
        $num01 = $_GET['num01'];

        if ($num01 == 0){;
            echo "O número informado é neutro: ".$num01."<br>";
        }elseif ($num01 > 0){
            echo "O número informado é positivo: ".$num01."<br>";
        }else{
            echo "O número informado é negativo: ".$num01."<br>";          
        }
    }else{
        header('location:form01.html');
    }  
    
    echo "<h1>Fim do script!!!</h1>"
?>