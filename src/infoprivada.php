<?php
echo(exec("whoami"));
echo($username = posix_getpwuid(posix_geteuid())['name']);
file_put_contents("testFile", "test");
$user = fileowner("testFile");
unlink("testFile");
echo get_current_user();

echo $_SERVER["USER"];
echo $_SERVER["USERNAME"]; 


die();
