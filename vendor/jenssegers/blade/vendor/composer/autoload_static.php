<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc85877ece8d5b00d9f007ec13a11a8f0
{
    public static $prefixLengthsPsr4 = array (
        'J' => 
        array (
            'Jenssegers\\Blade\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Jenssegers\\Blade\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Jenssegers\\Blade\\Blade' => __DIR__ . '/../..' . '/src/Blade.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc85877ece8d5b00d9f007ec13a11a8f0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc85877ece8d5b00d9f007ec13a11a8f0::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc85877ece8d5b00d9f007ec13a11a8f0::$classMap;

        }, null, ClassLoader::class);
    }
}
