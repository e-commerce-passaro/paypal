<?php
namespace Ecompassaro\Paypal\Payment;

class Amount
{

    protected $currency;

    protected $total;

    protected $details;

    public function getCurrency()
    {
        return $this->currency;
    }

    public function getTotal()
    {
        return $this->total;
    }

    public function getDetails()
    {
        return $this->details;
    }

    public function setCurrency($currency)
    {
        $this->currency = $currency;
    }

    public function setTotal($total)
    {
        $this->total = $total;
    }

    public function setDetails($details)
    {
        $this->details = $details;
    }
}