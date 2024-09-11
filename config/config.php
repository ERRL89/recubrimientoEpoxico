<?php
	$folderBase = 'cotizadores/recubrimientoEpoxico/';
    $theme = 'acil';
	$root = $_SERVER['DOCUMENT_ROOT'].'/'.$folderBase;
	
	// INFORMACIÓN PARA TEST //
    #BASE DE DATOS

    $produccion="si";

    if($produccion=="si"){
        $host = 'localhost';
        $dbname = 'u274019495_edsontech';
        $userDB = 'u274019495_edsontech';
        $passDB = 'Erxl5063701489*';
    }else{
        $host = 'localhost';
        $dbname = 'recubrimiento_epoxico';
        $userDB = 'root';
        $passDB = '';
    }

    #DATOS PARA PHPMAIL
    $mailHost = 'smtp.hostinger.com';
    $mailUser = 'cotizaciones@edsonrubio.tech';
    $mailPass = 'Erxl5063701489*';
    $mailSender = array('email' => 'cotizaciones@edsonrubio.tech', 'name' => 'Recubrimiento Epóxico de Mexicali');
    #
?>