<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit360873948f5380f4375209e0ba3ed463
{
    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit360873948f5380f4375209e0ba3ed463::$classMap;

        }, null, ClassLoader::class);
    }
}