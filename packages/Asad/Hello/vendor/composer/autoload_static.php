<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2fad293d9a0cbb57b4412e01280600fb
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Arif\\Hello\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Arif\\Hello\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit2fad293d9a0cbb57b4412e01280600fb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2fad293d9a0cbb57b4412e01280600fb::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2fad293d9a0cbb57b4412e01280600fb::$classMap;

        }, null, ClassLoader::class);
    }
}
