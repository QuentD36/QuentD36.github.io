<?php

class Autoloader{

    /**
     * Allows you to load classes
     *
     * @return void
     */
    public static function loadClasses(){

        spl_autoload_register(array(__CLASS__, 'autoload'));
    }

    /**
     * Allows you to automatically load classes into the project
     *
     * @param $class
     * @return void
     */
    public static function autoload($class){


        $class = lcfirst($class);

        $directories = array(
            'mod_member/',
            'mod_member/controller/',
            'mod_member/model/',
            'mod_member/view/',
        );

        foreach ($directories as $directory){
            if(file_exists($directory.$class.'.php')){
                require_once ($directory.$class.'.php');
                return;
            }
        }
    }

}