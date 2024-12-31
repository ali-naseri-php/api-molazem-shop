<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
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
            'ProjectName' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'picture' => 'required|string|url', // فرض می‌کنیم لینک تصویر است
            'typeProject' => 'required|string|max:255',
            'customer' => 'required|string|max:255',
            'discription' => 'nullable|string',
            'StartYearProject' => 'required|integer|digits:4|min:1900|max:' . date('Y'),
            'Chalanges' => 'required|array',
            'Chalanges.*' => 'string', // هر چالش باید یک رشته باشد
            'Solution' => 'required|array',
            'Solution.*' => 'string', // هر راه‌حل باید یک رشته باشد
        ];
    }
    public function messages()
    {
        return [
            'ProjectName.required' => 'نام پروژه الزامی است.',
            'location.required' => 'موقعیت الزامی است.',
            'picture.required' => 'تصویر الزامی است.',
            'picture.url' => 'تصویر باید یک لینک معتبر باشد.',
            'typeProject.required' => 'نوع پروژه الزامی است.',
            'customer.required' => 'نام مشتری الزامی است.',
            'StartYearProject.digits' => 'سال شروع پروژه باید 4 رقم باشد.',
            'StartYearProject.min' => 'سال شروع پروژه نمی‌تواند کمتر از 1900 باشد.',
            'StartYearProject.max' => 'سال شروع پروژه نمی‌تواند بیشتر از سال جاری باشد.',
            'Chalanges.required' => 'چالش‌ها الزامی هستند.',
            'Chalanges.array' => 'چالش‌ها باید به صورت آرایه باشند.',
            'Solution.required' => 'راه‌حل‌ها الزامی هستند.',
            'Solution.array' => 'راه‌حل‌ها باید به صورت آرایه باشند.',
        ];
    }
}
