<?php

use Omnipay\Omnipay;

error_reporting(E_ALL | E_STRICT);
// include the composer autoloader
require __DIR__ . '/../vendor/autoload.php';
$getway = Omnipay::create('StarSaas');
$getway->config([
    'merchant_id' => 1000601,
    'account_id'  => 1000601001,
    'secret_key'  => 'cIpn4r2AzW5ciy6654u1j7T20u6051',
    'is_sandbox'  => true,
]);
$res = $getway->query([
    'order_no'         => '123213123',
    'currency'         => 'USD',
    'amount'           => '10',
    'website'          => 'beaustar',
    'platform'         => 'sale_shop',
    'shopper_id'       => '123',
    'shopper_email'    => '767502630@qq.com',
    'shopper_ip'       => '59.56.33.239',
    'shopper_phone'    => '13850103135',
    'shopper_level'    => '2',
    'first_name'       => 'Y',
    'last_name'        => 'LW',
    'billing_country'  => 'US',
    'card'             => '4444333322221111',
    'expiration_month' => '05',
    'expiration_year'  => '2027',
    'security_code'    => '123',
    'items'            => 'item1#,#123#,#230.00#,#1#;#item2#,#25#,#290.00#,#2',
])->send();
var_dump($res->getData());