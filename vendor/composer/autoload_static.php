<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit423e5faf34d6cad899264b62fdcb7e09
{
    public static $files = array (
        'bf9f5270ae66ac6fa0290b4bf47867b7' => __DIR__ . '/..' . '/adodb/adodb-php/adodb.inc.php',
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit423e5faf34d6cad899264b62fdcb7e09::$classMap;

        }, null, ClassLoader::class);
    }
}
