<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitacc12af076a36c37af60dea6c7578f8c
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
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitacc12af076a36c37af60dea6c7578f8c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitacc12af076a36c37af60dea6c7578f8c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitacc12af076a36c37af60dea6c7578f8c::$classMap;

        }, null, ClassLoader::class);
    }
}
