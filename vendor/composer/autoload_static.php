<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit17e7c2f030fbe4179c20760b966648c8
{
    public static $files = array (
        '6de893ce875d155427be1620f92b7cb7' => __DIR__ . '/../..' . '/source/Config.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Source\\' => 7,
        ),
        'C' => 
        array (
            'CoffeeCode\\Router\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Source\\' => 
        array (
            0 => __DIR__ . '/../..' . '/source',
        ),
        'CoffeeCode\\Router\\' => 
        array (
            0 => __DIR__ . '/..' . '/coffeecode/router/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit17e7c2f030fbe4179c20760b966648c8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit17e7c2f030fbe4179c20760b966648c8::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit17e7c2f030fbe4179c20760b966648c8::$classMap;

        }, null, ClassLoader::class);
    }
}
