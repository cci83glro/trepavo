<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit995c9e69d485841e5d4c1673445b6ee3
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit995c9e69d485841e5d4c1673445b6ee3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit995c9e69d485841e5d4c1673445b6ee3::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit995c9e69d485841e5d4c1673445b6ee3::$classMap;

        }, null, ClassLoader::class);
    }
}