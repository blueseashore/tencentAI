<?php
/**
 * 人脸识别接口
 *
 * User: kendo    Date: 2018/11/21
 */

namespace TencentAi\Http;

use TencentAi\Core\RequestBase;

class RequestFace extends RequestBase
{
    /**
     * 人脸检测与分析
     *      https://ai.qq.com/doc/detectface.shtml
     *      识别上传图像上面的人脸信息
     *
     * @param array $params [
     *      'app_id' => '应用标识（AppId）',
     *      'time_stamp' => '请求时间戳（秒级）',
     *      'nonce_str' => '随机字符串，非必传，不传该值时，做签名时会自动生成',
     *      'sign' => '签名信息，详见接口鉴权，无需传入',
     *      'image' => '待识别图片的base64编码数据,原图大小上限1MB,支持JPG,PNG,BMP格式',
     *      'mode' => '检测模式，0-正常，1-大脸模式（默认1）',
     * ]
     * @return mixed|string
     */
    public function detectFace(array $params)
    {
        $apiUri = '/face/face_detectface';
        return $this->baseAPi( $apiUri, $params);
    }

    /**
     * 多人脸检测
     *      https://ai.qq.com/doc/detectmultiface.shtml
     *      识别上传图像上面的人脸位置，支持多人脸识别
     *
     * @param array $params [
     *      'app_id' => '应用标识（AppId）',
     *      'time_stamp' => '请求时间戳（秒级）',
     *      'nonce_str' => '随机字符串，非必传，不传该值时，做签名时会自动生成',
     *      'sign' => '签名信息，详见接口鉴权，无需传入',
     *      'image' => '待识别图片的base64编码数据,原图大小上限1MB,支持JPG,PNG,BMP格式',
     * ]
     * @return mixed|string
     */
    public function detectMultiFace(array $params)
    {
        $apiUri = '/face/face_detectmultiface';
        return $this->baseAPi( $apiUri, $params);
    }

    /**
     * 跨年龄人脸识别
     *      https://ai.qq.com/doc/detectcrossageface.shtml
     *      上传两张人脸照，返回最相似的两张人脸及相似度
     *
     * @param array $params [
     *      'app_id' => '应用标识（AppId）',
     *      'time_stamp' => '请求时间戳（秒级）',
     *      'nonce_str' => '随机字符串，非必传，不传该值时，做签名时会自动生成',
     *      'source_image' => '原始图片的base64编码数据（原图大小上限1MB）',
     *      'target_image' => '原始图片的base64编码数据（原图大小上限1MB)',
     * ]
     * @return mixed|string
     */
    public function detectCrossAgeFace(array $params)
    {
        $apiUri = '/face/face_detectcrossageface';
        return $this->baseAPi( $apiUri, $params);
    }

    /**
     * 五官定位
     *      https://ai.qq.com/doc/faceshape.shtml
     *      对请求图片进行五官定位
     *
     * @param array $params [
     *      'app_id' => '应用标识（AppId）',
     *      'time_stamp' => '请求时间戳（秒级）',
     *      'nonce_str' => '随机字符串，非必传，不传该值时，做签名时会自动生成',
     *      'sign' => '签名信息，详见接口鉴权，无需传入',
     *      'image' => '待识别图片的base64编码数据,原图大小上限1MB,支持JPG,PNG,BMP格式',
     *      'mode' => '检测模式，0-正常，1-大脸模式（默认1）',
     * ]
     * @return mixed|string
     */
    public function faceShape(array $params)
    {
        $apiUri = '/face/face_faceshape';
        return $this->baseAPi( $apiUri, $params);
    }

    /**
     * 人脸对比
     *      https://ai.qq.com/doc/facecompare.shtml
     *      对请求图片进行人脸对比
     *
     * @param array $params [
     *      'app_id' => '应用标识（AppId）',
     *      'time_stamp' => '请求时间戳（秒级）',
     *      'nonce_str' => '随机字符串，非必传，不传该值时，做签名时会自动生成',
     *      'image_a' => '原始图片的base64编码数据（原图大小上限1MB，支持JPG、PNG、BMP格式）',
     *      'image_b' => '原始图片的base64编码数据（原图大小上限1MB，支持JPG、PNG、BMP格式）',
     * ]
     * @return mixed|string
     */
    public function faceCompare(array $params)
    {
        $apiUri = '/face/face_facecompare';
        return $this->baseAPi( $apiUri, $params);
    }

    /******************人脸搜索-START**********************/

    /**
     * 人脸搜索
     *      https://ai.qq.com/doc/faceidentify.shtml
     *      对请求图片中的人脸进行搜索
     *
     * @param array $params [
     *      'app_id' => '应用标识（AppId）',
     *      'time_stamp' => '请求时间戳（秒级）',
     *      'nonce_str' => '随机字符串，非必传，不传该值时，做签名时会自动生成',
     *      'sign' => '签名信息，详见接口鉴权，无需传入',
     *      'image' => '待识别图片的base64编码数据,原图大小上限1MB,支持JPG,PNG,BMP格式',
     *      'group_id' => '候选人组ID（个体创建时设定）',
     *      'topn' => '返回的候选人个数（默认9个）',
     * ]
     * @return mixed|string
     */
    public function faceIdentify(array $params)
    {
        $apiUri = '/face/face_faceidentify';
        return $this->baseAPi( $apiUri, $params);
    }

    /**
     * 个体创建
     *      https://ai.qq.com/doc/newperson.shtml
     *      创建一个个体（Person）
     *
     * @param array $params [
     *      'app_id' => '应用标识（AppId）',
     *      'time_stamp' => '请求时间戳（秒级）',
     *      'nonce_str' => '随机字符串，非必传，不传该值时，做签名时会自动生成',
     *      'sign' => '签名信息，详见接口鉴权，无需传入',
     *      'image' => '个体图片的base64编码数据,原图大小上限1MB,支持JPG,PNG,BMP格式',
     *      'group_ids' => '候选人组ID（个体创建时设定）',
     *      'person_id' => '指定的个体（Person）ID',
     *      'person_name' => '名字',
     *      'tag' => '备注信息,非必传',
     * ]
     * @return mixed|string
     */
    public function faceNewPerson(array $params)
    {
        $apiUri = '/face/face_newperson';
        return $this->baseAPi( $apiUri, $params);
    }

    /**
     * 删除个体
     *      https://ai.qq.com/doc/delperson.shtml
     *      删除一个个体（Person）
     *
     * @param array $params [
     *      'app_id' => '应用标识（AppId）',
     *      'time_stamp' => '请求时间戳（秒级）',
     *      'nonce_str' => '随机字符串，非必传，不传该值时，做签名时会自动生成',
     *      'sign' => '签名信息，详见接口鉴权，无需传入',
     *      'person_id' => '需要删除的个体（Person）ID',
     * ]
     * @return mixed|string
     */
    public function faceDelPerson(array $params)
    {
        $apiUri = '/face/face_delperson';
        return $this->baseAPi( $apiUri, $params);
    }

    /**
     * 增加人脸
     *      https://ai.qq.com/doc/addface.shtml
     *      将一组人脸（Face）加入到一个个体（Person）中
     *
     * @param array $params [
     *      'app_id' => '应用标识（AppId）',
     *      'time_stamp' => '请求时间戳（秒级）',
     *      'nonce_str' => '随机字符串，非必传，不传该值时，做签名时会自动生成',
     *      'sign' => '签名信息，详见接口鉴权，无需传入',
     *      'images' => '多个人脸图片之间用“|”分隔,原图大小上限1MB,支持JPG,PNG,BMP格式',
     *      'person_id' => '指定的个体（Person）ID',
     *      'tag' => '备注信息,非必传',
     * ]
     * @return mixed|string
     */
    public function faceAddFace(array $params)
    {
        $apiUri = '/face/face_addface';
        return $this->baseAPi( $apiUri, $params);
    }

    /**
     * 删除人脸
     *      https://ai.qq.com/doc/delface.shtml
     *      从一个个体（Person）中删除一组人脸（Face）
     *
     * @param array $params [
     *      'app_id' => '应用标识（AppId）',
     *      'time_stamp' => '请求时间戳（秒级）',
     *      'nonce_str' => '随机字符串，非必传，不传该值时，做签名时会自动生成',
     *      'sign' => '签名信息，详见接口鉴权，无需传入',
     *      'person_id' => '指定的个体（Person）ID',
     *      'face_ids' => '需要删除的人脸（Face）ID（多个之间用“\',
     * ]
     * @return mixed|string
     */
    public function faceDelFace(array $params)
    {
        $apiUri = '/face/face_delface';
        return $this->baseAPi( $apiUri, $params);
    }

    /**
     * 设置信息
     *      https://ai.qq.com/doc/setinfo.shtml
     *      设置个体（Person）的名字或备注
     *
     * @param array $params [
     *      'app_id' => '应用标识（AppId）',
     *      'time_stamp' => '请求时间戳（秒级）',
     *      'nonce_str' => '随机字符串，非必传，不传该值时，做签名时会自动生成',
     *      'sign' => '签名信息，详见接口鉴权，无需传入',
     *      'person_id' => '指定的个体（Person）ID',
     *      'person_name' => '新的名字,非空，非必传',
     *      'tag' => '备注信息非空，非必传',
     * ]
     * @return mixed|string
     */
    public function faceSetInfo(array $params)
    {
        $apiUri = '/face/face_setinfo';
        return $this->baseAPi( $apiUri, $params);
    }

    /**
     * 获取信息
     *      https://ai.qq.com/doc/getinfo.shtml
     *      获取一个个体（Person）的信息
     *
     * @param array $params [
     *      'app_id' => '应用标识（AppId）',
     *      'time_stamp' => '请求时间戳（秒级）',
     *      'nonce_str' => '随机字符串，非必传，不传该值时，做签名时会自动生成',
     *      'sign' => '签名信息，详见接口鉴权，无需传入',
     *      'person_id' => '需要查询的个体（Person）ID',
     * ]
     * @return mixed|string
     */
    public function faceGetInfo(array $params)
    {
        $apiUri = '/face/face_getinfo';
        return $this->baseAPi( $apiUri, $params);
    }

    /**
     * 获取组列表
     *      https://ai.qq.com/doc/getgroupids.shtml
     *      获取应用下所有的组（Group）ID列表
     *
     * @param array $params [
     *      'app_id' => '应用标识（AppId）',
     *      'time_stamp' => '请求时间戳（秒级）',
     *      'nonce_str' => '随机字符串，非必传，不传该值时，做签名时会自动生成',
     *      'sign' => '签名信息，详见接口鉴权，无需传入',
     * ]
     * @return mixed|string
     */
    public function faceGetGroupIds(array $params)
    {
        $apiUri = '/face/face_getgroupids';
        return $this->baseAPi( $apiUri, $params);
    }

    /**
     * 获取个体列表
     *      https://ai.qq.com/doc/getpersonids.shtml
     *      获取一个组（Group）中的所有个体（Person）ID
     *
     * @param array $params [
     *      'app_id' => '应用标识（AppId）',
     *      'time_stamp' => '请求时间戳（秒级）',
     *      'nonce_str' => '随机字符串，非必传，不传该值时，做签名时会自动生成',
     *      'sign' => '签名信息，详见接口鉴权，无需传入',
     *      'group_id' => '组（Group）ID',
     * ]
     * @return mixed|string
     */
    public function faceGetPersonIds(array $params)
    {
        $apiUri = '/face/face_getpersonids';
        return $this->baseAPi( $apiUri, $params);
    }

    /**
     * 获取人脸列表
     *      https://ai.qq.com/doc/getfaceids.shtml
     *      根据个体（Person）ID 获取人脸（Face）ID列表
     *
     * @param array $params [
     *      'app_id' => '应用标识（AppId）',
     *      'time_stamp' => '请求时间戳（秒级）',
     *      'nonce_str' => '随机字符串，非必传，不传该值时，做签名时会自动生成',
     *      'sign' => '签名信息，详见接口鉴权，无需传入',
     *      'person_id' => '个体（Person）ID',
     * ]
     * @return mixed|string
     */
    public function faceGetFaceIds(array $params)
    {
        $apiUri = '/face/face_getfaceids';
        return $this->baseAPi( $apiUri, $params);
    }

    /**
     * 获取人脸信息
     *      https://ai.qq.com/doc/getfaceids.shtml
     *      根据人脸（Face）ID 获取人脸（Face）信息
     *
     * @param array $params [
     *      'app_id' => '应用标识（AppId）',
     *      'time_stamp' => '请求时间戳（秒级）',
     *      'nonce_str' => '随机字符串，非必传，不传该值时，做签名时会自动生成',
     *      'sign' => '签名信息，详见接口鉴权，无需传入',
     *      'face_id' => '人脸（Face） ID',
     * ]
     * @return mixed|string
     */
    public function faceGetFaceInfo(array $params)
    {
        $apiUri = '/face/face_getfaceinfo';
        return $this->baseAPi( $apiUri, $params);
    }

    /******************人脸搜索-END**********************/


}