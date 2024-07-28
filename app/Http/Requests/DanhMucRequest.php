<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DanhMucRequest extends FormRequest
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
            'ma_danh_muc' => 'required|max:10|unique:danh_mucs,ma_danh_muc'. $this->route('danhmuc'),
            'ten_danh_muc' => 'required|max:255'
        ];
    }
    public function messages(): array
    {
        return [
            'ma_danh_muc.required' => 'Mã danh mục bắt buộc điền',
            'ma_danh_muc.max' => 'Mã danh mục không được quá 10 ký tự',
            'ma_danh_muc.unique' => 'Mã danh mục không được trùng lặp',
            'ten_danh_muc.required'=> 'Tên danh mục không được bỏ trống',
            'ten_danh_muc.max'=> 'Tên danh mục quá dài',
        ];
    }
}
