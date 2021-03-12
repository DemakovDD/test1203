<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\SendFactory;

class DataFactory extends SendFactory
{
    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function factoryMethod()
    {
        return new DataMethod($this->request);
    }
}
