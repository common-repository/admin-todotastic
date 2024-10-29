<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc71a9533f985e89d1ae462908b6cef2d
{
    public static $prefixLengthsPsr4 = array (
        'I' => 
        array (
            'Illuminate\\Events\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Illuminate\\Events\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static $classMap = array (
        'Illuminate\\Events\\CallQueuedListener' => __DIR__ . '/../..' . '/CallQueuedListener.php',
        'Illuminate\\Events\\Dispatcher' => __DIR__ . '/../..' . '/Dispatcher.php',
        'Illuminate\\Events\\EventServiceProvider' => __DIR__ . '/../..' . '/EventServiceProvider.php',
        'Illuminate\\Events\\NullDispatcher' => __DIR__ . '/../..' . '/NullDispatcher.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc71a9533f985e89d1ae462908b6cef2d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc71a9533f985e89d1ae462908b6cef2d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc71a9533f985e89d1ae462908b6cef2d::$classMap;

        }, null, ClassLoader::class);
    }
}
