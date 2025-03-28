<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite476a95629d461270746b736ac27de1d
{
    public static $files = array (
        '663c805b85b38abbdf7ed0f1e32ebfc3' => __DIR__ . '/../..' . '/src/Test.php',
    );

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
            $loader->prefixLengthsPsr4 = ComposerStaticInite476a95629d461270746b736ac27de1d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite476a95629d461270746b736ac27de1d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite476a95629d461270746b736ac27de1d::$classMap;

        }, null, ClassLoader::class);
    }
}
