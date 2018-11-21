<?php
/**
 * 机器翻译接口DEMO
 *
 * User: kendo    Date: 2018/11/21
 */

require_once __DIR__ . '/../../vendor/autoload.php';

//请在此填入AppID与AppKey
$appId = '';
$appKey = '';

$translate = new \TencentAi\Http\RequestTranslate($appId, $appKey);

/*
//文本翻译
$response = $translate->textTrans([
    'type' => 1,
    'text' => '今天星期几了'
]);
print_r($response);
*/

/*
//语音翻译
$response = $translate->textTranslate([
    'type' => 0,
    'text' => 'Are you Ok ?'
]);
print_r($response);
*/

/*
//图片翻译
$response = $translate->imageTranslate([
    'image' => file_get_contents('../data/generalocr.jpg'),
    'session_id' => uniqid(),
    'scene' => 'doc',
    'source' => 'zh',
    'target' => 'en',
]);
print_r($response);
*/

/*
//语种识别
$response = $translate->textDetect([
    'text' => 'Are you Ok ?',
    'candidate_langs' => 'zh|jp|kr|en',
    'force' => 0
]);
print_r($response);
*/