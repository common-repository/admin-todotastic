<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf05749db9afbab31ffea74840e085bf2
{
    public static $prefixLengthsPsr4 = array (
        'I' => 
        array (
            'Illuminate\\Pagination\\' => 22,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Illuminate\\Pagination\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static $classMap = array (
        'Illuminate\\Pagination\\AbstractPaginator' => __DIR__ . '/../..' . '/AbstractPaginator.php',
        'Illuminate\\Pagination\\LengthAwarePaginator' => __DIR__ . '/../..' . '/LengthAwarePaginator.php',
        'Illuminate\\Pagination\\PaginationServiceProvider' => __DIR__ . '/../..' . '/PaginationServiceProvider.php',
        'Illuminate\\Pagination\\Paginator' => __DIR__ . '/../..' . '/Paginator.php',
        'Illuminate\\Pagination\\UrlWindow' => __DIR__ . '/../..' . '/UrlWindow.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf05749db9afbab31ffea74840e085bf2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf05749db9afbab31ffea74840e085bf2::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf05749db9afbab31ffea74840e085bf2::$classMap;

        }, null, ClassLoader::class);
    }
}
