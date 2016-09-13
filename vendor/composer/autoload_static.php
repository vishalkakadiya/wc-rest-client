<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbaefdf1d4ae07835bf82b059ca4437b6
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Automattic\\WooCommerce\\' => 23,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Automattic\\WooCommerce\\' => 
        array (
            0 => __DIR__ . '/..' . '/automattic/woocommerce/src/WooCommerce',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitbaefdf1d4ae07835bf82b059ca4437b6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbaefdf1d4ae07835bf82b059ca4437b6::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
