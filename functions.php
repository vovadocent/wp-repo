<?php
require_once 'include/plugins/init.php';
require_once('include/wpadmin/admin-addons.php');
//require_once('include/cpt.php');

function pre_dump($var, $ext = false) {
    echo '<pre style="background:eee; padding:20px;">';
    var_dump($var);
    echo '</pre>';

    if($ext)
        exit;
}

