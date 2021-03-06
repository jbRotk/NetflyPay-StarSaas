<?php

namespace Omnipay\StarSaas\Response;

use Omnipay\Common\Message\AbstractResponse;

/**
 * @description 响应抽象类
 * @author      ylw <767502630@qq.com>
 * @package     Omnipay\StarSaas\Response
 */
class BasicAbstractResponse extends AbstractResponse
{
    /**
     * @description 获取请求响应码
     * @author      ylw <767502630@qq.com>
     * @return int
     */
    public function getCode()
    {
        return 200;
    }

    /**
     * @description 接口是否请求成功
     * @author      ylw <767502630@qq.com>
     * @return bool
     */
    public function isSuccessful()
    {
        // 根据返回的状态码判断是否成功还是失败
        return true;
    }

    /**
     * @description 是否重定向
     * @author      ylw <767502630@qq.com>
     * @return false
     */
    public function isRedirect()
    {
        return false;
    }

    /**
     * @description 获取重定向地址
     * @author      ylw <767502630@qq.com>
     * @return string|null
     */
    public function getRedirectUrl()
    {
        return parent::getRedirectUrl(); // TODO: Change the autogenerated stub
    }

}