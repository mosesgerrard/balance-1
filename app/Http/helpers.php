<?php

use \Request;

if(!function_exists('set_active')):

    function set_active($page, $active = 'active', $default = '/'){
        return Request::is($page) ? $active : $default;
    }

endif;

if(!function_exists("sort_members_by")):

    function sort_members_by($column, $body){
        $direction = (Request::get('direction') == 'asc') ? 'desc' : 'asc';
        return link_to_route('memberships.index', $body,['sortBy'=>$column, 'direction'=>$direction]);
    }


endif;