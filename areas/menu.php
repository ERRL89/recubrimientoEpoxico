<?php

function loadMenu($area)
{
    switch ($area) {
        case 1: // ADMINISTRACIÓN 
            return $menuOptions =
                [
                    [
                        'label' => 'Clientes',
                        'favicon' => 'fas fa-users',
                        'idMenu' => 'menuClientes',
                        'submenus' => [
                            [
                                'label' => 'Cliente 1',
                                'favicon' => '',
                                'url' => '',
                            ],
                            [
                                'label' => 'Cliente 2',
                                'favicon' => '',
                                'url' => '',
                            ],
                            [
                                'label' => 'Cliente 3',
                                'favicon' => '',
                                'url' => '',
                            ],
                        ]
                    ],
                    [
                        'label' => 'Cotizaciones',
                        'favicon' => 'fa-solid fa-computer',
                        'idMenu' => 'menuDemos',
                        'submenus' => [
                            [
                                'label' => 'Nueva Cotización',
                                'favicon' => '',
                                'url' => 'newPrice.php',
                            ],
                        ]
                    ],
                    [
                        'label' => 'Contratos',
                        'favicon' => 'fa-solid fa-file-lines',
                        'idMenu' => 'contratos',
                        'submenus' => [
                            [
                                'label' => 'Activos',
                                'favicon' => '',
                                'url' => '',
                            ],
                            [
                                'label' => 'Cancelados',
                                'favicon' => '',
                                'url' => '',
                            ]
                        ]
                    ],
                ];
            break;
        default:
            return $menuOptions =
                [
                    [
                        'label' => 'Puesto no asignado',
                    ],
                ];
            break;
    }
}
