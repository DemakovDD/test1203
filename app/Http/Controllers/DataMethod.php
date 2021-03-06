<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Method;
use Illuminate\Http\Request;
use App\Models\Feedback;

class DataMethod implements Method
{
    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function operation()
    {
        $this->request->validate([
            'name' => 'required|max:30',
            'number' => 'required|integer',
            'message' => 'required|min:10'
        ]);

        $message = Feedback::create([
            'name' => $this->request->name,
            'number' => $this->request->number,
            'message' => $this->request->message,
        ]);

        return [
            'status' => true,
            'message' => $message
        ];
    }
}
