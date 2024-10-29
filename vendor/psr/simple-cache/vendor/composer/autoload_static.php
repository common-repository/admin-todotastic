<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2691f77e2bbadd33ebd55319517f55de
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\SimpleCache\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\SimpleCache\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Psr\\SimpleCache\\CacheException' => __DIR__ . '/../..' . '/src/CacheException.php',
        'Psr\\SimpleCache\\CacheInterface' => __DIR__ . '/../..' . '/src/CacheInterface.php',
        'Psr\\SimpleCache\\InvalidArgumentException' => __DIR__ . '/../..' . '/src/InvalidArgumentException.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2691f77e2bbadd33ebd55319517f55de::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2691f77e2bbadd33ebd55319517f55de::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2691f77e2bbadd33ebd55319517f55de::$classMap;

        }, null, ClassLoader::class);
    }
}