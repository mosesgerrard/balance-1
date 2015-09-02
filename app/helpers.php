<?php

use \Request;

if(!function_exists('set_active')):

    function set_active($page, $active = 'active', $default = '/'){
        return Request::is($page) ? $active : $default;
    }

endif;