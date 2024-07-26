<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SanPhamRequest extends FormRequest
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
            "ma_san_pham"=>"required|max:10",
            "ten_san_pham"=>"required|max:255",
            "so_luong"=>"required|integer",
            "gia_san_pham" => "required",
            "mo_ta_san_pham" => "required|max:255",
            "ma_danh_muc" => "required",
        ];
    }
    public function messages(): array
    {
        return [
            "ma_san_pham.required" => "Mã sản phẩm không thể bỏ trống",
            "ma_san_pham.unique" => "Mã sản phẩm không được trùng lặp",
            "ma_san_pham.max" => "Mã sản phẩm không được vượt quá 10 ký tự",
            "ten_san_pham.required" => "Tên sản phẩm không được bỏ trống",
            "ten_san_pham.max" => "Tên sản phẩm quá dài",
            "so_luong.required" => "Số lượng không thể bỏ trống",
            "so_luong.integer" => "Số lượng phải là số",
            "gia_san_pham" => "Giá sản phẩm không thể bỏ trống",
            "mo_ta_san_pham.required" => "Mô tả sản phẩm không thể bỏ trống",
            "mo_ta_san_pham.max" => "Mô tả quá dài",
            "ma_danh_muc" => "Mã danh mục không thể bỏ trống",
        ];
    }
}
