<?php
/**
 * 基础文本分析接口
 *
 * User: kendo    Date: 2018/11/21
 */

namespace TencentAi\Http;

use TencentAi\Core\RequestBase;

class RequestTextAnalysis extends RequestBase
{
    /**
     * 分词
     *      https://ai.qq.com/doc/nlpbase.shtml
     *      对文本进行智能分词识别，支持基础词与混排词粒度
     *
     * @param array $params [
     *      'app_id' => '应用标识（AppId）',
     *      'time_stamp' => '请求时间戳（秒级）',
     *      'nonce_str' => '随机字符串，非必传，不传该值时，做签名时会自动生成',
     *      'sign' => '签名信息，详见接口鉴权，无需传入',
     *      'text' => '待分析文本,GBK编码，非空且长度上限1024字节',
     * ]
     * @return mixed|string
     */
    public function wordSeg(array $params)
    {
        $apiUri = '/nlp/nlp_wordseg';
        return $this->baseAPi($apiUri, $params);
    }

    /**
     * 词性
     *      https://ai.qq.com/doc/nlp_wordpos.shtml
     *      对文本进行分词，同时为每个分词标注正确的词性
     *
     * @param array $params [
     *      'app_id' => '应用标识（AppId）',
     *      'time_stamp' => '请求时间戳（秒级）',
     *      'nonce_str' => '随机字符串，非必传，不传该值时，做签名时会自动生成',
     *      'sign' => '签名信息，详见接口鉴权，无需传入',
     *      'text' => '待分析文本,GBK编码，非空且长度上限1024字节',
     * ]
     * @return mixed|string
     */
    public function wordPos(array $params)
    {
        $apiUri = '/nlp/nlp_wordpos';
        return $this->baseAPi($apiUri, $params);
    }

    /**
     * 专有名词
     *      https://ai.qq.com/doc/nlp_wordner.shtml
     *      对文本进行专有名词的分词识别，找出文本中的专有名词
     *
     * @param array $params [
     *      'app_id' => '应用标识（AppId）',
     *      'time_stamp' => '请求时间戳（秒级）',
     *      'nonce_str' => '随机字符串，非必传，不传该值时，做签名时会自动生成',
     *      'sign' => '签名信息，详见接口鉴权，无需传入',
     *      'text' => '待分析文本,GBK编码，非空且长度上限1024字节',
     * ]
     * @return mixed|string
     */
    public function wordNer(array $params)
    {
        $apiUri = '/nlp/nlp_wordner';
        return $this->baseAPi($apiUri, $params);
    }

    /**
     * 同义词
     *      https://ai.qq.com/doc/nlp_wordsyn.shtml
     *      识别文本中存在同义词的分词，并返回相应的同义词
     *
     * @param array $params [
     *      'app_id' => '应用标识（AppId）',
     *      'time_stamp' => '请求时间戳（秒级）',
     *      'nonce_str' => '随机字符串，非必传，不传该值时，做签名时会自动生成',
     *      'sign' => '签名信息，详见接口鉴权，无需传入',
     *      'text' => '待分析文本,GBK编码，非空且长度上限1024字节',
     * ]
     * @return mixed|string
     */
    public function wordSyn(array $params)
    {
        $apiUri = '/nlp/nlp_wordsyn';
        return $this->baseAPi($apiUri, $params);
    }

    /**
     * 意图成分
     *      https://ai.qq.com/doc/nlpsem.shtml
     *      对文本进行意图识别，快速找出意图及上下文成分
     *
     * @param array $params [
     *      'app_id' => '应用标识（AppId）',
     *      'time_stamp' => '请求时间戳（秒级）',
     *      'nonce_str' => '随机字符串，非必传，不传该值时，做签名时会自动生成',
     *      'sign' => '签名信息，详见接口鉴权，无需传入',
     *      'text' => '待分析文本,GBK编码，非空且长度上限1024字节',
     * ]
     * @return mixed|string
     */
    public function wordCom(array $params)
    {
        $apiUri = '/nlp/nlp_wordcom';
        return $this->baseAPi($apiUri, $params);
    }

    /**
     * 情感分析
     *      https://ai.qq.com/doc/nlpemo.shtml
     *      对文本进行情感分析，快速判断情感倾向（正面或负面）
     *
     * @param array $params [
     *      'app_id' => '应用标识（AppId）',
     *      'time_stamp' => '请求时间戳（秒级）',
     *      'nonce_str' => '随机字符串，非必传，不传该值时，做签名时会自动生成',
     *      'sign' => '签名信息，详见接口鉴权，无需传入',
     *      'text' => '待分析文本,GBK编码，非空且长度上限1024字节',
     * ]
     * @return mixed|string
     */
    public function textPolar(array $params)
    {
        $apiUri = '/nlp/nlp_textpolar';
        return $this->baseAPi($apiUri, $params);
    }
}