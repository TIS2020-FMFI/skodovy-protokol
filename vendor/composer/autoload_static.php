<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7d368d5f17f7f88b7aa40ae661e7af53
{
    public static $prefixLengthsPsr4 = array (
        'O' => 
        array (
            'Office365\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Office365\\' => 
        array (
            0 => __DIR__ . '/..' . '/vgrem/php-spo/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7d368d5f17f7f88b7aa40ae661e7af53::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7d368d5f17f7f88b7aa40ae661e7af53::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7d368d5f17f7f88b7aa40ae661e7af53::$classMap;

        }, null, ClassLoader::class);
    }
}
