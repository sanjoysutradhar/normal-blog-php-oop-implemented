<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita89e678e1413fd884a0258d5e0633603
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita89e678e1413fd884a0258d5e0633603::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita89e678e1413fd884a0258d5e0633603::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita89e678e1413fd884a0258d5e0633603::$classMap;

        }, null, ClassLoader::class);
    }
}
