<?php

function swalert($title = null, $message = null)
{
    $flash = app('Infinety\SweetAlert\Flash');
    if (func_num_args() == 0) {
        return $flash;
    }
    return $flash->info($title, $message);
}
