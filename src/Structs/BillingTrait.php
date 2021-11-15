<?php

declare(strict_types=1);
/**
 * Created by ylw
 * Email: 767502630@qq.com
 * Date: 2021/11/12
 * Time: 14:11:36
 */

namespace Omnipay\StarSaas\Structs;

/**
 * Billing class
 *
 * The full list of billing attributes:
 *
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
 * * phoneExtension
 * * fax
 *
 * If any unknown parameters are passed in, they will be ignored.  No error is thrown.
 */
trait BillingTrait
{
    /**
     * @author      ylw <767502630@qq.com>
     *
     * @param $firstName
     *
     * @return BillingTrait
     */
    public function setBillingFirstName($firstName)
    {
        return $this->setParameter('first_name', $firstName);
    }

    /**
     * @author      ylw <767502630@qq.com>
     * @return mixed
     */
    public function getBillingFirstName()
    {
        return $this->getParameter('first_name');
    }

    /**
     * @author      ylw <767502630@qq.com>
     *
     * @param $firstName
     *
     * @return BillingTrait
     */
    public function setBillingLastName($lastName)
    {
        return $this->setParameter('last_name', $lastName);
    }

    /**
     * @author      ylw <767502630@qq.com>
     * @return mixed
     */
    public function getBillingLastName()
    {
        return $this->getParameter('last_name');
    }

    public function setBillingCompany($company)
    {
        return $this->setParameter('billing_company', $company);
    }

    public function getBillingCompany()
    {
        return $this->getParameter('billing_company');
    }

    public function setBillingAddress1($address1)
    {
        return $this->setParameter('billing_address1', $address1);
    }

    public function getBillingAddress1()
    {
        return $this->getParameter('billing_address1');
    }

    public function setBillingAddress2($address1)
    {
        return $this->setParameter('billing_address2', $address1);
    }

    public function getBillingAddress2()
    {
        return $this->getParameter('billing_address2');
    }

    public function setBillingCity($city)
    {
        return $this->setParameter('billing_city', $city);
    }

    public function getBillingCity()
    {
        return $this->getParameter('billing_city');
    }

    public function setBillingPostCode($postCode)
    {
        return $this->setParameter('post_code', $postCode);
    }

    public function getBillingPostCode()
    {
        return $this->getParameter('post_code');
    }

    public function setBillingCountry($country)
    {
        return $this->setParameter('billing_country', $country);
    }

    public function getBillingCountry()
    {
        return $this->getParameter('billing_country');
    }

    public function setBillingState($state)
    {
        return $this->setParameter('billing_state', $state);
    }

    public function getBillingState()
    {
        return $this->getParameter('billing_state');
    }

    public function setBillingPhone($phone)
    {
        return $this->setParameter('billing_phone', $phone);
    }

    public function getBillingPhone()
    {
        return $this->getParameter('billing_phone');
    }

    public function setBillingEmail($email)
    {
        return $this->setParameter('billing_email', $email);
    }

    public function getBillingEmail()
    {
        return $this->getParameter('billing_email');
    }
}