<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if (!function_exists('user_session')) {
    function user_session($param = '') {
        $ci=& get_instance();
        $userdata = $ci->session->all_userdata();
        return $userdata[$param];
    }
}