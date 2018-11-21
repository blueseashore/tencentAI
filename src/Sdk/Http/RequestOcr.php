<?php
/**
 * OCR接口类   https://ai.qq.com/doc/ocridcardocr.shtml
 *      该接口可以直接使用【baseAPi】进行数据请求
 *      或者针对于某一特定的OCR请求，分别访问不同的方法
 *
 * User: kendo    Date: 2018/11/21
 */

namespace TencentAi\Http;

use TencentAi\Core\RequestBase;

class RequestOcr extends RequestBase
{
    /**
     * 身份证OCR
     *      识别身份证图像上面的详细身份信息
     *
     * @param array $params [
     *      'app_id' => '应用标识（AppId）',
     *      'time_stamp' => '请求时间戳（秒级）',
     *      'nonce_str' => '随机字符串，非必传，不传该值时，做签名时会自动生成',
     *      'sign' => '签名信息，详见接口鉴权，无需传入',
     *      'image' => '待识别图片的base64编码数据,原图大小上限1MB,支持JPG,PNG,BMP格式',
     *      'card_type' => '身份证图片类型，0-正面，1-反面',
     * ]
     * @return mixed|string
     */
    public function idCardOcr(array $params)
    {
        $apiUri = '/ocr/ocr_idcardocr';
        return $this->baseAPi($apiUri, $params);
    }

    /**
     * 行驶证驾驶证OCR
     *      识别行驶证或驾驶证图像上面的字段信息
     *
     * @param array $params [
     *      'app_id' => '应用标识（AppId),非必传',
     *      'time_stamp' => '请求时间戳（秒级）',
     *      'nonce_str' => '随机字符串，非必传，不传该值时，做签名时会自动生成',
     *      'sign' => '签名信息，详见接口鉴权，无需传入',
     *      'image' => '待识别图片的base64编码数据,原图大小上限1MB,支持JPG,PNG,BMP格式',
     *      'type' => '识别类型，0-行驶证识别，1-驾驶证识别',
     * ]
     * @return mixed|string
     */
    public function driverLicenseOcr(array $params)
    {
        $apiUri = '/ocr/ocr_driverlicenseocr';
        return $this->baseAPi($apiUri, $params);
    }

    /**
     * 通用OCR
     *      识别上传图像上面的字段信息
     *
     * @param array $params [
     *      'app_id' => '应用标识（AppId),非必传',
     *      'time_stamp' => '请求时间戳（秒级）',
     *      'nonce_str' => '随机字符串，非必传，不传该值时，做签名时会自动生成',
     *      'sign' => '签名信息，详见接口鉴权，无需传入',
     *      'image' => '待识别图片的base64编码数据,原图大小上限1MB,支持JPG,PNG,BMP格式',
     * ]
     * @return mixed|string
     */
    public function generalOcr(array $params)
    {
        $apiUri = '/ocr/ocr_generalocr';
        return $this->baseAPi($apiUri, $params);
    }

    /**
     * 营业执照OCR
     *    识别营业执照上面的字段信息
     *
     * @param array $params [
     *      'app_id' => '应用标识（AppId),非必传',
     *      'time_stamp' => '请求时间戳（秒级）',
     *      'nonce_str' => '随机字符串，非必传，不传该值时，做签名时会自动生成',
     *      'sign' => '签名信息，详见接口鉴权，无需传入',
     *      'image' => '待识别图片的base64编码数据,原图大小上限1MB,支持JPG,PNG,BMP格式',
     * ]
     * @return mixed|string
     */
    public function bizLicenseOcr(array $params)
    {
        $apiUri = '/ocr/ocr_bizlicenseocr';
        return $this->baseAPi($apiUri, $params);
    }

    /**
     * 银行卡OCR
     *      识别银行卡上面的字段信息
     *
     * @param array $params [
     *      'app_id' => '应用标识（AppId),非必传',
     *      'time_stamp' => '请求时间戳（秒级）',
     *      'nonce_str' => '随机字符串，非必传，不传该值时，做签名时会自动生成',
     *      'sign' => '签名信息，详见接口鉴权，无需传入',
     *      'image' => '待识别图片的base64编码数据,原图大小上限1MB,支持JPG,PNG,BMP格式',
     * ]
     * @return mixed|string
     */
    public function creditCardOcr(array $params)
    {
        $apiUri = '/ocr/ocr_creditcardocr';
        return $this->baseAPi($apiUri, $params);
    }

    /**
     * 手写体OCR
     *     检测和识别图像上面手写体的字段信息
     *
     * @param array $params [
     *      'app_id' => '应用标识（AppId),非必传',
     *      'time_stamp' => '请求时间戳（秒级）',
     *      'nonce_str' => '随机字符串，非必传，不传该值时，做签名时会自动生成',
     *      'sign' => '签名信息，详见接口鉴权，无需传入',
     *      'image' => '待识别图片的base64编码数据,原图大小上限1MB,支持JPG,PNG,BMP格式',
     * ]
     * @return mixed|string
     */
    public function handWritingOcr(array $params)
    {
        $apiUri = '/ocr/ocr_handwritingocr';
        return $this->baseAPi($apiUri, $params);
    }

    /**
     * 车牌OCR
     *     识别车牌上面的字段信息
     *
     * @param array $params [
     *      'app_id' => '应用标识（AppId),非必传',
     *      'time_stamp' => '请求时间戳（秒级）',
     *      'nonce_str' => '随机字符串，非必传，不传该值时，做签名时会自动生成',
     *      'sign' => '签名信息，详见接口鉴权，无需传入',
     *      'image' => '待识别图片的base64编码数据,原图大小上限1MB,支持JPG,PNG,BMP格式',
     * ]
     * @return mixed|string
     */
    public function plateOcr(array $params)
    {
        $apiUri = '/ocr/ocr_plateocr';
        return $this->baseAPi($apiUri, $params);
    }

    /**
     * 名片OCR
     *     识别名片图像上面的字段信息
     *
     * @param array $params [
     *      'app_id' => '应用标识（AppId),非必传',
     *      'time_stamp' => '请求时间戳（秒级）',
     *      'nonce_str' => '随机字符串，非必传，不传该值时，做签名时会自动生成',
     *      'sign' => '签名信息，详见接口鉴权，无需传入',
     *      'image' => '待识别图片的base64编码数据,原图大小上限1MB,支持JPG,PNG,BMP格式',
     * ]
     * @return mixed|string
     */
    public function bcOct(array $params)
    {
        $apiUri = '/ocr/ocr_bcocr';
        return $this->baseAPi($apiUri, $params);
    }
}