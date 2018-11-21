<?php
/**
 * OCR接口DEMO
 *
 * User: kendo    Date: 2018/11/21
 */

require_once __DIR__ . '/../../vendor/autoload.php';

//请在此填入AppID与AppKey
$appId = '';
$appKey = '';


$ocr = new \TencentAi\Http\RequestOcr($appId, $appKey);

/*
//身份证OCR
$params = [
    'image' =>  file_get_contents('../data/idcardocr1.jpg'),
    'card_type' => 1
];
$response = $ocr->idCardOcr($params);
print_r($response);
*/

/*
//行驶证驾驶证OCR
//驾驶证
$params = [
    'image' => file_get_contents('../data/driverlicenseocr.jpg'),
    'type' => 1
];
$response = $ocr->driverLicenseOcr($params);
print_r($response);
*/

/*
//通用OCR
$params = [
    'image' => file_get_contents('../data/idcardocr1.jpg')
];
$response = $ocr->generalOcr($params);
print_r($response);
*/