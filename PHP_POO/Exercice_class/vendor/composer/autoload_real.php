<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInita12a842dcf6159f497b665cdc478a58b
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

        spl_autoload_register(array('ComposerAutoloaderInita12a842dcf6159f497b665cdc478a58b', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInita12a842dcf6159f497b665cdc478a58b', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInita12a842dcf6159f497b665cdc478a58b::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
