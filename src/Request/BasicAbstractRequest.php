<?php

namespace Omnipay\StarSaas\Request;

use Omnipay\Common\Message\AbstractRequest;
use Omnipay\StarSaas\Structs\OrderStruct;

abstract class BasicAbstractRequest extends AbstractRequest
{
    // -----------------通用部分-----------------
    /**
     * @description 订单实例类
     * @author      ylw <767502630@qq.com>
     * @var OrderStruct
     */
    protected $orderStruct;

    /**
     * @description 配置设置，网关那边设置好后会自动注入进来，无需调用
     * @author      ylw <767502630@qq.com>
     *
     * @param array $configArr
     */
    public function setConfig(array $configArr = [])
    {
        $this->setParameter('config', $configArr);
    }

    /**
     * @description 获取配置参数
     * @author      ylw <767502630@qq.com>
     *
     * @param string $key
     *
     * @return mixed|null
     */
    public function getConfig(string $key = '')
    {
        $configs = $this->getParameter('config');
        return empty($key) ? $configs : ($configs[$key] ?? null);
    }

    /**
     * @description 配置参数，网关那边设置好后会自动注入进来
     * @author      ylw <767502630@qq.com>
     *
     * @param array $configArr
     */
    public function setParams(array $params = [])
    {
        $this->setParameter('params', $params);
    }

    /**
     * @description 获取基本参数
     * @author      ylw <767502630@qq.com>
     *
     * @param string $key
     *
     * @return mixed|null
     */
    public function getParams(string $key = '')
    {
        $params = $this->getParameter('params');
        return empty($key) ? $params : ($params[$key] ?? null);
    }

    /**
     * @description 获取是否是沙盒环境
     * @author      ylw <767502630@qq.com>
     * @return false|mixed
     */
    public function getIsSandbox()
    {
        return $this->getConfig('is_sandbox') ?? false;
    }
    // -----------------通用部分结束-----------------
    // -----------------Star-Saas自定义部分-----------------
    /**
     * @description 请求接口名
     * @author      ylw <767502630@qq.com>
     * @var string
     */
    protected $host     = 'secure-checkout.tradingpassionltd.com';
    protected $endPoint = '';

    /**
     * @description 必须参数
     * @author      ylw <767502630@qq.com>
     * @var string[]
     */
    protected $reqiredParams = [
        'merchant_id',
        'account_id',
    ];

    /**
     * @description 可选参数
     * @author      ylw <767502630@qq.com>
     * @var array
     */
    protected $normalParams = [];

    /**
     * @description 加密参数
     * @author      ylw <767502630@qq.com>
     * @var string[]
     */
    protected $encryptParams = [
        'merchant_id',
        'account_id',
    ];

    /**
     * @description 写下注释
     * @author      ylw <767502630@qq.com>
     * @return string
     */
    public function getRequestUrl()
    {
        return implode('', [
            'https://',
            $this->getIsSandbox() ? 'test-' : '',
            $this->host . '/',
            $this->getVersionId() . '/',
            $this->endPoint,
        ]);
    }

    /**
     * @description 获取接口版本
     * @author      ylw <767502630@qq.com>
     * @return mixed|string
     */
    public function getVersionId()
    {
        return $this->getConfig('version_id') ?? 'v1';
    }

    /**
     * @description 密钥获取
     * @author      ylw <767502630@qq.com>
     * @return mixed|null
     */
    public function getSecretKey()
    {
        return $this->getConfig('secret_key');
    }

    /**
     * @description 请求前的参数格式校验以及其他准备
     * @author      Omnipay
     * @return array
     */
    public function getData()
    {
        $data        = [];
        $totalParams = $this->reqiredParams + $this->normalParams;
        foreach ($totalParams as $key) {
            $param = $this->getParams($key);
            if (!is_null($param)) {
                $data[$key] = $this->getParams($key);
            }
        }
        // 加密流程
        $encryptData = [];
        foreach ($this->encryptParams as $key) {
            $encryptData[$key] = $this->getParams($key);
        }
        $encryptData['sign_key'] = $this->getSecretKey();
        $encryptStr              = implode('', $encryptData);
        $data['encryption_data'] = hash("sha256", $encryptStr);
        return $data;
    }

    /**
     * @description 请求
     * @author      ylw <767502630@qq.com>
     *
     * @param $requestParam
     *
     * @return array
     */
    public function doRequest($requestParam): array
    {
        $data         = http_build_query($requestParam);
        $response     = $this->httpClient->request('POST', $this->getRequestUrl(), [
            'Content-type' => 'application/x-www-form-urlencoded',
            'Accept'       => 'application/xml',
        ], $data);
        $responseData = $response->getBody()->getContents();
        var_dump($responseData);
        exit;
        $response = simplexml_load_string($responseData, 'SimpleXMLElement', LIBXML_NOCDATA);
        $result   = json_decode(json_encode($response), true);
        return $result;
    }

    // -----------------Star-Saas自定义部分结束-----------------
}