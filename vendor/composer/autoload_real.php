<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitdae564c9c4c73f38c14ef2d2a18b40b2
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

        spl_autoload_register(array('ComposerAutoloaderInitdae564c9c4c73f38c14ef2d2a18b40b2', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitdae564c9c4c73f38c14ef2d2a18b40b2', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitdae564c9c4c73f38c14ef2d2a18b40b2::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}