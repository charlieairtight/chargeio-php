<?php
// This snippet (and some of the curl code) due to the Facebook SDK.
if (!function_exists('curl_init')) {
    throw new Exception('ChargeIO needs the CURL PHP extension.');
}
if (!function_exists('json_decode')) {
    throw new Exception('ChargeIO needs the JSON PHP extension.');
}
if (!function_exists('mb_detect_encoding')) {
    throw new Exception('ChargeIO needs the Multibyte String PHP extension.');
}

function __autoload($classname) {
    $classname = str_replace('ChargeIO_', '', $classname);

    $filename = $classname .".php";
    include_once(realpath(__DIR__) . '/' . $filename);
}