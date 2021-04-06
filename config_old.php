<?php
/**
 * This file overrides any of the config files in the /config directory.
 * The root key is the name of the file, and then the structure within.
 * The config is merged, so only include what you want to override
 */

return [

    // Overrides config/app.php
    'app' => [
        'name' => 'phpvms',
        'url'  => 'http://localhost',

        // When live, 'env' should be 'prod'
        'env'   => 'dev',

        // debug as true shows the Laravel debug bar, which is helpful for
        // debugging templates and other internals
        'debug'         => true,
        'debug_toolbar' => true,
    ],

    // Overrides config/phpvms.php
    'phpvms' => [

    ],

    //
    // Other settings and configuration you might not need to modify
    //

    // Overrides config/cache.php
    'cache' => [
        'default' => 'file',
        'prefix'  => 'phpvms_6058e71c4c37a',
    ],

    /*
     * You can get a captcha key from here:
     * https://www.google.com/recaptcha/admin
     */
    'captcha' => [
        'enabled' => false,

        'sitekey' => '',
        'secret'  => '',

        # Attributes can be found here:
        # https://developers.google.com/recaptcha/docs/display#render_param
        'attributes' => [
            'data-theme' => 'light',
        ],
    ],

    // Overrides config/database.php
    'database' => [
        'default' => env('DB_CONNECTION', 'mysql'),
        'connections' => [
            'mysql' => [
                'host'           => env('DB_HOST', 'mysql'),
                'port'           => 3306,
                'database'       => 'phpvms',
                'username'       => 'phpvms',
                'password'       => 'phpvms',
                'prefix'         => 'phpvms',
                'prefix_indexes' => true,
            ],
        ],
    ],

    // Overrides config/logging.php
    'logging' => [
        'default'  => 'stack',
        'channels' => [
            'single' => ['level' => 'debug'],
            'daily' => ['level' => 'debug'],
        ],
    ],

    // Overrides config/mail.php
    'mail' => [
        'default' => 'mail',  # Default is to use the mail() fn
        'mailers' => [
            'smtp' => [
                'transport' => 'smtp',
                'host' => '',
                'port' => '',
                'encryption' => '',
                'username' => '',
                'password' => '',
                'timeout' => null,
            ],
            'mailgun' => [
                'transport' => 'mailgun',
            ],
            'sendmail' => [
                'transport' => 'sendmail',
                'path' => '/usr/sbin/sendmail -bs',
            ],
        ],
        'from' => [
            'name' => 'phpVMS No-Reply',
            'address' => 'no-reply@phpvms.net',
        ],
    ],

    // Overrides config/session.php
    'session' => [
        'driver' => 'file',
        'connection' => 'mysql',
        'lifetime' => 60 * 24,  # 24 hours
    ],
];
