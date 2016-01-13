<?php

function swalert($title = null, $message = null)
{
    $flash = app('Infinety\SweetAlert\Flash');
    if (func_num_args() == 0) {
        return $flash;
    }
    return $flash->info($title, $message);
}

if (!function_exists('alert')) {
    function alert($title = null, $message = null)
    {
        return swalert($title, $message);
    }
}
