<?php
/*Usage: Call from the browser: http://localhost/path_to_your_mvc_public_folder_inside_your_webserver

path could For example be: php_sem7/sem7_code/mvc/public/home/Homayoon OR
path could For example be: php_sem7/sem7_code/mvc/public/todo

*/

//init.php is  used to  require all  other files
//so  actually by requiring  init you require all  other files
require_once '../app/init.php';

$app = new App;