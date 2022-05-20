<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit64d290d30e853256e2b3343386d3f802
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Traits\\' => 7,
        ),
        'M' => 
        array (
            'Models\\' => 7,
        ),
        'C' => 
        array (
            'Classes\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Traits\\' => 
        array (
            0 => __DIR__ . '/../..' . '/traits',
        ),
        'Models\\' => 
        array (
            0 => __DIR__ . '/../..' . '/models',
        ),
        'Classes\\' => 
        array (
            0 => __DIR__ . '/../..' . '/classes',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit64d290d30e853256e2b3343386d3f802::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit64d290d30e853256e2b3343386d3f802::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit64d290d30e853256e2b3343386d3f802::$classMap;

        }, null, ClassLoader::class);
    }
}