<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SmartphoneRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
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
          "brand"=>"required",
          "model"=>"required",
          "display"=>"required|alpha_num",
          "mem_ext"=>"required|alpha_num"
        ];
    }

    public function messages()
    {
      return[
        "brand.required"=>"Brand is required",
        "model.required"=>"Model is required",
        "display.required"=>"Display is required"
      ];
    }
}
