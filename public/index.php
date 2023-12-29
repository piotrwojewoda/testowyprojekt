<?php

use Piotrwojewoda\Testowyprojekt\Model\NowaKlasa;

require '../vendor/autoload.php';

try {
    new NowaKlasa();
}
catch(Exception $e) {
    echo $e;
}
