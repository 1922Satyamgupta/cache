<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3af7b17e0557481aebc5b42706b1c4bb
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Firebase\\JWT\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Firebase\\JWT\\' => 
        array (
            0 => __DIR__ . '/..' . '/firebase/php-jwt/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3af7b17e0557481aebc5b42706b1c4bb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3af7b17e0557481aebc5b42706b1c4bb::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
