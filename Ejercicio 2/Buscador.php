<?php

    function buscarDestinos(NodoDestinos $arbolDestinos, $texto){
        if ($arbolDestinos === null) {
            throw new InvalidArgumentException("El árbol de destinos no puede ser null.");
        }       
         $respuesta = [];

         function buscar_recursivo(NodoDestinos $nodo, $texto, $respuesta){

                if($nodo != null){                   
                   
                     echo "Verificando nodo: " . $nodo->nombre . "\n";

                    $nombreNormalizado = strtolower(trim($nodo->nombre));
                    $textoNormalizado = strtolower(trim($texto));

                    echo "Comparando: '$nombreNormalizado' con '$textoNormalizado'\n";

                    if (strpos($nombreNormalizado, $textoNormalizado) !== false) {
                        $respuesta[] = "El texto buscado es " . $nodo->nombre;
                        echo "Coincidencia encontrada: " . $nodo->nombre . "\n"; 
                    }else{
                        echo "Coincidencia no encontrada";
                    }
                   
                    foreach($nodo->hijos as $hijo){
                        buscar_recursivo($hijo, $texto, $respuesta);                           
                    }                       
                    
                }
                //return false;
         }

         buscar_recursivo($arbolDestinos, $texto, $respuesta);
     
         return $respuesta;

    }

?>