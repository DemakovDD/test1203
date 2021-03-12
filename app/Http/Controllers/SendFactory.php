<?php

namespace App\Http\Controllers;

abstract class SendFactory
{
    abstract public function factoryMethod();

    public function send()
    {
        $product = $this->factoryMethod();
        return $product->operation();
    }

    protected $request;
}


