<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if (!function_exists('user_session')) {
    function user_session($param = '') {
        $ci=& get_instance();
        $userdata = $ci->session->all_userdata();
        return $userdata[$param];
    }
}

if (!function_exists('jawaban_benar')) {
    function jawaban_benar($id_jawaban = '') {
        
        $CI =& get_instance();
        $CI->load->model('jawaban_detail_model');
        $result = $CI->jawaban_detail_model->cekBenar($id_jawaban);
        return $result->res;
    }
}

if (!function_exists('jawaban_salah')) {
    function jawaban_salah($id_jawaban = '') {
        
        $CI =& get_instance();
        $CI->load->model('jawaban_detail_model');
        $result = $CI->jawaban_detail_model->cekSalah($id_jawaban);
        return $result->res;
    }
}

if( !function_exists('nilai')) {
    function nilai($id_jawaban = ''){
        $CI =& get_instance();
        $CI->load->model('jawaban_detail_model');
        $result = $CI->jawaban_detail_model->hasilNilai($id_jawaban);
        return $result->res * 20;
    }
}