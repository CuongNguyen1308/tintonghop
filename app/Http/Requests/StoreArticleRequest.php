<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreArticleRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "name" => "required",
            "summary" => "required",
            "content" => "required",
            "category_id" => "required",
        ];
    }
    public function messages(){
        return [
            "name.required"=>"Vui lòng nhập tên",
            "summary.required"=>"Vui lòng nhập tóm tắt",
            "content.required"=>"Vui lòng nhập nội dung",
            "category_id.required"=>"Vui lòng nhập danh mục",
        ];
    }
}
