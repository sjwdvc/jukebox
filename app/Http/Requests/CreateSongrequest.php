<?php

namespace App\Http\Requests;

use App\Models\Song;
use Illuminate\Foundation\Http\FormRequest;

class CreateSongrequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'description' => 'required|min:3',
            'artist' => 'required',
            'genre_id' => 'required|exists:genres,id',
            'duration' => 'required|numeric',
        ];
    }

    public function messages()
    {
        return [
            '*.required' => 'The :attribute field is required',
            '*.exists' => 'You didnt provide an existing value for :attribute',
            '*.nubmer' => 'The :attribute must be a number',
        ];
    }

    public function persist()
    {
        Song::create([
            'name' => request('name'),
            'description' => request('description'),
            'artist' => request('artist'),
            'genre_id' => request('genre_id'),
            'duration' => request('duration'),
        ]);
    }
}
