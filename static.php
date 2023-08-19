

<?php

function staticfun() {

    static $value = 0;
    $value += 1;

    return $value;
}

staticfun();
staticfun();
staticfun();
staticfun();

echo staticfun(), "\n";
