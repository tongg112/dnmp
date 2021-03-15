<?php
/**
 * @example https://docs.phpmyadmin.net/en/latest/config.html
 */
/*mysql,mysql5 example
$cfg['blowfish_secret']='multiServerExample70518';

$i = 0;

$i++; // server 1 :
$cfg['Servers'][$i]['verbose']   = 'no1';
$cfg['Servers'][$i]['host']      = 'mysql';


$i++; // server 2 :
$cfg['Servers'][$i]['verbose']   = 'no2';
$cfg['Servers'][$i]['host']      = 'mysql5';
*/
$cfg['blowfish_secret']='multiServerExample70518';

$i = 0;

$i++; // server 1 :
$cfg['Servers'][$i]['verbose']   = '8';
$cfg['Servers'][$i]['host']      = 'mysql';


$i++; // server 2 :
$cfg['Servers'][$i]['verbose']   = '5.7';
$cfg['Servers'][$i]['host']      = 'mysql5';


$i++; // server 3 :
$cfg['Servers'][$i]['verbose']   = '5.6';
$cfg['Servers'][$i]['host']      = 'mysql56';
