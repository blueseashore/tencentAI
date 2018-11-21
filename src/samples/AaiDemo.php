<?php
/**
 * 语音识别
 *
 * User: kendo    Date: 2018/11/21
 */


require_once __DIR__ . '/../../vendor/autoload.php';

//请在此填入AppID与AppKey
$appId = '';
$appKey = '';

$aai = new \TencentAi\Http\RequestAai($appId, $appKey);

//语音识别
$response = $aai->asr([
    'format' => 2,
    'speech' => base64_encode(file_get_contents('../data/wxasrs.mp3')),
]);
print_r($response);