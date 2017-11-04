<?php

function __autoload($classname) {
    $filename = "./src/". $classname .".php";
    include_once($filename);
}

// we've called a class ***


$merkl = new Person("dumm", "wie brot" , 100);
echo "<pre>";
print_r($merkl);
echo "</pre>";
echo "Eine neue Person mit Alter $merkl->age"
?>
