<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitab3e3120336464e75b4b95d5fe696dae
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

        spl_autoload_register(array('ComposerAutoloaderInitab3e3120336464e75b4b95d5fe696dae', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitab3e3120336464e75b4b95d5fe696dae', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitab3e3120336464e75b4b95d5fe696dae::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
