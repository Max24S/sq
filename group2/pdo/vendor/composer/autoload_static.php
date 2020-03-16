<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfba01d99821194d88820433c98fd1993
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Academy\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Academy\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitfba01d99821194d88820433c98fd1993::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfba01d99821194d88820433c98fd1993::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}