<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit08e67eaae687e541aafb12219b2fff3c
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PostTypes\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PostTypes\\' => 
        array (
            0 => __DIR__ . '/..' . '/jjgrainger/posttypes/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit08e67eaae687e541aafb12219b2fff3c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit08e67eaae687e541aafb12219b2fff3c::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
