<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit983b27e6d2170bdeaf35555ce54218a3
{
    public static $prefixLengthsPsr4 = array (
        'g' => 
        array (
            'geangontijo\\Validador\\' => 22,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'geangontijo\\Validador\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit983b27e6d2170bdeaf35555ce54218a3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit983b27e6d2170bdeaf35555ce54218a3::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
