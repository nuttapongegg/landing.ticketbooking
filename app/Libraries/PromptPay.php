<?php

namespace App\Libraries;

class PromptPay
{
    private static $instance;
    private static $amount;
    private static $phone;

    protected static function getInstance()
    {
        if (static::$instance === null) {
            static::$instance = new PromptPay;
        }

        return static::$instance;
    }

    public static function setPhone($value)
    {
        static::$phone = $value;
        return static::getInstance();
    }

    public static function setAmount($value)
    {
        static::$amount = $value;
        return static::getInstance();
    }

    public static function build()
    {
        return \PromptPayQR\Builder::staticMerchantPresentedQR(static::$phone)->setAmount(static::$amount)->build();
    }
}