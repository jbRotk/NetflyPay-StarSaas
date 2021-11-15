<?php

namespace Omnipay\StarSaas;

/**
 * @description 支付网关入口
 * @author      ylw <767502630@qq.com>
 * @package     Omnipay\StarSaas
 */
class Gateway extends BasicAbstractGateway
{
    /**
     * @description 对应的支付名称
     * @author      ylw <767502630@qq.com>
     * @return string
     */
    public function getName()
    {
        return 'StarSaas';
    }

    /**
     * @description 支付类型
     * @author      ylw <767502630@qq.com>
     * @return string
     */
    public function getTradeType()
    {
        return 'api';
    }
}
