<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\SendFactory;

class FileFactory extends SendFactory
{
    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function factoryMethod()
    {
        return new FileMethod($this->request);
    }
}
