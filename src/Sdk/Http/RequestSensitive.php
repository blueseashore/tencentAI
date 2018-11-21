<?php
/**
 * 敏感信息审核接口
 *
 * User: kendo    Date: 2018/11/21
 */

namespace TencentAi\Http;

use TencentAi\Core\RequestBase;

class RequestSensitive extends RequestBase
{
    /**
     * 暴恐识别
     *      https://ai.qq.com/doc/imageterrorism.shtml
     *      识别一个图像是否为暴恐图像
     *
     * @param array $params [
     *      'app_id' => '应用标识（AppId）',
     *      'time_stamp' => '请求时间戳（秒级）',
     *      'nonce_str' => '随机字符串，非必传，不传该值时，做签名时会自动生成',
     *      'sign' => '签名信息，详见接口鉴权，无需传入',
     *      'image' => '待识别图片的base64编码数据,原图大小上限1MB,支持JPG,PNG,BMP格式,非必传，和image_url必须至少提供一个',
     *      'image_url' => '待识别图片url，非必传，和image必须至少提供一个',
     * ]
     * @return mixed
     */
    public function terrorism(array $params)
    {
        $apiUri = '/image/image_terrorism';
        return $this->baseAPi($apiUri, $params);
    }

    /**
     * 智能鉴黄
     *      https://ai.qq.com/doc/jianhuang.shtml
     *      识别一个图像是否为色情图像
     *
     * @param array $params [
     *      'app_id' => '应用标识（AppId）',
     *      'time_stamp' => '请求时间戳（秒级）',
     *      'nonce_str' => '随机字符串，非必传，不传该值时，做签名时会自动生成',
     *      'sign' => '签名信息，详见接口鉴权，无需传入',
     *      'image' => '待识别图片的base64编码数据,原图大小上限1MB,支持JPG,PNG,BMP格式,非必传，和image_url必须至少提供一个',
     *      'image_url' => '待识别图片url，非必传，和image必须至少提供一个',
     * ]
     * @return mixed
     */
    public function porn(array $params)
    {
        $apiUri = '/vision/vision_porn';
        return $this->baseAPi($apiUri, $params);
    }

    /**
     * 音频鉴黄
     *      https://ai.qq.com/doc/aaievilaudio.shtml
     *      识别一段音频是否为色情音频
     *
     * @param array $params [
     *      'app_id' => '应用标识（AppId）',
     *      'time_stamp' => '请求时间戳（秒级）',
     *      'nonce_str' => '随机字符串，非必传，不传该值时，做签名时会自动生成',
     *      'sign' => '签名信息，详见接口鉴权，无需传入',
     *      'speech_id' => '语音唯一标识',
     *      'speech_url' => '音频URL，建议音频时长不超过3分钟',
     * ]
     * @return mixed
     */
    public function evilaudio(array $params)
    {
        $apiUri = '/aai/aai_evilaudio';
        return $this->baseAPi($apiUri, $params);
    }
}