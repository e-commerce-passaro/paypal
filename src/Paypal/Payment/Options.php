<?php
namespace Ecompassaro\Paypal\Payment;

class Options
{
    
    const ALLOWED_PAYMENT_METHOD_INSTANT_FUNDING_SOURCE = 'INSTANT_FUNDING_SOURCE';

    protected $allowedPaymentMethod;

    public function getAllowedPaymentMethod()
    {
        return $this->allowedPaymentMethod;
    }

    public function setAllowedPaymentMethod($allowedPaymentMethod)
    {
        $this->allowedPaymentMethod = $allowedPaymentMethod;
    }
}
