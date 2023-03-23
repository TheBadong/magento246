<?php
return [
    'backend' => [
        'frontName' => 'admin_15jjth'
    ],
    'cache' => [
        'graphql' => [
            'id_salt' => '4Rn8VUHv0r1DBT8U7qUbYDFpZCPdIsaN'
        ],
        'frontend' => [
            'default' => [
                'id_prefix' => 'd19_'
            ],
            'page_cache' => [
                'id_prefix' => 'd19_'
            ]
        ],
        'allow_parallel_generation' => false
    ],
    'remote_storage' => [
        'driver' => 'file'
    ],
    'queue' => [
        'consumers_wait_for_messages' => 1
    ],
    'crypt' => [
        'key' => 'f22a8d304b76ee825d092b36cbdd2fd0'
    ],
    'db' => [
        'table_prefix' => '',
        'connection' => [
            'default' => [
                'host' => 'magento246_db_1',
                'dbname' => 'magento2',
                'username' => 'magento2',
                'password' => 'magento2',
                'model' => 'mysql4',
                'engine' => 'innodb',
                'initStatements' => 'SET NAMES utf8;',
                'active' => '1',
                'driver_options' => [
                    1014 => false
                ]
            ]
        ]
    ],
    'resource' => [
        'default_setup' => [
            'connection' => 'default'
        ]
    ],
    'x-frame-options' => 'SAMEORIGIN',
    'MAGE_MODE' => 'default',
    'session' => [
        'save' => 'files'
    ],
    'lock' => [
        'provider' => 'db'
    ],
    'directories' => [
        'document_root_is_pub' => true
    ],
    'cache_types' => [
        'config' => 1,
        'layout' => 1,
        'block_html' => 1,
        'collections' => 1,
        'reflection' => 1,
        'db_ddl' => 1,
        'compiled_config' => 1,
        'eav' => 1,
        'customer_notification' => 1,
        'config_integration' => 1,
        'config_integration_api' => 1,
        'full_page' => 1,
        'config_webservice' => 1,
        'translate' => 1
    ],
    'downloadable_domains' => [
        'local.magento246.com'
    ],
    'install' => [
        'date' => 'Thu, 23 Mar 2023 12:09:29 +0000'
    ]
];
