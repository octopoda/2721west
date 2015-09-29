<?php namespace twentyseven\Http\Requests;

use twentyseven\Http\Requests\Request;

class SessionRequest extends Request {

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
			'url' => 'required',
			'browser' =>  'required',
		];
	}

}
