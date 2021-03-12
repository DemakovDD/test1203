<?php

namespace App\Http\Controllers;

use App\Http\Controllers\SendFactory;
use Illuminate\Http\Request;

class OneController extends Controller
{
    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function data() {
        $data = new DataFactory($this->request);
        $data->send();
    }

    public function file() {
        $data = new FileFactory($this->request);
        $data->send();
    }
}
