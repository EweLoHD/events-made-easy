<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitba49ea28fe9bbcb98d01e646f42dde0f
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

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInitba49ea28fe9bbcb98d01e646f42dde0f', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitba49ea28fe9bbcb98d01e646f42dde0f', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitba49ea28fe9bbcb98d01e646f42dde0f::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}