<?php

declare(strict_types=1);
/**
 * Created by ylw
 * Email: 767502630@qq.com
 * Date: 2021/11/15
 * Time: 14:51:06
 */

namespace Omnipay\StarSaas\Structs;

/**
 * @description
 * @author  ylw <767502630@qq.com>
 * @package Omnipay\StarSaas\Structs
 */
trait ShopperTrait
{
    public function setShopperEmail($email)
    {
        $this->setParameter('shopper_email', $email);
    }

    public function getShopperEmail()
    {
        return $this->getParameter('shop_email');
    }

}