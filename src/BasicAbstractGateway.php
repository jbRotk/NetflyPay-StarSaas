<?php

namespace Omnipay\StarSaas;

use Omnipay\Common\AbstractGateway;

/**
 * @description 网关抽象类
 * @author      ylw <767502630@qq.com>
 * @package     Omnipay\StarSaas
 */
abstract class BasicAbstractGateway extends AbstractGateway
{
    /**
     * @description 支付配置设置
     *
     * @param array $configArr
     */
    public function config(array $configArr = [])
    {
        return $this->setParameter('config', $configArr);
    }

    /**
     * @description 参数组装，配置参数和普通参数分开
     * @author      ylw <767502630@qq.com>
     *
     * @param $parameters
     *
     * @return array
     */
    public function generateParams($parameters)
    {
        $configs    = $this->getParameter('config');
        $parameters += [
            'merchant_id' => $configs['merchant_id'],
            'account_id'  => $configs['account_id'],
        ];
        return ['config' => $this->getParameter('config'), 'params' => $parameters];
    }

    /**
     * @description 创建订单接口
     *
     * @param array $parameters
     *
     * @return \Omnipay\StarSaas\Request\CompleteOrderRequest
     */
    public function purchase(array $parameters)
    {
        return $this->createRequest('\Omnipay\StarSaas\Request\CreateOrderRequest', $this->generateParams($parameters));
    }

    /**
     * 完成订单接口
     *
     * @param array $parameters
     *
     * @return \Omnipay\StarSaas\Request\CompleteOrderRequest
     */
    public function completePurchase($parameters = [])
    {
        return $this->createRequest('\Omnipay\StarSaas\Request\CompleteOrderRequest', $this->generateParams($parameters));
    }

    /**
     * 订单查询接口
     *
     * @param array $parameters
     *
     * @return \Omnipay\StarSaas\Request\QueryOrderRequest
     */
    public function query($parameters = [])
    {
        return $this->createRequest('\Omnipay\StarSaas\Request\QueryOrderRequest', $this->generateParams($parameters));
    }

}