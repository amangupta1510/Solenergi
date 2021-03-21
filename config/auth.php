<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Authentication Defaults
    |--------------------------------------------------------------------------
    |
    | This option controls the default authentication "guard" and password
    | reset options for your application. You may change these defaults
    | as required, but they're a perfect start for most applications.
    |
    */

    'defaults' => [
        'guard' => 'web',
        'passwords' => 'Users',
    ],

    /*
    |--------------------------------------------------------------------------
    | Authentication Guards
    |--------------------------------------------------------------------------
    |
    | Next, you may define every authentication guard for your application.
    | Of course, a great default configuration has been defined for you
    | here which uses session storage and the Eloquent user provider.
    |
    | All authentication drivers have a user provider. This defines how the
    | User are actually retrieved out of your database or other storage
    | mechanisms used by this application to persist your user's data.
    |
    | Supported: "session", "token"
    |
    */

    'guards' => [
        'web' => [
            'driver' => 'session',
            'provider' => 'Users',
        ],

        'api' => [
            'driver' => 'token',
            'provider' => 'Users',
        ],
        'user' => [
            'driver' => 'session',
            'provider' => 'users',
        ],
        'user-api' => [
            'driver' => 'token',
            'provider' => 'users',
        ],
        'hub' => [
            'driver' => 'session',
            'provider' => 'hubs',
        ],
        'hub-api' => [
            'driver' => 'token',
            'provider' => 'hubs',
        ],
        'admin' => [
            'driver' => 'session',
            'provider' => 'admins',
        ],
        'admin-api' => [
            'driver' => 'token',
            'provider' => 'admins',
        ],
        'shop' => [
            'driver' => 'session',
            'provider' => 'shop_keepers',
        ],
        'shop-api' => [
            'driver' => 'token',
            'provider' => 'shop_keepers',
        ],
        'delivery' => [
            'driver' => 'session',
            'provider' => 'delivery_boys',
        ],
        'delivery-api' => [
            'driver' => 'token',
            'provider' => 'delivery_boys',
        ],
        'student' => [
            'driver' => 'session',
            'provider' => 'students',
        ],
        'student-api' => [
            'driver' => 'token',
            'provider' => 'students',
        ],
        'teacher' => [
            'driver' => 'session',
            'provider' => 'teachers',
        ],
        'teacher-api' => [
            'driver' => 'token',
            'provider' => 'teachers',
        ],
        'admin_table' => [
            'driver' => 'session',
            'provider' => 'admin_tables',
        ],
        'admin_table-api' => [
            'driver' => 'token',
            'provider' => 'admin_tables',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | User Providers
    |--------------------------------------------------------------------------
    |
    | All authentication drivers have a user provider. This defines how the
    | User are actually retrieved out of your database or other storage
    | mechanisms used by this application to persist your user's data.
    |
    | If you have multiple user tables or models you may configure multiple
    | sources which represent each model / table. These sources may then
    | be assigned to any extra authentication guards you have defined.
    |
    | Supported: "database", "eloquent"
    |
    */

    'providers' => [
        'Users' => [
            'driver' => 'eloquent',
            'model' => App\User::class,
        ],
        'users' => [
            'driver' => 'eloquent',
            'model' => App\user::class,
        ],
        'hubs' => [
            'driver' => 'eloquent',
            'model' => App\hub::class,
        ],
        'admins' => [
            'driver' => 'eloquent',
            'model' => App\admin::class,
        ],
        'shop_keepers' => [
            'driver' => 'eloquent',
            'model' => App\shop::class,
        ],
        'delivery_boys' => [
            'driver' => 'eloquent',
            'model' => App\delivery::class,
        ],
        'students' => [
            'driver' => 'eloquent',
            'model' => App\student::class,
        ],
        'teachers' => [
            'driver' => 'eloquent',
            'model' => App\teacher::class,
        ],
        'admin_tables' => [
            'driver' => 'eloquent',
            'model' => App\admin_table::class,
        ],
        // 'User' => [
        //     'driver' => 'database',
        //     'table' => 'User',
        // ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Resetting Passwords
    |--------------------------------------------------------------------------
    |
    | You may specify multiple password reset configurations if you have more
    | than one user table or model in the application and you want to have
    | separate password reset settings based on the specific user types.
    |
    | The expire time is the number of minutes that the reset token should be
    | considered valid. This security feature keeps tokens short-lived so
    | they have less time to be guessed. You may change this as needed.
    |
    */

    'passwords' => [
        'Users' => [
            'provider' => 'User',
            'table' => 'password_resets',
            'expire' => 60,
        ],
        'users' => [
            'provider' => 'user',
            'table' => 'password_resets',
            'expire' => 60,
        ],
        'hubs' => [
            'provider' => 'hub',
            'table' => 'password_resets',
            'expire' => 60,
        ],
        'admins' => [
            'provider' => 'admin',
            'table' => 'password_resets',
            'expire' => 60,
        ],
        'shop_keepers' => [
            'provider' => 'shop',
            'table' => 'password_resets',
            'expire' => 60,
        ],
        'delivery_boys' => [
            'provider' => 'delivery_boy',
            'table' => 'password_resets',
            'expire' => 60,
        ],

         'students' => [
            'provider' => 'student',
            'table' => 'password_resets',
            'expire' => 60,
        ],
        'teachers' => [
            'provider' => 'teacher',
            'table' => 'password_resets',
            'expire' => 60,
        ],
        'admin_tables' => [
            'provider' => 'admin_table',
            'table' => 'password_resets',
            'expire' => 60,
        ],
    ],

];
