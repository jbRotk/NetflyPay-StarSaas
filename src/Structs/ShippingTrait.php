<?php

declare(strict_types=1);
/**
 * Created by ylw
 * Email: 767502630@qq.com
 * Date: 2021/11/12
 * Time: 14:10:42
 */

namespace Omnipay\StarSaas\Structs;

/**
 * Credit Card class
 *
 * This class defines and abstracts all of the credit card types used
 * throughout the Omnipay system.
 *
 * Example:
 *
 * <code>
 *   // Define credit card parameters, which should look like this
 *   $parameters = [
 *       'firstName' => 'Bobby',
 *       'lastName' => 'Tables',
 *       'number' => '4444333322221111',
 *       'cvv' => '123',
 *       'expiryMonth' => '12',
 *       'expiryYear' => '2017',
 *       'email' => 'testcard@gmail.com',
 *   ];
 *
 *   // Create a credit card object
 *   $card = new CreditCard($parameters);
 * </code>
 *
 * The full list of card attributes that may be set via the parameter to
 * *new* is as follows:
 *
 * * firstName
 * * lastName
 * * name
 * * company
 * * address1
 * * address2
 * * city
 * * postcode
 * * state
 * * country
 *
 * If any unknown parameters are passed in, they will be ignored.  No error is thrown.
 */
trait ShippingTrait
{
}