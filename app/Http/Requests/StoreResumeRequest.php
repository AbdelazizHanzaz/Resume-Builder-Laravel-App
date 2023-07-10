<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreResumeRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'title' => 'required|max:255',
            'name' => 'required|max:255',
            'email' => 'required|email',
            'phone' => 'required',
            'summary' => 'required',
            'education' => 'required|array',
            'education.*.institution' => 'required|max:255',
            'education.*.degree' => 'required|max:255',
            'education.*.start_date' => 'required|date',
            'education.*.end_date' => 'nullable|date',
            'experience' => 'required|array',
            'experience.*.company' => 'required|max:255',
            'experience.*.position' => 'required|max:255',
            'experience.*.start_date' => 'required|date',
            'experience.*.end_date' => 'nullable|date',
            'skills' => 'required|array',
            'skills.*' => 'required|max:255',
        ];
    }
}
