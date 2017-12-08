<?php   

    function realToFloat($valor){
        $valor = str_replace(',','.',str_replace('.', '', $valor));
        return($valor);    
    }

?>