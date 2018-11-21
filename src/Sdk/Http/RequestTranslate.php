<?php
/**
 * 机器翻译
 *
 * User: kendo    Date: 2018/11/21
 */

namespace TencentAi\Http;

use TencentAi\Core\RequestBase;

class RequestTranslate extends RequestBase
{
    /**
     * 文本翻译（AI Lab）
     *      https://ai.qq.com/doc/nlptrans.shtml
     *      对文本进行翻译，支持多种语言之间互译
     *
     * @param array $params [
     *      'app_id' => '应用标识（AppId）',
     *      'time_stamp' => '请求时间戳（秒级）',
     *      'nonce_str' => '随机字符串，非必传，不传该值时，做签名时会自动生成',
     *      'sign' => '签名信息，详见接口鉴权，无需传入',
     *      'type' => '翻译类型，默认为0，详细见下文',
     *      'text' => '待翻译文本',
     * ]
     * @return mixed|string
     */
    public function textTrans(array $params)
    {
        $apiUri = '/nlp/nlp_texttrans';
        return $this->baseAPi($apiUri, $params);
    }

    /**
     * 文本翻译（翻译君）
     *      https://ai.qq.com/doc/nlptrans.shtml
     *      对文本进行翻译，支持多种语言之间互译
     *
     * @param array $params [
     *      'app_id' => '应用标识（AppId）',
     *      'time_stamp' => '请求时间戳（秒级）',
     *      'nonce_str' => '随机字符串，非必传，不传该值时，做签名时会自动生成',
     *      'sign' => '签名信息，详见接口鉴权，无需传入',
     *      'type' => '翻译类型，默认为0，详细见下文',
     *      'text' => '待翻译文本',
     * ]
     * @return mixed|string
     */
    public function textTranslate(array $params)
    {
        $apiUri = '/nlp/nlp_texttranslate';
        return $this->baseAPi($apiUri, $params);
    }

    /**
     * 语音翻译
     *      https://ai.qq.com/doc/speechtranslate.shtml
     *      识别出音频中的文字，并进行翻译
     *
     * @param array $params [
     *      'app_id' => '应用标识（AppId）',
     *      'time_stamp' => '请求时间戳（秒级）',
     *      'nonce_str' => '随机字符串，非必传，不传该值时，做签名时会自动生成',
     *      'sign' => '签名信息，详见接口鉴权，无需传入',
     *      'format' => '语音压缩格式编码，定义见下文描述',
     *      'seq' => '语音分片所在语音流的偏移量（字节',
     *      'end' => '是否结束分片标识，定义见下文描述',
     *      'session_id' => '语音唯一标识（同一应用内）',
     *      'speech_chunk' => '待识别语音分片',
     *      'source' => '源语言缩写，详细见下文',
     *      'target' => '目标语言缩写，详细见下文',
     * ]
     * @return mixed|string
     */
    public function speechTranslate(array $params)
    {
        $apiUri = '/nlp/nlp_speechtranslate';
        return $this->baseAPi($apiUri, $params);
    }

    /**
     * 图片翻译
     *      https://ai.qq.com/doc/imagetranslate.shtml
     *      识别图片中的文字，并进行翻译
     *
     * @param array $params [
     *      'app_id' => '应用标识（AppId）',
     *      'time_stamp' => '请求时间戳（秒级）',
     *      'nonce_str' => '随机字符串，非必传，不传该值时，做签名时会自动生成',
     *      'sign' => '签名信息，详见接口鉴权，无需传入',
     *      'image' => '待识别图片',
     *      'session_id' => '一次请求ID',
     *      'scene' => '识别类型（word-单词识别，doc-文档识别）',
     *      'source' => '源语言缩写，详细见下文',
     *      'target' => '目标语言缩写，详细见下文',
     * ]
     * @return mixed|string
     */
    public function imageTranslate(array $params)
    {
        $apiUri = '/nlp/nlp_imagetranslate';
        return $this->baseAPi($apiUri, $params);
    }

    /**
     * 语种识别
     *      https://ai.qq.com/doc/textdetect.shtml
     *      对文本进行翻译，支持多种语言之间互译
     *
     * @param array $params [
     *      'app_id' => '应用标识（AppId）',
     *      'time_stamp' => '请求时间戳（秒级）',
     *      'nonce_str' => '随机字符串，非必传，不传该值时，做签名时会自动生成',
     *      'sign' => '签名信息，详见接口鉴权，无需传入',
     *      'text' => '待识别文本',
     *      'candidate_langs' => '备选语言缩写，详细见下文（如不填则自动识别）',
     *      'force' => '是否强制从候选语言中选择（只对二选一有效）',
     * ]
     * @return mixed|string
     */
    public function textDetect(array $params)
    {
        $apiUri = '/nlp/nlp_textdetect';
        return $this->baseAPi($apiUri, $params);
    }
}