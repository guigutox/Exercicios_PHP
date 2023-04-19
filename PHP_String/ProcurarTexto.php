<?php 

    $word = 'O rato roeu a roupa do rei de Roma';

    if(strpos($word, 'roeu') !== false){

        echo 'Existe a palavra roeu na string';

    }

    if(strpos($word, 'batata') == false){

        echo '<br> Não existe a palavra batata na string';

    }


?>