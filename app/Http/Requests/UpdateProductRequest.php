<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductRequest extends FormRequest
{
/**
* Determine if the user is authorized to make this request.
*
* @return bool
*/
public function authorize()
{
// اگر نیاز به مجوز خاصی برای انجام این درخواست دارید، آن را در اینجا تنظیم کنید.
return true;  // در اینجا دسترسی برای همه مجاز است.
}

/**
* Get the validation rules that apply to the request.
*
* @return array
*/
public function rules()
{
return [
'ProjectName' => 'required|string|max:255',
'location' => 'required|string|max:255',
'picture' => 'nullable|string|max:255',
'typeProject' => 'required|string|max:255',
'customer' => 'required|string|max:255',
'discription' => 'nullable|string',
'StartYearProject' => 'required|integer|min:1900|max:' . date('Y'),
'Chalanges' => 'nullable|array',
'Solution' => 'nullable|array',
];
}
}
