<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6e09a4a9a038e6623ea05884921c3f54
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'DvxgitJsoriano\\Logger\\' => 22,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'DvxgitJsoriano\\Logger\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit6e09a4a9a038e6623ea05884921c3f54::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6e09a4a9a038e6623ea05884921c3f54::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit6e09a4a9a038e6623ea05884921c3f54::$classMap;

        }, null, ClassLoader::class);
    }
}
