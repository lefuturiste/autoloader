# autoloader
Autoloader class for your poo MVC architecture

This class allows you to automatically include other classes in the file or it is used for example:

```
<?php
require 'CLASS PATH';
//initially register
Autoloader::register(); 

$class = new class;
//don't need include class file for $class.
```
