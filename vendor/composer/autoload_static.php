<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf6d1dc4c0b359d5077fc1460877bec6d
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Moment\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Moment\\' => 
        array (
            0 => __DIR__ . '/..' . '/fightbulc/moment/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf6d1dc4c0b359d5077fc1460877bec6d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf6d1dc4c0b359d5077fc1460877bec6d::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
