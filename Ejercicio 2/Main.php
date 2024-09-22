<?php


require_once 'NodoDestinos.php';

require_once 'Buscador.php';


$ejemploDestinos1 = [
    [
        "nombre" => "America",
        "hijos" => [
            [
                "nombre" => "Argentina",
                "hijos" => [
                    [
                        "nombre" => "Buenos Aires",
                        "hijos" => [
                            [
                                "nombre" => "Pilar",
                                "hijos" => [["nombre" => "Manzanares"]]
                            ]
                        ]
                    ],
                    ["nombre" => "Córdoba"]
                ],
            ],
            [
                "nombre" => "Venezuela",
                "hijos" => [
                    ["nombre" => "Caracas"],
                    ["nombre" => "Vargas"]
                ]
            ]
        ]
    ]
];

$ejemploDestinos2 = [
    [
        "nombre" => "America",
        "hijos" => [
            [
                "nombre" => "Argentina",
                "hijos" => [
                    ["nombre" => "Buenos Aires"],
                    ["nombre" => "Córdoba"],
                    ["nombre" => "Santa Fe"]
                ],
            ],
            [
                "nombre" => "EEUU",
                "hijos" => [
                    ["nombre" => "Arizona"],
                    ["nombre" => "Florida"]
                ]
            ]
        ]
    ],
    [
        "nombre" => "Europa",
        "hijos" => [
            ["nombre" => "España"],
            ["nombre" => "Italia"],
        ]
    ]
];




$raizDestinos = NodoDestinos::desdeArray($ejemploDestinos1[0]);




if ($raizDestinos !== null) {
    $coincidencias = buscarDestinos($raizDestinos, 'Pilar');
} else {
    echo "El árbol de destinos no está inicializado.\n";
}


// Crear NodoDestinoss del árbol de destinos
/*$raiz = new NodoDestinos(1, "Olivos");
$VL = new NodoDestinos(2, "Vicente Lopéz");
$GV = new NodoDestinos(3, "General Villegas");
$BR = new NodoDestinos(4, "Belgrano R");


// Construir la jerarquía del árbol
$raiz->agregarHijo($VL);
$raiz->agregarHijo($GV);
$raiz->agregarHijo($BR);


$textoBuscado = "Mundo";

// Llamar a la función de búsqueda y obtener los resultados
$resultados = buscarDestinos($raiz, $textoBuscado);

// Imprimir los resultados de la búsqueda
if (count($resultados) > 0) {
    foreach ($resultados as $destino) {
        echo "ID: " . $destino->id . ", Nombre: " . $destino->nombre . "\n";
    }
} else {
    echo "No se encontraron destinos que coincidan con el texto: '$textoBuscado'.\n";
}*/
