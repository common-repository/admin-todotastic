<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit512ddb79a27234cbb29ea0e270b71342
{
    public static $prefixLengthsPsr4 = array (
        'I' => 
        array (
            'Illuminate\\Container\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Illuminate\\Container\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static $classMap = array (
        'Illuminate\\Container\\BoundMethod' => __DIR__ . '/../..' . '/BoundMethod.php',
        'Illuminate\\Container\\Container' => __DIR__ . '/../..' . '/Container.php',
        'Illuminate\\Container\\ContextualBindingBuilder' => __DIR__ . '/../..' . '/ContextualBindingBuilder.php',
        'Illuminate\\Container\\EntryNotFoundException' => __DIR__ . '/../..' . '/EntryNotFoundException.php',
        'Illuminate\\Container\\RewindableGenerator' => __DIR__ . '/../..' . '/RewindableGenerator.php',
        'Illuminate\\Container\\Util' => __DIR__ . '/../..' . '/Util.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit512ddb79a27234cbb29ea0e270b71342::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit512ddb79a27234cbb29ea0e270b71342::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit512ddb79a27234cbb29ea0e270b71342::$classMap;

        }, null, ClassLoader::class);
    }
}
