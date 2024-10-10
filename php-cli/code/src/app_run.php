<?php

require('./vendor/autoload.php');

use App\Oop\App;

$app = new App();
echo $app->run();

// echo "test";

// docker container run -it -v ${pwd}/php-cli/code/:/code  -w /code composer install
// docker container run --rm -it -v ${pwd}/php-cli/code/:/code -w /code php:8.2-cli php app_run.php
