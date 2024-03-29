<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit726f0a81ab78b4701f768c7006b273fe
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInit726f0a81ab78b4701f768c7006b273fe', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit726f0a81ab78b4701f768c7006b273fe', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit726f0a81ab78b4701f768c7006b273fe::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
