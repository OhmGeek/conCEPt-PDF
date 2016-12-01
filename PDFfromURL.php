<?php
/**
 * Created by PhpStorm.
 * User: ryan
 * Date: 01/12/16
 * Time: 11:52
 */
require_once './vendor/autoload.php';

$url = $_GET['url'];

$container->get('knp_snappy.pdf')->generate('http://www.st-aidans.com','genPDF.php');