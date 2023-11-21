<?php

// include - file not found
include 'test.php';
echo("<br /> <br /> test.php is not there so include will emit warning and allow execution to continue.");


// // include - multiple times include
// include './files/reusable.php';
// include './files/reusable.php';
// echo("<br /> <br /> This line will not display on screen becuase of error");


// // include_once - file not found
// include_once 'test.php';
// echo("<br /> <br /> test.php is not there so include_once will emit warning and allow execution to continue.");


// // include_once - multiple times include
// include_once './files/reusable.php';
// include_once './files/reusable.php';
// echo("if the file has already been included then it won't include it again.<br />");
// echo(displayMessage("test message"));


// // require - file not found
// require 'test.php';
// echo("This line will not display: test.php is not there so require will throw error and stop the execution");


// // require - multiple times include
// require './files/reusable.php';
// require './files/reusable.php';
// echo("<br /> <br /> This line will not display on screen becuase of error");


// // require_once - file not found
// require_once 'test.php';
// echo("<br /> <br /> test.php is not there so require_once will emit warning and allow execution to continue.");


// // require_once - multiple times include
// require_once './files/reusable.php';
// require_once './files/reusable.php';
// echo("if the file has already been included then it won't include it again.<br />");
// echo(displayMessage("test message"));

?>