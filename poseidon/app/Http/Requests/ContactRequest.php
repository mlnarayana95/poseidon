
<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
          'name' => 'bail|required',
          'email'=> 'bail|required',
          'subject'=> 'bail|required',
          'message' => 'bail|required'
        ];
    }
    public function messages()
{
    return [
        'name.required' => 'A name attribute is required',
        'email.required'  => 'A email attribute is required',
        'subject.required' => 'A subject attribute is required',
        'message.required' => 'A massage attribute is required'
    ];
}
}
