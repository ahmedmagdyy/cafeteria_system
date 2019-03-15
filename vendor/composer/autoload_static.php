<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit908aa98d09553b3071b44e4d6fdfcddb
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit908aa98d09553b3071b44e4d6fdfcddb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit908aa98d09553b3071b44e4d6fdfcddb::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
