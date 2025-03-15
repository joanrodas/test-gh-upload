<?php

namespace TestGhUpload\Includes;

class Lyfecycle
{
    public static function activate($network_wide)
    {
        do_action('TestGhUpload/setup', $network_wide);
    }

    public static function deactivate($network_wide)
    {
        do_action('TestGhUpload/deactivation', $network_wide);
    }

    public static function uninstall()
    {
        do_action('TestGhUpload/cleanup');
    }
}
