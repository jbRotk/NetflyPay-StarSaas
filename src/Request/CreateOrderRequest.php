<?php

namespace Omnipay\StarSaas\Request;

use Omnipay\StarSaas\Response\CreateOrderResponse;

/**
 * @description 创建订单请求类
 * @author      ylw <767502630@qq.com>
 * @package     Omnipay\StarSaas\Request
 */
class CreateOrderRequest extends BasicAbstractRequest
{
    // ----------------Star-Saas 自定义部分----------------
    protected $endPoint = 'authorise';

    protected $reqiredParams = [
        'payment_method',
        'merchant_id',
        'account_id',
        'website',
        'order_no',
        'currency',
        'amount',
        //'items',
        'shopper_id',
        'shopper_email',
        'shopper_ip',
        'first_name',
        'last_name',
        'card',
        'expiration_month',
        'expiration_year',
        'security_code',
    ];

    protected $normalParams = [
        'platform',
        'note',
        'shopper_phone',
        'shopper_level',
        'billing_country',
        'billing_state',
        'billing_city',
        'billing_address',
        'billing_postal_code',
        'os',
        'brower',
        'brower_lang',
        'time_zone',
        'resolution',
        'cookie_new',
        'cookie_old',
        'delivery_firstname',
        'delivery_lastname',
        'delivery_country',
        'delivery_state',
        'delivery_city',
        'delivery_address',
        'delivery_postal_code',
        'return_url',
        'notify_url',
        'custom',
    ];

    protected $encryptParams = [
        'merchant_id',
        'account_id',
        'order_no',
        'currency',
        'amount',
        'first_name',
        'last_name',
        'card',
        'expiration_year',
        'expiration_month',
        'security_code',
        'shopper_email',
    ];

    // ----------------Star-Saas 自定义部分结束----------------

    /**
     * @description 执行支付接口操作
     * @author      Omnipay
     *
     * @param mixed $data
     *
     * @return CreateOrderResponse
     */
    public function sendData($data)
    {
        $response = $this->doRequest($data);
        return $this->response = new CreateOrderResponse($this, $response);
    }
}