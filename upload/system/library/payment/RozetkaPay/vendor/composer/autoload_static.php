<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfa8d0a6567feb0135f78193b60a60147
{
    public static $prefixLengthsPsr4 = array (
        'c' => 
        array (
            'chillerlan\\Settings\\' => 20,
            'chillerlan\\QRCode\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'chillerlan\\Settings\\' => 
        array (
            0 => __DIR__ . '/..' . '/chillerlan/php-settings-container/src',
        ),
        'chillerlan\\QRCode\\' => 
        array (
            0 => __DIR__ . '/..' . '/chillerlan/php-qrcode/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitfa8d0a6567feb0135f78193b60a60147::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfa8d0a6567feb0135f78193b60a60147::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitfa8d0a6567feb0135f78193b60a60147::$classMap;

        }, null, ClassLoader::class);
    }
}
