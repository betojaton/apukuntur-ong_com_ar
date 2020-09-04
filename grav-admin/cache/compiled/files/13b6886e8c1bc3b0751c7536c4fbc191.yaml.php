<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/apukuntur-ong_com_ar/grav-admin/user/plugins/form/form.yaml',
    'modified' => 1598992743,
    'data' => [
        'enabled' => true,
        'built_in_css' => true,
        'inline_css' => true,
        'refresh_prevention' => false,
        'client_side_validation' => true,
        'inline_errors' => false,
        'files' => [
            'multiple' => false,
            'limit' => 10,
            'destination' => 'self@',
            'avoid_overwriting' => false,
            'random_name' => false,
            'filesize' => 0,
            'accept' => [
                0 => 'image/*'
            ]
        ],
        'recaptcha' => [
            'version' => '2-checkbox',
            'theme' => 'light',
            'site_key' => NULL,
            'secret_key' => NULL
        ]
    ]
];
