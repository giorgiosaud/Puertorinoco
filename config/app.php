<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Application Debug Mode
    |--------------------------------------------------------------------------
    |
    | When your application is in debug mode, detailed error messages with
    | stack traces will be shown on every error that occurs within your
    | application. If disabled, a simple generic error page is shown.
    |
    */

    'debug' => env('APP_DEBUG',true),

    /*
    |--------------------------------------------------------------------------
    | Application URL
    |--------------------------------------------------------------------------
    |
    | This URL is used by the console to properly generate URLs when using
    | the Artisan command line tool. You should set this to the root of
    | your application so that it is used when running Artisan tasks.
    |
    */

    'url' => 'http://puertorinoco.app',

    /*
    |--------------------------------------------------------------------------
    | Application Timezone
    |--------------------------------------------------------------------------
    |
    | Here you may specify the default timezone for your application, which
    | will be used by the PHP date and date-time functions. We have gone
    | ahead and set this to a sensible default for you out of the box.
    |
    */

    'timezone' => 'America/Caracas',

    /*
    |--------------------------------------------------------------------------
    | Application Locale Configuration
    |--------------------------------------------------------------------------
    |
    | The application locale determines the default locale that will be used
    | by the translation service provider. You are free to set this value
    | to any of the locales which will be supported by the application.
    |
    */

    'locale' => 'es',

    /*
    |--------------------------------------------------------------------------
    | Application Fallback Locale
    |--------------------------------------------------------------------------
    |
    | The fallback locale determines the locale to use when the current one
    | is not available. You may change the value to correspond to any of
    | the language folders that are provided through your application.
    |
    */

    'fallback_locale' => 'es',

    /*
    |--------------------------------------------------------------------------
    | Encryption Key
    |--------------------------------------------------------------------------
    |
    | This key is used by the Illuminate encrypter service and should be set
    | to a random, 32 character string, otherwise these encrypted strings
    | will not be safe. Please do this before deploying an application!
    |
    */

    'key' => env('APP_KEY', 'SomeRandomString'),

    'cipher' => 'AES-256-CBC',
    /*
    |--------------------------------------------------------------------------
    | Logging Configuration
    |--------------------------------------------------------------------------
    |
    | Here you may configure the log settings for your application. Out of
    | the box, Laravel uses the Monolog PHP logging library. This gives
    | you a variety of powerful log handlers / formatters to utilize.
    |
    | Available Settings: "single", "daily", "syslog", "errorlog"
    |
    */

    'log' => 'daily',

    /*
    |--------------------------------------------------------------------------
    | Autoloaded Service Providers
    |--------------------------------------------------------------------------
    |
    | The service providers listed here will be automatically loaded on the
    | request to your application. Feel free to add your own services to
    | this array to grant expanded functionality to your applications.
    |
    */

    'providers' => [

        /*
         * Laravel Framework Service Providers...
         */
        'Illuminate\Foundation\Providers\ArtisanServiceProvider',
        'Illuminate\Auth\AuthServiceProvider',
        'Illuminate\Bus\BusServiceProvider',
        'Illuminate\Cache\CacheServiceProvider',
        'Illuminate\Foundation\Providers\ConsoleSupportServiceProvider',
        'Illuminate\Routing\ControllerServiceProvider',
        'Illuminate\Cookie\CookieServiceProvider',
        'Illuminate\Database\DatabaseServiceProvider',
        'Illuminate\Encryption\EncryptionServiceProvider',
        'Illuminate\Filesystem\FilesystemServiceProvider',
        'Illuminate\Foundation\Providers\FoundationServiceProvider',
        'Illuminate\Hashing\HashServiceProvider',
        'Illuminate\Mail\MailServiceProvider',
        'Illuminate\Pagination\PaginationServiceProvider',
        'Illuminate\Pipeline\PipelineServiceProvider',
        'Illuminate\Queue\QueueServiceProvider',
        'Illuminate\Redis\RedisServiceProvider',
        'Illuminate\Auth\Passwords\PasswordResetServiceProvider',
        'Illuminate\Session\SessionServiceProvider',
        'Illuminate\Translation\TranslationServiceProvider',
        'Illuminate\Validation\ValidationServiceProvider',
        'Illuminate\View\ViewServiceProvider',
        'Collective\Html\HtmlServiceProvider',
        'Laracasts\Flash\FlashServiceProvider',
        /*
         * Application Service Providers...
         */
        'Illuminate\Broadcasting\BroadcastServiceProvider',
        'App\Providers\AppServiceProvider',
        'App\Providers\BusServiceProvider',
        'App\Providers\ConfigServiceProvider',
        'App\Providers\EventServiceProvider',
        'App\Providers\RouteServiceProvider',
        'App\Providers\VariablesServiceProvider',
        'jorgelsaud\Mercadopago\MercadoPagoServiceProvider',
        'Giorgiosaud\Bootstrapper\BootstrapperL5ServiceProvider',
        'Mcamara\LaravelLocalization\LaravelLocalizationServiceProvider',
        'SimpleSoftwareIO\QrCode\QrCodeServiceProvider',
        'jorgelsaud\Carbonlocalizer\Provider\CarbonlocalizerServiceProvider',
        'Barryvdh\Debugbar\ServiceProvider',
        'Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider',
        'Barryvdh\DomPDF\ServiceProvider',
	'Laracasts\Utilities\JavaScript\JavaScriptServiceProvider'
        ],

    /*
    |--------------------------------------------------------------------------
    | Class Aliases
    |--------------------------------------------------------------------------
    |
    | This array of class aliases will be registered when this application
    | is started. However, feel free to register as many as you wish as
    | the aliases are "lazy" loaded so they don't hinder performance.
    |
    */

    'aliases' => [

    'App' => 'Illuminate\Support\Facades\App',
    'Artisan' => 'Illuminate\Support\Facades\Artisan',
    'Auth' => 'Illuminate\Support\Facades\Auth',
    'Blade' => 'Illuminate\Support\Facades\Blade',
    'Bus' => 'Illuminate\Support\Facades\Bus',
    'Cache' => 'Illuminate\Support\Facades\Cache',
    'Config' => 'Illuminate\Support\Facades\Config',
    'Cookie' => 'Illuminate\Support\Facades\Cookie',
    'Crypt' => 'Illuminate\Support\Facades\Crypt',
    'DB' => 'Illuminate\Support\Facades\DB',
    'Eloquent' => 'Illuminate\Database\Eloquent\Model',
    'Event' => 'Illuminate\Support\Facades\Event',
    'File' => 'Illuminate\Support\Facades\File',
    'Hash' => 'Illuminate\Support\Facades\Hash',
    'Input' => 'Illuminate\Support\Facades\Input',
    'Inspiring' => 'Illuminate\Foundation\Inspiring',
    'Lang' => 'Illuminate\Support\Facades\Lang',
    'Log' => 'Illuminate\Support\Facades\Log',
    'Mail' => 'Illuminate\Support\Facades\Mail',
    'Password' => 'Illuminate\Support\Facades\Password',
    'Queue' => 'Illuminate\Support\Facades\Queue',
    'Redirect' => 'Illuminate\Support\Facades\Redirect',
    'Redis' => 'Illuminate\Support\Facades\Redis',
    'Request' => 'Illuminate\Support\Facades\Request',
    'Response' => 'Illuminate\Support\Facades\Response',
    'Route' => 'Illuminate\Support\Facades\Route',
    'Schema' => 'Illuminate\Support\Facades\Schema',
    'Session' => 'Illuminate\Support\Facades\Session',
    'Storage' => 'Illuminate\Support\Facades\Storage',
    'URL' => 'Illuminate\Support\Facades\URL',
    'Validator' => 'Illuminate\Support\Facades\Validator',
    'View' => 'Illuminate\Support\Facades\View',
    'Form' => 'Collective\Html\FormFacade',
    'HTML' => 'Collective\Html\HtmlFacade',
    'Form'=>'Giorgiosaud\Bootstrapper\Facades\Form',
    'Accordion' => 'Giorgiosaud\Bootstrapper\Facades\Accordion',
    'Alert' => 'Giorgiosaud\Bootstrapper\Facades\Alert',
    'Badge' => 'Giorgiosaud\Bootstrapper\Facades\Badge',
    'Breadcrumb' => 'Giorgiosaud\Bootstrapper\Facades\Breadcrumb',
    'Button' => 'Giorgiosaud\Bootstrapper\Facades\Button',
    'ButtonGroup' => 'Giorgiosaud\Bootstrapper\Facades\ButtonGroup',
    'Carousel' => 'Giorgiosaud\Bootstrapper\Facades\Carousel',
    'ControlGroup' => 'Giorgiosaud\Bootstrapper\Facades\ControlGroup',
    'DropdownButton' => 'Giorgiosaud\Bootstrapper\Facades\DropdownButton',
    'Helpers' => 'Giorgiosaud\Bootstrapper\Facades\Helpers',
    'Icon' => 'Giorgiosaud\Bootstrapper\Facades\Icon',
    'InputGroup' => 'Giorgiosaud\Bootstrapper\Facades\InputGroup',
    'Image' => 'Giorgiosaud\Bootstrapper\Facades\Image',
    'Label' => 'Giorgiosaud\Bootstrapper\Facades\Label',
    'MediaObject' => 'Giorgiosaud\Bootstrapper\Facades\MediaObject',
    'Modal' => 'Giorgiosaud\Bootstrapper\Facades\Modal',
    'Navbar' => 'Giorgiosaud\Bootstrapper\Facades\Navbar',
    'Navigation' => 'Giorgiosaud\Bootstrapper\Facades\Navigation',
    'Panel' => 'Giorgiosaud\Bootstrapper\Facades\Panel',
    'ProgressBar' => 'Giorgiosaud\Bootstrapper\Facades\ProgressBar',
    'Tabbable' => 'Giorgiosaud\Bootstrapper\Facades\Tabbable',
    'Table' => 'Giorgiosaud\Bootstrapper\Facades\Table',
    'Thumbnail' => 'Giorgiosaud\Bootstrapper\Facades\Thumbnail',
    'Debugbar' => 'Barryvdh\Debugbar\Facade',
    'LaravelLocalization' => 'Mcamara\LaravelLocalization\Facades\LaravelLocalization',
    'QrCode' => 'SimpleSoftwareIO\QrCode\Facades\QrCode',
    'CarbonLoc' => 'jorgelsaud\Carbonlocalizer\Facades\Carbonlocalizer',
    'Mercadopago' => 'jorgelsaud\Mercadopago\Facades\Mercadopago',
    'PDF' => 'Barryvdh\DomPDF\Facade',
    'Vari' => 'App\Facades\Vari',
    ],

    ];
