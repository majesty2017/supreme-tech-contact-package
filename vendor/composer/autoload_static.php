<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb841d3cc8317542617acc046f448164a
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'Reborn\\Contact\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Reborn\\Contact\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitb841d3cc8317542617acc046f448164a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb841d3cc8317542617acc046f448164a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb841d3cc8317542617acc046f448164a::$classMap;

        }, null, ClassLoader::class);
    }
}