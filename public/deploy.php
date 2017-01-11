<?php
echo "running on".shell_exec("whoami");

$www_folder = "/var/www/html/testing/" ;

$git_repo = "git@github.com:wsjnohyeah/laravel-testing.git" ;

//执行指令 
echo shell_exec(" cd $www_folder && git pull $git_repo 2>&1 ");