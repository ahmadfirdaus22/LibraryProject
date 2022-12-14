<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite196f905fc7170fe4865bd66436a2797
{
    public static $prefixLengthsPsr4 = array (
        'O' => 
        array (
            'OOP\\app\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'OOP\\app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'OOP\\app\\Config\\Database' => __DIR__ . '/../..' . '/app/Config/Database.php',
        'OOP\\app\\Controller\\HomeController' => __DIR__ . '/../..' . '/app/Controller/HomeController.php',
        'OOP\\app\\Core\\Router' => __DIR__ . '/../..' . '/app/Core/Router.php',
        'OOP\\app\\Core\\View' => __DIR__ . '/../..' . '/app/Core/View.php',
        'OOP\\app\\Middleware\\Auth' => __DIR__ . '/../..' . '/app/Middleware/Auth.php',
        'OOP\\app\\Middleware\\Guest' => __DIR__ . '/../..' . '/app/Middleware/Guest.php',
        'OOP\\app\\Model\\Akun' => __DIR__ . '/../..' . '/app/Model/Akun.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite196f905fc7170fe4865bd66436a2797::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite196f905fc7170fe4865bd66436a2797::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite196f905fc7170fe4865bd66436a2797::$classMap;

        }, null, ClassLoader::class);
    }
}
