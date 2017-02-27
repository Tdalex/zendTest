<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Blog;

return [
    'router' => [
        'routes' => [
            'blog_home' => [
                'type' => 'Literal',
                'options' => [
                    'route'    => '/blog',
                    'defaults' => [
                        'controller' => 'Blog\Controller\Index',
                        'action'     => 'index',
                    ],
                ],
            ],
        ],
    ],
    'controllers' => [
        'factories' => [
            'Blog\Controller\Index' => 'Blog\Controller\IndexControllerFactory',
        ],
    ],
    'view_manager' => [
        'template_path_stack' => [
            __DIR__ . '/../view',
        ],
    ],
];
