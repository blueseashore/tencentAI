<?php
/**
 * 语言识别接口
 *
 * User: kendo    Date: 2018/11/21
 */

namespace TencentAi\Http;

use TencentAi\Core\RequestBase;

class RequestAai extends RequestBase
{
    /**
     * 语音识别-echo版
     *      https://ai.qq.com/doc/aaiasr.shtml
     *      对音频进行语音识别，并返回语音的文字内容
     *
     * @param array $params [
     *      'app_id' => '应用标识（AppId),非必传',
     *      'time_stamp' => '请求时间戳（秒级）',
     *      'nonce_str' => '随机字符串，非必传，不传该值时，做签名时会自动生成',
     *      'sign' => '签名信息，详见接口鉴权，无需传入',
     *      'format' => '语音压缩格式编码，定义见下文描述',
     *      'speech' => '待识别语音（时长上限15s）',
     *      'rate' => '语音采样率编码，定义见下文描述，（不传）默认即16KHz',
     * ]
     * @return mixed|string
     */
    public function asr(array $params)
    {
        $apiUri = '/aai/aai_asr';
        return $this->baseAPi($apiUri, $params);
    }

    /**
     * 语音识别-流式版（AI Lab）
     *      https://ai.qq.com/doc/aaiasr.shtml
     *      对音频进行流式识别，轻松实现边录音边识别
     *
     * @param array $params [
     *      'app_id' => '应用标识（AppId),非必传',
     *      'time_stamp' => '请求时间戳（秒级）',
     *      'nonce_str' => '随机字符串，非必传，不传该值时，做签名时会自动生成',
     *      'sign' => '签名信息，详见接口鉴权，无需传入',
     *      'format' => '语音压缩格式编码，定义见下文描述',
     *      'speech' => '待识别语音（时长上限15s）',
     *      'rate' => '语音采样率编码，定义见下文描述，（不传）默认即16KHz',
     * ]
     * @return mixed|string
     */
    public function asrs(array $params)
    {
        $apiUri = '/aai/aai_asrs';
        return $this->baseAPi($apiUri, $params);
    }

    /**
     * 语音识别-流式版(WeChat AI)
     *      https://ai.qq.com/doc/aaiasr.shtml
     *      对音频进行流式识别，轻松实现边录音边识别
     *
     * @param array $params [
     *      'app_id' => '应用标识（AppId),非必传',
     *      'time_stamp' => '请求时间戳（秒级）',
     *      'nonce_str' => '随机字符串，非必传，不传该值时，做签名时会自动生成',
     *      'sign' => '签名信息，详见接口鉴权，无需传入',
     *      'format' => '语音压缩格式编码，定义见下文描述',
     *      'speech' => '待识别语音（时长上限15s）',
     *      'rate' => '语音采样率编码，定义见下文描述，（不传）默认即16KHz',
     * ]
     * @return mixed|string
     */
    public function wxasrs(array $params)
    {
        $apiUri = '/aai/aai_wxasrs';
        return $this->baseAPi($apiUri, $params);
    }

    /**
     * 长语音识别
     *      https://ai.qq.com/doc/wxasrlong.shtml
     *      上传长音频，提供回调接口，异步获取识别结果
     *
     * @param array $params [
     *      'app_id' => '应用标识（AppId),非必传',
     *      'time_stamp' => '请求时间戳（秒级）',
     *      'nonce_str' => '随机字符串，非必传，不传该值时，做签名时会自动生成',
     *      'sign' => '签名信息，详见接口鉴权，无需传入',
     *      'format' => '语音压缩格式编码，定义见下文描述',
     *      'callback_url' => '用户回调url，需用户提供，用于平台向用户通知识别结果，详见下文描述',
     *      'speech' => '待识别语音（时长上限15min）,语音数据的Base64编码，原始音频大小上限5MB',
     *      'speech_url' => '待识别语音下载地址（时长上限15min）',
     * ]
     * @return mixed|string
     */
    public function wxasrLong(array $params)
    {
        $apiUri = '/aai/aai_wxasrlong';
        return $this->baseAPi($apiUri, $params);
    }

    /**
     * 关键词检索
     *      https://api.ai.qq.com/fcgi-bin/aai/aai_detectkeyword
     *      上传长音频，提供回调接口，异步获取识别结果
     *
     * @param array $params [
     *      'app_id' => '应用标识（AppId),非必传',
     *      'time_stamp' => '请求时间戳（秒级）',
     *      'nonce_str' => '随机字符串，非必传，不传该值时，做签名时会自动生成',
     *      'sign' => '签名信息，详见接口鉴权，无需传入',
     *      'format' => '语音压缩格式编码，定义见下文描述',
     *      'callback_url' => '用户回调url，需用户提供，用于平台向用户通知识别结果，详见下文描述',
     *      'key_words' => '待识别关键词',
     *      'speech' => '待识别语音（时长上限15min）,语音数据的Base64编码，原始音频大小上限5MB',
     *      'speech_url' => '待识别语音下载地址（时长上限15min）',
     * ]
     * @return mixed|string
     */
    public function detectKeyword(array $params)
    {
        $apiUri = '/aai/aai_detectkeyword';
        return $this->baseAPi($apiUri, $params);
    }

    /**
     * 语音合成（AI Lab）
     *      https://ai.qq.com/doc/aaitts.shtml
     *      将文字转换为语音，返回文字的语音数据
     *
     * @param array $params [
     *      'app_id' => '应用标识（AppId),非必传',
     *      'time_stamp' => '请求时间戳（秒级）',
     *      'nonce_str' => '随机字符串，非必传，不传该值时，做签名时会自动生成',
     *      'sign' => '签名信息，详见接口鉴权，无需传入',
     *      'speaker' => '语音发音人编码，定义见下文描述',
     *      'format' => '合成语音格式编码，定义见下文描述',
     *      'volume' => '合成语音音量，取值范围[-10, 10]，如-10表示音量相对默认值小10dB，
     * 0表示默认音量，10表示音量相对默认值大10dB',
     *      'speed' => '合成语音语速，默认100',
     *      'text' => '待合成文本',
     *      'aht' => '合成语音降低/升高半音个数，即改变音高，默认0',
     *      'apc' => '控制频谱翘曲的程度，改变说话人的音色，默认58',
     * ]
     * @return mixed|string
     */
    public function tts(array $params)
    {
        $apiUri = '/aai/aai_tts';
        return $this->baseAPi($apiUri, $params);
    }


}