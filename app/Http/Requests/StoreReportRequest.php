<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class StoreReportRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true; // Si esta en false no se podra crear 
					//un registro en la bd por ejemplo jhon no puede editar algo creado por alex
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'sm_num' => 'required|min:5',
			'link' => "required",
			'application' => 'required',
			'employer_id' => 'required',
			'group'  => 'required'
		];
	}

}
