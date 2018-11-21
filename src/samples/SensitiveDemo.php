<?php
/**
 * 敏感信息审核DEMO
 *
 * User: kendo    Date: 2018/11/21
 */

require_once __DIR__ . '/../../vendor/autoload.php';

//请在此填入AppID与AppKey
$appId = '';
$appKey = '';

$sensitive = new \TencentAi\Http\RequestSensitive($appId, $appKey);

/*
//暴恐识别
$response = $sensitive->terrorism([
    'image' => file_get_contents('http://n.sinaimg.cn/sifa/crawl/111/w550h361/20180828/lkAO-hifuvpi1345688.jpg'),
//    'image_url' => 'http://n.sinaimg.cn/sifa/crawl/111/w550h361/20180828/lkAO-hifuvpi1345688.jpg',
]);
print_r($response);die;
*/

/*
//智能鉴黄
$response = $sensitive->porn([
    'image' => file_get_contents('http://n.sinaimg.cn/yd/575/w880h495/20181121/bSSs-hmivixn5477156.jpg'),
//    'image_url' => 'http://n.sinaimg.cn/yd/575/w880h495/20181121/bSSs-hmivixn5477156.jpg',
]);
print_r($response);
*/

/*
//音频鉴黄
$response = $sensitive->evilaudio([
    'speech_id' => uniqid(),
    'speech_url' => 'https://sx-pro.oss-cn-shenzhen.aliyuncs.com/user-voice/2516_20180615_7655ec2700e60a9003e6de7ce3b40617.aac',
]);
print_r($response);
*/