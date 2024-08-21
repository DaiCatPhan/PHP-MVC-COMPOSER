<?php

require_once __DIR__ . '/vendor/autoload.php';

require_once './connect/connect.php';

require_once './router/index.php';

require_once './env.php';

function debug($data)
{
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}