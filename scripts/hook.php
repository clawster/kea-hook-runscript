#!/usr/bin/php
<?php
declare(strict_types=1);

include "class/hook.php";

$kea = new \Kea\Script\Ipv4;
$file = "/tmp/php_hook.log";

file_put_contents(
    $file,
    json_encode($kea) . PHP_EOL,
    FILE_APPEND
);
