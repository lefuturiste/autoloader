<?php
/**
 * Developed by: mbess
 * Date: 21/09/2016
 * Time: 18:56

 * Class Autoloader
 *
 * Cette classe sert à inclure les bonnnes classe que quand on a besoin*;
 * pour appeler la classe utilisez :
 *      require 'autoloader.php';
 *      Autoloader::register();
 *
 * EXEMPLE

//INDEX.php
require 'autoloader.php';
Autoloader::register();


$test = new test();
$test->call();
//test.php
class test {
    public function call(){
        echo 'Called Successfully !';
    }
}

 */
class Autoloader{

    /**
     * Enregistre notre autoloader
     */
    static function register(){
        spl_autoload_register(array(__CLASS__, 'autoload'));
    }

    /**
     * Inclue le fichier correspondant à notre classe
     * @param $class string Le nom de la classe à charger
     */
    static function autoload($class){
    	if ($class == "ReCaptcha\ReCaptcha") {
    	
    	}
        else {
        	require 'app/' . $class . '.php';
    	}
    }

}