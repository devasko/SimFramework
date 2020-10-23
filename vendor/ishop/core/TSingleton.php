<?php


namespace ishop;


trait TSingleton {

    private static $instance = null;

    private function __construct() {
        // TODO: Implement __construct() method.
    }

    private function __clone() {
        // TODO: Implement __clone() method.
    }

    private function __wakeup() {
        // TODO: Implement __wakeup() method.
    }

    public static function getInstance() {
        if ( self::$instance === null ) {
            self::$instance = new self;
        }
        return self::$instance;
    }
}