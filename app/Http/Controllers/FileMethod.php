<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Method;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileMethod implements Method
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

        $fields = 'Имя: ' . $this->request['name'] . ' Номер телефона: ' . $this->request['number'] . ' Обращение: ' . $this->request['message'];
        $message = Storage::prepend('messages/feedback.txt', $fields );

        return [
            'status' => true,
            'message' => $message
        ];
    }
}
