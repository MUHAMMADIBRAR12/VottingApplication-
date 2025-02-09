<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit794f02b11c3a79c3d84af301b35fab48
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Twilio\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Twilio\\' => 
        array (
            0 => __DIR__ . '/..' . '/twilio/sdk/src/Twilio',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit794f02b11c3a79c3d84af301b35fab48::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit794f02b11c3a79c3d84af301b35fab48::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit794f02b11c3a79c3d84af301b35fab48::$classMap;

        }, null, ClassLoader::class);
    }
}
