<?php
echo "running on".shell_exec("whoami");

$www_folder = "/var/www/html/testing/" ;

//执行指令 
echo shell_exec("cd ".$www_folder);
echo shell_exec("git pull origin master");