<?php

// http://localhost/nodemcuphp/index.php?mode=save&vph=20&vtemps=20&vtempd=20&vtempt=20&vfd=20&vwd=20&vwf=20

//include library utama
include_once 'config.php';

// Buat Instance baru
$app = new Config_Nodemcu();

$tz = 'Asia/Jakarta';
$timestamp = time();
$dt = $dt = new DateTime("now", new DateTimeZone($tz)); //first argument "must" be a string
$dt = $dt->setTimestamp($timestamp); //adjust the object to correct timestamp
$dt = $dt->format("Y-m-d H:i:s");

// Baca query dari alamat
$app->query_string = $_SERVER['QUERY_STRING'];

// Cek apakah ada query bernama mode?
if ($app->is_url_query('mode')) {

    // Bagi menjadi beberapa operasi
    switch ($app->get_url_query_value('mode')) {

        default:
            $app->read_data();
        
        case 'save':
            if ($app->is_url_query('vph') && $app->is_url_query('vtemps') && $app->is_url_query('vtempd') && $app->is_url_query('vtempt') && $app->is_url_query('vfd') && $app->is_url_query('vwd') && $app->is_url_query('vwf'))
            {
                $sph = $app->get_url_query_value('vph');
                $stemps = $app->get_url_query_value('vtemps');
                $stempd = $app->get_url_query_value('vtempd');
                $stempt = $app->get_url_query_value('vtempt');
                $sfd = $app->get_url_query_value('vfd');
                $swd = $app->get_url_query_value('vwd');
                $swf = $app->get_url_query_value('vwf');

                $app->create_data($sph, $stemps, $stempd, $stempt, $sfd, $swd, $swf, $dt);
            } else {
                $error = [
                    'vph'=>'required',
                    'vtemps'=> 'required',
                    'vtempd'=>'required',
                    'vtempt'=> 'required',
                    'vfd'=>'required',
                    'vwd'=> 'required',
                    'vwf'=>'required',
                ];
                echo $app->error_handler($error);
            }
        break;

        case 'delete':
            if ($app->is_url_query('id'))
            {
                $id = $app->get_url_query_value('id');
                $app->delete_data($id);
            } else {
                $error = [
                    'id'=>'required',
                ];
                echo $app->error_handler($error);
            }
        break;

        case 'update':
            if ($app->is_url_query('id'))
            {
                $id = $app->get_url_query_value('id');
                
                if ($app->is_url_query('vph'))
                {
                    $sph = $app->get_url_query_value('vph');
                    $app->update_data($id, $sph);
                }

                if($app->is_url_query('vtemps'))
                {
                    $stemps = $app->get_url_query_value('vtemps');
                    $app->update_data($id, $stemps);
                }
                
                if($app->is_url_query('vtempd'))
                {
                    $stempd = $app->get_url_query_value('vtempd');
                    $app->update_data($id, $stempd);
                }
                
                if($app->is_url_query('vtempt'))
                {
                    $stempt = $app->get_url_query_value('vtempt');
                    $app->update_data($id, $stempt);
                }
                
                if($app->is_url_query('vfd'))
                {
                    $svd = $app->get_url_query_value('vfd');
                    $app->update_data($id, $svd);
                }
                
                if($app->is_url_query('vwd'))
                {
                    $swd = $app->get_url_query_value('vwd');
                    $app->update_data($id, $swd);
                }
                
                if($app->is_url_query('vwf'))
                {
                    $swf = $app->get_url_query_value('vwf');
                    $app->update_data($id, $swf);
                }
            } else {
                $error = [
                    'id'=>'required',
                    'vph'=>'OR required',
                    'vtemps'=>'OR required',
                    'vtempd'=>'OR required',
                    'vtempt'=>'OR required',
                    'vfd'=>'OR required',
                    'vwd'=>'OR required',
                    'vwf'=>'OR required',
                ];
                echo $app->error_handler($error);
            }
        break;

    }
} else {
    $app->read_data();
}
