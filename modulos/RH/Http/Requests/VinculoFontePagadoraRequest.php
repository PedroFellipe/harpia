<?php

namespace Modulos\RH\Http\Requests;

use Illuminate\Validation\Rule;
use Modulos\Core\Http\Request\BaseRequest;

class VinculoFontePagadoraRequest extends BaseRequest
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
            'vfp_fpg_id' => 'required',
            'vfp_vin_id' => 'required',
            'vfp_unidade' => 'nullable',
            'vfp_valor' => 'nullable'
        ];

    }
}
