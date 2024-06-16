<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventRequest extends FormRequest
{
    public function rules()
    {
        return [
            'event.name' => 'required|string|max:100',//'キー名' => 'ルール1|ルール2|ルール3'
            'event.overview' => 'required|string|max:4000',
        ];
    }
}