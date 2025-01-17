<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4e9da9d90dfed5299c90347e4653d63e
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Service\\' => 8,
        ),
        'R' => 
        array (
            'RedBeanPHP\\' => 11,
        ),
        'C' => 
        array (
            'Config\\' => 7,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Service\\' => 
        array (
            0 => __DIR__ . '/..' . '/service/core',
        ),
        'RedBeanPHP\\' => 
        array (
            0 => __DIR__ . '/..' . '/gabordemooij/redbean/RedBeanPHP',
        ),
        'Config\\' => 
        array (
            0 => __DIR__ . '/../..' . '/config',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4e9da9d90dfed5299c90347e4653d63e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4e9da9d90dfed5299c90347e4653d63e::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
