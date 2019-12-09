<?php
/**
 * Created by PhpStorm.
 * User: Krita
 * Date: 2019-12-09
 * Time: 9:30 AM
 */

return [
    'app' => [
        'title' => 'General',
        'desc' => 'All the general settings for application.',
        'icon' => 'fa fa-sun-o',

        'elements' => [
            [
                'type' => 'text', // input fields type
                'data' => 'string', // data type, string, int, boolean
                'name' => 'app_name', // unique name for field
                'label' => 'Site Name', // you know what label it is
                'rules' => 'required|min:2|max:50', // validation rule of laravel
                'class' => 'w-auto px-2', // any class for input
                'value' => 'Poseidon' // default value if you want
            ]
        ]
    ],
    'email' => [

        'title' => 'Email',
        'desc' => 'Email settings for app',
        'icon' => 'fa fa-envelope',

        'elements' => [
            [
                'type' => 'email',
                'data' => 'string',
                'name' => 'contact_email',
                'label' => 'Contact Email',
                'rules' => 'required|email|min:2|max:255',
            ]
        ]
    ],
    'tax' => [

        'title' => 'Tax',
        'desc' => 'Tax settings for app',
        'icon' => 'fa fa-dollar',

        'elements' => [
            [
                'type' => 'percent',
                'data' => 'double',
                'name' => 'gst_tax',
                'label' => 'GST Tax',
                'rules' => 'required|numeric'
            ],
            [
                'type' => 'percent',
                'data' => 'double',
                'name' => 'pst_tax',
                'label' => 'PST Tax',
                'rules' => 'required|numeric'
            ]
        ]
    ],
];