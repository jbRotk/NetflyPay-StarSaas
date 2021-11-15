<?php

declare(strict_types=1);
/**
 * Created by ylw
 * Email: 767502630@qq.com
 * Date: 2021/11/15
 * Time: 15:21:00
 */

namespace Omnipay\StarSaas\Request;

use Omnipay\StarSaas\Response\QueryOrderResponse;

/**
 * @description
 * @author  ylw <767502630@qq.com>
 * @package Omnipay\StarSaas\Request
 */
class QueryOrderRequest extends BasicAbstractRequest
{
    protected $endPoint = 'retrievalTrans';

    protected $reqiredParams = [
        'merchant_id',
        'account_id',
    ];

    protected $normalParams = [];

    protected $encryptParams = [
        'merchant_id',
        'account_id',
    ];

    /**
     * @description 执行支付接口操作
     * @author      Omnipay
     *
     * @param mixed $data
     *
     * @return QueryOrderResponse
     */
    public function sendData($data)
    {
        $response = $this->doRequest($data);
        return $this->response = new QueryOrderResponse($this, $response);
    }
}