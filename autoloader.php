<?php
/**
 * Developed by: le_futuriste
 * Date: 21/09/2016
 * Time: 18:56

 * Class Autoloader
 *
 * This class allows you to automatically include other classes in the file or it is used for example visit /example folder
 *
 */
class Autoloader{

    /**
     * register our autoloader
     */
    static function register(){
        spl_autoload_register(array(__CLASS__, 'autoload'));
    }

    /**
     * Include file to $class
     * @param $class string name of class
     */
    static function autoload($class){
    	if ($class == "ReCaptcha\ReCaptcha") {
    	
    	}
        else {
        	require 'app/' . $class . '.php';
    	}
    }

}