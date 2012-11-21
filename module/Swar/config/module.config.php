<?php
// module/Swar/config/module.config.php:
return array(
    'controllers' => array(
        'invokables' => array(
            'Swar\Controller\Swar' => 'Swar\Controller\SwarController',
        ),
    ),

    'router' => array(
        'routes' => array(
            'swar' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '/swar[/:action][/:id]',
                    'constraints' => array(
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'     => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'swar\Controller\swar',
                        'action'     => 'index',
                    ),
                ),
            ),
        ),
    ),

    'view_manager' => array(
        'template_path_stack' => array(
            'swar' => __DIR__ . '/../view',
        ),
    ),
);