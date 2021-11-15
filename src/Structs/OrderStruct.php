<?php

declare(strict_types=1);
/**
 * Created by ylw
 * Email: 767502630@qq.com
 * Date: 2021/11/12
 * Time: 14:12:01
 */

namespace Omnipay\StarSaas\Structs;

use Omnipay\Common\Helper;
use Omnipay\Common\ParametersTrait;
use Symfony\Component\HttpFoundation\ParameterBag;

/**
 * Credit Card class
 *
 * The full list of card attributes that may be set via the parameter to
 * * ---------Required Params---------
 * * orderSn
 * * currency
 * * amount
 * * email
 * * firstName
 * * lastName
 * * name
 * * email
 * * company
 * * address1
 * * address2
 * * city
 * * postcode
 * * state
 * * country
 * * phone
 *
 * * ---------Credit Card Params---------
 * * card_number
 * * card_expiry_month
 * * card_expiry_year
 * * card_cvv
 * * card_holder_name
 *
 * * ---------Billing Params---------
 * * billing_firstName
 * * billing_lastName
 * * billing_name
 * * billing_email
 * * billing_company
 * * billing_address1
 * * billing_address2
 * * billing_city
 * * billing_postcode
 * * billing_state
 * * billing_country
 * * billing_phone
 * * billing_phoneExtension
 * * billing_fax
 *
 * * shoper_id
 * * shoper_email
 * * shoper_ip
 * * shoper_phone
 * * shopper_level
 * If any unknown parameters are passed in, they will be ignored.  No error is thrown.
 */
class OrderStruct
{
    use ParametersTrait;
    use BillingTrait, CreditCardTrait, ShippingTrait;

    /**
     * @param array $parameters
     */
    public function __construct(array $parameters)
    {
        $this->parameters = new ParameterBag;
        Helper::initialize($this, $parameters);
    }

    public function setOrderSn($sn)
    {
        $this->setParameter('order_sn', $sn);
    }

    public function getOrderSn()
    {
        return $this->getParameter('order_sn');
    }

    public function setAmount($amount)
    {
        $this->setParameter('amount', $amount);
    }

    public function getAmount()
    {
        return $this->getParameter('amount');
    }

    public function setCurrency($currency)
    {
        $this->setParameter('currency', $currency);
    }

    public function getCurrency()
    {
        return $this->getParameter('currency');
    }

    public function setEmail($emial)
    {
        $this->setParameter('emial', $emial);
        $this->setBillingEmail($emial);
        $this->setCardEmail($emial);
    }

    public function getEmail()
    {
        return $this->getParameter('email');
    }

    public function setFirstName($firstName)
    {
        $this->setParameter('first_name', $firstName);
        $this->setBillingFirstName($firstName);
        $this->setCardFirstName($firstName);
    }

    public function getFirstName()
    {
        return $this->getParameter('first_name');
    }

    public function setLastName($lastName)
    {
        $this->setParameter('last_name', $lastName);
        $this->setBillingLastName($lastName);
        $this->setCardLastName($lastName);
    }

    public function getLastName()
    {
        return $this->getParameter('last_name');
    }

    public function setAddress1($address1)
    {
        $this->setParameter('address1', $address1);
        $this->setBillingAddress1($address1);
        $this->setCardAddress1($address1);
    }

    public function getAddress1()
    {
        return $this->getParameter('address1');
    }

    public function setAddress2($address2)
    {
        $this->setParameter('address2', $address2);
        $this->setBillingAddress2($address2);
        $this->setCardAddress2($address2);
    }

    public function getAddress2()
    {
        return $this->getParameter('address2');
    }

    public function setPhone($phone)
    {
        $this->setParameter('phone', $phone);
        $this->setBillingPhone($phone);
        $this->setCardPhone($phone);
    }

    public function getPhone()
    {
        return $this->getParameter('phone');
    }

    public function setCity($city)
    {
        $this->setParameter('city', $city);
        $this->setBillingCity($city);
        $this->setCardCity($city);
    }

    public function getCity()
    {
        return $this->getParameter('city');
    }

    public function setCountry($country)
    {
        $this->setParameter('country', $country);
        $this->setBillingCountry($country);
        $this->setCardCountry($country);
    }

    public function getCountry()
    {
        return $this->getParameter('city');
    }

    public function setState($state)
    {
        $this->setParameter('state', $state);
        $this->setBillingState($state);
        $this->setCardState($state);
    }

    public function getState()
    {
        return $this->getParameter('state');
    }
}