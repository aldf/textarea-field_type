<?php

return [
    'rows'          => [
        'type'     => 'anomaly.field_type.integer',
        'required' => true,
        'config'   => [
            'default_value' => 6,
            'min'           => 2,
        ],
    ],
    'min'           => [
        'type' => 'anomaly.field_type.integer',
    ],
    'max'           => [
        'type' => 'anomaly.field_type.integer',
    ],
    'default_value' => [
        'type' => 'anomaly.field_type.textarea',
    ],
];
