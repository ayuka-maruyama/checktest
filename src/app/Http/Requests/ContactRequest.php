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
            'first-name' => 'required|string',
            'last-name' => 'required|string',
            'gender' => 'required|integer',
            'email' => 'required|email',
            'left-tel' => 'required|numeric|digts_between:5',
            'middle-tel' => 'required|numeric|digts_between:5',
            'right-tel' => 'required|numeric|digts_between:5',
            'address' => 'required|string',
            'building' => 'nullable'
            'content' => 'required|string'
            'detail' => 'required|string|max:120'
        ];
    }

    public function messages()
    {
        return [
            'first-name.required' => '姓を入力してください',
            'last-name.required' => '名を入力してください',
            'gender.required' => '性別を選択してください',
            'email.required' => 'メールアドレスを入力してください',
            'email.email' => 'メールアドレスはメール形式で入力してください',
            'left-tel.required' => '電話番号を入力してください',
            'left-tel.digts_between:5' => '電話番号は5桁までの数字で入力してください',
            'middle-tel.required' => '電話番号を入力してください',
            'middle-tel.digts_between:5' => '電話番号は5桁までの数字で入力してください',
            'right-tel.required' => '電話番号を入力してください',
            'right-tel.digts_between:5' => '電話番号は5桁までの数字で入力してください',
            'address.required' => '住所を入力してください',
            'content.required' => 'お問い合わせの種類を選択してください',
            'detail.required' => 'お問い合わせ内容を入力してください',
            'detail.max' => 'お問合せ内容は120文字以内で入力してください',
        ];
    }
}
