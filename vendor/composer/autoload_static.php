<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit31e985f78e65eef713064b06d48be7d3
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Alura\\DesignPattern\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Alura\\DesignPattern\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit31e985f78e65eef713064b06d48be7d3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit31e985f78e65eef713064b06d48be7d3::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit31e985f78e65eef713064b06d48be7d3::$classMap;

        }, null, ClassLoader::class);
    }
}