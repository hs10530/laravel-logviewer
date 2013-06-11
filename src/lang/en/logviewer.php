<?php

use Psr\Log\LogLevel;

return [
    
    'delete' => 'Delete Current Log',
    'empty_file'  => ':sapi log for :date appears to be empty. Did you manually delete the contents?',
    'levels' => [
        'all' => 'all',
        'emergency' => LogLevel::EMERGENCY,
        'alert' => LogLevel::ALERT,
        'critical' => LogLevel::CRITICAL,
        'error' => LogLevel::ERROR,
        'warning' => LogLevel::WARNING,
        'notice' => LogLevel::NOTICE,
        'info' => LogLevel::INFO,
        'debug' => LogLevel::DEBUG,
    ],
    'no_log'  => 'No :sapi log available for :date.',
    'sapi'   => [
        'apache' => 'Apache',
        'cli' => 'CLI'
    ],
    
];