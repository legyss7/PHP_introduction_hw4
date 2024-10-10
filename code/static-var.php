<?php

function my_function() {
    static $static_variable = 0;
    echo ++$static_variable; // значение увеличивается каждый раз, когда функция вызывается
}

for($i = 0; $i < 5; $i++){
    my_function();
}


// docker run --rm -v ${pwd}/code/:/cli php:8.2-cli php /cli/static_var.php