Archtecture
===========
This assumes that all parts will be declared in the file config.php which will be read by the  class run which will in turn produce the file\

The elements in config.php are nested(parent child) where nested ones take the array data type. These elements are liked to their respective templates

Class DB will have the DB class and CRUD operation functions

Logic will have php code

index.php will run class run found in run.php

Default Classes
===============
By default, this simulation creates a <div> for every entry in the config file.
This div will have the key of the array as its class name
You can use this class name to style(shown in the example)
