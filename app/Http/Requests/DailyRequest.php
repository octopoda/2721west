<?php namespace twentyseven\Http\Requests;

use twentyseven\Http\Requests\Request;

class DailyRequest extends Request {

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
			'day' => 'required|min:3',
			'image' =>  'required',
			'type' => 'required'
		];
	}

}
