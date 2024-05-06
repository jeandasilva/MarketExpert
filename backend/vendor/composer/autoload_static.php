<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit397eb31d834fd1716dcae26d970fa7de
{
    public static $prefixLengthsPsr4 = array (
        's' => 
        array (
            'src\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'src\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit397eb31d834fd1716dcae26d970fa7de::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit397eb31d834fd1716dcae26d970fa7de::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}