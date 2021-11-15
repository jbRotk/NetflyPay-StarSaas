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
 * Credit Card class
 *
 * The full list of billing attributes:
 *
 * * number
 * * expiry_month
 * * expiry_year
 * * cvv
 * * holder_name
 *
 * If any unknown parameters are passed in, they will be ignored.  No error is thrown.
 */
trait CreditCardTrait
{
    public function setCardNumber($number)
    {
        return $this->setParameter('card_number', $number);
    }

    public function getCardNumber()
    {
        return $this->getParameter('card_number');
    }

    public function setCardExpiryYear($year)
    {
        $this->setParameter('card_expiry_year', $year);
    }

    public function getCardExpiryYear()
    {
        return $this->getParameter('card_expiry_year');
    }

    public function setCardExpiryMonth($month)
    {
        $this->setParameter('card_expiry_month', $month);
    }

    public function getCardExpiryMonth()
    {
        return $this->getParameter('card_expiry_month');
    }

    public function setCardCvv($cvv)
    {
        $this->setParameter('card_cvv', $cvv);
    }

    public function getCardCvv()
    {
        return $this->getParameter('card_cvv');
    }

    public function setCardFirstName($firstName)
    {
        return $this->setParameter('card_first_name', $firstName);
    }

    public function getCardFirstName()
    {
        return $this->getParameter('card_first_name');
    }

    public function setCardLastName($lastName)
    {
        return $this->setParameter('card_last_name', $lastName);
    }

    public function getCardLastName()
    {
        return $this->getParameter('card_last_name');
    }

    public function setCardAddress1($address1)
    {
        return $this->setParameter('card_address1', $address1);
    }

    public function getCardAddress1()
    {
        return $this->getParameter('card_address1');
    }

    public function setCardAddress2($address2)
    {
        return $this->setParameter('card_address2', $address2);
    }

    public function getCardAddress2()
    {
        return $this->getParameter('card_address2');
    }

    public function setCardCity($city)
    {
        return $this->setParameter('card_city', $city);
    }

    public function getCardCity()
    {
        return $this->getParameter('card_city');
    }

    public function setCardState($state)
    {
        return $this->setParameter('card_state', $state);
    }

    public function getCardState()
    {
        return $this->getParameter('card_state');
    }

    public function setCardCountry($state)
    {
        return $this->setParameter('card_state', $state);
    }

    public function getCardCountry()
    {
        return $this->getParameter('card_state');
    }

    public function setCardPostCode($state)
    {
        return $this->setParameter('card_state', $state);
    }

    public function getCardPostCode()
    {
        return $this->getParameter('card_state');
    }

    public function setCardEmail($emial)
    {
        return $this->setParameter('card_email', $emial);
    }

    public function getCardEmail()
    {
        return $this->getParameter('card_email');
    }

    public function setCardPhone($phone)
    {
        return $this->setParameter('card_phone', $phone);
    }

    public function getCardPhone()
    {
        return $this->getParameter('card_phone');
    }
}